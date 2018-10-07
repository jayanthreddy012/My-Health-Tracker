<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
define('APP_TITLE','GURU');

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


//project constants
define('HOME_PATH', 'http://'.$_SERVER['HTTP_HOST'].'/mht');
define('AD_ADMIN_PATH', HOME_PATH.'/adminportal');
define('AD_ASSETS_PATH', HOME_PATH.'/assets/admin/');
define('AD_CSS_PATH', AD_ASSETS_PATH.'css/');
define('AD_JS_PATH', AD_ASSETS_PATH.'js/');
define('AD_IMAGES_PATH', AD_ASSETS_PATH.'images/');
define('AD_FONTS_PATH', AD_ASSETS_PATH.'fonts/');
define('AD_LESS_PATH', AD_ASSETS_PATH.'fonts/');


//login register
define('REGISTER', HOME_PATH.'/register');
define('DOCTOR_REGISTER', HOME_PATH.'/register/doctor');
define('LOGIN', HOME_PATH.'/login');
define('DOCTOR', HOME_PATH.'/login/doctor');
define('LOGOUT', HOME_PATH.'/login1/logout');
define('VALIDATE', HOME_PATH.'/login1/validate');
define('DOCTOR_VALIDATE', HOME_PATH.'/login1/validate_doctor');
define('REGVALIDATE', HOME_PATH.'/register/validate');
define('REGVALIDATE1', HOME_PATH.'/register/validatedoctor');
define('CLIENTLIST', HOME_PATH.'/register/client');
define('CLIENDATA', HOME_PATH.'/clientdata');
define('CLIENDATA_RETURN', HOME_PATH.'/clientdata/clientdata_return');
//login


define('DASHBOARD', HOME_PATH.'/dashboard');
define('DOCTOR_DASHBOARD', HOME_PATH.'/dashboard/doctor_dashboard');
define('DASHBOARD_DOCTOR_APPROVE', HOME_PATH.'/dashboard/doctor_approve');
define('DASHBOARD_DOCTOR_DENY', HOME_PATH.'/dashboard/doctor_deny');
define('DASHBOARD_DOCTOR_DELETE', HOME_PATH.'/dashboard/doctor_delete');
define('DASHBOARD_USER_DELETE', HOME_PATH.'/dashboard/user_delete');
define('DASHBOARD_USERREQUEST_DELETE', HOME_PATH.'/dashboard/userreq_delete');
define('DASHBOARD_FTBA_DELETE', HOME_PATH.'/dashboard/ftba_delete');
define('DASHBOARD_FTBE_DELETE', HOME_PATH.'/dashboard/ftbe_delete');
define('DASHBOARD_STBA_DELETE', HOME_PATH.'/dashboard/stba_delete');
define('DASHBOARD_STBE_DELETE', HOME_PATH.'/dashboard/stbe_delete');
define('DASHBOARD_SDC_DELETE', HOME_PATH.'/dashboard/sdc_delete');
//
define('DR_APPOINTMENTS', HOME_PATH.'/drappointments/index');
define('DR_APPOINTMENTS_INSERT', HOME_PATH.'/drappointments/insert');
define('USER_APPOINTMENTS_INSERT', HOME_PATH.'/mycalendar/insert');
define('USER_APPOINTMENTS_REQ', HOME_PATH.'/settings/insertdata');
// Journal Paths

define('JOURNALS_FOODENTRY_PATH', HOME_PATH.'/journals/foodentry');
define('JOURNALS_ADD_FOODENTRY_PATH', HOME_PATH.'/journals/add_foodentry');

define('JOURNALS_SUPPLEMENTS_PATH', HOME_PATH.'/journals/supplements');
define('JOURNALS_ADD_SUPPLEMENTS_PATH', HOME_PATH.'/journals/add_supplements');

define('JOURNALS_BATHDETAILS_PATH', HOME_PATH.'/journals/bathdetails');
define('JOURNALS_ADD_BATHDETAILS_PATH', HOME_PATH.'/journals/add_bathdetails');

define('JOURNALS_BOWELMOVEMENTS_PATH', HOME_PATH.'/journals/bowelmovements');
define('JOURNALS_ADD_BOWELMOVEMENTS_PATH', HOME_PATH.'/journals/add_bowelmovements');

define('JOURNALS_FITNESS_PATH', HOME_PATH.'/journals/fitness');
define('JOURNALS_ADD_FITNESS_PATH', HOME_PATH.'/journals/add_fitness');

define('JOURNALS_THERAPY_PATH', HOME_PATH.'/journals/therapy');
define('JOURNALS_ADD_THERAPY_PATH', HOME_PATH.'/journals/add_therapy');

define('JOURNALS_SYMPTOMS_PATH', HOME_PATH.'/journals/symptoms');
define('JOURNALS_ADD_SYMPTOMS_PATH', HOME_PATH.'/journals/add_symptoms');

define('JOURNALS_SLEEPDETAILS_PATH', HOME_PATH.'/journals/sleepdetails');
define('JOURNALS_ADD_SLEEPDETAILS_PATH', HOME_PATH.'/journals/add_sleepdetails');

define('JOURNALS_HEALTHMARKERS_PATH', HOME_PATH.'/journals/healthmarkers');
define('JOURNALS_ADD_HEALTHMARKERS_PATH', HOME_PATH.'/journals/add_healthmarkers');
//
define('ADD_USER', HOME_PATH.'/register/add_user');
define('ADD_DOCTOR', HOME_PATH.'/register/add_doctor');
// table constants
define('TBL_USERS','admin');
//
define('MYCALANDAR_MYDIETPLAN', HOME_PATH.'/mycalendar/mydietplan');
define('MYCALANDAR_MYDIETPLAN_FTBA', HOME_PATH.'/mycalendar/ftba');
define('MYCALANDAR_MYDIETPLAN_FTBE', HOME_PATH.'/mycalendar/ftbe');
define('MYCALANDAR_MYDIETPLAN_STBA', HOME_PATH.'/mycalendar/stba');
define('MYCALANDAR_MYDIETPLAN_STBE', HOME_PATH.'/mycalendar/stbe');
define('MYCALANDAR_MYDIETPLAN_SDC', HOME_PATH.'/mycalendar/sdc');


define('MYCALANDAR_MYAPPOINTMENTS', HOME_PATH.'/mycalendar/myappointments');
define('MYCALANDAR_CALENDER', HOME_PATH.'/mycalendar/calendar');
//
define('SETTINGS_ACCOUNTPROFILE', HOME_PATH.'/settings/accountprofile');
//define('SETTINGS_ACCOUNTPROFILE', HOME_PATH.'/mycalendar/myappointments');
//

//models
define('USERS_MODEL','Users_model');

/* End of file constants.php */
/* Location: ./application/config/constants.php */















