<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="le=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
<style>
    table.static {
        position: relative;
        border: 1px solid #543535;
    }
    </style>
    <little> CETAK DATA PENGADUAN</tittle>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan data pengaduan Pertanggal</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
        <th>No</th>
                        <th>tgl_pengaduan</th>
                        <th>nik</th>
                        <th>isi_laporan</th>
                        <th>foto</th>
                        <th>status</th>
                    </tr>
                    @php $i=1 @endphp
                   
                    <tr>
                      <td>{{date('d-m-y', strtotime ($pengaduan->tgl_pengaduan)) }}</td>
                        <td>{{$pengaduan->nik }}</td>
                        <td>{{ $pengaduan->nik}}</td>
                        <td>{{ $pengaduan->isi_laporan}}</td>
                        <td><img src="{{ asset('image/'. $pengaduan->foto) }}" height="100"width= "100" alt="pengaduan"></td>
                        <td>{{ $pengaduan->status}}</td>
                        <td>
                          <a href="/destroy/{{ $pengaduan->id_pengaduan }}" class="fas fa-trash-alt" style="color: red"></a>
                        </td>
                    </tr>
         </table>
    </div>
    <script type="text/javascript">
        window.print();
        </script>