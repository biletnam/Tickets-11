<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Core
 *
 * Sets the default route to "welcome"
 */
$config['_default'] = 'home';

$config['ticket/([0-9]+)'] = 'ticket/show_ticket/$1';