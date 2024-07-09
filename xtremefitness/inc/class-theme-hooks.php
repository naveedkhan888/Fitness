<?php
//Theme Hook class
if (!defined('ABSPATH')){
	exit(); //exit if access directly
}

if (!class_exists('XtremeFitness_hook')){

	class XtremeFitness_hook{

		private static $instance;

		public function __construct() {
			add_action( 'xtremefitness_before_site_content', array($this,'breadcrumb') );
		}

		public static function getInstance(){
			if (null == self::$instance){
				self::$instance = new self();
			}
			return self::$instance;
		}

		

	} //end class

	if (class_exists('XtremeFitness_hook')){
		XtremeFitness_hook::getInstance();
	}

} //endif