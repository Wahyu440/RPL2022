@extends('layouts.header')
@section('content')
@include('admin.message')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Booking Bulan Ini</h4>
                        <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="col-md-11">
                                <thead class="text-primary">
                                    <th scope="col" class="text-center">Id</th>
                                    <th scope="col" class="text-center">Nama Bus</th>
                                    <th scope="col" class="text-center">Penjemputan</th>
                                    <th scope="col" class="text-center">Tujuan</th>
                                    <th scope="col" class="text-center">Jumlah Kursi</th>
                                    <th scope="col" class="text-center">Jumlah Bus</th>
                                    <th scope="col" class="text-center">Total Harga</th>
                                    <th scope="col" class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($booking as $key => $booking)
                                    <tr>
                                        <th scope="row" class="text-center">{{$key+1}}</th>
                                        <td class="text-center">
                                            @foreach ($buses as $bus)
                                            @if ($bus->bus_id == $booking->bus_id)
                                            {{ $bus->bus_name }}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td class="text-center">{{$booking->source}}</td>
                                        <td class="text-center">{{$booking->destination}}</td>
                                        <td class="text-center">{{$booking->pesan_kursi}}</td>
                                        <td class="text-center">{{$booking->jumlah_bus}}</td>
                                        <td class="text-center">{{ $booking->total_price }}</td>
                                        <td class="text-center">
                                            <div class="row">
                                                <!-- <div class="col-md-4">
                                      <a href="/admin/booking/{{ $booking->booking_id }}/bukti" class="btn btn-sm btn-warning text-white">Bukti Bayar</a>
                                  </div> -->
                                                <div class="col-md-6">
                                                    <a href="/admin/booking/{{ $booking->booking_id }}/view"
                                                        class="btn btn-sm btn-info">Check</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="/admin/validasi/{{ $booking->booking_id }}"
                                                        class="btn btn-sm btn-success">Valid</a>
                                                </div>
                                                <!-- <div class="col-md-2">
                                      <a href="{{ url('/home/booking/'.$booking->booking_id.'/delete') }}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                  </div> -->
                                            </div>
                                        </td>
                                    </tr>
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
@endsection