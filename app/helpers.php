<?php

use Illuminate\Support\HtmlString;

if (!function_exists('canonical_url')) {
    function canonical_url(string|null $url = null): HtmlString
    {
        // Assign the full URL if $url is null
        $url = $url ?? request()->fullUrl();
        $parsedUrl = parse_url($url);
        parse_str($parsedUrl['query'] ?? '', $queryParams);

        $filteredQueryParams = [];

        // Preserve 'page' parameter if it exists
        if (isset($queryParams['page'])) {
            $filteredQueryParams['page'] = $queryParams['page'];
        }

        $filteredQueryString = http_build_query($filteredQueryParams);

        // Construct the base URL
        if (isset($parsedUrl['host'])) {
            $filteredUrl = ($parsedUrl['scheme'] ?? 'https') . '://' . $parsedUrl['host'];
        } else {
            $filteredUrl = config('app.url');
        }

        $filteredUrl .= $parsedUrl['path'] ?? '';

        // Append the query string if it exists
        if ($filteredQueryString) {
            $filteredUrl .= '?' . $filteredQueryString;
        }

        return new HtmlString($filteredUrl);
    }
}

if (!function_exists('social_share_buttons')) {
    function social_share_buttons(string|null $url = null): HtmlString
    {
        // Use canonical_url() to get the filtered URL
        $canonicalUrl = canonical_url();

        // Define UTM parameters
        $utmParams = [
            'utm_source' => '',
            'utm_medium' => 'social',
            'utm_campaign' => 'share_button',
        ];

        // Generate UTM URLs for each platform
        $facebookUrl = $canonicalUrl . '?' . http_build_query(array_merge($utmParams, ['utm_source' => 'facebook']));
        $twitterUrl = $canonicalUrl . '?' . http_build_query(array_merge($utmParams, ['utm_source' => 'twitter']));
        $whatsappUrl = $canonicalUrl . '?' . http_build_query(array_merge($utmParams, ['utm_source' => 'whatsapp']));

        // Create social sharing URLs
        $facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($facebookUrl);
        $twitterShareUrl = 'https://twitter.com/intent/tweet?url=' . urlencode($twitterUrl) . '&text=' . urlencode('Check this out!');
        $whatsappShareUrl = 'https://wa.me/?text=' . urlencode($whatsappUrl);

        // Create the HTML output for the buttons
        $html = '
        <div class="social-share-buttons">
            <a href="' . $whatsappShareUrl . '" target="_blank" rel="noopener"  class="bg-green-900 text-white text-xs text-center self-center px-2 py-2 my-2 mx-1">Whatsapp
              <i class="fab fa-whatsapp ml-1"></i></a>
            <a href="' . $facebookShareUrl . '" target="_blank" rel="noopener"  class="bg-blue-700 text-white text-xs text-center self-center px-2 py-2 my-2 mx-1">Facebook
              <i class="fab fa-facebook ml-1"></i></a>
            <a href="' . $twitterShareUrl . '" target="_blank" rel="noopener"  class="bg-blue-400  text-white text-xs text-center self-center px-2 py-2 my-2 mx-1">Twitter
              <i class="fab fa-twitter ml-1"></i></a>
        </div>
        ';

        return new HtmlString($html);
    }
}
