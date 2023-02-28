<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YAYASAN THARIQUL JANNAH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/img/icon.png') }}">
    <!-- Place favicon.ico in the root directory-->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-mobile"></span>
                                    <p class="phone-number">08112347187</p>
                                </div>
                                <div class="header-contact header-contact-email">
                                    <span class="ti-email"></span>
                                    <p class="email-name">nengratnaaari1810@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('template/img/logo4.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">
                                <ul>
                                    <li class="toggle-search-icon">
                                        <a href="/logout">LOGOUT</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">

                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>

    <body>
        <div id="about" class="about-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="m-4">
                        <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#tambah">Tambah</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $berita)
                            <tr>
                                <td>{{$berita->id}}</td>
                                <td>{{$berita->judul}}</td>
                                <td><a href="/detail/{{$berita->id}}" class="btn btn-primary">Detail</a></td>
                                <td> <button type="button" data-toggle="modal" data-target="#edit{{$berita->id}}" class="btn btn-warning">Update</button> |
                                    <button type="button" data-toggle="modal" data-target="#hapus{{$berita->id}}" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/inputBerita" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <img id="previewImg" src="https://upload.wikimedia.org/wikipedia/commons/8/89/HD_transparent_picture.png" alt="Placeholder" style="height: 300px; width: 100%;">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="img" id="formFile" onchange="preview_imageTambah(event);">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputJudul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="exampleInputJudul" aria-describedby="judulHelp" placeholder="Judul...">
                            </div>
                            <div class="form-group">
                                <label>Konten</label>
                                <textarea class="form-control" name="konten" id="summernote" rows="10"></textarea>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @foreach($data as $berita)
        <!-- Modal Update -->
        <div class="modal" id="edit{{$berita->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/edit/{{$berita->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <img id="previewImg2" src="{{asset('/uploads/'.$berita->img)}}" alt="Placeholder" style="height: 300px; width: 100%;">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="img" id="formFile" onchange="preview_imageUpdate(event);">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputJudul">Judul</label>
                                <input type="text" class="form-control" id="exampleInputJudul" name="judul" aria-describedby="judulHelp" placeholder="Judul..." value="{{$berita->judul}}">
                            </div>
                            <div class="form-group">
                                <label>Konten</label>
                                <textarea class="form-control" rows="10" name="konten">{{$berita->konten}}</textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @foreach($data as $berita)
        <!-- Modal Hapus -->
        <div class="modal" id="hapus{{$berita->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <p> Apakah Anda Yakin Ingin Menghapus ?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <a href="/delete/{{$berita->id}}" class="btn btn-danger">Iya</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </body>
    <!-- footer start -->
    <footer id="Contact">
        <div class="footer-area primary-bg pt-150">
            <div class="container">
                <div class="footer-top pb-35">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">

                                <div class="footer-socila-icon">
                                    <span>Ikuti Kami</span>
                                    <div class="footer-social-icon-list">
                                        <ul>
                                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                                            <li><a href="#"><span class="ti-google"></span></a></li>
                                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Link Cepat</h1>
                                </div>
                                <div class="footer-menu clearfix">
                                    <ul>
                                        <li><a href="/">Beranda</a></li>
                                        <li><a href="/profil">Profil</a></li>
                                        <li><a href="/unit">Unit Garapan</a></li>
                                        <li><a href="/berita">Berita</a></li>
                                        <li><a href="/galeri">Galeri</a></li>
                                        <li><a href="/login">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4  col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Hubungi Kami</h1>
                                </div>
                                <div class="footer-contact-list">
                                    <div class="single-footer-contact-info">
                                        <span class="ti-mobile"></span>
                                        <span class="footer-contact-list-text">08112347187</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-email "></span>
                                        <span class="footer-contact-list-text">nengratnaaari1810@gmail.com</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-location-pin"></span>
                                        <span class="footer-contact-list-text">Dusun Babakan Desa Pamulihan, RT 2, RW 8, Kode Pos 45365, Sumedang, Jawa Barat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- JS here -->
    <script src="{{ asset('template/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/one-page-nav-min.js') }}"></script>
    <script src="{{ asset('template/js/slick.min.js') }}"></script>
    <script src="{{ asset('template/js/ajax-form.js') }}"></script>
    <script src="{{ asset('template/js/wow.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('template/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script>
        function preview_imageTambah(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('previewImg');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <script>
        function preview_imageUpdate(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('previewImg2');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>


</html>