<!DOCTYPE html>
<html lang="en">

<head>
  <title>Landing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: purple;
    }

    /* Add a gray background color and some padding to the footer */
    /* footer {
      background-color: #f2f2f2;
      padding: 25px;
    } */

    .carousel-inner img {
      width: 100%;
      /* Set width to 100% */
      margin: auto;
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Buslightyear</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <!-- <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Contact</a></li>
        </ul> -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/admin/login">Login Admin</a></li>
          <li><a href="#">Login Manager</a></li>
          <!-- @if ($currentUserInfo)
                            <li class="nav-item">
                                <a class="nav-link active scrollTo" aria-current="page" href="#">Lokasi Anda :
                                    {{ $currentUserInfo->cityName }}</a>
                            </li>
                            @endif -->
        </ul>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active" width="100" height="50">
        <img src="https://trailwayseurope.com/wp-content/uploads/2015/07/bus-header-background-2.jpg" alt="Image">
        <div class="carousel-caption">
          <div class="text-center">
            <h1>BUSLIGHTYEAR</h1>
            <p>We specialize in shuttle bus ticket</p>
          </div>
        </div>
      </div>

      <div class="item">
        <img src="https://trailwayseurope.com/wp-content/uploads/2015/07/bus-header-background-2.jpg" alt="Image">
        <div class="carousel-caption">
          <div class="text-center">
            <h1>BUSLIGHTYEAR</h1>
            <p>We specialize in shuttle bus ticket</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br><br>

  <div class="container">
    <div class="col-sm-12">
      <div class="bg-white">
      <div class="row">
      <form action="{{ url('/enquiry')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="source">Source</label>
                                
                                <select name="source" id="source" class="form-control" required>
                                        <option value="{{ $currentUserInfo->cityName }}" selected="true" disabled="true">{{ $currentUserInfo->cityName }}</option>
                                        @foreach ($stations as $list)
                                            <option value="{{$list->name}}">{{$list->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="destination">Destination</label>
                                
                                <select name="destination" id="destination" class="form-control" required>
                                        <option value="" selected="true" disabled="true">Select Destination</option>
                                        @foreach ($stations as $list)
                                            <option value="{{$list->name}}">{{$list->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="travel_date">Travel Date</label>
                                <input name="travel_date" value="{{ $date }}" id="travel_date" type="date" class="form-control" placeholder="Enter Travel Date">
                            </div>
                            <input type="submit" class="btn btn-info" value="Search">
                          </form><br><br><br>
        <!--Table-->
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
                <th scope="col"></th>
                <!-- <th scope="col">Status</th> -->
                <!-- <th scope="col"></th> -->
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
                <!-- <td>
                    @if ($schedule->status == 0)
                    <a href="{{ url('/home/booking/'.$schedule->schedule_id) }}" type="button" class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>Book
                    </a>
                    @elseif ($schedule->status == 1)
                    <a href="{{ url('/home/booking/institusi/'.$schedule->schedule_id) }}" type="button" class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>Book
                    </a>
                    @endif                    
                </td> -->
            </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-warning rounded-0 d-flex justify-content-center text-center p-8" href="{{ url('/home') }}">Pesan Sekarang</a>
        <!--Table-->
        </div>
      </div>
    </div>
  </div><br><br><br>

  <div class="text-center">
    <h1>Pesan Tiket Shuttle Bus Murah Secara Cerdas di Buslightyear</h1> <br>
  </div>

  <div class="container text-left">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-bold">Asuransi Perjalanan</h5>
            <p class="card-text">Asuransi perjalanan bus memberi kamu perlindungan saat bepergian dengan bus. Perjalanan
              anda jadi aman dan nyaman.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bebas Pilih Kursi</h5>
            <p class="card-text">Bebas memilih tempat duduk favorit anda untuk perjalanan anda di semua jenis bus yang
              disediakan.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tersedia Hingga 30 Hari ke Depan</h5>
            <p class="card-text">Pilih jadwal kereta terbaik sesuai dengan kebutuhan Anda. Di sini Anda dapat menemukan
              semua jadwal kereta untuk 90 hari ke depan, mencakup semua kelas mulai dari Ekonomi, Bisnis, hingga
              Eksekutif.</p>
          </div>
        </div>
      </div>
    </div>
  </div><br><br><br>

  <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: purple;
      color: white;
      text-align: center;
    }
  </style>

  <div class="footer">
    <p>Copyright - Buslightyear 2022</p>
  </div>

</body>

</html>