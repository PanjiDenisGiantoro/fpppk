@extends('dashboard')
@section('content')
    <div class="main">
        <div class="main-content user">
            <div class="row">
                <div class="col-9 col-xl-12">
                    <div class="box card-box mb-20">
                        <div class="icon-box bg-color-1">
                            <div class="icon bg-icon-1">
                                <i class='bx bxs-briefcase'></i>
                            </div>
                            <div class="content">
                                <h5 class="title-box fs-15 mt-2">Total Pending Verifikasi</h5>
                                <div class="themesflat-counter fs-14 font-wb color-1">
                                    <span class="number" data-from="0" data-to="1225" data-speed="2500"
                                          data-inviewport="yes">{{$valid}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box bg-color-2">
                            <div class="icon bg-icon-2">
                                <i class='bx bx-task'></i>
                            </div>
                            <div class="content click-c">
                                <h5 class="title-box fs-15 mt-2">Total Berhasil Verifikasi</h5>
                                <div class="themesflat-counter fs-14 font-wb color-2">
                                    <span class="number" data-from="0" data-to="309" data-speed="2500"
                                          data-inviewport="yes">{{$novalid}}</span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <div id="task-profile_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table
                                                class="table table-vcenter text-nowrap table-bordered dataTable no-footer"
                                                id="task-profile" role="grid">
                                                <thead>
                                                <tr class="top">
                                                    <th class="border-bottom-0 text-center sorting fs-14 font-w500"
                                                        tabindex="0" aria-controls="task-profile" rowspan="1"
                                                        colspan="1" style="width: 26.6562px;">No
                                                    </th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 87.9844px;">NRA
                                                    </th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 222.312px;">Nama
                                                    </th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 84.8281px;">Email
                                                    </th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 87.9844px;">No Wa
                                                    </th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 71.875px;">Kecamatan
                                                    </th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 110.719px;">Status
                                                    </th>
                                                    <th class="border-bottom-0 sorting_disabled fs-14 font-w500"
                                                        rowspan="1" colspan="1" style="width: 145.391px;">Aksi
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($no = 1)
                                                @foreach($user as $list)
                                                    <tr class="odd">
                                                        <td class="text-center">{{$no++}}</td>
                                                        <td>
                                                            <a href="#" class="d-flex ">
                                                                <span>{{ $list->NRA ?? ''}}</span> </a>
                                                        </td>
                                                        <td>{{ $list->user->name ?? ''}}</td>
                                                        <td>{{ $list->user->email ?? ''}}</td>
                                                        <td>{{ $list->wa ?? ''}}</td>
                                                        <td>
                                                            <div>
                                                                {{ $list->kecamatan->name ?? '' }}
                                                            </div>
                                                        </td>
                                                        <td>

                                                        <span class="badge
                                                         @if($list->is_valid == 0)
                                                         badge-danger
                                                            @else
                                                                badge-success
                                                            @endif
                                                        ">
                                                             @if($list->is_valid == 0)
                                                                Belum Verifikasi
                                                            @else
                                                                Verifikasi
                                                            @endif
                                                        </span>
                                                        </td>
                                                        <td>
                                                            {{--                                                        button modal--}}
                                                            <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#exampleModalCenter{{$list->id}}">
                                                                Detail
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div id="exampleModalCenter{{$list->id}}"
                                                         class="modal custom-modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Detail</h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post" action="{{ url('user/confirm/'.$list->id) }}">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <input type="hidden" value="{{ $list->id }}" name="id">
                                                                            <label class="form-label mb-14">Nama</label>
                                                                            <input type="text" class="form-control" disabled
                                                                                   id="username" name="username"disabled
                                                                                   onkeyup="myFunction()"
                                                                                   placeholder="Your Name"
                                                                                   value="{{ $list->user->name ?? '' }}"
                                                                                   autofocus>
                                                                        </div>
                                                                        <div class="mb-3 mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Gelar</label>
                                                                            <input type="text" class="form-control"
                                                                                   id="gelar" name="gelar"disabled
                                                                                   placeholder="S.Pd"
                                                                                   value="{{ $list->gelar ?? '' }}"
                                                                                   autofocus>
                                                                        </div>
                                                                        <div class="mb-3 mt-24">
                                                                            <label for="useremail"
                                                                                   class="form-label mb-14">E-Mail</label>
                                                                            <input type="email" class="form-control"
                                                                                   id="email" name="email"disabled
                                                                                   placeholder="Your Email"
                                                                                   value="{{ $list->user->email ?? ''}}">
                                                                            <div class="invalid-feedback">
                                                                                Please Enter Email
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Pendidikan</label>
                                                                            <select name="degree" id="degree"
                                                                                    class="form-control select2"disabled>
                                                                                @if(empty($list))
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="SMA">SMA</option>
                                                                                    <option value="SMK">SMK</option>
                                                                                    <option value="D3">D3</option>
                                                                                    <option value="S1">S1</option>
                                                                                    <option value="S2">S2</option>
                                                                                    <option value="S3">S3</option>

                                                                                @else
                                                                                    <option value="SMA"
                                                                                            @if($list->degree == 'SMA')
                                                                                                selected
                                                                                        @endif

                                                                                    >SMA
                                                                                    </option>
                                                                                    <option value="SMA

                                                 @if($list->degree == 'SMK')
                                                    selected
                                                @endif
                                                ">SMK
                                                                                    </option>
                                                                                    <option value="D3"

                                                                                            @if($list->degree == 'D3')
                                                                                                selected
                                                                                        @endif
                                                                                    >D3
                                                                                    </option>
                                                                                    <option value="S1"

                                                                                            @if($list->degree == 'S1')
                                                                                                selected
                                                                                        @endif
                                                                                    >S1
                                                                                    </option>
                                                                                    <option value="S2"

                                                                                            @if($list->degree == 'S2')
                                                                                                selected
                                                                                        @endif
                                                                                    >S2
                                                                                    </option>
                                                                                    <option value="S3"

                                                                                            @if($list->degree == 'S3')
                                                                                                selected
                                                                                        @endif
                                                                                    >S3
                                                                                    </option>

                                                                                @endif
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-3  mt-24">
                                                                            <label class="form-label mb-14">Tempat
                                                                                Lahir</label>
                                                                            <input type="text" class="form-control"
                                                                                   id="place"disabled
                                                                                   placeholder="Tempat Lahir"
                                                                                   name="place"
                                                                                   value="{{ $list->place ?? '' }}"
                                                                            >
                                                                        </div>

                                                                        <div class="mb-3  mt-24">
                                                                            <label class="form-label mb-14">Tanggal
                                                                                Lahir</label>
                                                                            <input type="date" class="form-control"
                                                                                   id="date_of_birth"disabled
                                                                                   value="{{ $list->date_of_birth ?? '' }}"
                                                                                   name="date_of_birth">
                                                                        </div>

                                                                        <div class="mb-3  mt-24">
                                                                            <label class="form-label mb-14">Jenis
                                                                                Kelamin</label>
                                                                            <select name="gender" id="gender"
                                                                                    class="form-control select2"disabled>
                                                                                @if(empty($list->gender))
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="L">Laki-laki</option>
                                                                                    <option value="P">Perempuan</option>
                                                                                @else
                                                                                    <option value="L"
                                                                                            @if($list->gender == 'L')
                                                                                                selected
                                                                                        @endif
                                                                                    >Laki-laki
                                                                                    </option>
                                                                                    <option value="P"
                                                                                            @if($list->gender == 'P')
                                                                                                selected
                                                                                        @endif
                                                                                    >Perempuan
                                                                                    </option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Agama</label>
                                                                            <select name="religion" id="religion"disabled
                                                                                    class="form-control select2">

                                                                                @if(empty($list->religion))
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="Islam">Islam</option>
                                                                                    <option value="Kristen">Kristen
                                                                                    </option>
                                                                                    <option value="Katolik">Katolik
                                                                                    </option>
                                                                                    <option value="Hindu">Hindu</option>
                                                                                    <option value="Budha">Budha</option>
                                                                                    <option value="Konghucu">Konghucu
                                                                                    </option>
                                                                                @else
                                                                                    <option value="Islam"
                                                                                            @if($list->religion == 'Islam')
                                                                                                selected
                                                                                        @endif
                                                                                    >Islam
                                                                                    </option>
                                                                                    <option value="Kristen"
                                                                                            @if($list->religion == 'Kristen')
                                                                                                selected
                                                                                        @endif
                                                                                    >Kristen
                                                                                    </option>
                                                                                    <option value="Katolik"
                                                                                            @if($list->religion == 'Katolik')
                                                                                                selected
                                                                                        @endif
                                                                                    >Katolik
                                                                                    </option>
                                                                                    <option value="Hindu"

                                                                                            @if($list->religion == 'Hindu')
                                                                                                selected
                                                                                        @endif
                                                                                    >Hindu
                                                                                    </option>
                                                                                    <option value="Budha"
                                                                                            @if($list->religion == 'Budha')
                                                                                                selected
                                                                                        @endif
                                                                                    >Budha
                                                                                    </option>
                                                                                    <option value="Konghucu"

                                                                                            @if($list->religion == 'Konghucu')
                                                                                                selected
                                                                                        @endif
                                                                                    >Konghucu
                                                                                    </option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Alamat</label>
                                                                            <input type="text" class="form-control"disabled
                                                                                   id="address"
                                                                                   placeholder="Alamat"
                                                                                   value="{{ $list->address ?? '' }}"
                                                                                   name="address">
                                                                        </div>


                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Provinsi</label>
                                                                            <input type="text" value="{{$list->provinces->name ?? ''}}"disabled
                                                                                   class="form-control">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Kota</label>
                                                                            <input type="text" value="{{ $list->kotas->name ?? '' }}"disabled
                                                                                   class="form-control">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Kecamatan</label>
                                                                            <input type="text" value="{{ $list->kecamatan->name ?? '' }}"disabled
                                                                                   class="form-control">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Desa</label>
                                                                            <input type="text" value="{{ $list->desas->name ?? '' }}"disabled
                                                                                   class="form-control">
                                                                        </div>

                                                                        <div class="mb-3  mt-24">
                                                                            <label class="form-label mb-14">RT /
                                                                                RW</label>
                                                                            <input type="text" class="form-control"disabled
                                                                                   name="rtrw" id="rt"
                                                                                   value="{{ $list->rtrw ?? '' }}">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Status</label>
                                                                            @if(empty($list))
                                                                                <option value="">Pilih</option>
                                                                                <select name="status" id="status"disabled
                                                                                        class="form-control">
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="PNS">PNS</option>
                                                                                    <option value="PPPK">PPPK</option>
                                                                                    <option value="Honorer">Honorer
                                                                                    </option>
                                                                                </select>
                                                                            @else
                                                                                <select name="status" id="status"
                                                                                        class="form-control">
                                                                                    <option value="PNS"
                                                                                            @if(!empty($list->status == 'PNS'))
                                                                                                selected
                                                                                        @endif
                                                                                    >PNS
                                                                                    </option>
                                                                                    <option value="PPPK"
                                                                                            @if(!empty($list->status == 'PPPK'))
                                                                                                selected
                                                                                        @endif

                                                                                    >ASN PPPK
                                                                                    </option>
                                                                                    <option value="Honorer"
                                                                                            @if(!empty($list->status == 'Honorer'))
                                                                                                selected
                                                                                        @endif
                                                                                    >Honorer
                                                                                    </option>
                                                                                </select>
                                                                        </div>
                                                                        @if(!empty($user->profile))
                                                                            @if($list->status == 'PPPK')
                                                                                <script>
                                                                                    $(document).ready(function () {
                                                                                        $('.pppk').show();
                                                                                    });
                                                                                </script>
                                                                            @endif
                                                                            @if($list->status == 'Honorer')
                                                                                <script>
                                                                                    $(document).ready(function () {

                                                                                        $('.honorer').show();
                                                                                    });
                                                                                </script>
                                                                            @endif
                                                                        @endif
                                                                        @endif
                                                                        <div class="mb-3  mt-24 pppk"

                                                                             @if(empty($list))
                                                                                 style="display: none"
                                                                             @else
                                                                                 @if($list->status == 'PPPK')
                                                                                     style="display: block"
                                                                             @else
                                                                                 style="display: none"
                                                                            @endif
                                                                            @endif

                                                                        >
                                                                            <label class="form-label mb-14">TA
                                                                                PPPK</label>
                                                                            <select name="tahun" id="tahun"disabled
                                                                                    class="form-control">

                                                                                @if(!empty($list))

                                                                                    <option value="2021"
                                                                                            @if($list->tahun == '2021')
                                                                                                selected
                                                                                        @endif
                                                                                    >2021
                                                                                    </option>
                                                                                    <option value="2022"
                                                                                            @if($list->tahun == '2022')
                                                                                                selected
                                                                                        @endif
                                                                                    >2022
                                                                                    </option>
                                                                                    <option value="2023"
                                                                                            @if($list->tahun == '2023')
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
                                                                             @if(empty($list))
                                                                                 style="display: none"
                                                                             @else
                                                                                 @if($list->status == 'Honorer')
                                                                                     style="display: block"
                                                                             @else
                                                                                 style="display: none"
                                                                            @endif
                                                                            @endif
                                                                        >
                                                                            <label class="form-label mb-14">Tipe
                                                                                Guru</label>
                                                                            <select name="tipe" id="tipe"disabled
                                                                                    class="form-control">

                                                                                @if(!empty($list))
                                                                                    @if($list->tipe == 'Guru Mapel')
                                                                                        <option value="Guru Mapel"
                                                                                                @if($list->tipe == 'Guru Mapel')
                                                                                                    selected
                                                                                            @endif
                                                                                        >Guru Mapel
                                                                                        </option>
                                                                                        <option value="Guru Kelas"
                                                                                                @if($list->tipe == 'Guru Kelas')
                                                                                                    selected
                                                                                            @endif
                                                                                        >Guru Kelas
                                                                                        </option>
                                                                                    @else
                                                                                        <option value="Pilih">Pilih
                                                                                        </option>
                                                                                        <option value="Guru Mapel">Guru
                                                                                            Mapel
                                                                                        </option>
                                                                                        <option value="Guru Kelas">Guru
                                                                                            Kelas
                                                                                        </option>
                                                                                    @endif
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label class="form-label mb-14">Tempat Bertugas</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="phone_number"disabled
                                                                                   value="{{ $list->tempat_bertugas ?? '' }}"
                                                                                   id="phone_number">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label class="form-label mb-14">No
                                                                                Telepon</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="phone_number"disabled
                                                                                   value="{{ $list->phone_number ?? '' }}"
                                                                                   id="phone_number">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label class="form-label mb-14">No
                                                                                Whatsapp</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="wa" id="wa"disabled
                                                                                   value="{{ $list->wa ?? '' }}">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Facebook</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="fb" id="fb"disabled
                                                                                   value="{{ $list->fb ?? '' }}">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Instagram</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="ig" id="ig"disabled
                                                                                   value="{{ $list->ig ?? '' }}">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Tiktok</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="tiktok" id="tiktok"disabled
                                                                                   value="{{ $list->tiktok ?? '' }}">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">LinkedIn</label>
                                                                            <input type="text" class="form-control"disabled
                                                                                   name="linkedin" id="linkedin"
                                                                                   value="{{ $list->linkedin ?? '' }}">
                                                                        </div>
                                                                        <div class="mb-3  mt-24">
                                                                            <label
                                                                                class="form-label mb-14">Telegram</label>
                                                                            <input type="text" class="form-control"
                                                                                   name="telegram" id="telegram"disabled
                                                                                   value="{{ $list->telegram ?? '' }}">
                                                                        </div>

                                                                        <div class="flex justify-content-center items-center text-center mt-4 mb-4">
                                                                            <a href="{{ url('foto/'.$list->photo) }}" target="_blank">
                                                                                <img
                                                                                    src="{{ url('foto/'.$list->photo) }}"
                                                                                    width="100" height="100"/>
                                                                            </a>
                                                                        </div>

                                                                        <div class="submit-section text-center">
                                                                            <button class="btn btn-primary submit-btn"
                                                                                    type="submit"
                                                                                    onclick="return confirm('Apakah anda yakin ingin Memverifikasi data ini?')">
                                                                                Verifikasi Data
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $('#task-profile').DataTable({
            "pageLength": 100, // Set the default number of entries per page to 100
            "lengthMenu": [100, 200, 400, 500], // Customize the dropdown options

        });
    </script>
@endpush
