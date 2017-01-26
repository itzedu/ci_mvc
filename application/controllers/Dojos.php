<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dojos extends CI_Controller {
	public function index() {
		$this->load->view("dojos/all_dojos");
	}

	public function get_all() {
		$this->load->model("Dojo");
		$dojos = $this->Dojo->get_all_dojos();
		echo json_encode($dojos);
	}

	public function add() {
		$this->load->model("Dojo");
		$is_success = $this->Dojo->add_dojo($this->input->post());
		echo json_encode($is_success);
	}
}