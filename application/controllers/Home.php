<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{

		$this->load->view('header');
		$this->load->view('home_page');
		$this->load->view('footer');
	}

	function category()
	{

		$data['toOption'] = $this->M_home->getData('category', '', 'result');
		echo json_encode($data);
	}

	function getCategory($id)
	{
		$data = $this->M_home->getData('category', 'id_kategori = ' . $id, 'row');
		echo json_encode($data);
	}


	function data_($id)
	{
		$alpha = 0.9;
		$kategori = $this->M_home->getData('category', 'id_kategori = ' . $id, 'row');
		$get_ = $this->M_home->getData('data', 'id_kategori = ' . $id, 'result');

		//Hitung SES-DES
		$i = 0;
		foreach ($get_ as $v) {
			$newData[$i] = $v->jumlah;
			$i++;
		}

		$s1t[0] = $newData[0];
		$s2t[0] = $newData[0];
		$At[0] = '-';
		$Bt[0] = '-';
		$Sm[0] = '-';
		$Mape[0] = '-';
		$jm = 0;
		for ($z = 1; $z < count($newData); $z++) {
			$s1t[$z] = number_format($alpha * $newData[$z] + (1 - $alpha) * $newData[$z - 1], 2);
			$s2t[$z] = number_format($alpha * $s1t[$z] + (1 - $alpha) * $s2t[$z - 1], 2);
			$At[$z] = number_format(2 * $s1t[$z] - $s2t[$z], 2);
			$Bt[$z] = number_format($alpha / 1 - $alpha * ($s1t[$z] - $s2t[$z]), 2);
			$Sm[$z] = $At[$z] + $Bt[$z];
			$Mape[$z] = number_format(abs(($At[$z] - $newData[$z]) / $At[$z] * 100), 2);
			$jm = $Mape[$z] + $jm;
		}
		$data = array(
			'data_' => $get_,
			'kategpri' => $kategori,
			's1t' => $s1t,
			's2t' => $s2t,
			'At' => $At,
			'Bt' => $Bt,
			'Sm' => $Sm,
			'Mape' => $Mape,
			'Rerata' => $jm / (count($newData) - 1)
		);
		$Out = $this->hitungAlpa($get_);
		
		$this->load->view('tabelAlpa', $Out);
		$this->load->view('tableSES-DES', $data);
	}

	function prosesAlpa($id)
	{
		$get_= $this->M_home->getData('data', 'id_kategori = '.$id, 'result');
		$Out = $this->hitungAlpa($get_);
		$this->load->view('tabelAlpa', $Out);
	}

	function hitungAlpa($get_){
		$i = 0;
		foreach ($get_ as $v) {
			$newData[$i] = $v->jumlah;
			$i++;
		}
		$s1t[0] = $newData[0];
		$s2t[0] = $newData[0];
		$At[0] = '-';
		$Bt[0] = '-';
		$Mape[0] = '-';
		$alpha = [0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9];
		for ($i = 0; $i < count($alpha); $i++) {
			$jm = 0;
			for ($z = 1; $z < count($newData); $z++) {
				$s1t[$z] = number_format($alpha[$i] * $newData[$z] + (1 - $alpha[$i]) * $newData[$z - 1], 2);
				$s2t[$z] = number_format($alpha[$i] * $s1t[$z] + (1 - $alpha[$i]) * $s2t[$z - 1], 2);
				$At[$z] = number_format(2 * $s1t[$z] - $s2t[$z], 2);
				$Mape[$z] = (abs(($At[$z] - $newData[$z]) / $At[$z] * 100));
				$jm = $Mape[$z] + $jm;

				$out[$z - 1][$i] = $At[$z];
			}
			$rata[$i] = $jm / (count($newData) - 1);
		}
		$new = array_slice($newData, 1, count($newData));
		$Out['dataAktual'] = $new;
		$Out['dataPrediksi'] = $out;
		$Out['alpa'] = $alpha;
		$Out['Mape'] = $rata;

		return $Out;
	}

	function alpaKategori()
	{
		$kategori = $this->M_home->getData('category', '', 'result');
		$z=0;
		foreach ($kategori as $r) {
			$get_ = $this->M_home->getData('data', 'id_kategori = ' . $r->id_kategori, 'result');
			$mape[$z] = $this->hitungMape($get_);
			$z++;
		}
		$data = [
			'mape' => $mape,
			'kategori' => $kategori,
			'alpa' => [0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9]
		];

		$this->load->view('tabelPerKategori', $data);
	}

	function hitungMape($get_)
	{
		$i = 0;
		foreach ($get_ as $v) {
			$newData[$i] = $v->jumlah;
			$i++;
		}

		$s1t[0] = $newData[0];
		$s2t[0] = $newData[0];
		$At[0] = '-';
		$Bt[0] = '-';
		$Mape[0] = '-';
		$alpha = [0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9];
		for ($i = 0; $i < count($alpha); $i++) {
			$jm = 0;
			for ($z = 1; $z < count($newData); $z++) {
				$s1t[$z] = number_format($alpha[$i] * $newData[$z] + (1 - $alpha[$i]) * $newData[$z - 1], 2);
				$s2t[$z] = number_format($alpha[$i] * $s1t[$z] + (1 - $alpha[$i]) * $s2t[$z - 1], 2);
				$At[$z] = number_format(2 * $s1t[$z] - $s2t[$z], 2);
				$Mape[$z] = (abs(($At[$z] - $newData[$z]) / $At[$z] * 100));
				$jm = $Mape[$z] + $jm;
			}
			$rata[$i] = $jm / (count($newData) - 1);
		}
		return $rata;
	}
}
