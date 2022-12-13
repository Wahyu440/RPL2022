<div class="card mb-3">
    <img src="https://img5.goodfon.com/wallpaper/nbig/1/cc/bus-mercedes-tourismo-coach.jpg" style="background-size: 100% 100%;" height="700px" width="400px" class="card-img-top">
    <div class="card-body">
      <h2 class="card-title">Your Tickets</h2>
      <p class="card-text">Here Are All Your Reservations.</p>
        
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Pemesan</th>
                <th scope="col" class="text-center">Nama Bus</th>
                <th scope="col" class="text-center">Penjemputan</th>
                <th scope="col" class="text-center">Tujuan</th>
                <th scope="col" class="text-center">Jumlah Kursi</th>
                <th scope="col" class="text-center">Jumlah Bus</th>
                <th scope="col" class="text-center">Total Harga</th>
                <th scope="col" class="text-center"></th>
            </tr> 
            </thead>
            <tbody>
            @foreach ($booking as $key => $booking)
            <tr>
                <th scope="row" class="text-center">{{$key+1}}</th>
                <td class="text-center">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</td>
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
                        <div class="col-md-2">
                            <form action="https://uat.esewa.com.np/epay/main" method="POST">
                                <input value="{{ $booking->total_price }}" name="tAmt" type="hidden">
                                <input value="{{ $booking->total_price }}" name="amt" type="hidden">
                                <input value="0" name="txAmt" type="hidden">
                                <input value="0" name="psc" type="hidden">
                                <input value="0" name="pdc" type="hidden">
                                <input value="epay_payment" name="scd" type="hidden">
                                <input value="Pawanbhai12223" name="pid" type="hidden">
                                <input value="{{ 'http://localhost:8000/home/booking/success'.'/$booking->booking_id?q=su' }}" type="hidden" name="su">
                                <input value="{{ 'http://localhost:8000/home/booking/failed'.'/$booking->booking_id?q=fu' }}" type="hidden" name="fu">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-usd"></i></button>
                            </form>
                        </div>
                        <div class="col-md-2">
                           <a href="/home/booking/{{ $booking->booking_id }}/view" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i> Invoice</a>
                        </div>
                        <div class="col-md-2">
                           <a href="/home/booking/{{ $booking->booking_id }}/download" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-arrow-down"></i> Download</a>
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
        <a href="{{ url('/home/enquiry')}}" class="btn btn-secondary">
            <span aria-hidden="true" class="glyphicon glyphicon-circle-arrow-left"></span>
        </a> 
    </div>
</div>


