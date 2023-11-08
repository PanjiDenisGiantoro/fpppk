<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
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


        $profiles = User::with('profiles')->where('id', auth()->user()->id)->first();
        $profiles->update([
            'name' => $request->username,
            'email' => $request->email,
        ]);
        $bulan = date('m');
//        tahunnya ambil 2 di belakang tahun sekarang + 5 tahun
        $tahun = date('y') + 5;
        $kota = $request->city_id;
        $nokota = User::leftJoin('profiles', 'profiles.user_id', '=', 'users.id')
                ->where('city_id', $kota)->count() + 1;
        $no_urut_kota = sprintf("%02d", $nokota + 1);
        $max = User::max('id');
        $no_urut = sprintf("%04d", $max + 1);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'foto';
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = 'default.png';
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
            'NRA' => '1022' . $kota . $no_urut_kota . $no_urut,
            'photo' => $nama_file,
            'valid_thru' => $bulan . '/' .$tahun ,
        ]);
        $datas = [
            'api_key' => 'uuh33HHGq2yMxyxOFqfY3zgctLjNjp',
            'sender' => '6289522900800',
            'number' => $request->wa,
            'message' => 'Terima kasih telah mendaftar di FPPPK. Berikut adalah kode registrasi anda : ' . $data->NRA . ' .Terima kasih',
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
        return $pdf->download('invoice.pdf');
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
            'photo' => $nama_file
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
