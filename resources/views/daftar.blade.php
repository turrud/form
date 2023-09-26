<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dananjaya Design | Form</title>
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Define a CSS rule for setting the background image */
        body {
            background-image: url({{ asset('img/back.jpg') }});
        }
    </style>
  </head>
  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-black-50" style="width: 6rem; height: 6rem;" role="status"></div>
        <img style="width: 6rem; height: 6rem;" class="position-absolute top-50 start-50 translate-middle" src="{{ asset('img/loader.jpeg') }}" alt="Icon">
    </div>
    <!-- Spinner End -->
    <div class="container">

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-qr-code-scan"></i> Scan Here!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="{{ asset('img/qr.png') }}" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>



        @if (session('success'))
        <div class="alert alert-success mt-3 tr" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>{{ session('success') }}</p>
            <hr>
            <p class="mb-0"><a style="text-decoration: none;color: green" href="https://chat.whatsapp.com/I4tBR2KO0Om4MUPNXsiKjR"><i style="color: green" class="bi bi-whatsapp"></i>&nbsp;&nbsp;Silahkan join ke group WhatsApp</a></p>
            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row justify-content-center mt-5">
        <div class="col">
            <div class="card">
                <div class="text-center mt-3">
                    <img style="width: 1cm;height: 1cm;" src="{{ asset('img/logo-1.png') }}" alt="logo-ddn">
                    <img style="width: 3.5cm;height: 3.5cm;" src="{{ asset('img/logo.png') }}" alt="logo-ddn">
                    <img style="width: 1cm;height: 1cm;" src="{{ asset('img/logo-1.png') }}" alt="logo-ddn">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('daftar.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Setifikat" required autofocus value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email@example.com" required autofocus value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="instansi">Instansi:</label>
                            <input type="text" name="instansi" id="instansi" class="form-control @error('instansi') is-invalid @enderror" placeholder="Instansi" required autofocus value="{{ old('instansi') }}">
                            @error('instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Bukti Transfer:</label>
                            <figcaption class="blockquote-footer mt-1 text-dark">
                                Bukti transfer bagi yang ingin mendapatkan sertifikat.
                            </figcaption>
                            <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <figcaption class="blockquote-footer text-dark">
                                    <img src="{{ asset('img/ShopeePay.png') }}" style="width: 1cm;height: 5mm;" alt="">
                                    <i class="bi bi-qr-code-scan"></i>0851 5533 8582
                                </figcaption>
                            </a>
                            <div id="imagePreview"></div>
                            <input id="fileInput" accept="image/*" type="file" name="gambar" class="form-control mt-3">
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-outline-dark">Daftar</button>
                        </div>
                    </form>
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
