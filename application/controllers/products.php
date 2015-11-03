<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function new_product()
	{
		$this->load->view('new');
	}

	public function show($id)
	{
		$this->load->model('Product');
		$view_data = $this->Product->fetch_product_by_id($id);
		$this->load->view('show', $view_data);
	}

	public function edit($id)
	{
		$this->load->model('Product');
		$view_data = $this->Product->fetch_product_by_id($id);
		$this->load->view('edit', $view_data);
	}

	public function create_product()
	{
		$product = $this->input->post();
		$this->load->model('Product');
		$success = $this->Product->add_product($product);
		if($success)
		{
			redirect('/');
		} else {
			$this->load->view('new');
		}
	}

	public function update($id)
	{
		$this->load->model('Product');
		$data = $this->input->post();
		$data['id'] = $id;
		$this->Product->update_product($data);
		redirect('/');
	}

	public function destroy_product($id)
	{
		$this->load->model('Product');
		$this->Product->delete_product($id);
		redirect('/');
	}

}
