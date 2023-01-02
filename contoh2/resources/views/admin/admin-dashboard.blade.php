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
                                    <p class="card-title">{{ $dalam->count() }}<p>
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
                                    <p class="card-title">{{ $luar->count() }}<p>
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
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="numbers" style="font-size: x-large;">
                                    <p class="card-category">Belum Validasi</p>
                                    <p class="card-title">{{ $reg->count() }}<p>
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
                                    <p class="card-category">Total Pesanan Institusi</p>
                                    <p class="card-title">{{ $reg->count() }}<p>
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
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats" style="overflow:scroll; height: 120px;" >
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="numbers" style="font-size: x-large;">
                                    <td>
                                    @foreach ($reg as $region)
                                    <p class="card-category"> {{ $region->name }}</p>
                                    <p class="card-title">{{ $perKota->count() }}<p>
                                    @endforeach
                                    </td>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-money-coins text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers" style="font-size:xx-large;">
                                    <p class="card-category">Profit</p>
                                    <p class="card-title">$ 1,345
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i> Last day
                        </div>
                    </div>
                </div>
            </div> -->
            
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