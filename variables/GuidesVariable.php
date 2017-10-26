<?php
/**
 * Guides plugin for Craft CMS
 *
 * Guides Variable
 *
 * @author    Chris Malven
 * @copyright Copyright (c) 2017 Chris Malven
 * @link      http://malven.co
 * @package   Guides
 * @since     1.0.0
 */

namespace Craft;

class GuidesVariable
{
    public function getSectionHandle()
    {
        return craft()->guides->getSectionHandle();
    }

    public function getStylesheetPath()
    {
        return craft()->guides->getStylesheetPath();
    }

    public function getExternalScriptUrl()
    {
        return craft()->guides->getExternalScriptUrl();
    }

    public function getExternalStylesheetUrl()
    {
        return craft()->guides->getExternalStylesheetUrl();
    }
}
