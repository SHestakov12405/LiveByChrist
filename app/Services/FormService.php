<?php

namespace App\Services;

use DateTime;
use App\Models\Group;
use App\Http\Requests\FormCreateRequest;
use App\Models\Participant;

class FormService {

    public function saveParticipant(FormCreateRequest $request){

        $ageParticipant = $this->calculateAge($request->dateBird);
        $resultParticipant = $this->calculateParticipant($request->pol, $ageParticipant);

        if($resultParticipant['limitation'] == 'age'){
            return ['participant' => null, 'info' => 'age'];
        }

        if ($resultParticipant['id'] !== 0) {

            $participant = Participant::create([
                'surname' => $request->surname,
                'name' => $request->name,
                'patronymic' => $request->patronymic ? $request->patronymic : null,
                'email' => $request->email,
                'phone' => "+7$request->phone",
                'church' => $request->church,
                'pol' => $request->pol,
                'group_id' => $resultParticipant['id'],
                'date_bird' => $request->dateBird,
                'age' => $ageParticipant,
                'diseases' => $request->disease_description ? $request->disease_description  : null
            ]);

            if ($resultParticipant['limitation'] == 'seats') {
                return ['participant' => $participant, 'info' => 'reserve'];
            }
                
            return ['participant' => $participant, 'info' => null]; 

        }else{
            return 'age';
        }
        

        




    } 

    private function calculateParticipant(string $pol, int $ageParticipant){

        
        $groups = Group::all()->where('pol', '=', $pol);
        $groupReserveId = $groups->where('age', '=', '-1')->first()->id;

        $groupsAge=[];
        foreach ($groups as $key => $group) {
            $age = explode('-', $group->age);
            // dd($age, $ageParticipant);
            if (in_array($ageParticipant, $age)) {
                $groupsAge[] = $group;
            }
        }

        if ($ageParticipant == 13) {
            $group = $groups->where('age', '=', -1)->firstOrFail();
            return ['limitation' => 'seats', 'id' => $group->id];
        }


        if(!empty($groupsAge)) {

            $resultAll = collect($groupsAge)->map(function ($group) {
                return [
                    'id' => $group->id,
                    'seats' => $group->location->seats - $group->participants->count(),
                ];
            })->sortByDesc('seats');
            
            $result = $resultAll->first();

            if(!empty($result)){

                if($result['seats']  <= 0){

                    $seatsClose = 0;
                    $seatsOpen = 0;
                    $openGroup = [];

                    foreach ($groups as $key => $group) {

                        $seatsClose = $group->participants->count();
                        $seatsOpen = $group->location()->first()->seats;
                        
                        if ($seatsOpen > $seatsClose) {

                            $openGroup[] = [
                                'id' => $group->id,
                                'age' => $group->age,
                            ];
                        }
                    }

                    if (empty($openGroup)) {
                        return ['limitation' => 'seats', 'id' => $groupReserveId];
                    }else{

                        $randomGroupId = array_rand($openGroup);

                        if ($ageParticipant == 14 && $openGroup[$randomGroupId]['age'] == 16) {

                            foreach ($resultAll as $key => $res) {
                                $potentialGroup = Group::where('id', '=', $res['id'])->first();
                                $randomParticipants = $potentialGroup->participants()->inRandomOrder()->where('age', '=', 16)->first();
                                
                                if (empty($randomParticipants)) {
                                    $randomParticipants = $potentialGroup->participants()->inRandomOrder()->where('age', '=', 15)->first();
                                    if (empty($randomParticipants)) {
                                        continue;
                                    }else{
                                        $randomParticipants->update([
                                            'group_id' => $openGroup[$randomGroupId]['id']
                                        ]);
                                        return ['limitation' => null, 'id' => $res['id']];
                                    }
                                }else{
                                    $randomParticipants->update([
                                        'group_id' => $openGroup[$randomGroupId]['id']
                                    ]);
                                    return ['limitation' => null, 'id' => $res['id']];
                                }

                            }

                            return ['limitation' => null, 'id' => $openGroup[$randomGroupId]['id']];

                        }elseif ($ageParticipant == 15 && $openGroup[$randomGroupId]['age'] == 16) {                            
                            return ['limitation' => null, 'id' => $openGroup[$randomGroupId]['id']];
                        }elseif ($ageParticipant == 16 && $openGroup[$randomGroupId]['age'] == '14-15') {    

                            foreach ($resultAll as $key => $res) {
                                $potentialGroup = Group::where('id', '=', $res['id'])->first();
                                $randomParticipants = $potentialGroup->participants()->inRandomOrder()->where('age', '=', 14)->first();
                                
                                if (empty($randomParticipants)) {
                                    $randomParticipants = $potentialGroup->participants()->inRandomOrder()->where('age', '=', 15)->first();
                                    if (empty($randomParticipants)) {
                                        continue;
                                    }else{
                                        $randomParticipants->update([
                                            'group_id' => $openGroup[$randomGroupId]['id']
                                        ]);
                                        return ['limitation' => null, 'id' => $res['id']];
                                    }
                                }else{
                                    $randomParticipants->update([
                                        'group_id' => $openGroup[$randomGroupId]['id']
                                    ]);
                                    return ['limitation' => null, 'id' => $res['id']];
                                }

                            }

                            return ['limitation' => null, 'id' => $openGroup[$randomGroupId]['id']];
                        }else{
                            return ['limitation' => 'seats', 'id' => $groupReserveId];
                        }
                    }
                    
                }else{
                    return ['limitation' => null, 'id' => $result['id']];
                }

            }else{
                return ['limitation' => 'age', 'id' => null];
            }

        }else{
            return ['limitation' => 'age', 'id' => null];
        }
    }

    public function calculateAge(string $birthdate): int{
        $today = new DateTime('30.06.2025');
        $birthDate = new DateTime($birthdate);
        
        $interval = $today->diff($birthDate);
        if ((int)$interval->y == 13) {
            $today = new DateTime('31.07.2025');
            $birthDate = new DateTime($birthdate);
            $interval = $today->diff($birthDate);
        }
        // dd($interval);
        
        return (int) $interval->y;
    }

}
