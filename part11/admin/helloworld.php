<?php

/**
 * @version    $Id: hello.php 15 2009-11-02 18:37:15Z chdemko $
 * @package    Joomla16.Tutorials
 * @subpackage Components
 * @copyright  Copyright (C) 2005 - 2009 Open Source Matters, Inc. All rights reserved.
 * @author     Christophe Demko
 * @link       http://joomlacode.org/gf/project/helloworld_1_6/
 * @license    GNU/GPL
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// set some global property
$document = & JFactory::getDocument();
$document->addStyleDeclaration('.icon-48-helloworld {background-image: url(../media/com_helloworld/images/tux-48x48.png);}');
// import joomla controller library
jimport('joomla.application.component.controller');
// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('HelloWorld');
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
// Redirect if set by the controller
$controller->redirect();

