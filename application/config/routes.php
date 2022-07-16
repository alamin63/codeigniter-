<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'My_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['add-student']	= 'My_controller/add_student';
$route['save-student']	= 'My_controller/save_student';
$route['manage-student']= 'My_controller/manage_student';
$route['edit-student/(.+)'] = 'My_controller/edit_student/$1';
$route['update-student'] = 'My_controller/update_student';
$route['delete-student/(.+)'] = 'My_controller/delete_student/$1';