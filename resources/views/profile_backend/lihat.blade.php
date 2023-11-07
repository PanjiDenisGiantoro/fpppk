@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="main">
        <div class="main-content">

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="box user-pro-list overflow-hidden mb-30">
                    <div class="box-body">
                        <div class="user-pic text-center">
                            <div class="avatar ">
                                <img src="foto/{{$profile->profiles->photo ?? ''}}" alt="" style="width: 200px">
                            </div>
                            <div class="pro-user mt-3">
                                <h5 class="pro-user-username text-dark mb-2 fs-15 mt-42 color-span">{{ $profile->name }}</h5>
                                <h6 class="pro-user-desc text-muted fs-14">{{ $profile->email }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer pt-41">
                        <div class="btn-list text-center">
                            <a href="{{ $profile->profiles->telegram ?? '#' }}" class="btn btn-light">
                                <i class="fab fa-telegram"></i>

                            </a>
                            <a href="{{ $profile->profiles->fb ?? '#' }}" class="btn btn-light">
                                <i class="fab fa-facebook"></i>

                            </a>
                            <a href="#{{ $profile->profiles->ig ?? '#' }}" class="btn btn-light">
                                <i class="fab fa-instagram"></i>

                            </a>
                            <a href="{{ $profile->profiles->tw ?? '#' }}" class="btn btn-light">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="{{ $profile->profiles->linkedin ?? '#' }}" class="btn btn-light">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box left-dot">
                    <div class="box-header  border-0 pd-0">
                        <div class="box-title fs-20 font-w600">User Details</div>
                    </div>
                    <div class="box-body pt-20 user-profile">
                        <div class="table-responsive">
                            <table class="table mb-0 mw-100 color-span">
                                <tbody>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">NRA </span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->NRA }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Gelar</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->degree ?? '-' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Agama</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->religion ?? '-' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Alamat</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->address ?? '-' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Provinsi</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $provinsi->name ?? '' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Kecamatan</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $provinsi->name ?? '' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Kota</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $kota->name ?? '' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Kecamatan</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $kecamatan->name ?? '' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Desa</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $desa->name ?? '' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">RT / RW</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->rtrw ?? '' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Status</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">
                                            @if ($profile->profiles->status == 'PNS')
                                                PNS
                                            @elseif($profile->profiles->status == 'PPPK')
                                                PPPK ({{ $profile->profiles->tahun }})
                                            @elseif($profile->profiles->status == 'Honorer')
                                                Honorer ({{ $profile->profiles->tipe }})
                                            @endif
                                        </span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">No Hp</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->phone_number ?? '-' }}</span> </td>
                                </tr>

                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">No WA</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->wa ?? '-' }}</span> </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>

                        <a href="{{ url('cetak') }}" class="btn btn-primary btn-block mt-3 ">Cetak kartu</a>
                     </div>
                </div>
            </div>
        </div>

        </div>
    </div>
@endsection
