<?php
/**
 * Guides plugin for Craft CMS
 *
 * An easy way to provide in-admin documentation.
 *
 * @author    Chris Malven
 * @copyright Copyright (c) 2017 Chris Malven
 * @link      http://malven.co
 * @package   Guides
 * @since     1.0.0
 */

namespace Craft;

class GuidesPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Guides');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('An easy way to provide documentation in the Craft control panel.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/cmalven/guides/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/cmalven/guides/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.3';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Chris Malven';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://malven.co';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return true;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }

    /**
     * @return array
     */
    protected function defineSettings()
    {
        return array(
            'sectionHandle' => array(AttributeType::String, 'label' => 'Section Handle', 'default' => 'guides'),
            'externalStylesheetUrl' => array(AttributeType::String, 'label' => 'External Stylesheet URL', 'default' => ''),
            'stylesheetPath' => array(AttributeType::String, 'label' => 'Stylesheet Path', 'default' => ''),
            'externalScriptUrl' => array(AttributeType::String, 'label' => 'External Script URL', 'default' => ''),
        );
    }

    /**
     * Returns a list of routes for the plugin
     *
     * @return array
     */
    public function registerCpRoutes()
    {
        return array(
            'guides/sections/([A-Za-z0-9\-\_]+)/?$' => 'guides/_section',
        );
    }

    /**
     * @return mixed
     */
    public function getSettingsHtml()
    {
       return craft()->templates->render('guides/Guides_Settings', array(
           'settings' => $this->getSettings()
       ));
    }

    /**
     * @param mixed $settings  The plugin's settings
     *
     * @return mixed
     */
    public function prepSettings($settings)
    {
        // Modify $settings here...

        return $settings;
    }

}
