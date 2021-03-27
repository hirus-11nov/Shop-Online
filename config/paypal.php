<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */
return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'username'    => env('PAYPAL_SANDBOX_API_USERNAME', 'sb-hesaq5548136_api1.business.example.com'),
        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', '6NZEBTLPUHXA38ZB'),
        'secret'      => env('PAYPAL_SANDBOX_API_SECRET', 'EMEDt_I_K7oMQnU1_mTlFHfod4a8FFmRIEKjOWLFVIxPYxrNnlFiJ1pU8KCtyYnxnvddQRCHe62mgvwc'),
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', 'Ag3MPsus5m30EQ9nmLYxmp0Yfp8DA6ds3DAPe9GCCBfgZUMWtPe4qCFv'),
        'app_id'      => 'ARg69HoXzOn6J-Jl84q2tw34z1-YvqTDjqvVG6Ba6c1N1MrIwRZLoD_upkRr4FTDaNFMkYiCYR9ou_ME', // Used for testing Adaptive Payments API in sandbox mode
    ],
    // 'live' => [
    //     'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
    //     'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
    //     'secret'      => env('PAYPAL_LIVE_API_SECRET', ''),
    //     'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
    //     'app_id'      => '', // Used for Adaptive Payments API
    // ],

    'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => 'http://localhost:8000/', // Change this accordingly for your application.
    'locale'         => 'en_US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => true, // Validate SSL when creating api client.
];
?>