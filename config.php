<?php
define('UKE_DOMAIN', '');

define('UKE_WEB_DIR',      'web');
define('UKE_CSS_DIR',      'css');
define('UKE_JS_DIR',      'js');
define('UKE_IMG_DIR',      'img');
define('UKE_PUBLIC_DIR',      'public');
define('UKE_SCSS_DIR',      'scss');
define('UKE_VENDOR_DIR',      'vendor');
define('UKE_ADMIN_DIR',      'adm');
define('UKE_UPLOAD_DIR',      'upload');
define('UKE_DATA_DIR',      'data');

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
define('UKE_JS_URL',      UKE_URL.'/'.UKE_JS_DIR);
define('UKE_IMG_URL',      UKE_URL.'/'.UKE_IMG_DIR);
define('UKE_PUBLIC_URL',      UKE_URL.'/'.UKE_PUBLIC_DIR);
define('UKE_SCSS_URL',      UKE_URL.'/'.UKE_SCSS_DIR);
define('UKE_VENDOR_URL',      UKE_URL.'/'.UKE_VENDOR_DIR);
define('UKE_ADMIN_URL',      UKE_URL.'/'.UKE_ADMIN_DIR);
define('UKE_UPLOAD_URL',      UKE_URL.'/'.UKE_UPLOAD_DIR);

define('UKE_WEB_PATH',      UKE_PATH.'/'.UKE_WEB_DIR);
define('UKE_CSS_PATH',      UKE_PATH.'/'.UKE_CSS_DIR);
define('UKE_JS_PATH',      UKE_PATH.'/'.UKE_JS_DIR);
define('UKE_IMG_PATH',      UKE_PATH.'/'.UKE_IMG_DIR);
define('UKE_PUBLIC_PATH',      UKE_PATH.'/'.UKE_PUBLIC_DIR);
define('UKE_SCSS_PATH',      UKE_PATH.'/'.UKE_SCSS_DIR);
define('UKE_VENDOR_PATH',      UKE_PATH.'/'.UKE_VENDOR_DIR);
define('UKE_ADMIN_PATH',      UKE_PATH.'/'.UKE_ADMIN_DIR);
define('UKE_UPLOAD_PATH',      UKE_PATH.'/'.UKE_UPLOAD_DIR);
define('UKE_DATA_URL',      UKE_URL.'/'.UKE_DATA_DIR);
// define('UKE_MAIN_URL',      UKE_WEB_URL.'/uke/main');
?>