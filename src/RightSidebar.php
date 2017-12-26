<?php

namespace Restruct\RightSidebar;

use SilverStripe\View\Requirements;
use SilverStripe\Forms\FormField;
use SilverStripe\Forms\Tab;
use SilverStripe\Forms\CompositeField;
use SilverStripe\Control\Cookie;

class RightSidebar extends CompositeField
{
    public function __construct($name)
    {
        Requirements::css('micschk/rightsidebar:css/cms.css');
        Requirements::javascript('micschk/rightsidebar:js/cms.js');

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
