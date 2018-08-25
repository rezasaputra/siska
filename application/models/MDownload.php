<?php
/**
*
*/
class MDownload extends CI_Model
{

	function insert_download($data='', $id='')
    {
        if ($id)
        {
            $this->db->where('id', $id);
            $this->db->update('download', $data);
        } else {
            $this->db->insert('download', $data);
        }
    }

    function view_download()
    {
			$this->db->select('do.*,kat.category as kat');
  		$this->db->from('download as do');
      $this->db->join('master_category as kat','kat.id=do.kategori');
  		return $this->db->get();
    }

		function view_downloadbycat($cat)
    {
			$this->db->select('do.*,kat.category as kat');
  		$this->db->from('download as do');
      $this->db->join('master_category as kat','kat.id=do.kategori');
			$this->db->where('do.kategori',$cat);
  		return $this->db->get();
    }

    function view_by_id($id='')
    {
        return $this->db->query("SELECT * FROM download WHERE id='$id'")->row();
    }

    function delete($id=null, $file=null)
    {
        $this->db->where('id', $id);
        $this->db->delete('download');
        unlink('./assets/uploads/download/'.$file);

    }

		//form Download
		function insert_form($data='', $id='')
	    {
	        if ($id)
	        {
	            $this->db->where('id', $id);
	            $this->db->update('download_form', $data);
	        } else {
	            $this->db->insert('download_form', $data);
	        }
	    }

	    function view_form()
	    {
				$this->db->select('fo.*,do.judul as jud');
	  		$this->db->from('download_form as fo');
	      $this->db->join('download as do','do.id=fo.id_down');
	  		return $this->db->get()->result();
	    }

	    function viewform_by_id($id='')
	    {
	        return $this->db->query("SELECT * FROM download_form WHERE id='$id'")->row();
	    }

	    function deleteform($id=null, $file=null)
	    {
	        $this->db->where('id', $id);
	        $this->db->delete('download_form');
	        //unlink('./assets/uploads/download/'.$file);

	    }

}

?>
