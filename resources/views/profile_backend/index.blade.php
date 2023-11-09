@extends('dashboard')
@section('content')
    <div class="main">

        <div class="main-content">
            <section class="login singup">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header d-flex justify-content-between">
                                <div class="">
                                    <a href="#">
                                        <img src="assets_backend/images/logo.png" alt=""
                                             style=" max-width: 100%;height: auto;">
                                    </a>
                                </div>
                                <div class="action-reg">
                                    <h4 class="fs-30">Register</h4>

                                </div>

                            </div>
                            <div class="line"></div>
                            <div class="box-body">
                                <div class="auth-content my-auto">
                                    <form class="mt-6 pt-2" id="myForm"
                                          @if(empty($user->profiles))
                                              method="post"
                                          action="{{ route('profile.store') }}">
                                        @else
                                            method="post"
                                            action="{{ route('profile.update', $user->profiles->id) }}"
                                            enctype="multipart/form-data">
                                        @endif
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label mb-14">Nama</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                   onkeyup="myFunction()"
                                                   placeholder="Your Name" value="{{ Auth::user()->name }}" autofocus>
                                        </div>
                                        <div class="mb-3 mt-24">
                                            <label class="form-label mb-14">Gelar</label>
                                            <input type="text" class="form-control" id="gelar" name="gelar"
                                                   placeholder="S.Pd" value="{{ $user->profiles->gelar ?? '' }}"
                                                   autofocus>
                                        </div>
                                        <div class="mb-3 mt-24">
                                            <label for="useremail" class="form-label mb-14">E-Mail</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Your Email" value="{{ Auth::user()->email }}">
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Pendidikan</label>
                                            <select name="degree" id="degree" class="form-control select2">

                                                @if(empty($user->profiles))
                                                    <option value="">Pilih</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="SMK">SMK</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>

                                                @else
                                                    <option value="SMA"
                                                            @if($user->profiles->degree == 'SMA')
                                                                selected
                                                        @endif

                                                    >SMA
                                                    </option>
                                                    <option value="SMA

                                                 @if($user->profiles->degree == 'SMK')
                                                    selected
                                                @endif
                                                ">SMK
                                                    </option>
                                                    <option value="D3"

                                                            @if($user->profiles->degree == 'D3')
                                                                selected
                                                        @endif
                                                    >D3
                                                    </option>
                                                    <option value="S1"

                                                            @if($user->profiles->degree == 'S1')
                                                                selected
                                                        @endif
                                                    >S1
                                                    </option>
                                                    <option value="S2"

                                                            @if($user->profiles->degree == 'S2')
                                                                selected
                                                        @endif
                                                    >S2
                                                    </option>
                                                    <option value="S3"

                                                            @if($user->profiles->degree == 'S3')
                                                                selected
                                                        @endif
                                                    >S3
                                                    </option>

                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="place"
                                                   placeholder="Tempat Lahir" name="place"
                                                   value="{{ $user->profiles->place ?? '' }}"
                                            >
                                        </div>

                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="date_of_birth"
                                                   value="{{ $user->profiles->date_of_birth ?? '' }}"
                                                   name="date_of_birth">
                                        </div>

                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Jenis Kelamin</label>
                                            <select name="gender" id="gender" class="form-control select2">
                                                @if(empty($user->profiles->gender))
                                                    <option value="">Pilih</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                @else
                                                    <option value="L"
                                                            @if($user->profiles->gender == 'L')
                                                                selected
                                                        @endif
                                                    >Laki-laki
                                                    </option>
                                                    <option value="P"
                                                            @if($user->profiles->gender == 'P')
                                                                selected
                                                        @endif
                                                    >Perempuan
                                                    </option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Agama</label>
                                            <select name="religion" id="religion" class="form-control select2">

                                                @if(empty($user->profiles->religion))
                                                    <option value="">Pilih</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                @else
                                                    <option value="Islam"
                                                            @if($user->profiles->religion == 'Islam')
                                                                selected
                                                        @endif
                                                    >Islam
                                                    </option>
                                                    <option value="Kristen"
                                                            @if($user->profiles->religion == 'Kristen')
                                                                selected
                                                        @endif
                                                    >Kristen
                                                    </option>
                                                    <option value="Katolik"
                                                            @if($user->profiles->religion == 'Katolik')
                                                                selected
                                                        @endif
                                                    >Katolik
                                                    </option>
                                                    <option value="Hindu"

                                                            @if($user->profiles->religion == 'Hindu')
                                                                selected
                                                        @endif
                                                    >Hindu
                                                    </option>
                                                    <option value="Budha"
                                                            @if($user->profiles->religion == 'Budha')
                                                                selected
                                                        @endif
                                                    >Budha
                                                    </option>
                                                    <option value="Konghucu"

                                                            @if($user->profiles->religion == 'Konghucu')
                                                                selected
                                                        @endif
                                                    >Konghucu
                                                    </option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Alamat</label>
                                            <input type="text" class="form-control" id="address"
                                                   placeholder="Alamat" value="{{ $user->profiles->address ?? '' }}"
                                                   name="address">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Provinsi</label>
                                            @php
                                                $provinces = new App\Http\Controllers\AreaController;
                                                $provinces= $provinces->provinces();
                                            @endphp
                                            @if(empty($user->profiles->province_id))
                                                <select class="form-control select2" name="province_id" id="provinsi">
                                                    <option value="">==Pilih Salah Satu==</option>
                                                    @foreach ($provinces as $item)
                                                        <option
                                                            value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <select class="form-control select2" name="province_id" id="provinsi">
                                                    <option value="">==Pilih Salah Satu==</option>
                                                    @foreach ($provinces as $item)
                                                        <option
                                                            value="{{ $item->id ?? '' }}"
                                                            @if($user->profiles->province_id == $item->id)
                                                                selected
                                                            @endif
                                                        >{{ $item->name ?? '' }}</option>
                                                    @endforeach
                                                </select>
                                            @endif

                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Kabupaten / Kota</label>
                                            <select class="form-control select2" name="city_id" id="kota">
                                                <option value="">Pilih</option>
                                                @if(!empty($user->profiles->city_id))
                                                    @php
                                                  $city =   \Illuminate\Support\Facades\DB::table('indonesia_cities')->where('id', $user->profiles->city_id)->first(
                                                    );
                                                  $cityget =  \Illuminate\Support\Facades\DB::table('indonesia_cities')->where('province_code', $city->province_code)->get(
                                                    );

                                                    @endphp
                                                    @foreach($cityget as $get)
                                                        <option value="{{ $get->id }}"
                                                                @if($user->profiles->city_id == $get->id)
                                                                selected
                                                            @endif
                                                        >{{ $get->name }}</option>

                                                    @endforeach
                                                @endif
                                            </select>

                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Kecamatan</label>
                                            <select class="form-control select2" name="district_id" id="kecamatan">
                                                <option value="">Pilih</option>

                                                @if(!empty($user->profiles->district_id))
                                                    @php
                                                        $kecam =   \Illuminate\Support\Facades\DB::table('indonesia_districts')->where('id', $user->profiles->district_id)->first(
                                                          );
                                                        $district_get =  \Illuminate\Support\Facades\DB::table('indonesia_districts')->where('city_code', $kecam->city_code)->get(
                                                          );

                                                    @endphp
                                                    @foreach($district_get as $get)
                                                        <option value="{{ $get->id }}"
                                                                @if($user->profiles->district_id == $get->id)
                                                                    selected
                                                            @endif
                                                        >{{ $get->name }}</option>

                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Kelurahan / Desa</label>

                                            <select class="form-control select2" name="village_id" id="desa">
                                                <option value="">Pilih</option>
                                                @if(!empty($user->profiles->village_id))
                                                    @php
                                                        $villa =   \Illuminate\Support\Facades\DB::table('indonesia_villages')->where('id', $user->profiles->village_id)->first(
                                                          );
                                                        $vvilla_get =  \Illuminate\Support\Facades\DB::table('indonesia_villages')->where('district_code', $villa->district_code)->get(
                                                          );
                                                    @endphp
                                                    @foreach($vvilla_get as $get)
                                                        <option value="{{ $get->id }}"
                                                                @if($user->profiles->village_id == $get->id)
                                                                    selected
                                                            @endif
                                                        >{{ $get->name }}</option>

                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">RT / RW</label>
                                            <input type="text" class="form-control" name="rtrw" id="rt"
                                                   value="{{ $user->profiles->rtrw ?? '' }}">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Status</label>
                                            @if(empty($user->profiles))
                                                <option value="">Pilih</option>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Pilih</option>
                                                    <option value="PNS">PNS</option>
                                                    <option value="PPPK">PPPK</option>
                                                    <option value="Honorer">Honorer</option>
                                                </select>
                                            @else
                                                <select name="status" id="status" class="form-control">
                                                    <option value="PNS"
                                                            @if(!empty($user->profiles->status == 'PNS'))
                                                                selected
                                                        @endif
                                                    >PNS
                                                    </option>
                                                    <option value="PPPK"
                                                            @if(!empty($user->profiles->status == 'PPPK'))
                                                                selected
                                                        @endif

                                                    >ASN PPPK
                                                    </option>
                                                    <option value="Honorer"
                                                            @if(!empty($user->profiles->status == 'Honorer'))
                                                                selected
                                                        @endif
                                                    >Honorer
                                                    </option>
                                                </select>
                                        </div>
                                        @if(!empty($user->profile))
                                            @if($user->profiles->status == 'PPPK')
                                                <script>
                                                    $(document).ready(function () {
                                                        $('.pppk').show();
                                                    });
                                                </script>
                                            @endif
                                            @if($user->profiles->status == 'Honorer')
                                                <script>
                                                    $(document).ready(function () {

                                                        $('.honorer').show();
                                                    });
                                                </script>
                                            @endif
                                        @endif
                                        @endif
                                        <div class="mb-3  mt-24 pppk"

                                             @if(empty($user->profiles))
                                                 style="display: none"
                                             @else
                                                 @if($user->profiles->status == 'PPPK')
                                                     style="display: block"
                                             @else
                                                 style="display: none"
                                            @endif
                                            @endif

                                        >
                                            <label class="form-label mb-14">TA PPPK</label>
                                            <select name="tahun" id="tahun" class="form-control">

                                                @if(!empty($user->profiles))

                                                    <option value="2021"
                                                            @if($user->profiles->tahun == '2021')
                                                                selected
                                                        @endif
                                                    >2021
                                                    </option>
                                                    <option value="2022"
                                                            @if($user->profiles->tahun == '2022')
                                                                selected
                                                        @endif
                                                    >2022
                                                    </option>
                                                    <option value="2023"
                                                            @if($user->profiles->tahun == '2023')
                                                                selected
                                                        @endif
                                                    >2023
                                                    </option>
                                                @else
                                                    <option value="">Pilih</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3  mt-24 guru"
                                             @if(empty($user->profiles))
                                                 style="display: none"
                                             @else
                                                 @if($user->profiles->status == 'Honorer')
                                                     style="display: block"
                                             @else
                                                 style="display: none"
                                            @endif
                                            @endif
                                        >
                                            <label class="form-label mb-14">Tipe Guru</label>
                                            <select name="tipe" id="tipe" class="form-control">

                                                @if(!empty($user->profiles))
                                                @if($user->profiles->tipe == 'Guru Mapel')
                                                    <option value="Guru Mapel"
                                                            @if($user->profiles->tipe == 'Guru Mapel')
                                                                selected
                                                        @endif
                                                    >Guru Mapel
                                                    </option>
                                                    <option value="Guru Kelas"
                                                            @if($user->profiles->tipe == 'Guru Kelas')
                                                                selected
                                                        @endif
                                                    >Guru Kelas
                                                    </option>
                                                @else
                                                <option value="Pilih">Pilih</option>
                                                <option value="Guru Mapel">Guru Mapel</option>
                                                <option value="Guru Kelas">Guru Kelas</option>
                                                    @endif
                                                    @endif
                                            </select>
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">No Telepon</label>
                                            <input type="text" class="form-control" name="phone_number"
                                                   value="{{ $user->profiles->phone_number ?? '' }}"
                                                   id="phone_number">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">No Whatsapp</label>
                                            <input type="text" class="form-control" name="wa" id="wa"
                                                   value="{{ $user->profiles->wa ?? '' }}">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Facebook</label>
                                            <input type="text" class="form-control" name="fb" id="fb"
                                                   value="{{ $user->profiles->fb ?? '' }}">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Instagram</label>
                                            <input type="text" class="form-control" name="ig" id="ig"
                                                   value="{{ $user->profiles->ig ?? '' }}">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Tiktok</label>
                                            <input type="text" class="form-control" name="tiktok" id="tiktok"
                                                   value="{{ $user->profiles->tiktok ?? '' }}">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">LinkedIn</label>
                                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                                   value="{{ $user->profiles->linkedin ?? '' }}">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Telegram</label>
                                            <input type="text" class="form-control" name="telegram" id="telegram"
                                                   value="{{ $user->profiles->telegram ?? '' }}">
                                        </div>
                                        <div class="mb-3  mt-24">
                                            <label class="form-label mb-14">Foto
{{--                                                <span--}}
{{--                                                    style="font-size: 12px;color: red">Ukuran gambar 500 KB</span>--}}
                                            </label>
                                            <input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="250000000"/>
                                            <input type="file" class="form-control" name="foto" id="inputImageFile"
                                                   accept="image/*" onchange="loadFile(event)">
                                        </div>
                                        <img id="output" width="100" height="100"/>
                                        <div class="mb-3 mt-29">

                                            <button
                                                class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                                                id="store"
                                                type="submit">
                                                @if(!empty($user->profiles))
                                                    Update
                                                @else
                                                    Simpan
                                                @endif
                                            </button>
                                        </div>
                                    </form>
                                    <div class="mt-37 text-center">

                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white">
                                                    <i class='bx bxl-facebook-square'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                    <i class='bx bxl-linkedin-square'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                    <i class='bx bxl-google-plus'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        function compressImage(inputFile, maxWidth, maxHeight, outputFormat, quality, callback) {
            const reader = new FileReader();
            reader.onload = function (event) {
                const image = new Image();
                image.src = event.target.result;
                image.onload = function () {
                    const canvas = document.createElement('canvas');
                    let width = image.width;
                    let height = image.height;

                    // Menyesuaikan ukuran gambar sesuai dengan maxWidth dan maxHeight yang ditentukan
                    if (width > maxWidth) {
                        height *= maxWidth / width;
                        width = maxWidth;
                    }
                    if (height > maxHeight) {
                        width *= maxHeight / height;
                        height = maxHeight;
                    }

                    canvas.width = width;
                    canvas.height = height;

                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(image, 0, 0, width, height);

                    // Mengubah gambar hasil kompresi ke format yang ditentukan (e.g., 'image/jpeg')
                    const compressedDataUrl = canvas.toDataURL(outputFormat, quality / 100);

                    // Memanggil callback dengan gambar yang telah dikompresi
                    callback(compressedDataUrl);
                };
            };

            reader.readAsDataURL(inputFile);
        }


        const inputImageFile = document.getElementById('inputImageFile'); // Ganti dengan elemen input gambar Anda
        const maxWidth = 800; // Lebar maksimum gambar yang diinginkan
        const maxHeight = 600; // Tinggi maksimum gambar yang diinginkan
        const outputFormat = 'image/jpeg'; // Format output gambar
        const quality = 50; // Kualitas gambar (0-100)

        inputImageFile.addEventListener('change', function (event) {
            const inputFile = event.target.files[0];
            if (inputFile) {
                compressImage(inputFile, maxWidth, maxHeight, outputFormat, quality, function (compressedDataUrl) {
                    const compressedImageElement = document.getElementById('compressedImage');
                    compressedImageElement.src = compressedDataUrl;
                });
            }
        });

        function myFunction() {
            var x = document.getElementById("username");
            x.value = x.value.toUpperCase();
        }

        function myFunction_gelar() {
            var x = document.getElementById("gelar");
            x.value = x.value.toUpperCase();
        }

        $(document).ready(function () {
            // $('.select2').select2();
        });
        var loadFile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        let status = $('#status').val();

        $('#status').change(function () {
            let status = $('#status').val();
            if (status == 'Honorer') {
                $('.guru').show();
            } else {
                $('.guru').hide();
            }

            if (status == 'PPPK') {
                $('.pppk').show();
            } else {
                $('.pppk').hide();
            }

        })

        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function (data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>==Pilih Salah Satu==</option>');
                    $.each(data, function (key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }

        $(function () {
            $('#provinsi').on('change', function () {
                onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function () {
                onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function () {
                onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
            })
        });


    </script>

@endpush

