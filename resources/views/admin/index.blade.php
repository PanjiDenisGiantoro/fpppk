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
                                <span class="number" data-from="0" data-to="1225" data-speed="2500" data-inviewport="yes">1225</span>
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
                                <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">154 +</span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="box">
                    <div class="box-body pb-30">
                        <div class="row">
                            <div class="col-md-12 col-xl-10 mb-0">
                                <div class="row">
                                    <div class="col-md-12 col-xl-6 mb-0">
                                        <div class="form-group"> <label class="form-label">From:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                                                </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xl-6 mb-0">
                                        <div class="form-group"> <label class="form-label">To:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                                                </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text"> </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 col-xl-2 mb-0">
                                <div class="form-group mt-32"> <a href="#" class="btn bg-primary btn-block color-white">Search</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="task-profile_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer" id="task-profile" role="grid">
                                            <thead>
                                            <tr class="top">
                                                <th class="border-bottom-0 text-center sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 26.6562px;">No</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">NRA</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 222.312px;">Nama</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 84.8281px;">Email</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">No Wa</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Kecamatan</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 110.719px;">Status</th>
                                                <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no = 1)
                                            @foreach($user as $list)
                                                <tr class="odd">
                                                    <td class="text-center">{{$no++}}</td>
                                                    <td>
                                                        <a href="#" class="d-flex "> <span>{{ $list->NRA ?? ''}}</span> </a>
                                                    </td>
                                                    <td>{{ $list->user->name }}</td>
                                                    <td>{{ $list->user->email }}</td>
                                                    <td>{{ $list->wa }}</td>
                                                    <td>
                                                        <div >
                                                            {{ $list->kecamatan->name ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span class="badge
                                                         @if($list->is_valid == 0)
                                                         badge-danger
                                                            @else
                                                                badge-warning
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
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-dots-horizontal-rounded'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Aktifasi</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="task-profile_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="task-profile_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="task-profile_previous"><a href="#" aria-controls="task-profile" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">01</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">02</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">03</a></li>
                                                <li class="paginate_button page-item next disabled" id="task-profile_next"><a href="#" aria-controls="task-profile" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
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
</div>

@endsection
