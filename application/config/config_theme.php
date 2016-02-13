<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

define('CACHE_DISABLED', TRUE);
define('CACHE_TIME', 60);

// config theme
$config["theme"] = "theme_1";

// config assets
$config["assets"]['base'] = APPPATH . 'views/theme/' . $config["theme"] . "/assets";
$config["assets"]['js'] = APPPATH . 'views/theme/' . $config["theme"] . "/assets/js";
$config["assets"]['css'] = APPPATH . 'views/theme/' .$config["theme"] . "/assets/css";
$config["assets"]['images'] = APPPATH . 'views/theme/' .$config["theme"] . "/assets/images";