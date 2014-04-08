<?php
/**
 * @version     1.0.1
 * @package     com_stories
 * @copyright   Copyright (C) DigiOz Multimedia, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DigiOz Multimedia <webmaster@gmail.com> - http://www.digioz.com
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Chapter controller class.
 */
class StoriesControllerChapter extends JControllerForm
{

    function __construct() {
        $this->view_list = 'chapters';
        parent::__construct();
    }

}