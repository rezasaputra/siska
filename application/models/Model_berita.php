<?php
/**
*
*/
class Model_berita extends CI_Model
{

	function insert_berita($data='', $id='')
    {
        if ($id)
        {
            $this->db->where('id', $id);
            $this->db->update('berita', $data);
        } else {
            $this->db->insert('berita', $data);
        }
    }

		function view_berita()
    {
				$this->db->select(' b.*,kat.category as kat,a.nama as nama');
	  		$this->db->from('berita as b');
				$this->db->join('master_category as kat','kat.id=b.categories');
				$this->db->join('admin as a','a.uid=b.author');
				$this->db->order_by("tgl_awal","asc");

  		return $this->db->get()->result();
        //return $this->db->query("SELECT b.*,kat.category as kat FROM berita as b INNER JOIN master_category as kat ON kat.id=b.categories ")->result();
    }

    function view_berita_front($cat='',$page='')
    {
			if($cat!=0){
				$this->db->select(' b.*,kat.category as kat,a.nama as nama');
	  		$this->db->from('berita as b');
				$this->db->join('master_category as kat','kat.id=b.categories');
				$this->db->join('admin as a','a.uid=b.author');
				$this->db->limit($page*5, (($page-1)*5));
				$this->db->where('kat.id',$cat);
				$this->db->order_by("tgl_awal","asc");
			}else{
				$this->db->select(' b.*,kat.category as kat,a.nama as nama');
	  		$this->db->from('berita as b');
				$this->db->join('master_category as kat','kat.id=b.categories');
				$this->db->join('admin as a','a.uid=b.author');
				$this->db->limit($page*5, (($page-1)*5));
				$this->db->order_by("tgl_awal","asc");
			}

  		return $this->db->get();
        //return $this->db->query("SELECT b.*,kat.category as kat FROM berita as b INNER JOIN master_category as kat ON kat.id=b.categories ")->result();
    }



		function view_berita_pop()
    {
			$this->db->select(' b.*,kat.category as kat,a.nama as nama');
  		$this->db->from('berita as b');
			$this->db->join('master_category as kat','kat.id=b.categories');
			$this->db->join('admin as a','a.uid=b.author');
			$this->db->order_by("b.views","asc");
  		return $this->db->get()->result();
        //return $this->db->query("SELECT b.*,kat.category as kat FROM berita as b INNER JOIN master_category as kat ON kat.id=b.categories ")->result();
    }

	
    function view_by_id($id='')
    {
			$this->db->select(' b.*,kat.category as kat,a.*');
			$this->db->from('berita as b');
			$this->db->join('master_category as kat','kat.id=b.categories');
			$this->db->join('admin as a','a.uid=b.author');
			$this->db->order_by("tgl_awal","asc");
			$this->db->where("b.id",$id);
			return $this->db->get();
    }

		function view_getail($id='')
    {
			$this->db->select(' b.*,kat.category as kat,a.nama as nama');
			$this->db->from('berita as b');
			$this->db->join('master_category as kat','kat.id=b.categories');
			$this->db->join('admin as a','a.uid=b.author');
			$this->db->order_by("tgl_awal","asc");
			$this->db->where("b.id",$id);
			return $this->db->get()->row();
    }

    function delete($id=null, $foto=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita');
        unlink('./assets/uploads/berita/'.$foto);

    }

}

?>
