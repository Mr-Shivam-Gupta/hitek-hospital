<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitekhospitals extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->helper('Hitek_Hospital_Helper');
		$this->load->model('Hitek_Hospital_Model');
	}


public function index()
{
		$data['title']="Home | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="home";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		$data['doclist']=$this->Hitek_Hospital_Model->dbOurdoctors();
		$this->load->view('index',$data);
}
public function career()
{
		$data['title']="Career | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com/careers";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="career";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('career',$data);
}
public function aboutus()
{
		$data['title']="Home | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com/about-us";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="aboutus";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('about-us',$data);
}
public function contactus()
{
		$data['title']="Contact Us | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com/contact-us";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="contactus";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('contact-us',$data);
}
public function healthpackages()
{
		$data['title']="Health Packages | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="healthpackages";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('	',$data);
}
public function patientportal()
{
		$data['title']="Patient Portal | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="patientportal";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('patient-portal',$data);
}
public function ourdoctors()
{
		$data['title']="Our Doctors | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com/our-doctors";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="aboutus";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$data['doclist']=$this->Hitek_Hospital_Model->dbOurdoctors();

		$this->load->view('our-doctors',$data);
}
public function boardofdirectors()
{
		$data['title']="Board of Directors | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com/our-director";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="aboutus";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('board-of-directors',$data);
}

public function facilities()
{
		$data['title']="Neurology Depertment | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="department";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('facilities',$data);
}
public function ourDirector()
{
		$data['title']="Our Director | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="aboutus";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		$data['director']=$this->Hitek_Hospital_Model->dbDirectorDetail();
		// print_r($data['director']);
		// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
		$this->load->view('our-director',$data);
}

public	function adminLogin()
{
	$data['title']='Admin Login';
	$data['salt']=generateSalt(7);
	$this->session->salt=$data['salt'];
	$this->load->view('admin/login' ,$data);
}
	function userRegister()
{
	$data['title']="User Registation";
	$data['salt']=generateSalt(7);
	$this->session->salt=$data['salt'];
	$this->load->view('admin/user-registration',$data);

}
public function userRegistation()

{
	if($this->input->post())
	{
		$this->form_validation->set_rules('fullname','Full Name','trim|required');
		$this->form_validation->set_rules('username','User Name','trim|required');
		$this->form_validation->set_rules('userpassword','User Password','trim|required');
		if($this->form_validation->run()==false)
		{
			$this->session->set_flashdata('error','Please enter correct User Name & Password');
			return redirect('user-register');
		}
		else
		{
			 $upass=hash('SHA512', $this->input->post('userpassword'));
			 $userType="admin";
			 $userStatus="1";
			 $regData=array(
			 'full_name'=>$this->input->post('fullname'),
			 'user_name'=>$this->input->post('username'),
			 'user_password'=>$upass,
			 'user_type'=>$userType,
			 'user_status'=>$userStatus,
			 'ip_address'=>$this->input->ip_address(),
							 'browser'=>$this->agent->browser(),
			 'create_date'=>date('y-m-d H:i:s')

			 );

			$flag=$this->Hitek_Hospital_Model->dbuserRegistation('admin_tbl',$regData);
			if($flag==false)
			{
				$this->session->set_flashdata('error','Please enter correct User Name & Password');
			return redirect('user-register');
			}
			else
			{
			 $this->session->set_flashdata('success','You have been successfully registered');
			 return redirect('user-register');
			}


		}
	}
}

public 	function userAuthentication()
{
	$data['title']="User Authentication";
	if($this->input->post())
	{
		$this->form_validation->set_rules('username','User Name','trim|required');
		$this->form_validation->set_rules('userpassword','User Password','trim|required');
		if($this->form_validation->run()==false)
		{
			$this->session->set_flashdata('error','Please enter correct user name & password');
			return redirect('admin-login');
		}
		else
		{
			$sdata=$this->input->post('hdnfield');
			$userpassword=$this->input->post('userpassword');


			if($this->session->$sdata!='')
			{
				$this->session->set_flashdata('error','Please enter correct user Name & password');
				return redirect('admin-login');
			}
			else
			{
				$uname=$this->input->post('username');
				$cond=array('user_name'=>$uname);
				$record=$this->Hitek_Hospital_Model->getUserAuthentication('admin_tbl', $cond);

				if($record->num_rows()==0)
				{
						$this->session->set_flashdata('error','Please enter correct user name');
				return redirect('admin-login');

				}
				else
				{
					$details=$record->row();
					$dbaname=$details->user_name;
					$enpassword=hash('SHA512', $this->input->post('userpassword'));
					$encapassword=hash('SHA512', $enpassword.$this->input->post('hdnfield'));
					$dbapassord=$details->user_password;
					$encdbpassword=hash('SHA512', $dbapassord.$this->input->post('hdnfield'));
					if($encapassword!=$encdbpassword)
					{
						$this->session->set_flashdata('error','Please enter correct password');
							return redirect('admin-login');
					}
					else
					{
						if($uname!=$dbaname && $encapassword!=$encdbpassword)
						{
							 $this->session->set_flashdata('error','Please enter correct user name & password');
										 return redirect('admin-login');
						}
						else
						{
							 $userAStatus=$details->user_status;
							 if($userAStatus!=1)
							 {
							 $this->session->set_flashdata('error','User does not exists');
										 return redirect('admin-login');
							 }
							 else
							 {
								 $userAType=$details->user_type;
								 if($userAType!='admin')
								 {
									 $this->session->set_flashdata('error','User does not exists');
														 return redirect('admin-login');
								 }
								 else
								 {
									 $user_id = $details->id;
									 $sessData=array(
										 'UserName'=>$details->full_name,
										 'user_email'=>$details->user_name,
										 'UserType'=>$userAType,
										 'id'=>$user_id,
									 );
										$this->session->set_userdata('login' ,$sessData);
										AntiFixationInit();
										$cookiestr="";
										$this->session->salt=generateSalt();
										$this->load->helper('cookie');
										$duration=30*60;
										set_cookie("AuthoToken",$this->session->salt,$duration);
										return redirect('admin-dashbord');

								 }
							 }
						}
					}

				}

			}
		}
	}
}

public function sendDepId()
{
	$shortRecord = $this->input->post('department');
	$data['list'] = $this->Hitek_Hospital_Model->dbGetDoctorShortList($shortRecord);
	$this->load->view('doctorShoredList', $data);
}
public function sendDocId()
{
	$shortRecord = $this->input->post('doctor_id');
	$data['consultancy']=$this->db->where(['id'=> $shortRecord])->get('tbl_doctor')->row();
	$this->load->view('consultancyList', $data);
}
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin-login', 'refresh');
    }

		public function tpaPartners()
		{
				$data['title']="TPA Partners | HI-TEK Super Speciality Hospital";
				$data['canonical']="https://www.hitekhospitals.com/tpa-partners";
				$data['keywords']="";
				$data['desc']="";
				$data['menu']="about-us";
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
				$this->load->view('tpa-partners',$data);
		}

		public function drAkashBakhshi()
		{
				$data['title']="Dr Akash Bakhshi | HI-TEK Super Speciality Hospital";
				$data['canonical']="https://www.hitekhospitals.com/";
				$data['keywords']="";
				$data['desc']="";
				$data['menu']="about-us";
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				// $data['departmentList'] = $this->Hitek_Hospital_Model->dbDepartmentReport();
				$this->load->view('dr-akash-bakhshi',$data);
		}
		public function careersForm()
		{
			$this->load->library('upload');
	    if ($this->input->post())
			{
				$this->form_validation->set_rules('name','','required');
				$this->form_validation->set_rules('email','','valid_email');
				$this->form_validation->set_rules('phone','','required');
				if ($this->form_validation->run()==false)
				{
					echo "validation error";
				}
				else
				{
					if (!empty($_FILES['resume']['tmp_name']))
					{
						$config['upload_path'] = './uploads/resume';
						$config['allowed_types'] = 'jpg|jpeg|png|pdf|docx';
						$config['max_size']     = '2000';
						$this->upload->initialize($config);
          	$this->load->library('upload',$config);
						if ($this->upload->do_upload('resume'))
						{
							$uploadData=$this->upload->data();
              $resume=$uploadData['raw_name'].$uploadData['file_ext'];
              $now = date('Y-m-d H:i:s');
							$resumeData = array(
																			'candidate_name' =>$this->input->post('name'),
																			'candidate_email' =>$this->input->post('email'),
																			'candidate_number' =>$this->input->post('phone'),
																			'candidate_message' =>$this->input->post('message'),
																			'candidate_resume' =>$resume,
																			'created_at' =>$now,
																			'ip_address'=>$this->input->ip_address(),
                                      'browser'=>$this->agent->browser(),

																	 );
																	 $query = $this->Hitek_Hospital_Model->dbcareersForm('tbl_careers', $resumeData);
																	 if ($query == TRUE)
																	 {
																		  echo "1";

																	 }
																	 else
																	 {
																		 echo "submit error";
																	 }



				    }
						else
						{
							echo "Please select the correct format for the document";
						}
					}
					else
					{
						echo "Pleases upload resume";
					}
				}
	    }
			else
			{
				echo "not come in post method";
			}
		}
public function findDoctors()
{
	$data['title']="Find Doctor | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="about-us";
	
	$data['depList'] = $this->Hitek_Hospital_Model->dbGetDepartment();
	$data['docterList']=$this->Hitek_Hospital_Model->dbDocterList();
	$this->load->view('find-doctors',$data);

}
public function doctorDetail($url=NULL)
{
	if ($url!=NULL) {
		$cond= array('new_url'=>$url);
		$data['detail'] = $this->Hitek_Hospital_Model->dbDoctorDetail('tbl_doctor', $cond);
		$data['title']="Find Doctor | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="about-us";
		$query = $this->Hitek_Hospital_Model->dbGetDoctorDetail($cond);
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		$data['docDetail']=$query;
		$this->load->view('doctor-detail', $data);
	}

}
public function searchDoctor()
	{
		$data['title']='Find doctors';
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		$data['keywords']='Best Multispeciality Hospital in Ambikapur, Best Trauma care center in Ambikapur, Trauma Care center in Ambikapur, Best hospital in Ambikapur';
		$data['description']='Jeevan Jyoti Hospital is the Best Trauma Center in Ambikapur Chhattisgarh. It had very advanced Emergency Services which are easily available and opens for for 24*7 hours for the people at an affordable cost ';
		$data['canonical']='https://jjhospital.roottechnologies.in/find-doctors';
		$data['menu']='health-packages';
		if ($this->input->post())
		{
			$doctor_name = $this->input->post('doctor_name');
			$department_name = $this->input->post('department_name');
			$unit = $this->input->post('unit');
			if ($doctor_name!=NULL && $department_name!=NULL && $unit!=NULL) {
				$cond = array('doctor_name'=>$doctor_name,'department_id'=>$department_name,'unit'=>$unit);
				$data['docterList'] = $this->Hitek_Hospital_Model->dbSearchDoctor($cond);
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				$this->load->view('find-doctors', $data);
			}
			else if ($doctor_name!=NULL && $department_name!=NULL)
			{
				$cond = array('doctor_name'=>$doctor_name,'department_id'=>$department_name);
				$data['docterList'] = $this->Hitek_Hospital_Model->dbSearchLikeDoctor($doctor_name, $department_name);
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				$this->load->view('find-doctors', $data);
			}
			else if($doctor_name!=NULL)
			{
				$cond = array('doctor_name'=>$doctor_name);
				$data['docterList'] = $this->Hitek_Hospital_Model->dbSearchDoctorLike($doctor_name);
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				$this->load->view('find-doctors', $data);

			}
			else if($department_name!=NULL && $unit!=NULL)
			{
				$cond = array('department_id'=>$department_name,'unit'=>$unit);
				$data['docterList'] = $this->Hitek_Hospital_Model->dbSearchDoctor($cond);
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				$this->load->view('find-doctors', $data);
			}
			else if($department_name!=NULL)
			{
				$cond = array('department_id'=>$department_name);
				$data['docterList'] = $this->Hitek_Hospital_Model->dbSearchDoctor($cond);
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				$this->load->view('find-doctors', $data);
			}
			else if($unit!=NULL)
			{
				$cond = array('unit'=>$unit);
				$data['docterList'] = $this->Hitek_Hospital_Model->dbSearchDoctor($cond);
				$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
				$this->load->view('find-doctors', $data);
			}
			else
			{
			    return redirect('find-doctors');
			}

		}
		else
		{
			$this->load->view('find-doctors', $data);
		}



	}
public function appointment($id)
{
	$data['title']="Find Doctor | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="about-us";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$cond = array('tbl_doctor.id' =>$id);
	$depRecord=$this->Hitek_Hospital_Model->dbAppointment($cond);
	$data['dep_name']=$depRecord->row();
// 	echo "<pre>";

	$this->load->view('appointment', $data);
}
public function appointmentData()
{
	$data['title']="Appointment | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="about-us"
    $this->load->view('appointment-data', $data);
}
public function appointmentForm()
{
	$data['title']="Appointment Form | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="about-us";
	$data['depList'] = $this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('appointment-form', $data);
}

public function gallery()
{
	$data['title']="Our Gallery | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="about-us";
	$data['depList'] = $this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('media', $data);
}

public function neurologydepertment()
{
		$data['title']="Neurology Depertment | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com/neurology";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="department";
		$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
		$this->load->view('neurology',$data);
}
public function cardiologyAndCardiacSurgery()
{
	$data['title']="Cardiology & Cardiac Surgery | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/cardiology-and-cardiac-surgery";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('cardiology-and-cardiac-surgery',$data);
}
public function criticalCareAndEmergencyMedicine()
{
	$data['title']="Critical Care & Emergency Medicine | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/critical-care-and-emergency-medicine";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('critical-care-and-emergency-medicine',$data);
}
public function nephrologyAndDialysis()
{
	$data['title']="Nephrology & Dialysis | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/nephrology-and-dialysis";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('nephrology-and-dialysis',$data);
}
public function consultantGastroAndLaparoscopicSurgeon()
{
	$data['title']="Consultant Gastro & Laparoscopic Surgeon | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/consultant-gastro-and-laparoscopic-surgeon";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('consultant-gastro-and-laparoscopic-surgeon',$data);
}
public function generalAndLaparoscopicSurgery()
{
	$data['title']="General & Laparoscopic Surgery | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/general-and-laparoscopic-surgery";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('general-and-laparoscopic-surgery',$data);
}
public function medicine()
{
	$data['title']="Medicine | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/medicine";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('medicine',$data);
}
public function orthopaedicAndJointReplacement()
{
	$data['title']="Orthopaedic & Joint Replacement | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/orthopaedic-and-joint-replacement";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('orthopaedic-and-joint-replacement',$data);
}
public function pediatric()
{
	$data['title']="Pediatric | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/pediatric";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('pediatric',$data);
}

public function entSurgeon()
{
	$data['title']="ENT Surgeon | HI-TEK Super Speciality Hospital";
	$data['canonical']="https://www.hitekhospitals.com/ent-surgeon";
	$data['keywords']="";
	$data['desc']="";
	$data['menu']="department";
	$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
	$this->load->view('ent-surgeon',$data);
}


}
