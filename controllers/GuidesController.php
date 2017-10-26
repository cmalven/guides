<?php
/**
 * Guides plugin for Craft CMS
 *
 * Guides Controller
 *
 * @author    Chris Malven
 * @copyright Copyright (c) 2017 Chris Malven
 * @link      http://malven.co
 * @package   Guides
 * @since     1.0.0
 */

namespace Craft;

class GuidesController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = array('actionIndex',
        );

    /**
     */
    public function actionIndex()
    {
    }
}