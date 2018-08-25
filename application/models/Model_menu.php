<?php
/**
*
*/
class Model_menu extends CI_Model
{

	function insert_menu($data='', $id='')
    {
        if ($id)
        {
            $this->db->where('id', $id);
            $this->db->update('master_menu', $data);
        } else {
            $this->db->insert('master_menu', $data);
        }
    }

    function view_menu()
    {
      $this->db->select('m.nama_menu,u.nama,m.icon,m.url,m.active,m.id,m.levelmenu,m.posisi');
  		$this->db->from('master_menu as m');
      $this->db->join('master_user as u','u.id=m.id_admin');
			$this->db->order_by('posisi','asc');
  		return $this->db->get()->result();
    }

		function view_menuuser($admin)
    {
      $this->db->select('m.nama_menu,u.nama,m.icon,m.url,m.active,m.id,m.levelmenu,m.posisi');
  		$this->db->from('master_menu as m');
      $this->db->join('master_user as u','u.id=m.id_admin');
			$this->db->join('admin as ad','ad.jenis_user=m.id_admin');
			$this->db->where('ad.uid',$admin);
			$this->db->order_by('m.posisi','asc');
  		return $this->db->get()->result();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM master_menu  WHERE id='$id'")->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('master_menu');
        //unlink('./assets/uploads/berita/'.$foto);

    }

}

?>
