<?php

namespace Softpyramid\ItelSms;

class SPSMS
{
    public static function send($phone, $message, $local = false)
    {
        return app(Actions\SendMessage::class)->execute(['phone' => $phone, 'message' => $message, 'local' => $local]);
    }
}
