<?php

class Hitek_Hospital_Model extends CI_Model
{
  function getUserAuthentication($tbl, $cond = "")
{
    if ($cond != "") {
        $this->db->where($cond);
    }
    return $this->db->get($tbl);
}
function dbuserRegistation($tbl, $regData, $cond = "")
{
    if ($cond!= "") {
        $this->db->where($cond);
    }
    return $this->db->insert($tbl, $regData);
}
function dbSbsubmitDepartment($tbl, $departmentData)
{
   return $this->db->insert($tbl,$departmentData);
}
function dbGetDepartment()
{
   return $this->db->get('tbl_department');
}
function dbDepartmentDet($tbl, $cond=NULL)
{
    if ($cond!=NULL)
     {
      $this->db->where($cond);
    }
   return $this->db->get($tbl)->row();
}
function dbUpdateDepartment($tbl, $departmentData, $cond=NULL)
{
    if ($cond!=NULL) {
        $this->db->where($cond);
    }
    return $this->db->update($tbl, $departmentData);
}
function dbSubmitDoctor($tbl, $doctorData)
{
  return $this->db->insert($tbl, $doctorData);
}
function dbGetDoctorShortList($depid)
{
    $shordByDepId = array('department_id'=>$depid);
    return $this->db->where($shordByDepId)->get('tbl_doctor');

}
function dbGetConsultancyList($doctorName)
{
    $shordByDepId = array('id'=>$doctorName);
    return $this->db->where($shordByDepId)->get('tbl_doctor')->row();

}
function dbDocterList()
{
    $this->db->where(array('role'=>'Doctor'));
    return $this->db->get('tbl_doctor');
}
function findDoctorName($tbl, $cond=NULL)
{
    if ($cond!=NULL)
    {
        $this->db->where($cond);
    }
    return $this->db->get($tbl);
}
 function dbGetDcotorList()
{
    $this->db->select('doctor_name');
    $this->db->from('tbl_doctor');
    return $this->db->get()->result_array();
}
function dbDoctorName($tbl, $cond)
{
    if ($cond!=NULL)
    {
        $this->db->where($cond);
    }
    $query = $this->db->get($tbl);
    return $query;
}
 function dbGetDoctorName($docid)
{
    $this->db->select('tbl_department.department_name,tbl_department.id');
    $this->db->from('tbl_department');
    $this->db->join('tbl_doctor', 'tbl_department.id = tbl_doctor.department_id','inner');
    $this->db->where($docid);
    return  $this->db->get();

}
function dbSearchDoctor($cond)
{
 if ($cond!=NULL)
 {
   $this->db->where($cond);
 }
 return $this->db->get('tbl_doctor');
}
function dbDoctorDetail($tbl, $cond=NULL)
{
    if ($cond!=NULL)
    {
       $this->db->where($cond);
    }
    return $this->db->get($tbl);
}
function dbGetDoctorDetail($cond=NULL)
{

    $this->db->select('tbl_doctor.id,,doctor_name,unit,specialisation,qualification,role,educational_background,key_skills,publications,award,doctor_detial,doctor_photo,department_id,department_name,tbl_doctor.consultancy ');
    $this->db->from('tbl_doctor');
    $this->db->join('tbl_department', 'tbl_doctor.department_id= tbl_department.id', 'left');
    $this->db->where($cond);
    return $this->db->get()->row();
}
function dbShortListViaDep($tbl, $cond=NULL)
{
    if($cond!=NULL)
    {
        $this->db->where($cond);
    }
    return $this->db->get($tbl);
}
function dbDeleteDoctor($tbl, $cond=NULL)
{
  if ($cond!=NULL)
  {
   $this->db->where($cond);
  }
  return $this->db->delete($tbl);

}
function dbdeleteDepartment($tbl, $cond=NULL)
{
  if ($cond!=NULL)
  {
   $this->db->where($cond);
  }
  return $this->db->delete($tbl);

}
function dbeditSubmitDoctor($tbl, $doctorData, $cond=NULL)
{
    if ($cond!=NULL)
     {
       $this->db->where($cond);
    }
    return $this->db->update($tbl, $doctorData);
}
 function dbAppointmentReport()
{   
    $this->db->select('ta.id,ta.paitent_name,ta.paitent_number,ta.paitent_email,ta.appointment_date,ta.message,td.doctor_name,tdp.department_name');
    $this->db->from('tbl_apointment as ta');
    $this->db->join('tbl_doctor as td', 'ta.doctor_id = td.id', 'INNER');
    $this->db->join('tbl_department as tdp', 'ta.department_id=tdp.id');
    $this->db->order_by('ta.appointment_date', 'DESC');
    return $this->db->get();
}
 function dbAppointmentUpcoming()
{   
    $currentDate = date('Y-m-d');
    $this->db->select('ta.id,ta.paitent_name,ta.paitent_number,ta.paitent_email,ta.appointment_date,ta.message,td.doctor_name,tdp.department_name');
    $this->db->from('tbl_apointment as ta');
    $this->db->join('tbl_doctor as td', 'ta.doctor_id = td.id', 'INNER');
    $this->db->join('tbl_department as tdp', 'ta.department_id=tdp.id');
    $this->db->where('ta.appointment_date >=', $currentDate);
    $this->db->order_by('ta.appointment_date', 'DESC');
    return $this->db->get();
}
 function search($s_date,$e_date)
{   
   
    $this->db->select('ta.id,ta.paitent_name,ta.paitent_number,ta.paitent_email,ta.appointment_date,ta.message,td.doctor_name,tdp.department_name');
    $this->db->from('tbl_apointment as ta');
    $this->db->join('tbl_doctor as td', 'ta.doctor_id = td.id', 'INNER');
    $this->db->join('tbl_department as tdp', 'ta.department_id=tdp.id');
    $this->db->where('ta.appointment_date >=', $s_date);
    $this->db->where('ta.appointment_date <=', $e_date);
    $this->db->order_by('ta.appointment_date', 'DESC');
    return $this->db->get();
}
function dbdeleteAppointment($tbl, $cond)
{
    if ($cond!=NULL) {
    $this->db->where($cond);
    }
    return $this->db->delete($tbl);
}
function dbSearchDoctorLike($doctor_name)
{
    $this->db->select('*');
    $this->db->from('tbl_doctor');
    $this->db->like('doctor_name', $doctor_name);
    return $this->db->get();
}
function dbSearchLikeDoctor($doctor_name, $department_name)
{
    $this->db->select('*');
    $this->db->from('tbl_doctor');
    $this->db->like('doctor_name', $doctor_name);
    $this->db->where('department_id', $department_name);
    return $this->db->get();
}
function dbchangePassword($tbl, $password, $cond)
{
  if ($cond!=NULL)
  {
   $this->db->where($cond);
  }
  return $this->db->update($tbl, $password);
}
public function dbAppointment($cond)
{
  $this->db->select('tbl_department.department_name,tbl_doctor.id,doctor_name,department_id,consultancy');
  $this->db->from('tbl_department');
  $this->db->join('tbl_doctor', 'tbl_department.id = tbl_doctor.department_id','inner');
  $this->db->where($cond);
  return $this->db->get();
}
function dbSubmitAppointment($tbl, $appointmentDeatails)
{
return $this->db->insert($tbl, $appointmentDeatails);
}

function dbcareersForm($tbl, $resumeData)
{
return $this->db->insert($tbl, $resumeData);
}
function dbJobApplication()
{  
  
    return $this->db->order_by('id', 'DESC')->get('tbl_careers');
}
function dbDeleteapplication($tbl, $cond)
{
    if ($cond!=NULL) 
    {
     $this->db->where($cond);
    }
    return $this->db->delete($tbl);
}
function dbDirectorDetail()
{
    $cond = array('id'=>37);
    if ($cond!=NULL) 
    {
       $this->db->where($cond);
    }
    return $this->db->get('tbl_doctor')->row();
}
function dbOurdoctors()
{
   $this->db->where(array('role'=>'Doctor'));
   return $this->db->get('tbl_doctor');
}
 function dbGetSubmitedAppointment($id){

           $this->db->where(['id'=>$id]);
  return   $this->db->get('tbl_apointment')->row();
 }
}



?>
