<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'/libraries/fpdf.php';
class PDF_TINDAKAN extends FPDF{
function __construct($orientation='P', $unit='mm', $size=array(210,98))
  {
    parent::__construct($orientation,$unit,$size);
}
    
function Header()
  {
      // logo atau gambar, 
      // 'logo.php' di bawah berarti path atau alamat gambar
      // dengan panjang posisi X = 10, Y = 6, dan panjang 30 
      $this->Image("asset/annisaa.png",10,6,52,11);
      // arial bold 15
      $this->SetFont('Arial','',15);
      // membuat cell kosong dengan panjang 80
      $this->Cell(80);
      // judul
      $this->Cell(50,0,'RUMAH SAKIT UMUM AN - NISAA',0,0,'C');
      $this->Ln(5);
      $this->SetFont('Arial','',12);
      $this->Cell(200,0,'Jl. Suparyono Timur No. 1 Bajang Talun Blitar, Telp: 0342-692999, Fax: 0342-693999',0,0,'C');
      $this->Ln();
      // line break dengan tinggi 20
      $this->Ln(1);
  }

  function Footer()
  {
      // mengatur posisi 1,5 cm ke bawah
      $this->SetY(-11);
      // arial italic 8
      $this->SetFont('Arial','I',8);
      // penomoran halaman
      $this->Cell(120,8,'*Saya Menyetujui BPJS Kesehatan menggunakan informasi Medis Pasien jika diperlukan.',0,0,'L');
      $this->Cell(0,8,'______________________   ______________________',0,0,'L');
     
      $this->Ln(3);
      $this->Cell(0,8,'*SEP bukan sebagai bukti penjaminan peserta',0,0,'L');

  } 
}