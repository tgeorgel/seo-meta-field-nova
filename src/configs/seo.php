<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SEO status
    |--------------------------------------------------------------------------
    |
    | Set SEO status, if its set to false then all pages will have
    | the 'noindex, nofollow' follow type and also removed the meta tags except the title tag.
    |
    */

    'seo_status' => env('SEO_STATUS', true),

    'seo_meta_item_model' => Gwd\SeoMeta\Models\SeoMetaItem::class,

    /*
    |--------------------------------------------------------------------------
    | Sitemap status
    |--------------------------------------------------------------------------
    |
    | Should there be a sitemap available
    |
    */
    'sitemap_status' => env('SITEMAP_STATUS', false),

    /*
    |--------------------------------------------------------------------------
    | SEO title formatter
    |--------------------------------------------------------------------------
    |
    | If you want a specific default format for your SEO titles, then you can
    | specify it here. Example could be ':text - Test site', then all pages would have
    | the ' - Test site' appended to the actual SEO title.
    |
    */
    'title_formatter' => ':text',

    /*
    |--------------------------------------------------------------------------
    | Follow type options
    |--------------------------------------------------------------------------
    |
    | Here is all the possible follow types shown in the admin panel
    | which is an array with key -> value.
    |
    */

    'follow_type_options' => [
        'index, follow' => 'Index and follow',
        'noindex, follow' => 'No index and follow',
        'index, nofollow' => 'Index and no follow',
        'noindex, nofollow' => 'No index and no follow',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default follow type
    |--------------------------------------------------------------------------
    |
    | Set the default follow type.
    |
    */
    'default_follow_type' => env('SEO_DEFAULT_FOLLOW_TYPE', 'index, follow'),

    /*
    * SEO default image
    */
    'default_seo_image' => null,

    /*
    |--------------------------------------------------------------------------
    | Sitemap models
    |--------------------------------------------------------------------------
    |
    | Insert all the laravel models which should be in the sitemap
    |
    */

    'sitemap_models' => [],

    /*
    |--------------------------------------------------------------------------
    | Sitemap url
    |--------------------------------------------------------------------------
    |
    | Set the path of the sitemap
    |
    */

    'sitemap_path' => '/sitemap',

    'disk' => env('SEO_IMAGE_DISK', 'public')
];
