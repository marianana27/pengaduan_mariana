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
            <h1 class="m-0"> Data Tanggapan</h1>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tanggapan</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
                <a href="/tanggapan/create" class="btn btn-primary">Tambah Data</a>
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>

                            <th>Pengaduan</th>
                            <th>tgl_tanggapan</th>
                            <th>tanggapan</th>
                            <th>id_petugas</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanggapan as $p)
                        @foreach ($pengaduan as $d)
                        <tr>
                            <td>{{ $d->isi_laporan }}</td>
                            <td>{{ $p->tgl_tanggapan }}</td>
                            <td>{{ $p->tanggapan }}</td>
                            <td>{{ $p->nik }}</td>
                            <td>
                            <a href="/pengaduan/destroy/{{ $p->id_pengaduan }}" class="fas fa-trash" style="color: red"></a> 
                                <!-- <a href="/tanggapan/destroy{{ $p->id_tanggapan }}" class="btn btn-danger">Hapus</a> -->
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @include('sweetalert::alert')
            
        </div>
    </div>
</body>
</html>
