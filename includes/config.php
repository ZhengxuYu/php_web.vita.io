<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => '钮昕如（贵阳职业技术学院）的作品',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            'home' => '主页',
            'about-us' => '关于我们',
            'products' => '产品介绍',
            'contact' => '联系方式',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v0.1',
        'footnote' => '钮昕如'
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
