<?php

/**
 * @package  moodle_local_plugin
 * @copyright 2017, Mohammed Essaid MEZERREG <me@mohessaid.com>
 * @license MIT
 * @doc https://docs.moodle.org/dev/Adding_a_web_service_to_a_plugin
 *      https://docs.moodle.org/dev/Web_services_API
 *      https://docs.moodle.org/dev/External_functions_API
 */

// External functions and web services provided by your plugin are described here.

defined('MOODLE_INTERNAL') || die();

// We defined the web service functions to install.
// $functions = array(
//     'moodle_local_plugin_service_function_name_1' => array(
//             'classname'   => 'moodle_local_plugin_external',
//             'methodname'  => 'service_function_name_1',
//             'classpath'   => 'local/moodle_local_plugin/externallib.php',
//             'description' => 'Description about the function',
//             'type'        => 'read', // Type of operations (read, write).
//     ),
//     'moodle_local_plugin_service_function_name_2' => array(
//             'classname'   => 'moodle_local_plugin_external',
//             'methodname'  => 'service_function_name_2',
//             'classpath'   => 'local/moodle_local_plugin/externallib.php',
//             'description' => 'Description about the function',
//             'type'        => 'read', // Type of operations (read, write).
//     ),
// );

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
// $services = array(
//         'My service' => array(
//                 'functions' => array ('local_zsap_core_check_user_existence'),
//                 'restrictedusers' => 0,
//                 'enabled'=>1,
//         )
// );