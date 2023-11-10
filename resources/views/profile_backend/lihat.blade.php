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
                                <img src="foto/{{$profile->profiles->photo ?? ''}}" alt="" style="width: 150px;height:150px">
                            </div>
                            <div class="text-center ">
                                <h5 class="pro-user-username text-dark  fs-15 mt-42 color-span" style="margin-left: 36px">{{ $profile->name }} {{ $profile->profiles->gelar ?? '' }}</h5>
                            </div>
                            <div class="pro-user mt-1">

                                <h6 class="pro-user-desc text-muted fs-14" style="margin-left: 36px">{{ $profile->email }}</h6>
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
                            <a href="{{ $profile->profiles->ig ?? '#' }}" class="btn btn-light">
                                <i class="fab fa-instagram"></i>

                            </a>
                            <a href="{{ $profile->profiles->tiktok ?? '#' }}" class="btn btn-light">
                                <i class="fab fa-tiktok"></i>
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
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->rtrw ?? '' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Status</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">
                                            @if ($profile->profiles->status == 'PNS')
                                                ASN
                                            @elseif($profile->profiles->status == 'PPPK')
                                                ASN PPPK ({{ $profile->profiles->tahun }})
                                            @elseif($profile->profiles->status == 'Honorer')
                                                Honorer ({{ $profile->profiles->tipe }})
                                            @endif
                                        </span> </td>
                                </tr>

                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">Tempat Bertugas </span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->tempat_bertugas ??'' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">No Telepon</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->phone_number ?? '-' }}</span> </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0"> <span class="w-50">No WA</span> </td>
                                    <td>:</td>
                                    <td class="py-2 px-0"> <span class="">{{ $profile->profiles->wa ?? '-' }}</span> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <button id="openModal"class="btn btn-primary btn-block mt-3 ">Lihat Kartu</button>
                    </div>
                     </div>

                <style>
                    .modal {
                        display: none;
                        position: fixed;
                        z-index: 99;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        overflow: auto;
                        background-color: rgba(0, 0, 0, 0.7);
                    }

                    .modal-content {
                        background-color: #fefefe;
                        margin: 15% auto;
                        padding: 20px;
                        border: 1px solid #888;
                        width: 80%;
                        max-width: 800px;
                        position: relative;
                    }

                    .close {
                        position: absolute;
                        right: 10px;
                        top: 10px;
                        font-size: 20px;
                        font-weight: bold;
                        color: #888;
                        cursor: pointer;
                    }

                    iframe {
                        width: 100%;
                        height: 500px;
                        border: none;
                    }
                </style>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <!-- <iframe id="modalIframe" src=""></iframe> -->
                        <iframe src="http://localhost:8000/cetak2"></iframe>
                        @if($profile->profiles->is_valid == 1)
                        <a href="{{ url('cetak1') }}" class="btn btn-primary btn-block mt-3 ">Cetak kartu</a>
                        @endif
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog
                    modal-dialog-centered
                    " role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                            </div>
                        </div>
                    </div>
                </div>
                </div>


{{--            modal exampleModal--}}


        </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Get references to elements
        var openModalButton = document.getElementById("openModal");
        var modal = document.getElementById("myModal");
        var closeModalSpan = document.getElementsByClassName("close")[0];
        var modalIframe = document.getElementById("modalIframe");

        // When the "Open Modal" button is clicked, display the modal
        openModalButton.onclick = function() {
            modal.style.display = "block";
            modalIframe.src = "{{ route('profile.show2') }}"; // Replace with the URL of your HTML document
        }

        // When the user clicks the "x" to close the modal
        closeModalSpan.onclick = function() {
            modal.style.display = "none";
            modalIframe.src = ""; // Clear the iframe src
        }

        // When the user clicks outside the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                modalIframe.src = ""; // Clear the iframe src
            }
        }
    </script>
@endpush
