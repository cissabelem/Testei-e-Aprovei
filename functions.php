<?php

define('DS', DIRECTORY_SEPARATOR);

define('TEMPLATE_PATH', __DIR__ . DS);
define('TEMPLATE_CORE', TEMPLATE_PATH . 'core' . DS);
define('TEMPLATE_URL', get_bloginfo('template_url') . '/');

require_once TEMPLATE_CORE . 'init.php';