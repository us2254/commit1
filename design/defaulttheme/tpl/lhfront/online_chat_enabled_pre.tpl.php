<?php 
	$online_chat_enabled_pre = true; 
	$online_visitors_enabled_pre = true;

    class but
    {
        public static $setting_button_clicked;        
        private static $greeting = 'Hello';
        private static $initialized = false;

        private function __construct() {}
        private static function initialize()
        {
    	    if (self::$initialized)
    		    return;

            self::$greeting .= ' There!';
    	    self::$initialized = true;
        }

        public static function greet()
        {

    	    self::initialize();
            echo self::$greeting;
        }
        public static function change($val){
            self::$setting_button_clicked = $val;                        
        }
    }    
?>