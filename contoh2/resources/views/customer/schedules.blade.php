<div class="card mb-3">
    <img src="https://img5.goodfon.com/wallpaper/nbig/6/6a/temsa-maraton-coach-bus.jpg" style="background-size: 100% 100%;" height="700px" width="400px" class="card-img-top">
    <div class="card-body">
      <h2 class="card-title">Bus Schedules</h2>
      <p class="card-text">Find Your Ride Here.</p>
        
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Nama Bus</th>
                <th scope="col" class="text-center">Penjemputan</th>
                <th scope="col" class="text-center">Tujuan</th>
                <th scope="col" class="text-center">Tanggal Keberangkatan</th>
                <th scope="col" class="text-center">Jam Keberangkatan</th>
                <th scope="col" class="text-center">Harga per Kursi</th>
                <th scope="col" class="text-center">Sisa Kursi</th>
                <!-- <th scope="col">Status</th> -->
                <th scope="col"></th>
            </tr> 
            </thead>
            <tbody class="text-center">
            @foreach ($schedules as $key => $schedule)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>
                @foreach ($buses as $bus)
                    @if ($bus->bus_id == $schedule->bus_id)
                        {{ $bus->bus_name }}
                    @endif
                @endforeach
                </td>
                <td>{{$schedule->pickup_address}}</td>
                <td>{{$schedule->dropoff_address}}</td>
                <td>{{$schedule->depart_date}}</td>
                <td>{{$schedule->depart_time}}</td>
                <td>{{ $schedule->price }}</td>
                <td>{{ $schedule->sisa_kursi }}</td>
                <td>
                    <a href="{{ url('/home/booking/'.$schedule->schedule_id) }}" type="button" class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>Book
                    </a>
                    
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url('/home')}}" class="btn btn-primary a-btn-slide-text">
            <span aria-hidden="true">Manual Search</span>
        </a> 
    </div>
</div>


