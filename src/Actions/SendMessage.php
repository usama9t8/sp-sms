<?php

namespace Softpyramid\ItelSms\Actions;

use Illuminate\Support\Facades\Http;
use Exception;


class SendMessage
{
    public function execute($params)
    {
        $res = Http::post(config('sms.baseUrl') . 'sendSms', [
            'api_key' => config('sms.apiKey'),
            'api_secret' => config('sms.apiSecret'),
            'receiver_phone' => $params['phone'],
            'message' => $params['message']
        ]);
        return $res->body();
    }
}
