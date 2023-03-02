<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>tanggapan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>INPUT DATA TANGGAPAN</strong>  <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    <a href="/tanggapan/create" class="btn btn-primary">Input Data tanggapan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id_tanggapan</th>
                                <th>tgl_pengaduan</th>
                                <th>tgl_tanggapan</th>
                                <th>tanggapan</th>
                                <th>nik</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $p)
                            <tr>
                                <td>{{ $p->id_tanggapan }}</td>
                                <td>{{ $p->tgl_pengaduan }}</td>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->tanggapan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>
                                    <a href="/tanggapan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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

