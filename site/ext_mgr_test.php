<?php
/**
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

$option = JRequest::getCmd('option', 'com_test');

// build controller path and name
$controllerName = JRequest::getCmd('controller', JRequest::getCmd('view', 'Base'));
if (!file_exists(JPATH_COMPONENT_SITE . DS . 'controllers' . DS . $controllerName . '.php'))
{
	$controllerName = 'Base';
}
require_once(JPATH_COMPONENT_SITE . DS . 'controllers' . DS . strtolower($controllerName) . '.php');
$controllerName = 'ExtMgrTestController' . $controllerName;

// Instantiate controller and execute
$controller = new $controllerName();
$controller->execute();
$controller->redirect();
