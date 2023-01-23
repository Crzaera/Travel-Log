<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Catatan</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <center><h2>Edit Catatan</h2></center>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <form class="js-validation-material" action="{{ route('travel.update', $travel_logs->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="number" id="id" name="id" value="{{ $travel_logs->id }}" class="d-none">
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" name="date" id="date" value="{{ $travel_logs->date }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="time" class="form-label">Waktu</label>
                            <input type="time" name="time" id="time" value="{{ $travel_logs->time }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" name="location" id="location" value="{{ $travel_logs->location }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="temperature" class="form-label">Suhu Tubuh</label>
                            <input type="number" name="temperature" id="temperature" value="{{ $travel_logs->temperature }}" class="form-control" required>
                        </div>
                    </div>
                    <center class="m-20">
                        <button type="submit" id="btn-send" class="btn btn-primary" style="border-radius: 0.5rem">Simpan</button>
                        <a href="{{ route('travel.index') }}" id="btn-back" class="btn btn-danger" style="border-radius: 00.5rem">Kembali</a>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>