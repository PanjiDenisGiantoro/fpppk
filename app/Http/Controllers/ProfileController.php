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

    public function check(Request $request)
    {
        $nra = $request->nra;
        $profile = Profile::where('NRA', $nra)->first();
        if($nra == ''){
            return response()->json([
                'status' => 'tidakada',
                'data' => 'Data tidak ditemukan'
            ]);
        }
        if ($profile) {
            return response()->json([
                'status' => 'success',
                'data' => $profile
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'data' => 'Data tidak ditemukan'
            ]);
        }
    }

    public function check_wa(Request $request)
    {
        $wa = $request->wa;
        $profile = Profile::where('wa', $wa)->count();
        if($wa > 1){
            return response()->json([
                'status' => 'tidakada',
                'data' => 'No Whatsapp Sudah Terdaftar'
            ]);
        }elseif($profile == 0) {
            return response()->json([
                'status' => 'success',
                'data' => $profile
            ]);
        }
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

        if (strtoupper($kta->name) == 'JONGGOL') {
            $kotas = '06';
        } elseif (strtoupper($kta->name) == 'CIBINONG') {
            $kotas = '01';
        } elseif (strtoupper($kta->name) == 'GUNUNG PUTRI') {
            $kotas = '02';
        } elseif (strtoupper($kta->name) == 'CITEUREUP') {
            $kotas = '03';
        } elseif (strtoupper($kta->name) == 'SUKARAJA') {
            $kotas = '04';
        } elseif (strtoupper($kta->name) == 'BABAKAN MADANG') {
            $kotas = '05';
        } elseif (strtoupper($kta->name) == 'CILEUNGSI') {
            $kotas = '07';
        } elseif (strtoupper($kta->name) == 'CARIU') {
            $kotas = '08';
        } elseif (strtoupper($kta->name) == 'SUKAMAKMUR') {
            $kotas = '09';
        } elseif (strtoupper($kta->name) == 'PARUNG') {
            $kotas = '10';
        } elseif (strtoupper($kta->name) == 'GUNUNG SINDUR') {
            $kotas = '11';
        } elseif (strtoupper($kta->name) == 'KEMANG') {
            $kotas = '12';
        } elseif (strtoupper($kta->name) == 'BOJONG GEDE') {
            $kotas = '13';
        } elseif (strtoupper($kta->name) == 'LEUWI LIANG') {
            $kotas = '14';
        } elseif (strtoupper($kta->name) == 'CIAMPEA') {
            $kotas = '15';
        } elseif (strtoupper($kta->name) == 'CIBUNGBULANG') {
            $kotas = '16';
        } elseif (strtoupper($kta->name) == 'PAMIJAHAN') {
            $kotas = '17';
        } elseif (strtoupper($kta->name) == 'RUMPIN') {
            $kotas = '18';
        } elseif (strtoupper($kta->name) == 'JASINGA') {
            $kotas = '19';
        } elseif (strtoupper($kta->name) == 'PARUNG PANJANG') {
            $kotas = '20';
        } elseif (strtoupper($kta->name) == 'CIGUDEG') {
            $kotas = '21';
        } elseif (strtoupper($kta->name) == 'NANGGUNG') {
            $kotas = '22';
        } elseif (strtoupper($kta->name) == 'TENJO') {
            $kotas = '23';
        } elseif (strtoupper($kta->name) == 'CIAWI') {
            $kotas = '24';
        } elseif (strtoupper($kta->name) == 'CISARUA') {
            $kotas = '25';
        } elseif (strtoupper($kta->name) == 'MEGAMENDUNG') {
            $kotas = '26';
        } elseif (strtoupper($kta->name) == 'CARINGIN') {
            $kotas = '27';
        } elseif (strtoupper($kta->name) == 'CIJERUK') {
            $kotas = '28';
        } elseif (strtoupper($kta->name) == 'CIOMAS') {
            $kotas = '29';
        } elseif (strtoupper($kta->name) == 'DRAMAGA') {
            $kotas = '30';
        } elseif (strtoupper($kta->name) == 'TAMANSARI') {
            $kotas = '31';
        } elseif (strtoupper($kta->name) == 'KLAPANUNGGAL') {
            $kotas = '32';
        } elseif (strtoupper($kta->name) == 'CISEENG') {
            $kotas = '33';
        } elseif (strtoupper($kta->name) == 'RANCABUNGUR') {
            $kotas = '34';
        } elseif (strtoupper($kta->name) == 'SUKAJAYA') {
            $kotas = '35';
        } elseif (strtoupper($kta->name) == 'TANJUNG SARI') {
            $kotas = '36';
        } elseif (strtoupper($kta->name) == 'TAJUR HALANG') {
            $kotas = '37';
        } elseif (strtoupper($kta->name) == 'CIGOMBONG') {
            $kotas = '38';
        } elseif (strtoupper($kta->name) == 'LEUWISADENG') {
            $kotas = '39';
        } elseif (strtoupper($kta->name) == 'TENJOLAYA') {
            $kotas = '40';
        }else{
            $kotas = $kta->id;
        }
//        $formattedNumber = str_pad($kotas, 3, '0', STR_PAD_LEFT);
        $profiles = User::with('profiles')->where('id', auth()->user()->id)->first();
        $profiles->update([
            'name' => $request->username,
            'email' => $request->email,
        ]);
        $bulan = date('m');
//        tahunnya ambil 2 di belakang tahun sekarang + 5 tahun

        $nokota = User::leftJoin('profiles', 'profiles.user_id', '=', 'users.id')
                ->where('city_id', $kota)->count() + 1;
        $no_urut_kota = sprintf("%03d", $nokota + 1);
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

        if ($request->nraupdate == '') {
            $nra = '1022' . $kotas . $no_urut_kota . $no_urut ;
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
                'NRA' => $nra,
                'photo' => $nama_file,
                'valid_thru' => $bulan . '/' . $tahun,
                'tempat_bertugas' => $request->tempat_bertugas
            ]);
        } else {
            $nra = $request->nraupdate;
            Profile::where('NRA',$request->nraupdate)->update([
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
                'photo' => $nama_file,
                'valid_thru' => $bulan . '/' . $tahun,
                'tempat_bertugas' => $request->tempat_bertugas
            ]);
        }


        $datas = [
            'api_key' => 'uuh33HHGq2yMxyxOFqfY3zgctLjNjp',
            'sender' => '6285880255326',
            'number' => $request->wa,
            'message' => 'Terima kasih telah mendaftar menjadi anggota FPPPK Kabupaten Bogor. Harap tunggu 1 x 24 jam data Anda sedang diverifikasi. Jika disetujui Anda akan mendapatkan notifikasi selanjutnya melalui whatsapp ini, Terima kasih, Salam Sejahtera. *'.'FPPPK Kabupaten Bogor'.'*.'
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
        return $pdf->download('KTA-FPPPK-' . $profile->profiles->NRA . '.pdf');
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
    public function destroy($id)
    {
        Profile::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('user.index');
    }
}
