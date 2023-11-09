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

class UserController extends Controller
{
    public function index()
    {
        $valid = Profile::where('is_valid', 1)->count();
        $novalid = Profile::where('is_valid', 0)->count();

        $user = Profile::with('user','kecamatan','kotas','desas','provinces')->where('NRA','!=',null)
            ->latest()->get();
        return view('admin.index', compact('user','valid','novalid'));
    }
    public function show($id)
    {
        $user = Profile::with('user','kecamatan')->where('id',$id)->first();

        return view('admin.show', compact('user','provinsi','kota','kecamatan','desa'));
    }
    public function update($id)
    {
        $user = Profile::where('id',$id)->first();
        $user->update([
            'is_valid' => 1,
        ]);

        $datas = [
            'api_key' => 'uuh33HHGq2yMxyxOFqfY3zgctLjNjp',
            'sender' => '6289522900800',
            'number' => $user->wa,
            'message' => '
Selamat data anda Berhasil di verifikasi menjad anggota FPPPK Kabupaten Bogor dengan nomor anggota anda adalah '.$user->NRA.'. Harap download dan cetak kartu anggota anda dan silahkan bergabung ke grup WhatsApp dengan link berikut
Terima Kasih,  Salam Perjuangan.',
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

        Alert::success('Berhasil', 'Data berhasil di verifikasi');
        return redirect()->route('user.index');
    }
}
