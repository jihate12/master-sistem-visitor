<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['tittle'] = "Landing Page | Home";
		$this->load->helper('url');
		$this->load->view('home-alter', $data);
	}

	public function form_data()
	{
		$this->load->view('form');
	}

	public function form_data_kegiatan()
	{
		$this->load->view('form_kegiatan');
	}

	public function table_view()
	{
		$loadData = $this->M_User->getDataUser();
		$data = array('load' => $loadData);
		$this->load->view('dashboard_view', $data);
	}

	public function table_view_kegiatan()
	{
		$data['view'] = $this->M_User->getDataKegiatan();
		$this->load->view('dashboard_kegiatan', $data);
	}

	public function form_edit_data($ktp)
	{
		$query = $this->M_User->getDataUserDetail($ktp);
		$data = array('queryEditData' => $query);
		$this->load->view('edit_data', $data);
	}

	public function form_edit_kegiatan($id)
	{
		$query = $this->M_User->getDataKegiatanDetail($id);
		$data = array('edit' => $query);
		$this->load->view('edit_data_kegiatan', $data);
	}

	public function print_view($id)
	{
		$query = $this->M_User->getDataKegiatanDetail($id);
		$data = array('print' => $query);
		$this->load->view('print_page', $data);
	}

	public function tambahData()
	{

		$this->form_validation->set_rules('ktp', 'KTP', 'required|trim|is_unique[data_user.ktp]', [
			'is_unique' => "KTP sudah terdaftar",
			'required' => 'Kolom KTP harus diisi'
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Kolom nama harus diisi'
		]);
		$this->form_validation->set_rules('jkelamin', 'Jenis kelamin', 'required|trim', [
			'required' => 'Kolom jenis kelamin harus diisi'
		]);
		$this->form_validation->set_rules('tlp', 'Telepon', 'required|trim|is_unique[data_user.tlp]', [
			'is_unique' => "No telepon sudah terdaftar",
			'required' => 'Kolom telepon harus diisi'
		]);
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim', [
			'required' => 'Kolom jabatan harus diisi'
		]);
		$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required|trim', [
			'required' => 'Kolom perusahaan harus diisi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
			'required' => 'Kolom alamat harus diisi'
		]);
		$this->form_validation->set_rules('scanktp', 'Scan KTP', 'required|trim', [
			'required' => 'Sihlakan upload KTP anda!'
		]);

		$ktp = $this->input->post('ktp');
		$nama = $this->input->post('nama');
		$jkelamin = $this->input->post('jkelamin');
		$tlp = $this->input->post('tlp');
		$jabatan = $this->input->post('jabatan');
		$perusahaan = $this->input->post('perusahaan');
		$alamat = $this->input->post('alamat');
		$scan = $_FILES['scanktp'];


		if ($scan = '') {
			$this->load->view('form');
		} else {
			$config['upload_path'] = './aset/master_scan';
			$config['allowed_types'] = 'jpeg|jpg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('scanktp')) {
				echo "upload gagal";
				die;
			} else {
				$scan = $this->upload->data('file_name');
			}
		}

		$data = array(
			'ktp' => $ktp,
			'nama' => $nama,
			'jkelamin' => $jkelamin,
			'tlp' => $tlp,
			'jabatan' => $jabatan,
			'perusahaan' => $perusahaan,
			'alamat' => $alamat,
			'scan_ktp' => $scan
		);


		if ($this->form_validation->run() == true) {
			$this->load->view('form');
		} else {
			$this->M_User->insertDataUser($data);
			$this->session->set_flashdata('notifikasi', '
			<div class="alert">
				<span class="fas fa-exclamation-circle"></span>
				<span class="msg">Data berhasil didaftarkan</span>
				<span class="cls-btn">
					<span class="fas fa-times"></span>
				</span>
			</div>');
			redirect(base_url('MainController/form_data_kegiatan'));
		}
	}

	public function tambahDataKegiatan()
	{
		$this->form_validation->set_rules('ktp', 'KTP', 'required|trim', [
			'required' => 'Kolom KTP harus diisi'
		]);
		$this->form_validation->set_rules('jamdatang', 'Jam Kedatangan', 'required|trim', [
			'required' => 'Kolom jam kedatangan harus diisi'
		]);
		$this->form_validation->set_rules('jampulang', 'Jam Kepulangan', 'required|trim', [
			'required' => 'Kolom jam kepulangan harus diisi'
		]);
		$this->form_validation->set_rules('departemen', 'Departemen', 'required|trim', [
			'required' => 'Kolom departemen harus diisi'
		]);
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim', [
			'required' => 'Kolom lokasi harus diisi'
		]);
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required|trim', [
			'required' => 'Kolom kegiatan harus diisi'
		]);
		$this->form_validation->set_rules('bertemu', 'Bertemu', 'required|trim', [
			'required' => 'Kolom bertemu harus diisi'
		]);
		$this->form_validation->set_rules('plat', 'Plat', 'required|trim', [
			'required' => 'Kolom plat kendaraan harus diisi'
		]);

		$ktp = $this->input->post('ktp');
		$jamdatang = $this->input->post('jamdatang');
		$jampulang = $this->input->post('jampulang');
		$tanggal = $this->input->post('tgl');
		$departemen = $this->input->post('departemen');
		$lokasi = $this->input->post('lokasi');
		$kegiatan = $this->input->post('kegiatan');
		$bertemu = $this->input->post('bertemu');
		$plat = $this->input->post('plat');
		$status = $this->input->post('status');

		$arr = array(
			'ktp' => $ktp,
			'jam_datang' => $jamdatang,
			'jam_pulang' => $jampulang,
			'tanggal' => $tanggal,
			'departemen' => $departemen,
			'lokasi' => $lokasi,
			'kegiatan' => $kegiatan,
			'bertemu' => $bertemu,
			'plat' => $plat,
			'status' => $status
		);

		$userktp = $this->db->get_where('data_user', ['ktp' => $ktp])->row_array();
		// var_dump($userktp);

		if ($this->form_validation->run() == false) {
			$this->load->view('form_kegiatan');
		} else {

			if ($userktp) {
				$this->session->set_flashdata('notifikasi', '
			<div class="alert">
				<span class="fas fa-exclamation-circle"></span>
				<span class="msg">Input data kegiatan berhasil!</span>
				<span class="cls-btn">
					<span class="fas fa-times"></span>
				</span>
			</div>');
				$this->M_User->insertDataKegiatan($arr);
				redirect(base_url(''));
			} else {
				$this->session->set_flashdata('notifikasi', '<div class="alert-error">
				<span class="fas fa-exclamation-circle"></span>
				<span class="msg-error">KTP belum teregitrasi</span>
				<span class="cls-btn-error">
					<span class="fas fa-times"></span>
				</span>
			</div>');
				// redirect(base_url('MainController/tambahDataKegiatan'));
				redirect(base_url('MainController/testview'));
			}
		}
	}

	public function editData()
	{
		$ktp = $this->input->post('ktp');
		$nama = $this->input->post('nama');
		$jkelamin = $this->input->post('jkelamin');
		$tlp = $this->input->post('tlp');
		$jabatan = $this->input->post('jabatan');
		$perusahaan = $this->input->post('perusahaan');
		$alamat = $this->input->post('alamat');

		$arr = array(
			'nama' => $nama,
			'jkelamin' => $jkelamin,
			'tlp' => $tlp,
			'jabatan' => $jabatan,
			'perusahaan' => $perusahaan,
			'alamat' => $alamat
		);

		$this->M_User->updateDataUser($ktp, $arr);
		redirect(base_url('MainController/table_view'));
	}

	public function editStatus()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');

		$arr = array('status' => $status);
		$this->M_User->updateStatus($id, $arr);
		redirect(base_url('MainController/table_view_kegiatan'));
	}

	public function hapusDataUser($ktp)
	{
		$this->M_User->deletDataUser($ktp);
		redirect(base_url('MainController/table_view'));
	}

	public function cariData()
	{
		$this->form_validation->set_rules('keyword', 'Keyword', 'required|trim', [
			'required' => 'Kolom pencarian harus diisi'
		]);



		if ($this->form_validation->run() == false) {
			$this->load->view('home-alter');
		} else {
			$keyword = $this->input->post('keyword');
			$data['kegiatan'] = $this->M_User->searchDataKegiatan($keyword);
			$this->load->view('dashboard_print', $data);
		}
	}

	public function exel()
	{
		$data['export'] = $this->M_User->getDataKegiatan();
	}
}
