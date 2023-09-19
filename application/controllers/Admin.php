<?php

class Admin extends CI_Controller
{

	function __construct()
	{
	    parent::__construct();
        $this->load->model("Hitek_Hospital_Model");
        if (
				!isset(
				$this->session->login["UserType"]) ||
				$this->session->login["UserType"] != "admin")
				{
        $this->session->set_flashdata("error", "No direct  access allowed");
        return redirect("admin-login");
        }
        $this->load->helper('date');
				$this->load->helper('hitek_hospital_helper');
				date_default_timezone_set('Asia/Kolkata');



	}
	public function index()
	{

		$data['page_name']='admin-dashbord';
		$data['user_id']=$this->session->login["id"];
		$data['user_name']=$this->session->login["UserName"];
		$data['salt']=generateSalt(7);
		$currentDate = date('Y-m-d');
		$data['dep']=$this->db->get('tbl_department')->num_rows();
		$data['apo']=$this->db->get('tbl_apointment')->num_rows();
		$data['doc']=$this->db->get('tbl_doctor')->num_rows();
		$data['job']=$this->db->get('tbl_careers')->num_rows();
		$data['upc']=$this->db->where('appointment_date >=', $currentDate)->get('tbl_apointment')->num_rows();
		$this->session->salt=$data['salt'];
		$this->load->view('admin/index', $data);
	}
	public function logout()
	{

        $this->session->sess_destroy();
        return redirect('admin-login');
	}
	public function department($id=NULL)
	{
		
		$data['page_name']='department';
		$data['user_name']=$this->session->login["UserName"];
        $data['user_id']=$this->session->login["id"];
		$data['salt']=generateSalt(7);
		$this->session->salt=$data['salt'];
			$data['edit']="";
			$this->db->order_by('id','DESC');
			$data['depList']=$this->Hitek_Hospital_Model->dbGetDepartment();
			$this->load->view('admin/index', $data);
		

	}
	public function addDepartment($id=NULL)
	{

		$data['page_name']='add-department';
		$data['user_name']=$this->session->login["UserName"];
        $data['user_id']=$this->session->login["id"];
		$data['salt']=generateSalt(7);
		$this->session->salt=$data['salt'];
		if ($id!=NULL) {
			$data['edit']="edit";
			$cond= array('id'=>$id);
			$data['depDetail']=$this->Hitek_Hospital_Model->dbDepartmentDet('tbl_department', $cond);
			$this->load->view('admin/index', $data);
		}
		else
		{
			$data['edit']="";
			$this->load->view('admin/index', $data);
		}

	

	}
	public function getDepartment(){
		$id = $this->input->post('id');
		$cond= array('id'=>$id);
		$query = $this->Hitek_Hospital_Model->dbDepartmentDet('tbl_department', $cond);
		 echo  $query->department_name;
	}

	public function submitDepartment()
	{

		if ($this->input->post())
		{
		   $this->form_validation->set_rules('department', 'derpartment name', 'required');
		   if ($this->form_validation->run()==false)
		   {
			 echo "Please Enter Department Name";
		   }
		   else
		   {
		     $departmentData = array(
													   'department_name'=>$this->input->post('department'),
													   'ip_address'=>$this->input->ip_address(),
													   'browser'=>$this->agent->browser(),
													   'status'=>0,
													   'create_at'=>date('Y-m-d H:i:s')
									);
			 $query = $this->Hitek_Hospital_Model->dbSbsubmitDepartment('tbl_department', $departmentData);
			 if ($query == TRUE)
			 {
			  echo "1";
			 }
			 else
			 {
				echo "Oops! The department's submit failed";
			 }
		   }
		}
		else
		{
			echo "Please send a right request";
		}
	}
	public function editDep()
	{		$id = $this->input->post('id');
		   if ($id!=NULL) {
			if ($this->input->post())
			{
			   $this->form_validation->set_rules('department', 'derpartment name', 'required');
			   if ($this->form_validation->run()==false)
			   {
				 echo "Please Enter Department Name";
			   }
			   else
			   {
				$cond = array('id'=>$id);
				 $departmentData = array(
														   'department_name'=>$this->input->post('department'),
														   'ip_address'=>$this->input->ip_address(),
														   'browser'=>$this->agent->browser(),
														   'status'=>0,
														   'modified_at'=>date('Y-m-d H:i:s')

										);
				 $query = $this->Hitek_Hospital_Model->dbUpdateDepartment('tbl_department', $departmentData, $cond);
				 if ($query == TRUE)
				 {
					 echo "1";
					 // $this->session->set_flashdata('success', 'updated');
				    // return redirect('department');
				 }
				 else
				 {
					echo "Oops! The department's submit failed";
				 }
			   }
			}
			else
			{
				echo "Please send a right request";
			}

		}
		else
		{
			echo "Please send a right request";
		}
	}
	 
	public function doctor($id=NULL)
	{
		$data['page_name']='doctor';
		$data['user_name']=$this->session->login["UserName"];
        $data['user_id']=$this->session->login["id"];
		$data['salt']=generateSalt(7);
		$this->session->salt=$data['salt'];
		$this->db->order_by('id','DESC');
		$data['depList'] = $this->Hitek_Hospital_Model->dbGetDepartment();
		$this->db->order_by('id','DESC');
		$data['docList']=$this->Hitek_Hospital_Model->dbDocterList();
			$data['edit']="";
		$this->load->view('admin/index', $data);
		// if ($id!=NULL)
		// {
		// 	$data['edit']="edit";
		// 	$cond = array('tbl_doctor.id'=>$id);
		// 	$data['docDetail']=$this->Hitek_Hospital_Model->dbGetDoctorDetail($cond);
		// 	$data['consultancy']=$this->db->where(['id'=> $id])->get('tbl_doctor')->row();
		// }
		// else
		// {
			// 	$data['edit']="";
		// 	$this->load->view('admin/index', $data);
		// }

	}

	public function doctorForm($id=NULL)
	{
		$data['page_name']='add-doctor';
		$data['user_name']=$this->session->login["UserName"];
        $data['user_id']=$this->session->login["id"];
		$data['salt']=generateSalt(7);
		$this->session->salt=$data['salt'];
		$data['depList'] = $this->Hitek_Hospital_Model->dbGetDepartment();
		$data['docList']=$this->Hitek_Hospital_Model->dbDocterList();
		if ($id!=NULL)
		{
			$data['edit']="edit";
			$cond = array('tbl_doctor.id'=>$id);
			$data['docDetail']=$this->Hitek_Hospital_Model->dbGetDoctorDetail($cond);
			$data['consultancy']=$this->db->where(['id'=> $id])->get('tbl_doctor')->row();
			$this->load->view('admin/index', $data);
		}
		else
		{
			$data['edit']="";
			$this->load->view('admin/index', $data);
		}

	}
	public function submitDoctor()
	{	 

		
		if ($this->input->post())
		{
			
			$this->form_validation->set_rules('doctor_name', 'doctor name', 'required');
			$this->form_validation->set_rules('department_name', 'department name', 'required');
			$this->form_validation->set_rules('specialisation', 'specialisation', 'required');
			$this->form_validation->set_rules('qualification', 'qualification', 'required');
			$this->form_validation->set_rules('unit', 'unit', 'required');
			$this->form_validation->set_rules('role', 'role', 'required');
			$this->form_validation->set_rules('consultancy', 'consultancy', 'required');
			if ($this->form_validation->run() == false)
			{
				
				echo "Please enter the form details correctly";
			}
			else
			{ 
				if (!empty($_FILES['doctor_photo']['tmp_name']))
				{
					$config['upload_path']          = './uploads/doctors/';
					$config['max_size']             = '250';
					$config['max_width']            = 300;
					$config['max_height']           = 400;
					$config['allowed_types']='jpg|png|jpeg';
					$this->upload->initialize($config);
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					$this->load->library('upload',$config);
					

							if($this->upload->do_upload('doctor_photo'))
								{
						

										$uploadData=$this->upload->data();
										$photo=$uploadData['raw_name'].$uploadData['file_ext'];

										$cond = array('doctor_name'=>$this->input->post('doctor_name'));
										$list_query = $this->Hitek_Hospital_Model->findDoctorName('tbl_doctor', $cond);
										if ($list_query->num_rows()==1) {
											$removeSpace =$this->input->post('doctor_name')."-".$this->input->post('specialisation');
											$new_doc_name = str_replace(' ','-', $removeSpace);
											$education = json_encode($this->input->post('educational_background'));
											$key_skills = json_encode($this->input->post('key_skills'));
											$award = json_encode($this->input->post('award'));
											$publications = json_encode($this->input->post('publications'));
											$doctorData = array
											(
												'doctor_name'=>$this->input->post('doctor_name'),
												'department_id'=>$this->input->post('department_name'),
												'specialisation'=>$this->input->post('specialisation'),
												'qualification'=>$this->input->post('qualification'),
												'consultancy'=>$this->input->post('consultancy'),
												'educational_background'=>$education,
												'key_skills'=>$key_skills,
												'award'=>$award,
												'publications'=>$publications,
												'unit'=>$this->input->post('unit'),
												'role'=>$this->input->post('role'),
												'doctor_photo'=>$photo,
												'doctor_detial'=>$this->input->post('doctor_detial'),
												'new_url'=>$new_doc_name,
												'ip_address'=>$this->input->ip_address(),
												'status'=>0,
												'browser'=>$this->agent->browser(),
												'create_at'=>date('Y-m-d H:i:s')
											);
											$query = $this->Hitek_Hospital_Model->dbSubmitDoctor('tbl_doctor', $doctorData);
											if ($query == TRUE)
											{
												// print_r($doctorData);
												// die();
												echo "1";
											}
											else
											{
												echo "Oops! The form submission has failed";
											}

										}
										else
										{
											$removeSpace =$this->input->post('doctor_name');
											$new_doc_name = str_replace(' ','-', $removeSpace);
											$education = json_encode($this->input->post('educational_background'));
											$key_skills = json_encode($this->input->post('key_skills'));
											$award = json_encode($this->input->post('award'));
											$publications = json_encode($this->input->post('publications'));
											$doctorData = array
											(
												'doctor_name'=>$this->input->post('doctor_name'),
												'department_id'=>$this->input->post('department_name'),
												'specialisation'=>$this->input->post('specialisation'),
												'qualification'=>$this->input->post('qualification'),
												'consultancy'=>$this->input->post('consultancy'),
												'educational_background'=>$education,
												'key_skills'=>$key_skills,
												'award'=>$award,
												'publications'=>$publications,
												'unit'=>$this->input->post('unit'),
												'doctor_photo'=>$photo,
												'role'=>$this->input->post('role'),
												'doctor_detial'=>$this->input->post('doctor_detial'),
												'new_url'=>$new_doc_name,
												'ip_address'=>$this->input->ip_address(),
												'status'=>0,
												'browser'=>$this->agent->browser(),
												'create_at'=>date('Y-m-d H:i:s')
											);
										$query = $this->Hitek_Hospital_Model->dbSubmitDoctor('tbl_doctor', $doctorData);
										if ($query == TRUE)
										{
											// print_r($doctorData);
											// 	die();
											echo "1";
										}
										else
										{
											echo "Oops! The form submission has failed";
										}

									}

								}
								else{
									echo "please upload valid photo (*Note: With proper height, width and size)";
								}

				}
				else {
					echo "Ooop! Please upload photo";
				}

			}
		}
		else
		{
			echo "Please send the right request";
		}
	}
	public function deleteDoctor($id = NULL)
	{
	if ($id!=NULL)
	{
		$cond = array('id'=>$id);
		$query = $this->Hitek_Hospital_Model->dbDeleteDoctor('tbl_doctor', $cond);
		if ($query==TRUE)
		{
			$this->session->set_flashdata('success', 'The doctor has been deleted successfully');
			return redirect('doctor');
		}
		else
		{
			$this->session->set_flashdata('error', 'Oppps! An attempt to delete the doctor failed');
			return redirect('doctor');
		}

	}
	else {
		echo "Please try again";
	}
	}
	public function editSubmitDoctor($id)
	{

	if ($this->input->post())
	{
		
		$cond = array('id'=>$id);
		$this->form_validation->set_rules('doctor_name', 'doctor name', 'required');
		$this->form_validation->set_rules('department_name', 'department name', 'required');
		$this->form_validation->set_rules('specialisation', 'specialisation', 'required');
		$this->form_validation->set_rules('qualification', 'qualification', 'required');
		$this->form_validation->set_rules('unit', 'unit', 'required');
		$this->form_validation->set_rules('consultancy', 'consultancy', 'required');
		if ($this->form_validation->run() == false)
		{
			echo "Please enter the form details correctly";
		}
		else
		{
			if (!empty($_FILES['doctor_photo']['tmp_name']))
			{
				$config['upload_path']          = './uploads/doctors/';
				$config['max_size']             = '250';
				$config['max_width']            = 300;
				$config['max_height']           = 400;
				$config['allowed_types']='jpg|png|jpeg';
				$this->upload->initialize($config);
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				$this->load->library('upload',$config);

						if($this->upload->do_upload('doctor_photo'))
							{
								$uploadData=$this->upload->data();
								$photo=$uploadData['raw_name'].$uploadData['file_ext'];
								$removeSpace =$this->input->post('doctor_name');
								$new_doc_name = str_replace(' ','-', $removeSpace);
								            $education = json_encode($this->input->post('educational_background'));
											$key_skills = json_encode($this->input->post('key_skills'));
											$award = json_encode($this->input->post('award'));
											$publications = json_encode($this->input->post('publications'));
											$doctorData = array
											(
												'doctor_name'=>$this->input->post('doctor_name'),
												'department_id'=>$this->input->post('department_name'),
												'specialisation'=>$this->input->post('specialisation'),
												'qualification'=>$this->input->post('qualification'),
												'consultancy'=>$this->input->post('consultancy'),
												'educational_background'=>$education,
												'key_skills'=>$key_skills,
												'award'=>$award,
												'publications'=>$publications,
												'unit'=>$this->input->post('unit'),
												'doctor_photo'=>$photo,
												'doctor_detial'=>$this->input->post('doctor_detial'),
												'new_url'=>$new_doc_name,
												'ip_address'=>$this->input->ip_address(),
												'status'=>0,
												'browser'=>$this->agent->browser(),
												'create_at'=>date('Y-m-d H:i:s')
											);
							$query = $this->Hitek_Hospital_Model->dbeditSubmitDoctor('tbl_doctor', $doctorData, $cond);
							if ($query == TRUE)
							{
								$this->session->set_flashdata('updated', 'updated');
								return redirect('doctor');
							}
							else
							{
								echo "Oops! The form submission has failed";
							}
				}
			}
			else {
				echo "Ooop! Please upload photo";
			}

		}
	}
	else
	{
		echo "Please send the right request";
	}

	}
	public function appointmentsReport()
	{
		$data['page_name']='appointments-report';
		$data['user_name']=$this->session->login["UserName"];
        $data['user_id']=$this->session->login["id"];
		$data['salt']=generateSalt(7);
		$this->session->salt=$data['salt'];
		$data['appointmentReport']=$this->Hitek_Hospital_Model->dbAppointmentReport();
		$this->load->view('admin/index', $data);
	}
	public function appointmentsUpcoming()
	{
		$data['page_name']='appointments-upcoming';
		$data['user_name']=$this->session->login["UserName"];
        $data['user_id']=$this->session->login["id"];
		$data['salt']=generateSalt(7);
		$this->session->salt=$data['salt'];
		$data['appointmentReport']=$this->Hitek_Hospital_Model->dbAppointmentUpcoming();
		$this->load->view('admin/index', $data);
	}
	public function appointmentsSearch()
	{
		$data['page_name']='appointments-search';
		$data['user_name']=$this->session->login["UserName"];
        $data['user_id']=$this->session->login["id"];
		$data['salt']=generateSalt(7);
		$this->session->salt=$data['salt'];
		$s_date =$this->input->post('start_date');
		$e_date =$this->input->post('end_date');
		if (($s_date && $e_date) == '') {
			$data['appointmentReport']='';
			$this->load->view('admin/index', $data);
		}else{
			$data['appointmentReport']=$this->Hitek_Hospital_Model->search($s_date,$e_date);	
			$this->load->view('admin/index', $data);
		}
	}
	public function deleteDepartment($id)
	{
		$cond = array('id'=>$id);
		$query = $this->Hitek_Hospital_Model->dbdeleteDepartment('tbl_department', $cond);
					if ($query == TRUE) {
				$this->session->set_flashdata('success', 'deleted');
				return redirect('department');
			}
			else
			{
				echo "error";
			}

		}
	public function deleteAppointment($id)
	{
		$cond = array('id'=>$id);
		$query = $this->Hitek_Hospital_Model->dbdeleteAppointment('tbl_apointment', $cond);
					if ($query == TRUE) {
				$this->session->set_flashdata('success', 'deleted');
				return redirect('appointments-report');
			}
			else
			{
				echo "error";
			}

		}

	public function deleteAppointmentUp($id)
	{
		$cond = array('id'=>$id);
		$query = $this->Hitek_Hospital_Model->dbdeleteAppointment('tbl_apointment', $cond);
					if ($query == TRUE) {
				$this->session->set_flashdata('success', 'deleted');
				return redirect('appointments-upcoming');
			}
			else
			{
				echo "error";
			}

		}
	public function deleteSearch()
	{	
		$id= $this->input->post('id');
		$data['appointmentReport']=$this->Hitek_Hospital_Model->search($s_date,$e_date);
		$cond = array('id'=>$id);
		$query = $this->Hitek_Hospital_Model->dbdeleteAppointment('tbl_apointment', $cond);
					if ($query == TRUE) {
				$this->session->set_flashdata('success', 'deleted');
				// $this->load->view('admin/index', $data);
				return redirect('appointments-search');
				
			}
			else
			{
				echo "error";
			}

		}
	public function changePassword($id)
						{
						  $cond=array('id'=>htmlspecialchars($id));
							if ($this->input->post())
							{
								$this->form_validation->set_rules('previous_password' , 'previous password', 'required');
								$this->form_validation->set_rules('new_password', 'new password', 'required');
								$this->form_validation->set_rules('confirm_password', 'confirm password', 'required');
								if ($this->form_validation->run()==false)
								{

									echo "Please enter correct details";

								}
								else
								{

	 		 				   	$record=$this->Hitek_Hospital_Model->getUserAuthentication('admin_tbl', $cond);
									if ($record->num_rows()==0)
									{

										echo "Please enter correct details";
									}
									else
									{
										$details=$record->row();
										$dbpssword = $details->user_password;
										$previous_password = hash('SHA512', $this->input->post('previous_password'));

										if ($dbpssword == $previous_password) {
											$new_password =hash('SHA512', $this->input->post('new_password'));
											$confirm_password = hash('SHA512', $this->input->post('confirm_password'));
										  if ($new_password!=$confirm_password)
											{
										  	echo "Try again! The conform password does not match";
										  }
											else
											{
												$new_password =hash('SHA512', $this->input->post('new_password'));
												$password = array('user_password' => $new_password , );
												$rec=$this->Hitek_Hospital_Model->dbchangePassword('admin_tbl',$password, $cond);
												if ($rec==true)
												{
													echo "1";
												}
												else
												{

													echo "Attempt to password change is failed";
												}

											}
										}
										else
										{
											echo "Please enter the correct old password";
										}

									}


								}

							}
							else
							{
								echo "error";
							}

			}
			public function appointment($id)
			{
				echo $id;
			}
			public function jobApplication()
			{
				$data['page_name']='job-application';
				$data['user_name']=$this->session->login["UserName"];
				$data['user_id']=$this->session->login["id"];
				$data['salt']=generateSalt(7);
				$this->session->salt=$data['salt'];
				$data['application']=$this->Hitek_Hospital_Model->dbJobApplication();
				$this->load->view('admin/index', $data);
			}
			public function deleteapplication($id)
			{
				$cond = array('id'=>$id);
				$query = $this->Hitek_Hospital_Model->dbDeleteapplication('tbl_careers' , $cond);
				if ($query==TRUE) 
				{
					$this->session->set_flashdata('success', 'The application has been deleted successfully');
					return redirect('job-application');
				}
				else
				{
					$this->session->set_flashdata('error', 'Oppps! An attempt to delete the application failed');
		          	return redirect('doctor');

				}
			}


}
?>
