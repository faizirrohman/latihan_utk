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

    {{-- SEARCH --}}
    <!-- CSS ONLY -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">   
      <!-- END CSS -->
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
                                    <a class="nav-link" href="{{ route('formulir.create') }}">DAFTAR SEKARANG</a>
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
                  @if ($message = Session::get('success'))
                        <br>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>{{ $message }}!</strong>
                        </div>
                  @endif
                  <h3>List Peserta Didik Baru</h3>
                  <div class="col-md-12">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title ">Data Siswa</h4>
                            <p class="card-category"> Data dari Pengisian Formulir Pendaftaran</p>
                          </div>
                          <div class="card-body">
                              <table class="table" id="example">
                                    <thead>
                                          <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">No Registrasi</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Asal Sekolah</th>
                                                <th scope="col">Minat Jurusan</th>
                                                <th  style="text-align: center;">Aksi</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($peserta as $item)
                                                <tr>
                                                      <th scope="row">{{ $loop->iteration }}</th>
                                                      <td>{{ $item->no_reg }}</td>
                                                      <td>{{ $item->nama }}</td>
                                                      <td>{{ $item->jk }}</td>
                                                      <td>{{ $item->alamat }}</td>
                                                      <td>{{ $item->agama }}</td>
                                                      <td>{{ $item->asal_sekolah }}</td>
                                                      <td>{{ $item->minat_jurusan }}</td>
                                                      <td>
                                                            <a href="{{ route('formulir.print', $item->id) }}" target="blank" class="btn btn-success btn-xs">
                                                                  Cetak
                                                            </a>
                                                      </td>
                                                </tr>
                                          @endforeach
                                    </tbody>
                              </table>
                          </div>
                        </div>
                  </div>
            </div>
    </section>

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

    {{-- SEARCH --}}
    <!-- JAVA SCRIPT ONLY -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <!-- END JAVA SCRIPT -->

      <script>
      $(document).ready(function() {
      $('#example').DataTable();
      } );
      </script>
</body>

</html>