<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimatorController extends Controller
{
    public function estimator()
    {
        return view('estimator.input');
    }

    public function result(Request $request)
    {
    	//data diri dan bangunan
    	$nama = $request->nama;
    	$alamat = $request->alamat;
    	$luastanah = $request->luastanah;
    	$luasbangunan = $request->luasbangunan;
    	$rkondisi = $request->rkondisi;
    	$rfungsi = $request->rfungsi;

    	//klasifikasi gedung
    	$rkompleksitas = $request->rkompleksitas;
    	$rpermanensi = $request->rpermanensi;
    	$rresikokebakaran = $request->rresikokebakaran;
    	$rgempa = $request->rgempa;
    	$rkepadatan = $request->rkepadatan;
    	$rketinggian = $request->rketinggian;
    	$rkepemilikan = $request->rkepemilikan;
    	$rwaktu = $request->rwaktu;
    	$rbasement = $request->rbasement;

    	//prasarana gedung
    	$pagar = $request->pagar;
    	$tanggul = $request->tanggul;
    	$turap = $request->turap;

    	$gapura = $request->gapura;
    	$kelebihangapura = $request->kelebihangapura;

    	$jalan4m = $request->jalan4m;
    	$jalanl4m = $request->jalanl4m;
    	$parkir = $request->parkir;
    	$lapangankomersil = $request->lapangankomersil;

    	$jembatan = $request->jembatan;
    	$kelebihanjembatan = $request->kelebihanjembatan;
    	$boxculvert = $request->boxculvert;
    	$kelebihanboxculvert = $request->kelebihanboxculvert;

    	$kolam100m = $request->kolam100m;
    	$kolaml100m = $request->kolaml100m;
    	$kolampengolahan = $request->kolampengolahan;
    	$bakair = $request->bakair;

    	$menaraantena = $request->menaraantena;
    	$kelebihanmenaraantena = $request->kelebihanmenaraantena;
    	$menarareservoir = $request->menarareservoir;
    	$kelebihanmenarareservoir = $request->kelebihanmenarareservoir;
    	$cerobong = $request->cerobong;
    	$kelebihancerobong = $request->kelebihancerobong;

    	$tugu = $request->tugu;
    	$patung = $request->patung;

    	$gardulistrik = $request->gardulistrik;
    	$kelebihangardulistrik = $request->kelebihangardulistrik;
    	$telepon = $request->telepon;
    	$kelebihantelepon = $request->kelebihantelepon;

    	$billboard8 = $request->billboard8;
    	$billboard20 = $request->billboard20;
    	$billboard48 = $request->billboard48;
    	$billboard100 = $request->billboard100;
    	$kelebihanbillboard = $request->kelebihanbillboard;

    	$neon6 = $request->neon6;
    	$kelebihanneon = $request->kelebihanneon;

    	$baliho8 = $request->baliho8;
    	$baliho20 = $request->baliho20;
    	$baliho48 = $request->baliho48;

    	$papan2 = $request->papan2;
    	$kelebihanpapan = $request->kelebihanpapan;
    	$video8 = $request->video8;
    	$video20 = $request->video20;
    	$video48 = $request->video48;
    	$video100 = $request->video100;
    	$kelebihanvideo = $request->kelebihanvideo;

    	//perhitungan
    	//kondisi
    	if($rkondisi == 1)
    		$nkondisi = 1.00;
    	elseif($rkondisi == 2)
    		$nkondisi = 0.45;
    	elseif($rkondisi == 3)
    		$nkondisi = 0.65;

    	//fungsi
    	if($rfungsi == 1)
    		$nfungsi = 0.50;
    	elseif($rfungsi == 2)
    		$nfungsi = 0.00;
    	elseif($rfungsi == 3)
    		$nfungsi = 3.00;
    	elseif($rfungsi == 4)
    		$nfungsi = 1.00;
    	elseif($rfungsi == 5)
    		$nfungsi = 2.00;
    	elseif($rfungsi == 6)
    		$nfungsi = 4.00;

    	//kompleksitas
    	if($rkompleksitas == 1)
    		$nkompleksitas = 0.40;
    	elseif($rkompleksitas == 2)
    		$nkompleksitas = 0.70;
    	elseif($rkompleksitas == 3)
    		$nkompleksitas = 1.00;

    	//permanensi
    	if($rpermanensi == 1)
    		$npermanensi = 0.40;
    	elseif($rpermanensi == 2)
    		$npermanensi = 0.70;
    	elseif($rpermanensi == 3)
    		$npermanensi = 1.00;

    	//resiko kebakaran
    	if($rresikokebakaran == 1)
    		$nresikokebakaran = 0.40;
    	elseif($rresikokebakaran == 2)
    		$nresikokebakaran = 0.70;
    	elseif($rresikokebakaran == 3)
    		$nresikokebakaran = 1.00;

    	//zona gempa
    	if($rgempa == 1)
    		$ngempa = 0.15;
    	elseif($rgempa == 2)
    		$ngempa = 0.15;

    	//kepadatan
    	if($rkepadatan == 1)
    		$nkepadatan = 0.40;
    	elseif($rkepadatan == 2)
    		$nkepadatan = 0.70;
    	elseif($rkepadatan == 3)
    		$nkepadatan = 1.00;

    	//ketinggian
    	if($rketinggian == 1)
    		$nketinggian = 0.40;
    	elseif($rketinggian == 2)
    		$nketinggian = 0.70;
    	elseif($rketinggian == 3)
    		$nketinggian = 1.00;

    	//kepemilikan
    	if($rkepemilikan == 1)
    		$nkepemilikan = 0.40;
    	elseif($rkepemilikan == 2)
    		$nkepemilikan = 0.70;
    	elseif($rkepemilikan == 3)
    		$nkepemilikan = 1.00;

    	//waktu
    	if($rwaktu == 1)
    		$nwaktu = 0.40;
    	elseif($rwaktu == 2)
    		$nwaktu = 0.70;
    	elseif($rwaktu == 3)
    		$nwaktu = 1.00;

    	//index klasifikasi
    	$indexklasifikasi = ($nkompleksitas * 0.25)
    		+ ($npermanensi * 0.20)
    		+ ($nresikokebakaran * 0.15)
    		+ ($ngempa * 0.70)
    		+ ($nkepadatan * 0.10)
    		+ ($nketinggian * 0.10)
    		+ ($nkepemilikan * 0.05);

    	//index waktu
    	$indexwaktu = $nwaktu * 1.00;

    	//index terintegrasi
    	if($rbasement == 1)
    		$indexterintegrasi = $nfungsi * $indexklasifikasi * $indexwaktu;
    	elseif($rbasement == 2)
    		$indexterintegrasi = $nfungsi * $indexklasifikasi * $indexwaktu * 1.30;

    	//retribusi bangunan gedung
		$retribusibangunangedung = $luasbangunan * $indexterintegrasi * $nkondisi * 17000;

		//prasarana bangunan gedung
		//konstruksi pembatas
		$npagar = 1000 * ($pagar != null ? $pagar : 0);
		$ntanggul = 1500 * ($tanggul != null ? $tanggul : 0);
		$nturap = 1000 * ($turap != null ? $turap : 0);

		//konstruksi penanda masuk
		$ngapura = 50000 * ($gapura != null ? $gapura : 0);
		$nkelebihangapura = 5000 * ($kelebihangapura != null ? $kelebihangapura : 0);

		//konstruksi perkerasan
		$njalan4m = 10000 * ($jalan4m != null ? $jalan4m : 0);
		$njalanl4m = 2500 * ($jalanl4m != null ? $jalanl4m : 0);
		$nparkir = 1000 * ($parkir != null ? $parkir : 0);
		$nlapangankomersil = 2000 * ($lapangankomersil != null ? $lapangankomersil : 0);

		//konstruksi penghubung
		$njembatan = 50000 * ($jembatan != null ? $jembatan : 0);
		$nkelebihanjembatan = 5000 * ($kelebihanjembatan != null ? $kelebihanjembatan : 0);
		$nboxculvert = 50000 * ($boxculvert != null ? $boxculvert : 0);
		$nkelebihanboxculvert = 5000 * ($kelebihanboxculvert != null ? $kelebihanboxculvert : 0);

		//konstruksi kolam
		$nkolam100m = 3500 * ($kolam100m != null ? $kolam100m : 0);
		$nkolaml100m = 5000 * ($kolaml100m != null ? $kolaml100m : 0);
		$nkolampengolahan = 3500 * ($kolampengolahan != null ? $kolampengolahan : 0);
		$nbakair = 3500 * ($bakair != null ? $bakair : 0);

		//konstruksi menara
		$nmenaraantena = 50000 * ($menaraantena != null ? $menaraantena : 0);
		$nkelebihanmenaraantena = 5000 * ($kelebihanmenaraantena != null ? $kelebihanmenaraantena : 0);
		$nmenarareservoir = 5000 * ($menarareservoir != null ? $menarareservoir : 0);
		$nkelebihanmenarareservoir = 5000 * ($kelebihanmenarareservoir != null ? $kelebihanmenarareservoir : 0);
		$ncerobong = 50000 * ($cerobong != null ? $cerobong : 0);
		$nkelebihancerobong = 5000 * ($kelebihancerobong != null ? $kelebihancerobong : 0);

		//konstruksi monumen
		$ntugu = 250000 * ($tugu != null ? $tugu : 0);
		$npatung = 50000 * ($patung != null ? $patung : 0);

		//konstruksi instalasi
		$ngardulistrik = 100000 * ($gardulistrik != null ? $gardulistrik : 0);
		$nkelebihangardulistrik = 5000 * ($kelebihangardulistrik != null ? $kelebihangardulistrik : 0);
		$ntelepon = 100000 * ($telepon != null ? $telepon : 0);
		$nkelebihantelepon = 5000 * ($kelebihantelepon != null ? $kelebihantelepon : 0);

		//konstruksi reklame
		//billboard
		$nbillboard8 = 300000 * ($billboard8 != null ? $billboard8 : 0);
		$nbillboard20 = 1125000 * ($billboard20 != null ? $billboard20 : 0);
		$nbillboard48 = 3000000 * ($billboard48 != null ? $billboard48 : 0);
		$nbillboard100 = 7000000 * ($billboard100 != null ? $billboard100 : 0);
		$nkelebihanbillboard = 200000 * ($kelebihanbillboard != null ? $kelebihanbillboard : 0);

		//neon box
		$nneon6 = 450000 * ($neon6 != null ? $neon6 : 0);
		$nkelebihanneon = 120000 * ($kelebihanneon != null ? $kelebihanneon : 0);

		//baliho
		$nbaliho8 = 100000 * ($baliho8 != null ? $baliho8 : 0);
		$nbaliho20 = 400000 * ($baliho20 != null ? $baliho20 : 0);
		$nbaliho48 = 1000000 * ($baliho48 != null ? $baliho48 : 0);

		//papan nama
		$npapan2 = 200000 * ($papan2 != null ? $papan2 : 0);
		$nkelebihanpapan = 25000 * ($kelebihanpapan != null ? $kelebihanpapan : 0);

		//videotron
		$nvideo8 = 300000 * ($video8 != null ? $video8 : 0);
		$nvideo20 = 1125000 * ($video20 != null ? $video20 : 0);
		$nvideo48 = 4500000 * ($video48 != null ? $video48 : 0);
		$nvideo100 = 17000000 * ($video100 != null ? $video100 : 0);
		$nkelebihanvideo = 500000 * ($kelebihanvideo != null ? $kelebihanvideo : 0);

		//retribusi prasarana gedung
		$retribusiprasaranagedung = ($npagar + $ntanggul + $nturap)
			+ ($ngapura + $nkelebihangapura) 
			+ ($njalan4m + $njalanl4m + $nparkir + $nlapangankomersil) 
			+ ($njembatan + $nkelebihanjembatan + $nboxculvert + $nkelebihanboxculvert) 
			+ ($nkolam100m + $nkolaml100m + $nkolampengolahan + $nbakair) 
			+ ($nmenaraantena + $nkelebihanmenaraantena + $nmenarareservoir + $nkelebihanmenarareservoir + $ncerobong + $nkelebihancerobong) 
			+ ($ntugu + $npatung) 
			+ ($ngardulistrik + $nkelebihangardulistrik + $ntelepon + $nkelebihantelepon) 
			+ ($nbillboard8 + $nbillboard20 + $nbillboard48 + $nbillboard100 + $nkelebihanbillboard)
			+ ($nneon6 + $nkelebihanneon)
			+ ($nbaliho8 + $nbaliho20 + $nbaliho48)
			+ ($npapan2 + $nkelebihanpapan)
			+ ($nvideo8 + $nvideo20 + $nvideo48 + $nvideo100 + $nkelebihanvideo);

		return "A. ".$retribusibangunangedung." B. ".$retribusiprasaranagedung;

        return view('estimator.result');
    }
}