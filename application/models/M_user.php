<?php
/**
*
*/
class M_user extends CI_Model
{

	function insert_user($data='', $id='')
    {
        if ($id)
        {
            $this->db->where('uid', $id);
            $this->db->update('admin', $data);
        } else {
            $this->db->insert('admin', $data);
        }
    }

    function view_user()
    {
			$this->db->select('*');
  		$this->db->from('admin ');
  		return $this->db->get()->result();
        //return $this->db->query("SELECT b.*,kat.category as kat FROM berita as b INNER JOIN master_category as kat ON kat.id=b.categories ")->result();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM admin WHERE uid='$id'")->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('uid', $id);
        $this->db->delete('admin');
        unlink('./assets/uploads/user/'.$foto);

    }

}

?>
