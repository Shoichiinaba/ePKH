<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('Cari_m');
		}
	function index()
        {
        
        }		
    

    function laprec($no_kk)
    {
        $data = $this->Cari_m->get_cetak($no_kk);
        
        if($data != 'NO_DATA_QUERY'){
            $no_kk = $data[0]['no_kk'];
            $nama = $data[0]['nama'];
            $alamat = $data[0]['alamat'];
            $status_rumah = $data[0]['status_rumah'];
            $pekerjaan = $data[0]['pekerjaan'];
            $jml_tanggungan = $data[0]['jml_tanggungan'];
            $bahan_bakar_m = $data[0]['bahan_bakar_m'];
            $sumber_air = $data[0]['sumber_air'];
            $daya_listrik = $data[0]['daya_listrik'];
            $prediksi_dapat = $data[0]['prediksi_dapat'];
            $prediksi_tdapat = $data[0]['prediksi_tdapat'];
            $keputusan = $data[0]['keputusan'];
            $tgl_pengajuan = $data[0]['tgl_pengajuan'];
            $keterangan = $data[0]['keterangan'];
            $this->load->library('pdf');
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);

        //Kop Surat
        $pdf->Cell(25);
        $pdf->Image(base_url(). "assets/images/semarang_log1.jpg",18,2,'C');
        $pdf->Ln(0);
        $pdf->Cell(0,0,'PEMERINTAH KOTA SEMARANG ',0,0,'C');
        $pdf->Ln(5);
        $pdf->Cell(0,0,'KECAMATAN CANDI SARI ',0,0,'C');
        $pdf->Ln(5);
        $pdf->Cell(0,0,'KELURAHAN KARANGANYAR GUNUNG ',0,0,'C');
        $pdf->Ln();
        $pdf->SetFont('Arial','i',9);
        $pdf->Cell(106,12,'Alamat: Jl. Candi Golf Boulevard No 18',0,0,'C');
        $pdf->Cell(15,12,'Tlp: (024) 8504588',0,0,'R');
        $pdf->Cell(50,12,'Code Pos: 50255',0,0,'R');
        $pdf->Ln(0);
        $pdf->setlinewidth(0.6);
        $pdf->Cell(0, 9, " ", "B");
        $pdf->setlinewidth(0.3);
        $pdf->Ln(0.7);
        $pdf->Cell(0, 9, " ", "B");
        $pdf->Ln(6);

        // konten lampiran
        $pdf->SetFont('Arial','',12);
        $pdf->Ln();
        $pdf->Ln(5);
        $pdf->Image(base_url(). "assets/images/epkh1.png",15,97,'L');
        $pdf->Cell(0, 0, 'Data Pengajuan Bantuan PKH', 0, 0, 'C'); 
        $pdf->Cell(85, 4,'', 0, 0, 'C');
        $pdf->Ln(4);


        //konten isi:
        $pdf->Ln(6);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(35, 4, 'Nama Penerima Bantuan :', 0, 0, 'L');
        $pdf->Ln(9);
        $pdf->Cell(35, 4, 'No KK', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$no_kk, 0, 0, 'L');
        $pdf->Ln(5); 
        $pdf->Cell(35, 4, 'Nama Lengkap', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$nama, 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Alamat', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$alamat, 0, 0, 'L');
        $pdf->Ln(10);
        $pdf->Cell(35, 4, 'Kriteria Penilaian :', 0, 0, 'L');
        $pdf->Ln(10);

        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(245,24,81);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(8,8,8);
        $header = array('Status Rumah','Pekerjaan','Jml. Tanggungan','Bahan Bakar. M','Sumber Air','Daya Listrik');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
       $w = array(32,36,30,30,36,32);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = true;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        
            $pdf->Cell($w[0],6,$status_rumah,'LR',0,'C',$fill);
            $pdf->Cell($w[1],6,$pekerjaan,'LR',0,'C',$fill);
            $pdf->Cell($w[2],6,$jml_tanggungan,'LR',0,'C',$fill);
            $pdf->Cell($w[3],6,$bahan_bakar_m,'LR',0,'C',$fill);
            $pdf->Cell($w[1],6,$sumber_air,'LR',0,'C',$fill);
            $pdf->Cell($w[5],6,$daya_listrik,'LR',0,'C',$fill);

        $pdf->Ln();
        $fill = !$fill;
        $pdf->Cell(array_sum($w),0,'','T');
        // Tabel Hasil Penilaian
        $pdf->Ln(8);
        $pdf->Cell(35, 4, 'Hasil Penilaian :', 0, 0, 'L');
        $pdf->Ln(10);
        // Data
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(87,171,242);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(8,8,8);
        $header = array('Penilaian Dapat','Penilaian Tidak Dapat','Hasil Penentuan');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
       $w = array(40,40,40);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = true;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        
            $pdf->Cell($w[0],6,$prediksi_dapat,'LR',0,'C',$fill);
            $pdf->Cell($w[1],6,$prediksi_tdapat,'LR',0,'C',$fill);
            $pdf->Cell($w[2],6,$keputusan,'LR',0,'C',$fill);
        
        $pdf->Ln();
        $fill = !$fill;
        $pdf->Cell(array_sum($w),0,'','T'); 

         // Tabel Pengajuan
         $pdf->Ln(8);
         $pdf->Cell(35, 4, 'Pengajuan dan Approve :', 0, 0, 'L');
         $pdf->Ln(10);
         // Data
         $pdf->SetFont('Arial','',10);
         $pdf->SetFillColor(240,243,24);
         $pdf->SetTextColor(0);
         $pdf->SetDrawColor(8,8,8);
         $header = array('Tanggal Pengajuan','Tanggal Approve');
         // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
        $w = array(40,40);
         for($i=0;$i<count($header);$i++)
         $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
         $pdf->Ln();
         // Data
         $fill = true;
         $pdf->SetFillColor(224,235,255);
         $pdf->SetTextColor(0);
         $pdf->SetFont('');
         
             $pdf->Cell($w[0],6,$tgl_pengajuan,'LR',0,'C',$fill);
             $pdf->Cell($w[1],6,$tgl_pengajuan,'LR',0,'C',$fill);
         
         $pdf->Ln();
         $fill = !$fill;
         $pdf->Cell(array_sum($w),0,'','T'); 

        //  tabel Keterangan
        $pdf->Ln(8);
        $pdf->Cell(35, 4, 'Informasi Lebih Lanjut :', 0, 0, 'L');
        $pdf->Ln(10);
        // Data
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(245,24,81);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(8,8,8);
        $header = array('Keterangan');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
       $w = array(191);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = true;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        
            $pdf->Cell($w[0],6,$keterangan,'LR',0,'L',$fill);
        
        $pdf->Ln();
        $fill = !$fill;
        $pdf->Cell(array_sum($w),0,'','T');     

        // Pengesahan
        $pdf->Ln(32);
        $pdf->Ln(10);
        $pdf->Cell(185, 4, 'Semarang,'.date(" d F Y"), 0, 0, 'R');
        $pdf->Ln(6);
        $pdf->Cell(173, 4, 'Mengetahui,', 0, 0, 'R');
        $pdf->Ln(6);
       
        $pdf->Cell(186, 4, 'Lurah Karanganyar Gunung', 0, 0, 'R');
        $pdf->Ln(18);
        $pdf->Cell(183, 4,'PETRUS SETYO W.,S.AP', 0, 0, 'R');
        $pdf->setlinewidth(0.3);
       
        $pdf->Line(199,272,148,272);
        $pdf->Ln(5);
    
        $pdf->Cell(146, 4, 'NIP', 0, 0, 'R');
        $pdf->Cell(183, 4,': 19670514 198605 1 001', 0, 0, 'L');

        $pdf->Ln(25);
        $pdf->Output();
        
        }
    }

}

