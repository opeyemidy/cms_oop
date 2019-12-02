<?php


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', DS . 'opt' . DS . 'lampp' . DS . 'htdocs' . DS . 'cms_oop' );

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');

defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'images');

require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."new_config.php");
require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."user.php");
require_once(INCLUDES_PATH.DS."photo.php");
require_once(INCLUDES_PATH.DS."comment.php");
require_once(INCLUDES_PATH.DS."session.php");
require_once(INCLUDES_PATH.DS."paginate.php");


 ?>



<?php
// require_once("functions.php");
// require_once("new_config.php");
// require_once("db_object.php");
// require_once("database.php");
// require_once("user.php");
// require_once("photo.php");
// require_once("comment.php");
// require_once("session.php");
//
//
//     defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
//
//     define('SITE_ROOT', DS . 'opt' . DS . 'lampp' . DS . 'htdocs' . DS . 'cms_oop' );
//
//     defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
//
//     require_once("functions.php");
//     require_once("new_config.php");
//     require_once("db_object.php");
//     require_once("database.php");
//     require_once("user.php");
//     require_once("photo.php");
//     require_once("comment.php");
//     require_once("session.php");
    // opt/lampp/htdocs/cms_oop'
?>
