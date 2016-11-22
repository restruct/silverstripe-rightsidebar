<?php

class RightSidebar extends CompositeField
{
    
    public function __construct($name)
    {
        Requirements::css(RIGHTSIDEBAR_DIR . '/css/cms.css');
        Requirements::javascript(RIGHTSIDEBAR_DIR . '/js/cms.js');
        
        $args = func_get_args();
        
        $name = array_shift($args);
        if (!is_string($name)) {
            user_error('RightSidebar::__construct(): $name parameter to a valid string', E_USER_ERROR);
        }
        $this->name = $name;
        $this->id = preg_replace('/[^0-9A-Za-z]+/', '', $name);
        $this->title = (isset($title)) ? $title : FormField::name_to_label($name);
        
        parent::__construct($args);
    }
    
//	public function __construct($arg1 = null, $arg2 = null) {
//		
//		//$this->setTitle(_t("RightSidebar.Options", "Options"));
//		
//		if(is_string($arg1)) {
//			$this->id = $arg1;
//		} else {
//			$this->id = "Options";
//		}
//		
//		Requirements::css(RIGHTSIDEBAR_DIR . '/css/cms.css');
//		Requirements::javascript(RIGHTSIDEBAR_DIR . '/js/cms.js');
//		
//		parent::__construct($arg1, $arg2);
//	}

    public function isOpen()
    {
        $sidebar = Cookie::get('rightsidebaropen');
        if ($sidebar == 1 || is_null($sidebar)) {
            return true;
        }
        return false;
        new Tab();
    }
}
