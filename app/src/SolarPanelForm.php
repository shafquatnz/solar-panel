<?php

namespace MySite;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextField;

class SolarPanelForm extends Form
{
	public function __construct($controller, $name, $action, $actionLabel) 
    {
		$fields = FieldList::create(
			TextField::create('income','Your household income'),
			TextField::create('bill','Your electricity bill'),
			TextField::create('solarPanels','Number of solar panels installed'),
		);
		$actions = FieldList::create(
			FormAction::create($action, $actionLabel)
		);
		$required = RequiredFields::create(['income', 'bill', 'solarPanels']);
		parent::__construct($controller, $name, $fields, $actions, $required);
	}    
}
