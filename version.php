<?php

/**
 * @package  moodle_local_plugin
 * @copyright 2017, Mohammed Essaid MEZERREG <me@mohessaid.com>
 * @license MIT
 * @doc https://docs.moodle.org/dev/version.php
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_moodle_local_plugin'; // Declare the type and name of this plugin.
$plugin->version = 2017110700; // Plugin released on 4th November 2017.
$plugin->requires = 2014051200; // Moodle 2.7.0 is required.
$plugin->maturity = MATURITY_ALPHA; // This is considered as ALPHA for production sites.
$plugin->release = 'v0.0.1'; // This is our first.