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
</head>

<body>
    <!--::header part start::-->
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
                                    <a class="nav-link" href="{{ route('formulir.pendaftar') }}">PENDAFTAR</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
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
                                    <h3>Edit Formulir Pendaftaran</h3>
                                    <div class="table-responsive">
                                          <form action="{{ route('formulir.update', $peserta->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="no_reg" class="form-label">No Registrasi</label>
                                                                  <input type="text" class="form-control" name="no_reg" id="no_reg" value="{{ $peserta->no_reg }}" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="nama" class="form-label">Nama</label>
                                                                  <input type="text" class="form-control" name="nama" id="nama" value="{{ $peserta->nama }}" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="jk" class="form-label">Jenis Kelamin</label>
                                                                  <select name="jk" id="jk" class="form-control" required>
                                                                        <option>{{ $peserta->jk }}</option>
                                                                        <option value="L">Laki-laki</option>
                                                                        <option value="P">perempuan</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="alamat" class="form-label">Alamat</label>
                                                                  <textarea name="alamat" class="form-control" cols="15" rows="5">{{  $peserta->alamat }}</textarea>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="agama" class="form-label">Agama</label>
                                                                  <input type="text" class="form-control" name="agama" id="agama" value="{{ $peserta->agama }}" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                                                  <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="{{ $peserta->asal_sekolah }}" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="minat_jurusan" class="form-label">Minat Jurusan</label>
                                                                  <select name="minat_jurusan" id="minat_jurusan" class="form-control" required>
                                                                        <option>{{ $peserta->minat_jurusan }}</option>
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
                                                      <button type="submit" class="btn btn-primary">Perbaharui</button>
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