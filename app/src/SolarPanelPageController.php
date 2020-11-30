<?php

namespace MySite;
use PageController;
use MySite\SolarPanelForm;
use MySite\CalculationHelper;

class SolarPanelPageController extends PageController 
{

	private static $allowed_actions = [
        'index', 'SolarPanelEntryForm'
	];

	public function index()
    {
        return [
			'SolarPanelAction' => 'index'
		];
	}
	
	public function SolarPanelEntryForm()
    {
        $form = new SolarPanelForm($this, 'SolarPanelEntryForm', 'processData', 'Get my cashback amount');
        return $form;
	}

    public function processData($data, $form)
    {
		$result = CalculationHelper::getCashBack($data['income'], $data['bill'], $data['solarPanels']);
        return [
			'result' => $result
		];
	}
	
}
