<?php

namespace Craft;

class InputMaskPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Input Mask');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Roi Kingon';
    }

    public function getDeveloperUrl()
    {
        return 'http://www.kraftedbyus.com';
    }

    public function hasCpSection()
    {
        return false;
    }
}
