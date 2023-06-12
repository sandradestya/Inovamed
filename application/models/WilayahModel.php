<?php defined("BASEPATH") or exit("No direct script access allowed");

class WilayahModel extends CI_Model{
    
    function getProvinsi(){
        $prov=$this->db->query("SELECT * FROM provinsi")->result();
        return $prov;
    }

    function getProvByID($id){
        $prov=$this->db->query("SELECT * FROM provinsi where id_prov='$id'")->row_array();
        return $prov;
    }

    function getKabupaten(){
        $kab=$this->db->query("SELECT * FROM kabupaten")->result();
        return $kab;
    }

    function getKabByID($id){
        $kab=$this->db->query("SELECT * FROM kabupaten where id_kab='$id'")->row_array();
        return $kab;
    }

    function getKabByProvinsi($id){
        $kab=$this->db->query("SELECT * FROM kabupaten where id_prov='$id'")->result_array();
        return $kab;
    }

    function getKecamatan(){
        $kec=$this->db->query("SELECT * FROM kecamatan")->result();
        return $kec;
    }
    function getKecByID($id){
        $kec=$this->db->query("SELECT * FROM kecamatan where id_kec='$id'")->row_array();
        return $kec;
    }
    function getDesaByID($id){
        $desa=$this->db->query("SELECT * FROM desa where id_desa='$id'")->row_array();
        return $desa;
    }

    function getDesa(){
        $desa=$this->db->query("SELECT * FROM desa")->result();
        return $desa;
    }

    function addProvinsi(){
        $data=[
            'id_prov'=>$this->input->post('id_prov'),
            'nama_prov'=>$this->input->post('nama_prov'),
        ];
        return  $this->db->insert('provinsi',$data);
    }

    function updateProvinsi($id){
        $data=[
            'id_prov'=>$this->input->post('id_prov'),
            'nama_prov'=>$this->input->post('nama_prov'),
        ];
        $this->db->where('id_prov',$id);
        return  $this->db->update('provinsi',$data);
    }

    function deleteProvinsi($id){
      
        $this->db->where('id_prov',$id);
        return  $this->db->delete('provinsi');
    }
    function addKabupaten(){
        $data=[
            'id_kab'=>$this->input->post('id_kab'),
            'nama_kab'=>$this->input->post('nama_kab'),
            'id_prov'=>$this->input->post('id_prov'),
        ];
        return  $this->db->insert('kabupaten',$data);
    }

    function updateKabupaten($id){
        $data=[
            'id_kab'=>$this->input->post('id_kab'),
            'nama_kab'=>$this->input->post('nama_kab'),
        ];
        $this->db->where('id_kab',$id);
        return  $this->db->update('kabupaten',$data);
    }

    function deleteKabupaten($id){
      
        $this->db->where('id_kab',$id);
        return  $this->db->delete('kabupaten');
    }
    function addKecamatan(){
        $data=[
            'id_kec'=>$this->input->post('id_kec'),
            'nama_kec'=>$this->input->post('nama_kec'),
            'id_prov'=>$this->input->post('id_prov'),
            'id_kab'=>$this->input->post('id_kab'),
        ];
        return  $this->db->insert('kecamatan',$data);
    }

    function updateKecamatan($id){
        $data=[
            'id_kec'=>$this->input->post('id_kec'),
            'nama_kec'=>$this->input->post('nama_kec'),
            'id_prov'=>$this->input->post('id_prov'),
            'id_kab'=>$this->input->post('id_kab'),
        ];
        $this->db->where('id_kec',$id);
        return  $this->db->update('kecamatan',$data);
    }

    function deleteKecamatan($id){
      
        $this->db->where('id_kec',$id);
        return  $this->db->delete('kecamatan');
    }
    function addDesa(){
        $data=[
            'id_desa'=>$this->input->post('id_desa'),
            'nama_desa'=>$this->input->post('nama_desa'),
            'id_prov'=>$this->input->post('id_prov'),
            'id_kab'=>$this->input->post('id_kab'),
            'id_kec'=>$this->input->post('id_kec'),
        ];
        return  $this->db->insert('desa',$data);
    }

    function updateDesa($id){
        $data=[
            'id_desa'=>$this->input->post('id_desa'),
            'nama_desa'=>$this->input->post('nama_desa'),
            'id_prov'=>$this->input->post('id_prov'),
            'id_kab'=>$this->input->post('id_kab'),
            'id_kec'=>$this->input->post('id_kec'),
        ];
        $this->db->where('id_desa',$id);
        return  $this->db->update('desa',$data);
    }

    function deleteDesa($id){
      
        $this->db->where('id_desa',$id);
        return  $this->db->delete('desa');
    }

    function insertConfirm($id){
        $data=[
            'status'=>$this->input->post('attendance'),
        ];
        $this->db->where('id_tamu',$id);
        return  $this->db->update('tamu_undangan',$data);
    }
}