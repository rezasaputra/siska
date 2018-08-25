<?php
/**
* 
*/
class Model_layanan extends CI_Model
{
	
	function insert_layanan($data='', $id='')
    {
        if ($id) 
        {
            $this->db->where('id', $id);
            $this->db->update('layanan', $data);
        } else {
            $this->db->insert('layanan', $data);
        }
    }

    function view_layanan()
    {
        return $this->db->query("SELECT * FROM layanan")->result();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM layanan WHERE id='$id'")->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('layanan');
        unlink('./assets/uploads/layanan/'.$foto);
        
    }	
  	
}

?>