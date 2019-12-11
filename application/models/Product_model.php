<?php
class Product_model extends CI_Model {

public function get_data(){
    $query=$this->db->get('product');
    return $query->result();
}

}
?>