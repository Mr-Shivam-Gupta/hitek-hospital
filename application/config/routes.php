<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Hitekhospitals';
$route['careers'] = 'Hitekhospitals/career';
$route['about-us'] = 'Hitekhospitals/aboutus';
$route['contact-us'] = 'Hitekhospitals/contactus';
$route['health-packages'] = 'Hitekhospitals/healthpackages';
$route['patient-portal'] = 'Hitekhospitals/patientportal';
$route['our-doctors'] = 'Hitekhospitals/ourdoctors';
$route['board-of-directors'] = 'Hitekhospitals/boardofdirectors';
$route['facilities'] = 'Hitekhospitals/facilities';
$route['submit-appointment']='Hitekhospitals/submitAppointment';
$route['appointment-data']='Hitekhospitals/appointmentData';
$route['tpa-partners']='Hitekhospitals/tpaPartners';
$route['dr-akash-bakhshi']='Hitekhospitals/drAkashBakhshi';
$route['careers-form']='Hitekhospitals/careersForm';
$route['find-doctors']='Hitekhospitals/findDoctors';
$route['search-doctor']='Hitekhospitals/searchDoctor';
$route['appointment-form']='Hitekhospitals/appointmentForm';
$route['our-director']='Hitekhospitals/ourDirector';
$route['gallery']='Hitekhospitals/gallery';


$route['neurology'] = 'Hitekhospitals/neurologydepertment';
$route['cardiology-and-cardiac-surgery'] = 'Hitekhospitals/cardiologyAndCardiacSurgery';
$route['critical-care-and-emergency-medicine']='Hitekhospitals/criticalCareAndEmergencyMedicine';
$route['nephrology-and-dialysis']='Hitekhospitals/nephrologyAndDialysis';
$route['consultant-gastro-and-laparoscopic-surgeon']='Hitekhospitals/consultantGastroAndLaparoscopicSurgeon';
$route['general-and-laparoscopic-surgery']='Hitekhospitals/generalAndLaparoscopicSurgery';
$route['medicine']='Hitekhospitals/medicine';
$route['orthopaedic-and-joint-replacement']='Hitekhospitals/orthopaedicAndJointReplacement';
$route['pediatric']='Hitekhospitals/pediatric';
$route['ent-surgeon']='Hitekhospitals/entSurgeon';


 







// for admin login
$route['admin-login'] = 'Hitekhospitals/adminLogin';
$route['user-register']="Hitekhospitals/userRegister";
$route['user-registration']="Hitekhospitals/userRegistation";
$route['user-authentication']="Hitekhospitals/userAuthentication";



//route for admin panel
$route['admin-dashbord']='admin/index';
$route['logout']='admin/logout';
$route['department']='admin/department';
$route['add-department']='admin/addDepartment';
$route['submit-department']='admin/submitDepartment';
$route['doctor']='admin/doctor';
$route['add-doctor']='admin/doctorForm';
$route['appointments-report']='admin/appointmentsReport';
$route['appointments-upcoming']='admin/appointmentsUpcoming';
$route['appointments-search']='admin/appointmentsSearch';
$route['submit-doctor']='admin/submitDoctor';
$route['job-application']='admin/jobApplication';


$route['404_override'] = 'Custom_404';
$route['translate_uri_dashes'] = FALSE;
