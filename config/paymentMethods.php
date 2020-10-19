<?php

return [
    'stripe' => [
        'secret' => env('STRIPE_SECRET',null),
        'public' => env('STRIPE_PUBLIC',null)
    ],
];