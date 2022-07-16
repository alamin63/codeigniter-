<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {

	
	public function index()
	{
		$this->load->view('pages/dashboard');
	}

	public function add_student(){
		$this->load->view('pages/add_student');
	}

	public function save_student(){
		$this->my_model->save_student_info();
		redirect('manage-student');
	}

	public function manage_student(){
		$data['student_info'] = $this->my_model->manage_student_info();
		$this->load->view('pages/manage_student', $data, TRUE);
		$this->load->view('pages/manage_student', $data);
	}

	public function edit_student($student_id){
		$data['info_by_id'] = $this->my_model->edit_student_info($student_id);
		$this->load->view('pages/edit_student', $data, TRUE);
		$this->load->view('pages/edit_student', $data);
	}

	public function update_student(){
		$this->my_model->update_student_info();
		redirect('manage-student');
	}

	public function delete_student($student_id){
		$this->my_model->delete_student_info($student_id);
		redirect('manage-student');
	}
}










