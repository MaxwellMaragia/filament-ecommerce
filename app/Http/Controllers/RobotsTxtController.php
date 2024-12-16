<?php

namespace App\Http\Controllers;


use Illuminate\Http\Response;

class RobotsTxtController extends Controller
{
    public function index()
    {
        $robotsTxtContent =
            "User-agent: *
Disallow: /admin
Disallow: /register
Disallow: /account
Disallow: /logout
Disallow: /login
Disallow: /forgot
Disallow: /reset
Disallow: /cont
Disallow: /api
Disallow: /cdn-cgi
Disallow: /crm
Disallow: /success
Disallow: /cancel
Disallow: /checkout
Disallow: /my-orders/
Disallow: /themes-container
Disallow: /widgets/
Disallow: /*page=*

Allow: *page=2$
Allow: *page=2&
Allow: *page=3$
Allow: *page=3&
Allow: *page=4$
Allow: *page=4&
Allow: *page=5$
Allow: *page=5&
Allow: *page=6$
Allow: *page=6&
Allow: *page=7$
Allow: *page=7&
Allow: *page=8$
Allow: *page=8&
Allow: *page=9$
Allow: *page=9&
Allow: *page=10$
Allow: *page=10&


Sitemap: " . url('sitemap-category-en.xml') . "
Sitemap: " . url('sitemap-brand-en.xml') . "
Sitemap: " . url('sitemap-products-en.xml');

        return new Response($robotsTxtContent, 200, ['Content-Type' => 'text/plain']);
    }
}
