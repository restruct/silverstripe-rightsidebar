<?php

class RightSidebar extends FieldGroup {
	
	public function __construct($arg1 = null, $arg2 = null) {
		$this->setTitle(_t("RightSidebar.Options", "Options"));
		
		Requirements::css(RIGHTSIDEBAR_DIR . '/css/cms.css');
		Requirements::javascript(RIGHTSIDEBAR_DIR . '/js/cms.js');
		
		parent::__construct($arg1, $arg2);
	}

	public function isOpen() {
		$sidebar = Cookie::get('rightsidebaropen');
		if($sidebar == 1 || is_null($sidebar)) {
			return true;
		}
		return false;
	}

}