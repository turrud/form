<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dananjaya Design | Bincang</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/djzee3t99/image/upload/v1709273130/ddn/img/logo/logo_ase2ly.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border position-relative text-black-50" style="width: 6rem; height: 6rem;" role="status"></div>
            <img style="width: 6rem; height: 6rem;" class="position-absolute top-50 start-50 translate-middle" src="https://res.cloudinary.com/djzee3t99/image/upload/v1709273130/ddn/img/logo/logo_ase2ly.png" alt="Icon">
        </div>
    <!-- Spinner End -->
    <div class="container">



    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row justify-content-center mt-5">
        <div class="col">
            <div class="card">
                <div class="text-center mt-3">

                    <img style="width: 3cm;height: 3cm;" src="https://res.cloudinary.com/djzee3t99/image/upload/v1709273130/ddn/img/logo/logo_ase2ly.png" alt="logo-ddn">

                </div>
                <div class="card-body">
                  <h1>
                    list Peserta
                  </h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Bukti Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($forms as $form)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $form->name }}</td>
                            <td>{{ $form->email }}</td>
                            <td>{{ $form->instansi }}</td> <!-- Ganti 'instansi' dengan nama kolom yang sesuai dari model User Anda -->
                            <td>{{ $form->gambar }}</td> <!-- Ganti 'bukti_transfer' dengan nama kolom yang sesuai dari model User Anda -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>


    </script>
  </body>
</html>
