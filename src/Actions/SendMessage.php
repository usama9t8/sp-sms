<?php

namespace Softpyramid\ItelSms\Actions;

use Illuminate\Support\Facades\Http;


class SendMessage
{
    public function execute($params)
    {
        $baseUrl = isset($params['local']) && $params['local'] ? config('sms.localUrl') : config('sms.baseUrl');
        $res = Http::post(config('sms.baseUrl') . 'sendSms', [
            'api_key' => config('sms.apiKey'),
            'api_secret' => config('sms.apiSecret'),
            'receiver_phone' => $params['phone'],
            'message' => $params['message']
        ]);
        return $res->body();
    }
}
