<?php 
namespace App\Services;

use App\Services\captcha\RecaptchaService;
use App\Services\captcha\TurnstileService;
use App\Services\payment\BkashService;
use App\Services\payment\NagadService;
use App\Services\payment\RocketService;
use App\Services\payment\SSLCommerzService;
use App\Services\payment\StripeService;
use App\Services\sms\BulkSMSService;
use App\Services\sms\TwilioService;
use App\Services\webhook\WebhookService;

class ApiManager {

/**======== store all data form database ========== */
protected static $configs = [];

/**======= load all static driver menualy ========= */
protected static $driverMap = [
    'payment' =>[
        'sslcommerz' => SSLCommerzService::class,
        'strip'  => StripeService::class,
        'bkash'  => BkashService::class,
        'nagad'  => NagadService::class,
        'rocket' => RocketService::class,
    ],
    'sms' =>[
        'bulksms' => BulkSMSService::class,
        'twilo'   => TwilioService::class,
    ],
    'captcha' =>[
        'recaptcha' => RecaptchaService::class,
        'turnstile' => TurnstileService::class,
    ],
    'webhook' =>[
        'webhook' => WebhookService::class,
    ],




];













}