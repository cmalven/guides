<?php
/**
 * Guides plugin for Craft CMS
 *
 * Guides Service
 *
 * @author    Chris Malven
 * @copyright Copyright (c) 2017 Chris Malven
 * @link      http://malven.co
 * @package   Guides
 * @since     1.0.0
 */

namespace Craft;

class GuidesService extends BaseApplicationComponent
{
    protected $sectionHandle;
    protected $externalStylesheetUrl;
    protected $stylesheetPath;
    protected $externalScriptUrl;

    /**
     * Constructor
     */
    public function __construct()
    {
        $settings = craft()->plugins->getPlugin('guides')->getSettings();

        $this->sectionHandle = $settings->sectionHandle;
        $this->externalStylesheetUrl = $settings->externalStylesheetUrl;
        $this->stylesheetPath = $settings->stylesheetPath;
        $this->externalScriptUrl = $settings->externalScriptUrl;
    }

    /**
     * Get the guides section handle from settings
     *
     * @return string section handle
     */
    public function getSectionHandle()
    {
        return $this->sectionHandle;
    }

    /**
     * Get the stylesheet path from settings
     *
     * @return string path to stylesheet stylesheet
     */
    public function getStylesheetPath()
    {
        return $this->stylesheetPath;
    }

    /**
     * Get the URL for an external script from settings
     *
     * @return string URL for external script
     */
    public function getExternalScriptUrl()
    {
        return $this->externalScriptUrl;
    }

    /**
     * Get the URL for an external stylesheet from settings
     *
     * @return string URL for external stylesheet
     */
    public function getExternalStylesheetUrl()
    {
        return $this->externalStylesheetUrl;
    }
}
