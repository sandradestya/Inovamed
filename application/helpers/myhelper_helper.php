<?php

function cek_akses(){
    $ci = & get_instance();
    $segmen2= $ci->uri->segment(2);
    $segmen1= $ci->uri->segment(1);
    
    $manajemen=$ci->session->userdata('MANEJEMEN');
    $status=$ci->session->userdata('STATUS');
    $id=$ci->session->userdata('ID_AKUN');
    $akun=$ci->db->query("SELECT * FROM akun WHERE ID_AKUN='$id'")->row_array();
    
    $cek = $ci->db->query("SELECT * FROM `tabel_menu` WHERE manjemen='$manajemen' AND segmen2='$segmen2' AND segmen1='$segmen1' AND main=0")->row_array();
    
    
    if(!empty($manajemen)){   
    if(empty($cek)){
        redirect('error');
    }elseif($status=="NON AKTIF"){
        $ci->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>Akun anda belum Aktif</h4>
                Segera konfirmasi akun ke personalia untuk mengaktifkannya!!.
              </div>');
        redirect('login');
    }elseif($akun['ONLINE']==""){
        redirect('login/log');
    }
   
    
    
    }else{
    redirect('login');
    }
}