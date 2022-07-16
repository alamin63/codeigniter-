<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

	public function save_student_info(){
		$data = array();
		$data['student_name']	= $this->input->post('student_name', TRUE);
		$data['student_phone']	= $this->input->post('student_phone', TRUE);
		$data['student_roll']	= $this->input->post('student_roll', TRUE);
		$this->db->insert('students', $data);
	}

	public function manage_student_info(){
		$this->db->select('*');
		$this->db->from('students');
		$query_result = $this->db->get();
		$all_student_info = $query_result->result();
		return $all_student_info;
	}

	public function edit_student_info($student_id){
		$this->db->select('*');
		$this->db->from('students');
		$this->db->where('student_id', $student_id);
		$query_row = $this->db->get();
		$student_id_info = $query_row->row();
		return $student_id_info;
	}

	public function update_student_info(){
		$data = array();
		$student_id = $this->input->post('student_id', TRUE);
		$data['student_name']	= $this->input->post('student_name', TRUE);
		$data['student_phone']	= $this->input->post('student_phone', TRUE);
		$data['student_roll']	= $this->input->post('student_roll', TRUE);
		$this->db->where('student_id', $student_id);
		$this->db->update('students', $data);
	}

	public function delete_student_info($student_id){
		$this->db->where('student_id', $student_id);
		$this->db->delete('students');
	}
}







