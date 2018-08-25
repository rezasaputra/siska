<?php
/**
*
*/
class M_komentar extends CI_Model
{

	function insert_jenis($data='', $id='')
    {
        if ($id)
        {
            $this->db->where('id', $id);
            $this->db->update('master_user', $data);
        } else {
            $this->db->insert('master_user', $data);
        }
    }

    function view_jenis()
    {
      $this->db->select('*');
  		$this->db->from('master_user');
  		return $this->db->get()->result();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM master_user  WHERE id='$id'")->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('master_user');
        //unlink('./assets/uploads/berita/'.$foto);

    }

}

?>
