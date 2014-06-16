<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'moodle';
$CFG->prefix    = 'moodle_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost/moodle';
$CFG->dataroot  = '/opt/lampp/moodledata';
$CFG->admin     = 'admin';


$CFG->phpunit_prefix = 'phpunit_';
$CFG->phpunit_dataroot = '/opt/lampp/test_moodledata';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php'); ;

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
