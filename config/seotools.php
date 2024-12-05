<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô. Dịch vụ tận tâm, chất lượng cao, hàng đầu tại Hà Nội. ', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => 'full', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô", // set false to total remove
            'description'  => 'Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô. Dịch vụ tận tâm, chất lượng cao, hàng đầu tại Hà Nội. ',
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            // 'title'        => "Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô", // set false to total remove
            // 'description'  => 'Carvina - Trung tâm tư vấn làm đẹp nội thất, ngoại thất ô tô. Dịch vụ tận tâm, chất lượng cao, hàng đầu tại Hà Nội. ',
            // 'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            // 'type'        => 'WebPage',
            // 'images'      => [],
        ],
    ],
];
