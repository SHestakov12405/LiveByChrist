<?php

// app/Jobs/SendUniSmsJob.php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Services\Sms\SmsTrafficService;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendSmsTrafficJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $phone;
    protected $view;
    protected $data;

    public function __construct($phone, $view, $data = [])
    {
        $this->phone = $phone;
        $this->view = $view;
        $this->data = $data;
    }

    public function handle(SmsTrafficService $smsService)
    {
        $smsService->send($this->phone, $this->view, $this->data);
    }
}
