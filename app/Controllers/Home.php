<?php
namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $jadwal_program = json_decode(file_get_contents('http://10.0.5.209/v4/tv/type:schedule'));
		// // dd($jadwal_program->result->btv);
		// $btv = $jadwal_program->result->btv;          // lebih singkat
		// $jumlah = count($btv);                        // biasanya 7

		// // 2. Cari indeks “hari ini”
		// $today = strtolower(date('l'));

		// $indeks = array_search(
		// 	$today,
		// 	array_map(fn($h) => strtolower($h->day), $btv),
		// 	true
		// );

		// if ($indeks === false) {
		// 	throw new RuntimeException('Hari ini tidak ada di array jadwal.');
		// }

		// // Tentukan array hasil sesuai aturan
		// if ($indeks === 0) {
		// 	$start_index = 0;
		// 	$hasil = array_slice($btv, 0, min(3, $jumlah));
		// } elseif ($indeks === $jumlah - 1) {
		// 	$start_index = max(0, $jumlah - 3);
		// 	$hasil = array_slice($btv, $start_index, 3);
		// } else {
		// 	$start_index = $indeks - 1;
		// 	$hasil = array_slice($btv, $start_index, 3);
		// }

		// // Mapping bulan bahasa Indonesia
		// $bulan_indonesia = [
		// 	'January' => 'Januari',
		// 	'February' => 'Februari',
		// 	'March' => 'Maret',
		// 	'April' => 'April',
		// 	'May' => 'Mei',
		// 	'June' => 'Juni',
		// 	'July' => 'Juli',
		// 	'August' => 'Agustus',
		// 	'September' => 'September',
		// 	'October' => 'Oktober',
		// 	'November' => 'November',
		// 	'December' => 'Desember',
		// ];

		// // Tambahkan tanggal dan bulan
		// $tanggal_awal = new \DateTime();

		// if ($start_index < $indeks) {
		// 	$tanggal_awal->modify('-' . ($indeks - $start_index) . ' days');
		// } elseif ($start_index > $indeks) {
		// 	$tanggal_awal->modify('+' . ($start_index - $indeks) . ' days');
		// }

		// foreach ($hasil as $i => $item) {
		// 	$tanggal = clone $tanggal_awal;
		// 	$tanggal->modify("+$i days");

		// 	$nama_bulan = $tanggal->format('F');
		// 	$item->tanggal = $tanggal->format('d');
		// 	$item->bulan = $bulan_indonesia[$nama_bulan] ?? $nama_bulan;
		// }
		// $data['jadwal_programs'] = $jadwal_program->result->btv;
		// $data['date_programs'] = $hasil;

		// $headlines = [
		// 	[
		// 		'id' => 1,
		// 		'slug' => 'jalan-dakwah',
		// 		'name' => 'Jalan Dakwah',
		// 		'description' => 'Program Jalan Dakwah adalah sebuah tayangan di BTV yang mengupas berbagai topik inspiratif dan edukatif terkait ajaran Islam.',
		// 		'day' => 'Setiap Hari',
		// 		'time' => '07.30 & 14.45',
		// 		'image' => '/img/home-jalan-dakwah.webp',
		// 	],
		// 	[
		// 		'id' => 2,
		// 		'slug' => 'kuyliner',
		// 		'name' => 'Kuyliner',
		// 		'description' => 'Menjelajahi berbagai tempat kuliner, mulai dari makanan populer hingga jajanan unik dan viral.',
		// 		'day' => 'Setiap Hari',
		// 		'time' => '15.00',
		// 		'image' => '/img/home-kuyliner.webp',
		// 	],
		// 	[
		// 		'id' => 3,
		// 		'slug' => 'dunia-binatang',
		// 		'name' => 'Dunia Binatang',
		// 		'description' => 'Menampilkan fakta-fakta unik dan menarik seputar dunia satwa dari berbagai negara.',
		// 		'day' => 'Setiap Hari',
		// 		'time' => '17.00',
		// 		'image' => '/img/home-dunia-binatang.webp',
		// 	],
		// ];
		// $data['headlines'] = $headlines;
		$data = [
			'courses' => [
				[
					'slug' => "esgrc",
					'image' => base_url("img/img-course-1.webp"),
					'name' => "ESGRC (Governance, Risk, and Compliance)",
					'title' => "ESGRC (Governance, Risk, and Compliance)",
					'about' => "ESGRC (Governance, Risk, and Compliance)",
					'modules_count' => "12 modul",
					'has_video' => "1 video",
					'has_certificate' => "Sertifikat"
				],
			],
			'faqs' => [],
		];
		// dd($data);
		return view('home', $data);
	}

	public function aboutus()
	{
		return view('about_us');
	}

	public function livestreaming()
	{
		$jadwal_program = json_decode(file_get_contents('http://10.0.5.209/v4/tv/type:schedule'));
		$rekomen_video = json_decode(file_get_contents('http://10.0.5.209/v4/article/type:bytag/tag:video-jalan-dakwah-btv/start:0/limit:8'));
		// dd($rekomen_video->result);
		return view('live_streaming', ['jadwal_programs' => $jadwal_program->result->btv, 'rekomen_videos' => $rekomen_video->result]);
	}

	public function recommendvideo()
	{
		$jadwal_program = json_decode(file_get_contents('http://10.0.5.209/v4/tv/type:schedule'));
		$rekomen_video = json_decode(file_get_contents('http://10.0.5.209/v4/article/type:bytag/tag:video-jalan-dakwah-btv/start:0/limit:8'));
		$data['jadwal_programs'] = $jadwal_program->result->btv;
		$data['rekomen_videos'] = $rekomen_video->result;
		// dd($data);
		return view('recommendation_video', $data);
	}

	public function programs()
	{
		return view('programs');
	}

	public function programsdetail()
	{
		$rekomen_video = json_decode(file_get_contents('http://10.0.5.209/v4/article/type:bytag/tag:video-jalan-dakwah-btv/start:0/limit:8'));
		$data['rekomen_videos'] = $rekomen_video->result;
		return view('programs_detail', $data);
	}

	public function anchors()
	{
		return view('anchors');
	}

	public function anchorsdetail()
	{
		return view('anchors_detail');
	}

	public function ids()
	{
		return view('ids');
	}

	//--------------------------------------------------------------------

}