<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>INPUT DATA PENGADUAN</strong>  <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    <a href="/pengaduan/create" class="btn btn-primary">INPUT DATA PENGADUAN</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal Pengaduan</th>
                                <th>nik</th>
                                <th>isi laporan</th>
                                <th>foto</th>
                                <th>status</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <td>{{ $p->tgl_pengaduan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->isi_laporan }}</td>
                                <td>{{ $p->foto }}</td>
                                <td>{{ $p->status }}</td>
                                <td>
                                    <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn btn-warning">Edit</a>
                                    <a href="/pengaduan/hapus/{{ $p->id_pengaduan }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

