<?php

namespace Softpyramid\ItelSms;

class SPSMS
{
    public static function send($phone, $message)
    {
        return app(Actions\SendMessage::class)->execute(['phone' => $phone, 'message' => $message]);
    }
}
