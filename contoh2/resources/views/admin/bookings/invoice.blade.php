<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #{{ $booking->booking_id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #6667AB;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Invoice</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: {{ $booking->booking_id }}</span> <br>
                    <span>{{ $booking->created_at }}</span> <br>
                    <span>Address: Jl. dr. Wahidin Sudirohusodo no. 5-25 Yogyakarta, Indonesia - 55224</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Detail Pesanan</th>
                <th width="50%" colspan="2">Detail Pemesan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Penjemputan :</td>
                <td>{{ $booking->source }}</td>

                <td>Nama Lengkap :</td>
                <td>{{ $user->fname }} {{ $user->lname }}</td>
            </tr>
            <tr>
                <td>Tujuan :</td>
                <td>{{ $booking->destination }}</td>

                <td>Email :</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Tanggal Keberangkatan :</td>
                <td>{{ $busschedule->depart_date }}</td>

                <td>No telp:</td>
                <td>{{ $user->phone }}</td>
            </tr>
            <tr>
                <td>Payment Mode (BCA) :</td>
                <td>73000037</td>

                <td>Alamat:</td>
                <td>{{ $user->address }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Pesanan
                </th>
            </tr>
            <tr class="bg-blue">
                <th>Booking ID</th>
                <th>Nama Bus</th>
                
                @if ($busschedule->status == '0')
                <th>Harga per Kursi</th>
                <th>Jumlah Kursi</th>
                @elseif ($busschedule->status == '1')
                <th>Jumlah Bus</th>
                <th>Harga per Kursi</th>
                <th>Jumlah Kursi</th>
                @endif
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="10%">{{ $booking->booking_id }}</td>
                <td>
                {{ $bus->bus_name }}
                </td>
                @if ($busschedule->status == '0')
                <td width="10%">Rp{{ $busschedule->price }}</td>
                <td width="10%">{{ $booking->pesan_kursi }}</td>
                @elseif ($busschedule->status == '1')
                <td width="10%">{{ $booking->jumlah_bus }}</td>
                <td width="10%">Rp{{ $busschedule->price }}</td>
                <td width="10%">{{ $booking->pesan_kursi }}</td>
                @endif
                <td width="15%" class="fw-bold">Rp{{ $booking->total_price }}</td>
            </tr>
            <tr>
                @if ($busschedule->status == '0')
                <td colspan="4" class="total-heading">Total Pembayaran :</td>
                @elseif ($busschedule->status == '1')
                <td colspan="5" class="total-heading">Total Pembayaran :</td>
                @endif
                <td colspan="1" class="total-heading">Rp{{ $booking->total_price }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <img src="https://cdn.filestackcontent.com/{{ $booking->bukti }}">
    <br><br>
    <div class="col-md-2">
        <a href="/admin/order" class="btn btn-sm btn-warning">Back</a>
    </div>
</body>
</html>