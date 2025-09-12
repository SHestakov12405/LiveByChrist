<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Services\FormService;
use App\Mail\ParticipantEmail;
use App\Jobs\SendSmsTrafficJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\ParticipantReserveEmail;
use App\Http\Requests\FormCreateRequest;

class FormController extends Controller
{
    function index() {
        return view('form.form');
    }

    function prev() {
        return view('form.prev');
    }

    function reglaments(){
        return view('form.reglaments');
    }

    function form(FormCreateRequest $request, FormService $formService)  {

        $result = $formService->saveParticipant($request);
        // dd($result);
        if ($result['participant'] instanceof Participant) {
            
            $participant = $result['participant'];

            
            
            if ($result['info'] == 'reserve') {
                try{
                    Mail::to($participant->email)->queue(new ParticipantReserveEmail($participant));
                }catch (Exception $error){
                    return redirect()->route('rejection', ['info'=>$result['info'], 'pol' => $request->pol])->with('allowed', true);
                }
                return redirect()->route('rejection', ['info'=>$result['info'], 'pol' => $request->pol])->with('allowed', true);
            }

            try{
                Mail::to($participant->email)->queue(new ParticipantEmail($participant));
            }catch (Exception $error){
                return redirect()->route('success')->with('allowed', true);
            }
            return redirect()->route('success')->with('allowed', true);

        }else{
            return redirect()->route('rejection', ['info'=>$result['info'], 'pol' => $request->pol])->with('allowed', true);
        }
    }

    function rejection() {
        return view('form.rejection');
    }

    function success() {
        return view('form.success');
    }


}
