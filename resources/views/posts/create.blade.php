<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">FOTO </label>
                                <input type="file" class="form-control @error( 'foto_mahasiswa')
is-invalid @enderror " name="foto_mahasiswa">
                                <!-- error message untuk foto mahasiswa -->
                                @error( 'foto_mahasiswa')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NIM</label>
                                <input type="text" class="form-control @error( 'nim') is-invalid
@enderror " name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM
Mahasiswa">
                                <!-- error message untuk nim -->
                                @error( 'nim')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Mahasiswa</label>
                                <input type="text" class="form-control
@error( 'nama_mahasiswa') is-invalid @enderror " name="nama_mahasiswa" value="{{ old('nama_mahasiswa') }}" placeholder="Masukkan Nama Lengkap
Mahasiswa">
                                <!-- error message untuk nama mahasiswa -->
                                @error( 'nama_mahasiswa')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btnprimary">
                                SIMPAN</button>
                            <button type="reset" class="btn btn-md btnwarning">
                                RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>

</html>