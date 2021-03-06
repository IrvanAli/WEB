<?php
include 'koneksi.php';
require('pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");
//fitri
$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
//$pdf->Image('../logo/malasngoding.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'KARYAWAN',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0852XXXXXXXX',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Mastrip. Jember',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.Polije.email : POLIJE@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Karyawan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'NIP', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'TglLahir', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jenis Kelamin', 1, 0, 'C');
$pdf->Cell(8, 0.8, 'Alamat', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from pegawai");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(2, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['nip'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $lihat['nama'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['tgllahir'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['jenkel'],1, 0, 'C');
	$pdf->Cell(8, 0.8, $lihat['alamat'], 1, 1,'C');

	$no++;
}

$pdf->Output("karyawans-laporan.pdf","I");

?>

