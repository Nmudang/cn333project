<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Winter_dresses extends CI_Model implements Abstract_dresses {

    function getCharacter() {
        $this->db->order_by('Id', 'AESC');
		$this->db->where('CollectionType', "Winter");
		$this->db->where('Type', "dress");
		$query = $this->db->get('clothes');
		foreach ($query->result() as $row)
		{
			$data['clothes'][] = array( 
				'Id'                => $row->Id,
				'CollectionType'    => $row->CollectionType,
				'Type'              => $row->Type,
				'Name'              => $row->Name,
				'Price'             => $row->Price,
				'Number'            => $row->Number,
				'product_image'     => $row->product_image
			);
		} 
		//var_dump($data); // debug code
		return $data; 
    }
}