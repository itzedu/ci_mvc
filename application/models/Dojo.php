<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dojo extends CI_Model {
	public function get_all_dojos() {
		return $this->db->query("SELECT * FROM dojos")->result_array();
	}

	public function get_one_dojo($id) {
		return $this->db->query("SELECT * FROM dojos WHERE id = ?", array($id))->row_array();
	}

	public function add_dojo($dojo) {
		$query = "INSERT INTO dojos (name, address, created_at, updated_at) VALUES (?,?, NOW(), NOW())";
		$values = [$dojo["name"], $dojo["address"]];
		$ret = $this->db->query($query, $dojo);
        return $ret;
	}
}