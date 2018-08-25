<?php
/**
*
*/
class M_category extends CI_Model
{

	function insert_kategori($data='', $id='')
    {
        if ($id)
        {
            $this->db->where('id', $id);
            $this->db->update('master_category', $data);
        } else {
            $this->db->insert('master_category', $data);
        }
    }

		function view_kategori()
    {
      $this->db->select('*');
  		$this->db->from('master_category');
  		return $this->db->get()->result();
    }

    function view_kategori_download()
    {
      $this->db->select('*');
  		$this->db->from('master_category');
			$this->db->where('jenis_category','download');
			$this->db->where('active','1');
  		return $this->db->get()->result();
    }
		function view_kategori_berita()
    {
      $this->db->select('*');
  		$this->db->from('master_category');
			$this->db->where('jenis_category','berita');
  		return $this->db->get()->result();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM master_category  WHERE id='$id'")->row();
    }

    function delete($id=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('master_category');
        //unlink('./assets/uploads/berita/'.$foto);

    }

}

?>
