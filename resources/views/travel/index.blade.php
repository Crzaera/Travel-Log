<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Travel Log</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home Page</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/travel">Catatan Perjalanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/travel/create">Isi Catatan</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container" >
        <center><h2 class="mt-5">Travel Log</h2></center>
        <div class="row">
            <div class="col-0"></div>
                <div class="col-2 mt-5">
                    {{-- <div class="block-header block-header-default flex-row-reverse px-0 pt-0">
                        <a href="{{ route('travel.create') }}" class="btn btn-success">
                            <i class="fa fa-plus mr-5"></i>Isi Catatan
                        </a>
                    </div> --}}
                </div>
                <div class="col-0"></div>
                <div class="col-2 mt-1">
                    <div class="block-header block-header-default px-0 pt-0">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Suhu Tubuh</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travel_logs as $data)
                    <tr>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->time }}</td>
                        <td>{{ $data->location }}</td>
                        <td>{{ $data->temperature }}</td>
                        <td>
                            <form action="{{route ('travel.destroy', $data->id )}}" method="post">
                                @csrf
                                @method('put')
                                <a href="{{route ('travel.edit', $data->id )}}" class="btn btn-primary"><i class="fa fas-pencil">Edit</i></a>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>

                            {{-- <a href="" class="btn btn-danger" onclick="deleteData('{{ $data->id }}')"><i class="fa fas-trash">Hapus</i></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function deleteData(id) {
            event.preventDefault();
            var url = "{{ route('travel.destroy', ':id') }}";
            console.log(url);
            swal.fire({
                icon:'warning',
                title:'Hapus data!',
                text:'Apakah anda yakin akan menghapus data?',
                showCancelButton: true,
                confirmButtonColor: '#f5084a',
                cancelButtonColor: '#42b6b3'
            }).then(function(result) {
                if (result.dismiss) return

                $.ajax({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url.replace(':id', id),
                type: 'delete'
                
            })
            
        })
    }
    $(document).ajaxStop(function(){
        window.location.reload();
    });
    </script> --}}

</body>
</html>