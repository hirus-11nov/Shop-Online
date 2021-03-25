<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'github' => [
        'client_id' => '24fbd0edd46019058da7', //Github API
        'client_secret' => '4500e6ab7a9bb70608600fbdee37969276bb0685', //Github Secret
        'redirect' => 'http://localhost:8000/login/github/callback',
     ],
     'google' => [
        'client_id' => '559710956141-5422rkjm4mjst43hkokcllu16tirmrjr.apps.googleusercontent.com', //Google API
        'client_secret' => 'QreDJvrfyEaxpoG39XUbi37j', //Google Secret
        'redirect' => 'http://localhost:8000/auth/google/callback',
     ],
     'facebook' => [
        'client_id' => '2906695616231931', //Facebook API
        'client_secret' => '91991a56b54b47fc92fee474808249cd', //Facebook Secret
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
     ],

];
