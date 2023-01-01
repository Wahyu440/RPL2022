@extends('layouts.headerManager',[
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
                                    <p class="card-category">Total Bus Tersedia</p>
                                    <p class="card-title">{{ $available->count() }}<p>
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
                                    <p class="card-category">Total Bus Tidak Tersedia</p>
                                    <p class="card-title">{{ $notAvailable->count() }}<p>
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
            
        </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.initChartsPages();
        });
    </script>
@endpush