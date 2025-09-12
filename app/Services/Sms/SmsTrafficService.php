<?php

namespace App\Services\Sms;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class SmsTrafficService
{
    protected $client;
    protected $login;
    protected $password;

    public function __construct()
    {
        $this->login = env('SMSTRAFFIC_LOGIN');
        $this->password = env('SMSTRAFFIC_PASSWORD');
        $this->client = new Client([
            'base_uri' => 'https://gate.smstraffic.ru/',
        ]);
    }

    public function send($phone, $viewName, $data = [])
    {
        try {
            // Рендер шаблона
            $message = View::make($viewName, $data)->render();
            $message = mb_substr($message, 0, 700); // ограничение длины SMS

            // Отправляем POST-запрос
            $response = $this->client->post('api/multi', [
                'json' => [
                    'login' => $this->login,
                    'password' => $this->password,
                    'messages' => [[
                        'phone' => $phone,
                        'text' => $message,
                    ]],
                ]
            ]);

            $body = json_decode($response->getBody(), true);
            Log::info("SMS sent via SmsTraffic: " . json_encode($body));

            return !empty($body['result']); // успешная отправка

        } catch (\Exception $e) {
            Log::error("Failed to send SMS via SmsTraffic: " . $e->getMessage());
            return false;
        }
    }
}