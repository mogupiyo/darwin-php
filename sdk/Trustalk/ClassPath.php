<?php

namespace Trustalk;

class ClassPath {

    public static function get($name){
        $name = ucfirst($name);
        $class_path = [
            'Account' => 'Trustalk\Rest\Api\Account\Account',
            'Bills' => 'Trustalk\Rest\Api\Account\Bills',
            'Credit' => 'Trustalk\Rest\Api\Account\Credit',
            'PurchaseNumber' => 'Trustalk\Rest\Api\Account\PurchaseNumber',
            'ReleaseNumber' => 'Trustalk\Rest\Api\Account\ReleaseNumber',
            'PhoneNumbers' => 'Trustalk\Rest\Api\Account\PhoneNumbers',
            'Connections' => 'Trustalk\Rest\Api\Connections\Tracks',
            'Actions' => 'Trustalk\Rest\Api\Calls\Response\Actions',
            'Expiration' => 'Trustalk\Rest\Api\Calls\Response\Expiration',
            'Before' => 'Trustalk\Rest\Api\Calls\Response\Before',
            'Logs' => 'Trustalk\Rest\Api\Calls\Logs',
            'Recordings' => 'Trustalk\Rest\Api\Calls\Recordings',
            'Emails' => 'Trustalk\Rest\Api\Notifications\Emails',
            'Events' => 'Trustalk\Rest\Api\Notifications\Events',
            'SpeechToText' => 'Trustalk\Rest\Api\Analytics\SpeechToText',
        ];
        return $class_path["{$name}"];
    }

}
