<?php defined('SYSPATH') or die('No direct script access.');

define('QR_CACHEABLE', TRUE);                                 // use cache - more disk reads but less CPU power, masks and format templates are stored there
define('QR_CACHE_DIR', APPPATH.'cache'.DIRECTORY_SEPARATOR);  // used when QR_CACHEABLE === true
define('QR_LOG_DIR', APPPATH.'logs'.DIRECTORY_SEPARATOR);     // default error logs dir

define('QR_FIND_BEST_MASK', TRUE);                            // if true, estimates best mask (spec. default, but extremally slow; set to false to significant performance boost but (propably) worst quality code
define('QR_FIND_FROM_RANDOM', FALSE);                         // if false, checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly
define('QR_DEFAULT_MASK', 2);                                 // when QR_FIND_BEST_MASK === false

define('QR_PNG_MAXIMUM_SIZE',  1024);                         // maximum allowed png image width (in pixels), tune to make sure GD and PHP can handle such big images


// Load phpQRcode
require_once Kohana::find_file('vendor', 'phpqrcode/qrconst');
require_once Kohana::find_file('vendor', 'phpqrcode/qrconfig');
require_once Kohana::find_file('vendor', 'phpqrcode/qrtools');
require_once Kohana::find_file('vendor', 'phpqrcode/qrspec');
require_once Kohana::find_file('vendor', 'phpqrcode/qrimage');
require_once Kohana::find_file('vendor', 'phpqrcode/qrinput');
require_once Kohana::find_file('vendor', 'phpqrcode/qrbitstream');
require_once Kohana::find_file('vendor', 'phpqrcode/qrsplit');
require_once Kohana::find_file('vendor', 'phpqrcode/qrrscode');
require_once Kohana::find_file('vendor', 'phpqrcode/qrmask');
require_once Kohana::find_file('vendor', 'phpqrcode/qrencode');