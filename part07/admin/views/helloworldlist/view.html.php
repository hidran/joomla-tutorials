<?php

/**
 * @version    $Id$
 * @package    Joomla16.Tutorials
 * @subpackage Components
 * @copyright  Copyright (C) 2005 - 2009 Open Source Matters, Inc. All rights reserved.
 * @author     Christophe Demko
 * @link       http://joomlacode.org/gf/project/helloworld_1_6/
 * @license    GNU/GPL
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HelloWorldList View
 */
class HelloWorldViewHelloWorldList extends JView
{

	/**
	 * items to be displayed
	 */
	protected $items;

	/**
	 * pagination for the items
	 */
	protected $pagination;

	/**
	 * HelloWorldList view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');
		// Assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;
		// Display the template
		parent::display($tpl);
	}
}

