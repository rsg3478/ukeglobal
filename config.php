<?php
define('UKE_DOMAIN', '');

define('UKE_WEB_DIR',      'wed');
define('UKE_CSS_DIR',      'css');
define('UKE_IMG_DIR',      'img');
define('UKE_PUBLIC_DIR',      'public');
define('UKE_SCSS_DIR',      'scss');
define('UKE_VENDOR_DIR',      'vendor');

// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
if (UKE_DOMAIN) {
    define('UKE_URL', UKE_DOMAIN);
} else {
    if (isset($UKE_path['url']))
        define('UKE_URL', $UKE_path['url']);
    else
        define('UKE_URL', '');
}

if (isset($UKE_path['path'])) {
    define('UKE_PATH', $UKE_path['path']);
} else {
    define('UKE_PATH', '');
}

define('UKE_WEB_URL',      UKE_URL.'/'.UKE_WEB_DIR);
define('UKE_CSS_URL',      UKE_URL.'/'.UKE_CSS_DIR);
define('UKE_IMG_URL',      UKE_URL.'/'.UKE_IMG_DIR);
define('UKE_PUBLIC_URL',      UKE_URL.'/'.UKE_PUBLIC_DIR);
define('UKE_SCSS_URL',      UKE_URL.'/'.UKE_SCSS_DIR);
define('UKE_VENDOR_URL',      UKE_URL.'/'.UKE_VENDOR_DIR);
?>