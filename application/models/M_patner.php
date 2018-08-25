<?php
/**
*
*/
class M_patner extends CI_Model
{

	function insert_patner($data='', $id='')
    {
        if ($id)
        {
            $this->db->where('id', $id);
            $this->db->update('master_patner', $data);
        } else {
            $this->db->insert('master_patner', $data);
        }
    }

    function view_patner()
    {
			$this->db->select('*');
  		$this->db->from('master_patner');
  		return $this->db->get()->result();
        //return $this->db->query("SELECT b.*,kat.category as kat FROM berita as b INNER JOIN master_category as kat ON kat.id=b.categories ")->result();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM master_patner WHERE id='$id'")->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('master_patner');
        unlink('./assets/uploads/patner/'.$foto);

    }

}

?>
