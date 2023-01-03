@extends('layouts.header',[
'class' => '',
'elementActive' => 'dashboard'
])


@section('content')
<div class="content">
    <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="numbers" style="font-size: x-large;">
                                <p class="card-category">Total Jadwal Dalam Kota</p>
                                <br>
                                <p class="card-title">{{ $dalam->count() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="numbers" style="font-size: x-large;">
                                <p class="card-category">Total Jadwal Luar Kota</p>
                                <br>
                                <p class="card-title">{{ $luar->count() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="numbers" style="font-size: x-large;">


                                <p class="card-category">Total Transaksi per Jadwal</p>
                                <br>
                                <p class="card-title">{{ $perKota->count() }}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <form action="{{ url('/admin/enquiry')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <select name="rute" id="rute" class="form-control" required>
                                @foreach ($jadwal as $list)
                                <option value="{{$list->schedule_id}}">
                                ({{$list->schedule_id}}) {{$list->pickup_address}}-{{$list->dropoff_address}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-info" value="Search">

                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="numbers" style="font-size: x-large;">
                                    <p class="card-category">Total Pesanan</p>
                                    <p class="card-title">{{ $book->count() }}<p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="numbers" style="font-size: x-large;">
                                    <p class="card-category">Total Region</p>
                                    <p class="card-title">{{ $reg->count() }}<p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="numbers" style="font-size: x-large;">


                                <p class="card-category">Total Permintaan Institusi per Kota</p>
                                <br>
                                <p class="card-title">{{ $perArea->count() }}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <form action="{{ url('/admin/institusi')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <select name="area" id="area" class="form-control" required>
                                @foreach ($reg as $list)
                                <option value="{{$list->name}}">
                                    {{$list->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-info" value="Search">

                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="numbers" style="font-size: x-large;">
                                    <p class="card-category">Total Region</p>
                                    <p class="card-title">{{ $reg->count() }}<p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats" style="overflow:scroll; height: 120px;">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="numbers" style="font-size: x-large;">
                                <td>
                                    @foreach ($reg as $region)
                                    <p class="card-category"> {{ $region->name }}</p>
                                    <p class="card-title">{{ $perKota->count() }}
                                    <p>
                                        @endforeach
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="numbers" style="font-size: x-large;">

                                <p class="card-category">Total Transaksi per Hari</p>
                                <br>
                                <p class="card-title">{{ $perHari->count() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <form action="{{ url('/admin/harian')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input name="harian" id="harian" class="form-control" aria-describedby="emailHelp"
                                type="date">
                        </div>
                        <input type="submit" class="btn btn-info" value="Search">

                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="numbers" style="font-size: x-large;">
                        <p class="card-category">Cetak Transaksi per Bulan</p>
                    </div>
                    <a href="/admin/viewwaktu" class="btn btn-sm btn-success">View</a>


                    <a href="/admin/downloadwaktu" class="btn btn-sm btn-warning">Download</a>

                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="numbers" style="font-size: x-large;">
                        <p class="card-category">Cetak Transaksi Area</p>
                    </div>
                    <a href="/admin/viewarea" class="btn btn-sm btn-success">View</a>


                    <a href="/admin/downloadarea" class="btn btn-sm btn-warning">Download</a>

                </div>
            </div>
        </div>

    </div>

    @endsection

    @push('scripts')
    <script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
    </script>
    @endpush