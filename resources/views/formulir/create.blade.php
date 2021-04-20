<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PPDB SMK Merdeka Belajar</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('beranda') }}"><h2>PPDB SMK MERDEKA BELAJAR</h2></a>    
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('formulir.create') }}">DAFTAR SEKARANG</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="main-card mb-3 card card-body">
                                    <h3>Formulir Pendaftaran</h3>
                                    <div class="table-responsive">
                                          <form action="{{ route('formulir.store') }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="no_reg" class="form-label">No Registrasi</label>
                                                                  <input type="text" class="form-control" value="{{ $no_reg }}" name="no_reg" id="no_reg" readonly>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="nama" class="form-label">Nama</label>
                                                                  <input type="text" class="form-control" name="nama" id="nama" required>
                                                            </div>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="jk">Jenis Kelamin</label>
                                                            <select name="jk" id="jk" class="form-select" required>
                                                                  <option value="" >Pilih</option>
                                                                  <option value="L">Laki-laki</option>
                                                                  <option value="P">perempuan</option>
                                                            </select>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="alamat" class="form-label">Alamat</label>
                                                                  <textarea name="alamat" class="form-control" cols="15" rows="5"></textarea>
                                                                  {{-- <input type="text" class="form-control" name="alamat" id="alamat" required> --}}
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="agama" class="form-label">Agama</label>
                                                                  <input type="text" class="form-control" name="agama" id="agama" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                                                  <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="minat_jurusan" class="form-label">Minat Jurusan</label>
                                                                  <select name="minat_jurusan" id="minat_jurusan" class="form-select" required>
                                                                        <option value="" >Pilih</option>
                                                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                                                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                                                        <option value="Multimedia">Multimedia</option>
                                                                        <option value="Otomotisasi Tata Kelola Perkantoran">Otomotisasi Tata Kelola Perkantoran</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                      <br>
                                                      <br>
                                                      <button type="submit" class="btn btn-primary">Daftar</button>
                                                </div>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
    </section>
</body>

</html>