@php
function get_asset($data){
    if(config('app.env') === 'local'){
        return asset($data);
    }else{
        return secure_asset($data);
    }
}
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/default.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'GreatVibes';
            src: url({{ get_asset('font/GreatVibes-Regular.ttf') }});
        }
    </style>
</head>
<body style="overflow-x: hidden">
    <div class="vw-100">
        <div class="vw-100 vh-100">
            <div class="wow pulse" style="
            width: 100vw;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            background: url('{{ get_asset('images/cindy-baffour-Q6fMCXxrZkQ-unsplash.jpg') }}') no-repeat;
            background-size: cover;
            background-position:bottom center;"></div>
            <div style="
            width: 100vw;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0,.5);
            "></div>
            <div class="container h-100">
                <div class="row row h-100 d-flex align-items-end pb-5 justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-white">
                        <p data-aos="fade-up" data-aos-duration="2000">
                            The Wedding Of
                        </p>
                        <h1 data-aos="zoom-in" data-aos-duration="2500">
                            <span style="font-family: 'GreatVibes'">Anjani & Reza</span>
                        </h1>
                        <div class="hidden-md-down">
                            <br /><br />
                        </div>
                        <div data-aos="flip-left" data-aos-duration="3000" style="width: auto; position:relative;height:auto; padding:20px;background-color: rgba(255,255,255,.5);border-radius:10px;">
                            <p>
                                Kepada Yth.
                            </p>
                            <p>
                                <b style="font-family: 'GreatVibes'; font-size: 25px;">Quensha</b>
                            </p>
                            <p>
                                Di Tempat
                            </p>
                            <p>
                                Mohon maaf apabila ada kesalahan dalam penulisan nama maupun gelar
                            </p>
                            <a href="#brideroom">
                                <button class="btn btn-secondary">
                                    Buka Undangan
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 py-5" id="brideroom"
        {{-- style="background: url({{ asset('images/undefined_CkdIs6z.png') }}) no-repeat; background-size: cover; background-position: top center" --}}
        >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 text-center" data-aos="fade-right" data-aos-duration="2000">
                        <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5f3/8dd/e32/thumb_981525_240_240_0_0_crop.png" style="max-width: 100%; border-radius: 50%" />
                        <div class="mt-5 mb-5">
                            <h2>
                                Reza Wijaya
                            </h2>
                            <p>
                                Putra pertama dari Bapak ************** dan Ibu **************
                            </p>
                            <p>
                                Temanggung
                            </p>

                            <div class="w-100 text-center" style="font-size: 30px;">
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos="2000" data-aos-easing="ease-in-sine">
                        <h1 style="font-family: 'GreatVibes'; font-size: 100px;">&</h1>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center" data-aos="fade-left" data-aos-duration="2000">
                        <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5f3/8dd/e32/thumb_981525_240_240_0_0_crop.png" style="max-width: 100%; border-radius: 50%" />
                        <div class="mt-5 mb-5">
                            <h2>
                                Anjani Wijaya
                            </h2>
                            <p>
                                Putra pertama dari Bapak ************** dan Ibu **************
                            </p>
                            <p>
                                Temanggung
                            </p>

                            <div class="w-100 text-center" style="font-size: 30px;">
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-5"></div>
                    <div class="col text-center">
                        <p>
                            <b>
                                “Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tentram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir.”
                            </b>
                        </p>
                        <i>
                            QS. Ar-Rum : 21
                        </i>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 py-5"
        style="background: url({{ asset('images/nathan-dumlao-5BB_atDT4oA-unsplash.jpg') }}) no-repeat; background-size: cover; background-position: top center;filter:grayscale(100%);"
        >
            <div class="container text-white p-5 text-center" style="position: relativez; background-color: rgba(0,0,0,.3)">
                <hr />
                <div class="row no-gutters d-flex justify-content-center">
                    <div class="col-auto d-flex align-items-center aos-init aos-animate" data-aos="fade-right">
                        <strong class="mr-2" style="font-size: 4rem;">2</strong>
                    </div>
                    <div class="col-auto text-left lead d-flex align-items-center aos-init aos-animate" data-aos="fade-left">
                        Januari<br>
                        2021
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md aos-init aos-animate" data-aos="fade-up">
                        <h3>Ngunduh Mantu</h3>
                        <p>
                            <span>12:00 - 13:00</span>
                        </p>
                    </div>
                </div>
                <p data-aos="fade-down">
                    <strong>Omah Kebon</strong>
                    <br>Jalan Jendral Sudirman 83, Kertosari, Kecamatan Temanggung
                    <br>Kabupaten Temanggung
                </p>
                <button class="btn btn-primary" data-aos="fade-up">Buka Lokasi</button>
                <hr />
            </div>
        </div>

        <div class="w-100 py-5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    <center>
                                        <h1 style="font-family: 'GreatVibes'">
                                            Konfirmasi Kehadiran
                                        </h1>
                                    </center>
                                </p>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                                    </div>
        
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Alamat Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Hadir
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Tidak Hadir
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row" id="lightgallery">
                            <div class="col-6 col-md-4 my-3"
                            data-src="https://sachinchoolur.github.io/lightGallery/static/img/1-1600.jpg"
                            >
                                <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg" style="max-width: 100%">
                            </div>
                            <div class="col-6 col-md-4 my-3"
                            data-src="https://sachinchoolur.github.io/lightGallery/static/img/1-1600.jpg"
                            >
                                <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg" style="max-width: 100%">
                            </div>
                            <div class="col-6 col-md-4 my-3"
                            data-src="https://sachinchoolur.github.io/lightGallery/static/img/1-1600.jpg"
                            >
                                <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg" style="max-width: 100%">
                            </div>
                            <div class="col-6 col-md-4 my-3"
                            data-src="https://sachinchoolur.github.io/lightGallery/static/img/1-1600.jpg"
                            >
                                <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg" style="max-width: 100%">
                            </div>
                            <div class="col-6 col-md-4 my-3"
                            data-src="https://sachinchoolur.github.io/lightGallery/static/img/1-1600.jpg"
                            >
                                <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg" style="max-width: 100%">
                            </div>
                            <div class="col-6 col-md-4 my-3"
                            data-src="https://sachinchoolur.github.io/lightGallery/static/img/1-1600.jpg"
                            >
                                <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg" style="max-width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 mt-5 wow slideInLeft" style="background-color: #000">
            <div class="container">
                <div class="row text-white">
                    <div class="col text-center">
                        <hr />
                        {{-- <img src="https://penantian.com/wp-content/uploads/2020/11/penantian_daun.png" class="img-filter-white" style="max-width: 100%" /> --}}
                        <p class="mt-5">
                            <h4>Acara ini diselenggarakan dengan protokol kesehatan yang harus dipatuhi demi mencegah penyebaran virus Covid-19. Tanpa mengurangi rasa hormat, tamu undangan yang bersedia menghadiri acara dimohon kesediaannya untuk:</h4>
                        </p>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-4 text-center mt-5 mb-5 scale-zoom">
                        <img src="https://penantian.com/wp-content/uploads/2020/11/mask.png" class="img-filter-white" style="max-width: 100%" />
                        <h3>Menggunakan Masker</h3>
                    </div>
    
                    <div class="col-4 text-center mt-5 mb-5 scale-zoom">
                        <img src="https://penantian.com/wp-content/uploads/2020/11/hand-wash.png" class="img-filter-white" style="max-width: 100%" />
                        <h3>Mencuci Tangan</h3>
                    </div>
    
                    <div class="col-4 text-center mt-5 mb-5 scale-zoom">
                        <img src="https://penantian.com/wp-content/uploads/2020/11/hand-sanitizer.png" class="img-filter-white" style="max-width: 100%" />
                        <h3>Menggunakan Hand sanitizer</h3>
                    </div>
    
                    <div class="col-4 text-center mt-5 mb-5 scale-zoom">
                        <img src="https://penantian.com/wp-content/uploads/2020/11/thermometer.png" class="img-filter-white" style="max-width: 100%" />
                        <h3>Cek Suhu Tubuh</h3>
                    </div>
    
                    <div class="col-4 text-center mt-5 mb-5 scale-zoom">
                        <img src="https://penantian.com/wp-content/uploads/2020/11/no-crowd.png" class="img-filter-white" style="max-width: 100%" />
                        <h3>Jaga Jarak & Hindari Kerumunan</h3>
                    </div>
    
                    <div class="col-4 text-center mt-5 mb-5 scale-zoom">
                        <img src="https://penantian.com/wp-content/uploads/2020/11/no-handshake.png" class="img-filter-white" style="max-width: 100%" />
                        <h3>Tidak Berjabat Tangan</h3>
                    </div>
    
                    {{-- <div class="w-100"></div>
                    <div class="col text-center">
                        <img src="https://penantian.com/wp-content/uploads/2020/11/penantian_daun.png" class="img-filter-white" style="max-width: 100%" />
                        <hr />
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/js/lightgallery-all.min.js"></script>
    <script>
        AOS.init();
        $(document).ready(function(){
            $("#lightgallery").lightGallery({
                pager: true
            });
        })
    </script>
</body>
</html>