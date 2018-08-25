<?php
/**
* 
*/
class Model_tentang extends CI_Model
{
	
	function insert($data='', $id='')
    {
        if ($id) 
        {
            $this->db->where('id', $id);
            $this->db->update('tentang', $data);
        } else {
            $this->db->insert('tentang', $data);
        }
    }

    function view_data()
    {
        return $this->db->query("SELECT * FROM tentang")->result();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM tentang WHERE id='$id'")->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('tentang');
        unlink('./assets/uploads/tentang/'.$foto);
        
    }	
  	
}

?>