<?php
/**
* 
*/
class Model_media extends CI_Model
{
	
	function insert_slider($data='', $id='')
    {
        if ($id) 
        {
            $this->db->where('id', $id);
            $this->db->update('slider', $data);
        } else {
            $this->db->insert('slider', $data);
        }
    }

    function view_slider()
    {
        return $this->db->query("SELECT * FROM slider WHERE status = '1'")->result();
    }

    function view_slider_frontend()
    {
        return $this->db->query("SELECT * FROM slider WHERE status = '1' AND tampil = '1' ")->result();
    }

    function view_by_id_slider($id='')
    {
        return $this->db->query("SELECT * FROM slider WHERE id='$id'")->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('slider');
        unlink('./assets/uploads/slider/'.$foto); 
    }

    // CRUD GALERI
    function insert_galeri($data='')
    {
        $this->db->insert('galeri', $data);
    }	

    function view_galeri()
    {
        return $this->db->query("SELECT * FROM galeri WHERE status = '1'")->result();
    }

    function delete_galeri($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
        unlink('./assets/uploads/galeri/'.$foto); 
    }
  	
}

?>