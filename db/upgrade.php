<?php

/**
 * @package  moodle_local_plugin
 * @copyright 2017, Mohammed Essaid MEZERREG <me@mohessaid.com>
 * @license MIT
 * @doc https://docs.moodle.org/dev/Upgrade_API
 */

// Upgrade steps (such as database scheme changes and other things that must happen when the plugin is being upgraded) are defined here.
// The in-built XMLDB editor can be used to generate the code to change the database scheme.

defined('MOODLE_INTERNAL') || die();

function xmldb_local_moodle_local_plugin_upgrade($oldversion){
    // Upgrade code goes here.
    global $CFG, $DB;
    return true;
}