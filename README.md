# Silverstripe CMS Right Sidebar
*This fork is under development*

## Requirements
- SilverStripe CMS & Framework 4+

## Overview
Allows adding a right-hand sidebar in the CMS to hold options/fields for the currently edited record. Abstracted out from the Silverstripe Blog module for use on other pages as well (blog module by ao. Michael Strong/Silverstripe)

RightSidebar behaves like a tab (like tab it extends CompositeField).

Add use before `class` declaration:
```php
use Restruct\RightSidebar\RightSidebar;
```

### Usage (in getCMSfields):

```php

	$fields->addFieldsToTab('Root.Main', RightSidebar::create('Options'));
	$fields->addFieldsToTab('Root.Main.Options', array(
		$publishDate = DatetimeField::create("PublishDate", "Publish Date"),
		TextField::create('Author')
	));

	// Add to Main tab (fixed width) and render an outer template to deal with our custom layout
	$fields->addFieldsToTab('Root.Main', RightSidebar::create('Options'));
	$fields->fieldByName('Root')->setTemplate('Restruct\RightSidebar\Forms\RightSidebarInner');

	// OR: Add it full-screen (collapsible) and render an outer template to deal with our custom layout
	$fields->insertBefore(RightSidebar::create('Options'), 'Root');
	$fields->fieldByName('Root')->setTemplate('Restruct\RightSidebar\Forms\RightSidebar');

```
