
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
                 <strong></strong><a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">

                    <form method="post" action="/pengaduan/store" enctype="multipart/form-data">

                        {{ csrf_field() }}
    
                        <div class="form-group">
                        <STRONG>TANGGAL PENGADUAN</STRONG>
                        <input type="date" name="tgl_pengaduan" class="form-control" placeholder=""></input>

                        @if($errors->has('tgl_pengaduan'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_pengaduan')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <strong>NIK</strong>
                        <input type="text" name="nik" class="form-control" placeholder=""></textarea>

                        @if($errors->has('nik'))
                            <div class="text-danger">
                                {{ $errors->first('nik')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <strong>ISI LAPORAN</strong>
                        <input type="text" name="isi_laporan" class="form-control" placeholder=""></textarea>

                        @if($errors->has('isi_laporan'))
                            <div class="text-danger">
                                {{ $errors->first('isi_laporan')}}
                            </form>
                        @endif
                    </div>

                    <div class="form-group">
                        <strong>FOTO</strong>
                        <input type="file" name="foto" class="form-control" placeholder=""></textarea>

                        @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                    <strong>STATUS</strong>
                    <br>
                    <input type="radio" name="status" value="proses"> Proses</p>
                    <input type="radio" name="status" value="proses"> Selesai</p>


                @if($errors->has('status'))
                    <div class="text-danger">
                    {{ $errors->first('status')}}
                </div>
            @endif

            </div>
            
             <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/pengaduan" class="btn btn-sm btn-primary">Kembali</a> 
                </div>

                </form>

            </div>
         </div>
     </div>
 </body>
 </html>