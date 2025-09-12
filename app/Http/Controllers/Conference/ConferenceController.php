<?php

namespace App\Http\Controllers\Conference;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\ConferenceRegistration;
use App\Mail\ConferenceRegistrationEmail;
use App\Http\Requests\Conference\StoreRegistrationRequest;

class ConferenceController extends Controller
{
    function index() {
        return view('conference.conference');
    }

    public function registration(StoreRegistrationRequest $request)
    {
        $registration = ConferenceRegistration::create($request->validated());

        if ($registration) {
            // Отправляем письмо пользователю
            Mail::to($registration->email)->queue(
                new ConferenceRegistrationEmail($registration)
            );

            return response()->json([
                'success' => true,
                'message' => 'Registration saved successfully',
                'data' => $registration,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Registration error',
            'data' => [],
        ]);
    }

    public function success(){
        return view('conference.success');
    }

    public function fail(){
        return view('conference.fail');
    }
}
