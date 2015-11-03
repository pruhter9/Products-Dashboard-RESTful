<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function fetch_all_products()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}

	public function fetch_product_by_id($id)
	{
		return $this->db->query("SELECT * FROM products WHERE id = ?", $id)->row_array();
	}

	public function update_product($product)
	{
		$query = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";
		$values = array($product['name'], $product['desc'], $product['price'], $product['id']);
		$this->db->query($query, $values);
	}

	public function add_product($product)
	{

		if(empty($product['name']))
		{
			$error['name'] = "A product requires a name in order to be added to the database.";
			$this->session->set_flashdata('error', $error);
		}

		if(empty($product['desc']))
		{
			$error['desc'] = "A product requires a description in order to be added to the database.";
			$this->session->set_flashdata('error', $error);
		}

		if(empty($product['price']))
		{
			$error['price'] = "A product requires a price in order to be added to the database.";
			$this->session->set_flashdata('error', $error);
		}

		if(empty($this->session->flashdata('error')))
		{
			$query = "INSERT INTO products (name, description, price) VALUES (?,?,?)";
			$values = array($product['name'], $product['desc'], $product['price']);
			return $this->db->query($query, $values);
		}

	}

	public function delete_product($id)
	{
		$this->db->query("DELETE FROM products WHERE id = ?", $id);
	}

}