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
    'twitter' => [
       'client_id' => 'IM7VJxQngAym8N3Dzc8MNAsRA',
       'client_secret' => 'jnxeqJvGA5BAD8XV5cTSeknp1bg65WIGt1NAOh5EyLZ40vr51T',
       'redirect' => 'http://cambiodejuego.net/auth/twitter/callback',
      ],

    'facebook' => [
       'client_id' => '330936354046497',
       'client_secret' => 'e84adc70328f01c6ef5bd5e5000fb1cf',
       'redirect' => 'http://cambiodejuego.net/auth/facebook/callback',
      ],

    'google' => [
       'client_id' => '1045378595545-ke972ld0uproiie3s6bln4k0dfjoicks.apps.googleusercontent.com',
       'client_secret' => 'KbkXuAE6eAvk_TmMzviwaI9k',
       'redirect' => 'http://cambiodejuego.net/auth/google/callback',
      ],
      
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

];
