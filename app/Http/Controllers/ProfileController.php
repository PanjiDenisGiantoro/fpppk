<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\Village;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Browsershot\Browsershot;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with('profiles')->where('id', auth()->user()->id)->first();
        return view('profile_backend.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tahun = date('y') + 5;
        $kota = $request->district_id;
        $kta = DB::table('indonesia_districts')->where('id', $kota)->first();

//        01 Cibinong
//02 Gunung Putri
//03 Citeureup
//04 Sukaraja
//05 Babakan Madang
//06 Jonggol
//07. Cileungsi
//08 Cariu
//09 Sukamakmur
//10 Parung
//11. Gunung Sindur
//12. kemang
//13. Bojong Gede
//14. Leuwi liang
//15. Ciampea
//16. Cibungbulang
//17  Pamijahan
//18. Rumpin
//19 Jasinga
//20 Parung panjang
//21 Cigudeg
//22. Nanggung
//23 Tenjo
//24 Ciawi
//25 Cisarua
//26. Megamendung
//27 Caringin
//28 Cijeruk
//29 Ciomas
//30 Dramaga
//31 Tamansari
//32 Klapanunggal
//33 Ciseeng
//34 Rancabungur
//35 Sukajaya
//36. Tanjung sari
//37  Tajur halang
//38. Cigombong
//39. Leuwisadeng
//40 Tenjolaya
        if (ucfirst($kta) == 'Jonggol'){
            $kotas = '06';
        }elseif (ucfirst($kta) == 'Cibinong'){
            $kotas = '01';
        }elseif (ucfirst($kta) == 'Gunung Putri'){
            $kotas = '02';
        }elseif (ucfirst($kta) == 'Citeureup'){
            $kotas = '03';
        }elseif (ucfirst($kta) == 'Sukaraja'){
            $kotas = '04';
        }elseif (ucfirst($kta) == 'Babakan Madang'){
            $kotas = '05';
        }elseif (ucfirst($kta) == 'Cileungsi'){
            $kotas = '07';
        }elseif (ucfirst($kta) == 'Cariu'){
            $kotas = '08';
        }elseif (ucfirst($kta) == 'Sukamakmur'){
            $kotas = '09';
        }elseif (ucfirst($kta) == 'Parung'){
            $kotas = '10';
        }elseif (ucfirst($kta) == 'Gunung Sindur'){
            $kotas = '11';
        }elseif (ucfirst($kta) == 'Kemang'){
            $kotas = '12';
        }elseif (ucfirst($kta) == 'Bojong Gede'){
            $kotas = '13';
        }elseif (ucfirst($kta) == 'Leuwi Liang'){
            $kotas = '14';
        }elseif (ucfirst($kta) == 'Ciampea'){
            $kotas = '15';
        }elseif (ucfirst($kta) == 'Cibungbulang'){
            $kotas = '16';
        }elseif (ucfirst($kta) == 'Pamijahan'){
            $kotas = '17';
        }elseif (ucfirst($kta) == 'Rumpin'){
            $kotas = '18';
        }elseif (ucfirst($kta) == 'Jasinga'){
            $kotas = '19';
        }elseif (ucfirst($kta) == 'Parung Panjang'){
            $kotas = '20';
        }elseif (ucfirst($kta) == 'Cigudeg'){
            $kotas = '21';
        }elseif (ucfirst($kta) == 'Nanggung'){
            $kotas = '22';
        }elseif (ucfirst($kta) == 'Tenjo'){
            $kotas = '23';
        }elseif (ucfirst($kta) == 'Ciawi'){
            $kotas = '24';
        }elseif (ucfirst($kta) == 'Cisarua'){
            $kotas = '25';
        }elseif (ucfirst($kta) == 'Megamendung'){
            $kotas = '26';
        }elseif (ucfirst($kta) == 'Caringin'){
            $kotas = '27';
        }elseif (ucfirst($kta) == 'Cijeruk'){
            $kotas = '28';
        }elseif (ucfirst($kta) == 'Ciomas'){
            $kotas = '29';
        }elseif (ucfirst($kta) == 'Dramaga'){
            $kotas = '30';
        }elseif (ucfirst($kta) == 'Tamansari'){
            $kotas = '31';
        }elseif (ucfirst($kta) == 'Klapanunggal'){
            $kotas = '32';
        }elseif (ucfirst($kta) == 'Ciseeng'){
            $kotas = '33';
        }elseif (ucfirst($kta) == 'Rancabungur'){
            $kotas = '34';
        }elseif (ucfirst($kta) == 'Sukajaya'){
            $kotas = '35';
        }elseif (ucfirst($kta) == 'Tanjung Sari'){
            $kotas = '36';
        }elseif (ucfirst($kta) == 'Tajur Halang'){
            $kotas = '37';
        }elseif (ucfirst($kta) == 'Cigombong'){
            $kotas = '38';
        }elseif (ucfirst($kta) == 'Leuwisadeng'){
            $kotas = '39';
        }elseif (ucfirst($kta) == 'Tenjolaya') {
            $kotas = '40';
        }
        $formattedNumber = str_pad($kotas, 3, '0', STR_PAD_LEFT);

        $profiles = User::with('profiles')->where('id', auth()->user()->id)->first();
        $profiles->update([
            'name' => $request->username,
            'email' => $request->email,
        ]);
        $bulan = date('m');
//        tahunnya ambil 2 di belakang tahun sekarang + 5 tahun

        $nokota = User::leftJoin('profiles', 'profiles.user_id', '=', 'users.id')
                ->where('city_id', $kota)->count() + 1;
        $no_urut_kota = sprintf("%01d", $nokota + 1);
        $max = User::max('id');
        $no_urut = sprintf("%04d", $max + 1);

        if ($request->hasFile('foto') == 'false') {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'foto';
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = $profiles->profiles->photo;
        }

        $data = Profile::create([
            'user_id' => auth()->user()->id,
            'degree' => $request->degree,
            'place' => $request->place,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'tipe' => $request->tipe,
            'tahun' => $request->tahun,
            'rtrw' => $request->rtrw,
            'status' => $request->status,
            'wa' => $request->wa,
            'fb' => $request->fb,
            'ig' => $request->ig,
            'tw' => $request->tw,
            'linkedin' => $request->linkedin,
            'gelar' => $request->gelar,
            'tiktok' => $request->tiktok,
            'telegram' => $request->telegram,
            'NRA' => '1022' . $formattedNumber . $no_urut_kota . $no_urut,
            'photo' => $nama_file,
            'valid_thru' => $bulan . '/' .$tahun ,
            'tempat_bertugas' => $request->tempat_bertugas
        ]);
        $datas = [
            'api_key' => 'uuh33HHGq2yMxyxOFqfY3zgctLjNjp',
            'sender' => '6285880255326',
            'number' => $request->wa,
            'message' => 'Terima kasih telah mendaftar menjadi anggota FPPPK Kabupaten Bogor. Berikut adalah kode registrasi online Anda : *'. $data->NRA .'* Harap tunggu 1 x 24 jam data Anda sedang diverifikasi . Jika disetujui Anda akan mendapatkan notifikasi selanjutnya melalui whatsapp ini. Terima kasih',
            // 'url' => 'https://fpppk.gurupro.id/assets_backend/fpppk.png',
            // 'fileName' => pathinfo('https://fpppk.gurupro.id/assets_backend/fpppk.png', PATHINFO_FILENAME),
            // 'type' => 'image',

        ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://awas.proudit-system.com/send-message',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($datas),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
//        echo $response;

        Alert::success('Berhasil', 'Data Berhasil Disimpan');
        return redirect()->route('profile.view');

    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        $profile = User::with('profiles')->where('id', auth()->user()->id)->first();
        $kecamatan = District::where('id', $profile->profiles->district_id)->first();
        $pdf = PDF::loadView('profile_backend.cetak', compact('profile', 'kecamatan'));
        return $pdf->download('KTA-FPPPK-'.$profile->profiles->NRA.'.pdf');
    }

    public function show1(Profile $profile)
    {
        $profile = User::with('profiles')->where('id', auth()->user()->id)->first();
        $kecamatan = District::where('id', $profile->profiles->district_id)->first();

        return view('profile_backend.cetak1', compact('profile', 'kecamatan'));
    }

    public function view(Request $request)
    {


        $profile = User::with('profiles')->where('id', auth()->user()->id)->first();
        $provinsi = Province::where('id', $profile->profiles->province_id)->first();
        $kota = City::where('id', $profile->profiles->city_id)->first();
        $kecamatan = District::where('id', $profile->profiles->district_id)->first();
        $desa = Village::where('id', $profile->profiles->village_id)->first();
        return view('profile_backend.lihat', compact('profile', 'provinsi', 'kota', 'kecamatan', 'desa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $profiles = User::with('profiles')->where('id', auth()->user()->id)->first();
        $profiles->update([
            'name' => $request->username,
            'email' => $request->email,
        ]);

        $foto = $profiles->photo;
        if ($request->hasFile('foto') == 'false') {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'foto';
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = $profiles->profiles->photo;
        }
//        dd($request->all());
        $data = Profile::where('user_id', auth()->user()->id)->first()->update([
            'user_id' => auth()->user()->id,
            'degree' => $request->degree,
            'place' => $request->place,
            'gelar' => $request->gelar,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'tipe' => $request->tipe,
            'tahun' => $request->tahun,
            'rtrw' => $request->rtrw,
            'status' => $request->status,
            'wa' => $request->wa,
            'fb' => $request->fb,
            'ig' => $request->ig,
            'tw' => $request->tw,
            'linkedin' => $request->linkedin,
            'tiktok' => $request->tiktok,
            'telegram' => $request->telegram,
            'photo' => $nama_file,
            'tempat_bertugas' => $request->tempat_bertugas
        ]);

        $profile = Profile::where('user_id', auth()->user()->id)->first();

        Alert::success('Berhasil', 'Data Berhasil Diupdate');
        return redirect()->route('profile.view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
