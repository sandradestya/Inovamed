<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('wilayahModel');
        $this->load->library('PDF');
        $this->load->library('datatables');
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Jakarta");

       
        
    }
	public function wilayah()
	{
        $data['pageName']="Master Data Wilayah";
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
        $data['dataKabupaten']= $this->wilayahModel->getKabupaten();
        $data['dataKecamatan']= $this->wilayahModel->getKecamatan();
        $data['dataDesa']= $this->wilayahModel->getDesa();
		$this->template->load('template','master/masterwilayah', $data);
	}

	public function addProvinsi()
	{
        if (isset($_POST["tambah_provinsi"])) {
            $this->wilayahModel->addProvinsi();
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Provinsi</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['pageName']="Tambah Data Provinsi";
		$this->template->load('template','master/addprovinsi', $data);
	}
	
	public function updateProvinsi($id)
	{
        if (isset($_POST["update_provinsi"])) {
            $this->wilayahModel->updateProvinsi($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Provinsi</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['prov']=$this->wilayahModel->getProvById($id);
        $data['pageName']="Update Data Provinsi";
		$this->template->load('template','master/updateprovinsi', $data);
	}

	public function deleteProvinsi($id)
	{
       
            $this->wilayahModel->deleteProvinsi($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Provinsi</h4>
            Berhasil dihapus.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
    }
	public function addKabupaten()
	{
        if (isset($_POST["tambah_kabupaten"])) {
            $this->wilayahModel->addKabupaten();
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Kabupaten</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['pageName']="Tambah Data Kabupaten";
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
		$this->template->load('template','master/addKabupaten', $data);
	}
	
	public function updateKabupaten($id)
	{
        if (isset($_POST["update_kabupaten"])) {
            $this->wilayahModel->updateKabupaten($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Kabupaten</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['kab']=$this->wilayahModel->getKabById($id);
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
        $data['pageName']="Update Data Kabupaten";
		$this->template->load('template','master/updateKabupaten', $data);
	}

	public function deleteKabupaten($id)
	{
       
            $this->wilayahModel->deleteKabupaten($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Kabupaten</h4>
            Berhasil dihapus.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
    }


	public function addKecamatan()
	{
        if (isset($_POST["tambah_kecamatan"])) {
            $this->wilayahModel->addKecamatan();
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Kecamatan</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['pageName']="Tambah Data Kecamatan";
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
        $data['dataKabupaten']= $this->wilayahModel->getKabupaten();
		$this->template->load('template','master/addkecamatan', $data);
	}
	
	

	public function updateKecamatan($id)
	{
        if (isset($_POST["update_kecamatan"])) {
            $this->wilayahModel->updateKecamatan($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Kecamatan</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['kec']=$this->wilayahModel->getKecById($id);
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
        $data['dataKabupaten']= $this->wilayahModel->getKabupaten();
        $data['pageName']="Update Data Kecamatan";
		$this->template->load('template','master/updateKecamatan', $data);
	}

	public function deleteKecamatan($id)
	{
       
            $this->wilayahModel->deleteKecamatan($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Kecamatan</h4>
            Berhasil dihapus.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
    }
	public function addDesa()
	{
        if (isset($_POST["tambah_desa"])) {
            $this->wilayahModel->addDesa();
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Desa</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['pageName']="Tambah Data Desa";
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
        $data['dataKabupaten']= $this->wilayahModel->getKabupaten();
        $data['dataKecamatan']= $this->wilayahModel->getKecamatan();
		$this->template->load('template','master/addDesa', $data);
	}
	
	

	public function updateDesa($id)
	{
        if (isset($_POST["update_desa"])) {
            $this->wilayahModel->updateDesa($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Desa</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['desa']=$this->wilayahModel->getDesaById($id);
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
        $data['dataKabupaten']= $this->wilayahModel->getKabupaten();
        $data['dataKecamatan']= $this->wilayahModel->getKecamatan();
        $data['pageName']="Update Data Desa";
		$this->template->load('template','master/updateDesa', $data);
	}

	public function deleteDesa($id)
	{
       
            $this->wilayahModel->deleteDesa($id);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data Desa</h4>
            Berhasil dihapus.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
    }

    public function user()
	{
        $data['pageName']="Master Data User";
        $data['dataProvinsi']= $this->wilayahModel->getProvinsi();
        $data['dataKabupaten']= $this->wilayahModel->getKabupaten();
        $data['dataKecamatan']= $this->wilayahModel->getKecamatan();
        $data['dataDesa']= $this->wilayahModel->getDesa();
		$this->template->load('template','master/masteruser', $data);
	}

    public function addUser()
	{
        if (isset($_POST["tambah_user"])) {
            $this->wilayahModel->addUser();
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Data User</h4>
            Berhasil diperbarui.
          </div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['pageName']="Tambah Data User";
		$this->template->load('template','master/adduser', $data);
	}


	
}
