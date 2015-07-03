<?php

namespace Craft;

class InputMaskFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Input Mask');
	}
	
	protected function defineSettings()
	{
		return array(
			'placeholder' => AttributeType::String,
			'mask' => AttributeType::String
		);
	}
	
	public function getSettingsHtml()
	{
		return craft()->templates->render('inputmask/_fieldtype/settings', array(
			'settings' => $this->getSettings()
		));
	}

	public function getInputHtml($name, $value)
	{
		$settings = $this->getSettings();
		$inputId = craft()->templates->formatInputId($name);
		craft()->templates->includeJsResource('inputmask/javascripts/jquery.maskedinput.min.js');
		craft()->templates->includeJsResource('inputmask/javascripts/InputMask.js');
		craft()->templates->includeJs('new Craft.KraftInputMask("'.craft()->templates->namespaceInputId($inputId).'","'.$settings['mask'].'");');
		return craft()->templates->render('inputmask/_fieldtype/index', array(
			"name" => $name,
			"id" => $inputId,
			"value" => $value,
			"settings" => $settings
		));
	}
}
