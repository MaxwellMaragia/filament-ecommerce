<?php

use RalphJSmit\Laravel\SEO\Models\SEO;

return [

    'model' => SEO::class,

    'site_name' => 'PureLightAndSolar',

    'sitemap' => null,

    /**
     * Use this setting to specify whether you want self-referencing `<link rel="canonical" href="$url">` tags to
     * be added to the head of every page. There has been some debate whether this a good practice, but experts
     * from Google and Yoast say that this is the best strategy.
     * See https://yoast.com/rel-canonical/.
     */
    'canonical_link' => false,

    'robots' => [
        'default' => 'max-snippet:-1,max-image-preview:large,max-video-preview:-1',
        'force_default' => false,
    ],

    'favicon' => null,

    'title' => [
        'infer_title_from_url' => true,
        'suffix' => '',
        'homepage_title' => null,
    ],

    'description' => [
        'fallback' => null,
    ],

    'image' => [
        'fallback' => null,
    ],

    'author' => [
        'fallback' => null,
    ],

    'twitter' => [
        '@username' => null,
    ],

    'social' => [
        'facebook' => 'https://web.facebook.com/profile.php?id=61566327976869',
        'twitter' => null,
        'instagram' => null,
        'email' => 'help@purelightsandsolar.co.ke',
        'phone' => '+254 733 88 39',
        'tel' => '+254 733 88 39',
        'whatsapp' => '2547338839',
    ],

    'social-share' => [
        'dom-ids' => [
            'facebook' => 'fb-share',
            'twitter' => 'x-share',
            'whatsapp' => 'wa-share',
        ]
    ],

    'email' => 'help@purelightsandsolar.co.ke',

    'homepage' => [
        'title' => ':appName | Online Shopping for Solar Flood lights, Ceiling lights, Energy saving bulbs, Snake lights, Party lights & More in Kenya',
        'description' => ':appName in Kenya ✓ Buy Solar Flood lights, Ceiling lights, Energy saving bulbs, Snake lights, Party lights & More from reliable Brands ✓ Pay on Delivery',
    ]
];
