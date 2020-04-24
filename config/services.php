<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '118590575477110',
        'client_secret' => '1b6bc04808d7258685209c27f58cf276',
        'redirect' => 'http://localhost:8000/callback',
    ],
    'google' => [
        'client_id'     => '122567929747-iuali150i1locn9jei84s58j9gef4gj1.apps.googleusercontent.com',
        'client_secret' => 'QOt_BMMQch1PSKuwcQyhO5nv',
        'redirect'      => 'http://localhost:8000/callbackGoogle',
    ],

];
