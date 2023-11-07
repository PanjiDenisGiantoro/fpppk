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

//        dd($request->all());
        $bulan = date('m');
        $tahun = date('Y');
        $kota = $request->city_id;
        $nokota = User::leftJoin('profiles', 'profiles.user_id', '=', 'users.id')
            ->where('city_id', $kota)->count()+1;
//        $kota + 3 digit angka max $nokota
        $no_urut_kota = sprintf("%03d", $nokota + 1);
        $max = User::max('id');
        $no_urut = sprintf("%04d", $max + 1);

//        jika ada gambar upload
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
            'district_id' => $request->village_id,
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
            'NRA' => '1022'.$kota.$no_urut_kota. $no_urut,
            'photo' => $nama_file
        ]);


        $data = [
            'api_key' => 'uuh33HHGq2yMxyxOFqfY3zgctLjNjp',
            'sender' => '089522900800',
            'number' => $request->wa,
            'message' => 'Terima kasih telah mendaftar di FPPPK. Berikut adalah kode registrasi anda : ' . $bulan . $tahun . $nokota . $no_urut . ' . Silahkan masukkan kode tersebut untuk melengkapi pendaftaran anda. Terima kasih',
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
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
//        echo $response;

        Alert::success('Berhasil', 'Data Berhasil Disimpan');
        return redirect()->route('profile');

    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        $profile = User::with('profiles')->where('id', auth()->user()->id)->first();
        $kecamatan = District::where('id', $profile->profiles->district_id)->first();

        $pdf = PDF::loadView('profile_backend.cetak', compact('profile','kecamatan'));
        return $pdf->download('invoice.pdf');
//        $image = $pdf->output();
//        $response = response()->make($image, 200);
//        $response->header('Content-Type', 'image/png');
//        $response->header('Content-Disposition', 'inline; filename=invoice.png'); // Change the filename as needed
//        return $response;

//        $html = view('profile_backend.cetak', compact('profile','kecamatan'))->render();
//
//        Browsershot::html($html)
//            ->format('png')
//            ->save(public_path('images/generated.png'));

    }
    public function view(Request $request){


        $profile = User::with('profiles')->where('id', auth()->user()->id)->first();
        $provinsi = Province::where('id', $profile->profiles->province_id)->first();
        $kota = City::where('id', $profile->profiles->city_id)->first();
        $kecamatan = District::where('id', $profile->profiles->district_id)->first();
        $desa = Village::where('id', $profile->profiles->village_id)->first();
//        dd($provinsi);
//        $pdf = Pdf::loadView('profile_backend.view' );
//        return $pdf->download('invoice.pdf');
        return view('profile_backend.lihat', compact('profile','provinsi','kota','kecamatan','desa'));
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


        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'foto';
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = $profile->photo;
        }
        $data = Profile::where('user_id', auth()->user()->id)->first()->update([
                'user_id' => auth()->user()->id,
                'degree' => $request->degree,
                'place' => $request->place,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'province_id' => $request->province_id,
                'city_id' => $request->district_id,
                'district_id' => $request->village_id,
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
        Alert::success('Berhasil', 'Data Berhasil Diupdate');
        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
