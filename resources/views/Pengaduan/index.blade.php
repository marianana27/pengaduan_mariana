<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-13">
            <h1 class="m-0"> Data Pengaduan</h1>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
                <a href="/pengaduan/create" class="btn btn-primary">Tambah Data</a>
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>

                            <!-- <th>Id</th> -->
                            <th>TANGGAL PENGADUAN</th>
                            <th>NIK</th>
                            <th>ISI LAPORAN</th>
                            <th>FOTO</th>
                            <th>STATUS</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengaduan as $p)
                        <tr>
                            <!-- <td>{{ $p->id }}</td> -->
                            <td>{{ $p->tgl_pengaduan}}</td>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->isi_laporan }}</td>
                            <td><img src="{{ asset('image/'. $p->foto) }}" height="50" widht="10" alt="pengaduan"></td>
                            <td>{{ $p->status }}</td>
                            <td> 
                                <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="fas fa-edit" style="color: green"></a>
                                <!-- <a href="/pengaduan/hapus/{{ $p->id_pengaduan }}" class="fas fa-eye" style="color: green"></a> -->
                                <a href="/pengaduan/destroy/{{ $p->id_pengaduan }}" class="fas fa-trash" style="color: red"></a> 
                                <a href="/cetak_pdf/{{ $p->id_pengaduan }}" class="fas fa-print" style="color: blue"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            @include('sweetalert::alert')

        </div>
    </div>
</body>
</html>
