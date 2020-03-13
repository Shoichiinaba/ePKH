<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('M_bantuan');
		}
		function index()
	{
    
	}		
    function lapall()
    {
     if ($this->session->userdata('Auth') == false){


        
        
        $this->load->library('pdf');
        $pdf = new FPDF('L','mm','legal');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);

        //Kop Surat
        $pdf->Cell(25);
        $pdf->Image(base_url(). "assets/img/semarang_log1.jpg",18,2,'C');
        $pdf->Ln(0);
        $pdf->Cell(0,0,'PEMERINTAH KOTA SEMARANG ',0,0,'C');
        $pdf->Ln(5);
        $pdf->Cell(0,0,'KECAMATAN CANDI SARI ',0,0,'C');
        $pdf->Ln(5);
        $pdf->Cell(0,0,'KELURAHAN KARANGANYAR GUNUNG ',0,0,'C');
        $pdf->Ln();
        $pdf->SetFont('Arial','i',9);
        $pdf->Cell(106,12,'Alamat: Jl. Candi Golf Boulevard No 18',0,0,'C');
        $pdf->Cell(90,12,'Tlp: (024) 8504588',0,0,'R');
        $pdf->Cell(100,12,'Code Pos: 50255',0,0,'R');
        $pdf->Ln(0);
        $pdf->setlinewidth(0.6);
        $pdf->Cell(0, 9, " ", "B");
        $pdf->setlinewidth(0.3);
        $pdf->Ln(0.7);
        $pdf->Cell(0, 9, " ", "B");
        $pdf->Ln(6);

        // konten lampiran
        $pdf->SetFont('Arial','B',12);
        $pdf->Ln();
        $pdf->Ln(5);
        $pdf->Cell(0, 0, 'Laporan Data Pengajuan Bantuan PKH ', 0, 0, 'C'); 
        $pdf->Cell(85, 4,'', 0, 0, 'C');
        $pdf->Ln(4);
        // Tabel Konten
        $pdf->Ln(6);
        $pdf->SetFont('Arial','',9);
        $pdf->SetFillColor(236,63,168);
        $pdf->Image(base_url(). "assets/img/epkh1.png",85,90,'L');
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(8,8,8);
        $header = array('No KK','Nama','Alamat','Status Rumah','Pekerjaan','Jml. Tanggungan','Bagan Bakar','Sumber Air','Daya Listrik','Pred .Dapat','Pred. T.Dapat','Keputusan','Tahun');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
       $w = array(28,33,40,27,30,26,22,30,20,20,22,23,20,20);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = true;
        $pdf->SetFont('Arial','',8);
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        foreach ($this->M_bantuan->cetak() as $row):
            $pdf->Cell($w[0],6,$row->no_kk,'LR',0,'C',$fill);
            $pdf->Cell($w[1],6,$row->nama,'LR',0,'L',$fill);
            $pdf->Cell($w[2],6,$row->alamat,'LR',0,'L',$fill);
            $pdf->Cell($w[3],6,$row->status_rumah,'LR',0,'L',$fill);
            $pdf->Cell($w[4],6,$row->pekerjaan,'LR',0,'C',$fill); 
            $pdf->Cell($w[5],6,$row->jml_tanggungan,'LR',0,'C',$fill);
            $pdf->Cell($w[6],6,$row->bahan_bakar_m,'LR',0,'C',$fill);
            $pdf->Cell($w[4],6,$row->sumber_air,'LR',0,'C',$fill);
            $pdf->Cell($w[9],6,$row->daya_listrik,'LR',0,'C',$fill);
            $pdf->Cell($w[13],6,$row->prediksi_dapat,'LR',0,'C',$fill);
            $pdf->Cell($w[10],6,$row->prediksi_tdapat,'LR',0,'C',$fill);
            $pdf->Cell($w[11],6,$row->keputusan,'LR',0,'C',$fill);
            $pdf->Cell($w[8],6,$row->tahun,'LR',0,'C',$fill);
        

            $pdf->Ln();
            $fill = !$fill;
            endforeach;
            $pdf->Cell(array_sum($w),0,'','T');

            $pdf->Output();
        
        
        }
    }

    function laprec($no_kk)
    {
        $data = $this->M_bantuan->get_cetak($no_kk);
        
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
            $tahun = $data[0]['tahun'];
            $this->load->library('pdf');
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);

        //Kop Surat
        $pdf->Cell(25);
        $pdf->Image(base_url(). "assets/img/semarang_log1.jpg",18,2,'C');
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
        $pdf->Image(base_url(). "assets/img/epkh1.png",15,97,'L');
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
        $pdf->SetFillColor(54,137,239);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(8,8,8);
        $header = array('Status Rumah','Pekerjaan','Jml. Tanggungan','Bahan Bakar.','Sumber Air','Daya Listrik','Tahun');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
       $w = array(32,36,28,28,28,20,20);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = true;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        
            $pdf->Cell($w[0],6,$status_rumah,'LR',0,'L',$fill);
            $pdf->Cell($w[1],6,$pekerjaan,'LR',0,'L',$fill);
            $pdf->Cell($w[3],6,$jml_tanggungan,'LR',0,'C',$fill);
            $pdf->Cell($w[2],6,$bahan_bakar_m,'LR',0,'C',$fill);
            $pdf->Cell($w[3],6,$sumber_air,'LR',0,'C',$fill);
            $pdf->Cell($w[5],6,$daya_listrik,'LR',0,'C',$fill);
            $pdf->Cell($w[5],6,$tahun,'LR',0,'C',$fill);
        

        $pdf->Ln();
        $fill = !$fill;
        $pdf->Cell(array_sum($w),0,'','T');
        // Tabel Hasil Penilaian
        $pdf->Ln(8);
        $pdf->Cell(35, 4, 'Hasil Penilaian :', 0, 0, 'L');
        $pdf->Ln(10);
        // Data
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(195,214,70);
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

        // Pengesahan
        $pdf->Ln(35);
        $pdf->Ln(10);
        $pdf->Cell(185, 4, 'Semarang,'.date(" d F Y"), 0, 0, 'R');
        $pdf->Ln(6);
        $pdf->Cell(173, 4, 'Mengetahui,', 0, 0, 'R');
        $pdf->Ln(6);
       
        $pdf->Cell(186, 4, 'Lurah Karanganyar Gunung', 0, 0, 'R');
        $pdf->Ln(18);
        $pdf->Cell(183, 4,'PETRUS SETYO W.,S.AP', 0, 0, 'R');
        $pdf->setlinewidth(0.3);
       
        $pdf->Line(199,213,150,213);
        $pdf->Ln(5);
    
        $pdf->Cell(146, 4, 'NIP', 0, 0, 'R');
        $pdf->Cell(183, 4,': 19670514 198605 1 001', 0, 0, 'L');

        $pdf->Ln(25);
        $pdf->Output();
        
        }
    }

}

