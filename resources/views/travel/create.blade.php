<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isi Catatan</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <center><h2>Isi Catatan</h2></center>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <form class="js-validation-material" action="{{ route('travel.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="time" class="form-label">Waktu</label>
                        <input type="time" id="time" name="time" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" id="location" name="location" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="temperature" class="form-label">Suhu Tubuh</label>
                        <input type="number" id="temperature" name="temperature" class="form-control" required>
                    </div>
                </div>
                <center class="m-20">
                    <button type="submit" id="btn-send" class="btn btn-primary" style="border-radius: 0.5rem">Simpan</button>
                    <a href="{{ route('travel.index') }}" id="btn-back" class="btn btn-danger" style="border-radius: 0.5rem">Kembali</a>
                </center>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>