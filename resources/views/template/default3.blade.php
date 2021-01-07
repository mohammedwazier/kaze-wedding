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
    <title>Template 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/default.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default-skin/default-skin.css') }}"> --}}

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
            background: url('{{ get_asset('images/nathan-dumlao-5BB_atDT4oA-unsplash.jpg') }}') no-repeat;
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
                <div class="row row h-100 d-flex align-items-center pb-5 justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-white">
                        <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fa/3ac/b0e/thumb_1090771_400_0_0_0_auto.png" style="max-widht: 100%" />
                        <div class="mt-5">
                            <p>
                                The Wedding Of
                            </p>
                            <h1 style="font-family: GreatVibes; font-size: 80px;">
                                Siti & Ahmad
                            </h1>
                        </div>
                        <div class="mt-5 pt-5">
                            <a href="#brideroom" class="btn btn-open py-2 px-5" style="font-size: 30px; border-radius: 5em;">
                                Buka Undangan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 py-5 position-relative noshade bg-light" id="brideroom">
            <div class="d-none d-md-block">
                <img src="https://wedew.id/themes/blackforest/assets/images/flower-1.png" alt="" class="position-absolute corner-top-right aos-init aos-animate" data-aos="fade-left">
                <img src="https://wedew.id/themes/blackforest/assets/images/flower-2.png" alt="" class="position-absolute corner-bottom-right aos-init aos-animate" data-aos="fade-left">
                <img src="https://wedew.id/themes/blackforest/assets/images/flower-3.png" alt="" class="position-absolute corner-bottom-left aos-init aos-animate" data-aos="fade-right">
                <img src="https://wedew.id/themes/blackforest/assets/images/flower-4.png" alt="" class="position-absolute corner-top-left aos-init aos-animate" data-aos="fade-right">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5f3/8dd/e32/thumb_981525_240_240_0_0_crop.png" style="max-width: 100%; border-radius: 50%" />
                        <div class="mt-5 mb-5">
                            <h2>
                                Siti
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
                    <div class="col text-center d-flex justify-content-center align-items-center">
                        <h1 style="font-family: 'GreatVibes'; font-size: 100px;">&</h1>
                    </div>
                    <div class="col text-center">
                        <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5f3/8dd/e32/thumb_981525_240_240_0_0_crop.png" style="max-width: 100%; border-radius: 50%" />
                        <div class="mt-5 mb-5">
                            <h2>
                                Ahmad
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

        <div class="container py-5">
            <hr />
            <h2 data-aos="fade-down" class="aos-init aos-animate"><fontsninja-text id="fontsninja-text-31" class="fontsninja-family-1477">...sebuah perjalanan</fontsninja-text></h2>

            <p class="lead aos-init aos-animate" data-aos="fade-down"></p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id assumenda aliquam pariatur magni possimus ullam rem, porro nesciunt molestias amet voluptatibus, doloremque corrupti totam reprehenderit aut? Illo, odit numquam!</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nulla maxime, dignissimos, autem deleniti quod neque dolorum id in suscipit assumenda minima aliquid officia beatae consequatur tenetur. Possimus, doloremque consequatur!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat rerum animi corporis non harum beatae ullam maiores. Quibusdam aut perspiciatis laudantium esse? Similique, nemo! Voluptate quae blanditiis earum illo in.</p>
            <hr />

            {{-- <div class="my-5">
            <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">
                            <div class="col-lg-4">
                <a href="#" class="modal-video-thumbnail d-block mb-3" data-video-id="t7q5y0-cBDc">
                    <img src="//img.youtube.com/vi/t7q5y0-cBDc/hqdefault.jpg" class="w-100 img-fluid" alt="">
                    <div class="play-btn">
                        <i class="fa fa-play"></i>
                    </div>
                </a>
                <h5><fontsninja-text id="fontsninja-text-44" class="fontsninja-family-1477">Lamaran - 9 Agustus 2020</fontsninja-text></h5>
            </div>
                    <div class="col-lg-4">
                <a href="#" class="modal-video-thumbnail d-block mb-3" data-video-id="aNNlAUYKPyA">
                    <img src="//img.youtube.com/vi/aNNlAUYKPyA/hqdefault.jpg" class="w-100 img-fluid" alt="">
                    <div class="play-btn">
                        <i class="fa fa-play"></i>
                    </div>
                </a>
                <h5><fontsninja-text id="fontsninja-text-50" class="fontsninja-family-1477">Wedding - 15 November 2020</fontsninja-text></h5>
            </div>
                </div>
            </div> --}}

        </div>

        <div class="w-100 pb-5 d-flex position-relative text-primary text-center">
            <div class="container py-0">
                <div>
                    <img src="https://wedew.id/themes/blackforest/assets/images/flower-decor.png" alt="" class="img-fluid my-4">
                </div>
                <div class="" style="color: #000!important">
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
                </div>
                <div>
                    <img src="https://wedew.id/themes/blackforest/assets/images/flower-decor.png" alt="" class="flip-y img-fluid my-4" style="transform: scaleY(-1)">
                </div>
            </div>
        </div>

        <section class="website-block gallery d-flex position-relative bg-dark noshade py-1" style="">
            <div class="w-100 py-0">
                            <div class="flexbin">
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/bb7/thumb_1143059_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/bb7/thumb_1143059_400_400_0_0_auto.jpg">
            </a>
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/e69/thumb_1143083_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/e69/thumb_1143083_400_400_0_0_auto.jpg">
            </a>
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/e87/thumb_1143084_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/e87/thumb_1143084_400_400_0_0_auto.jpg">
            </a>
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/ece/thumb_1143085_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/ece/thumb_1143085_400_400_0_0_auto.jpg">
            </a>
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/f89/thumb_1143087_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ac/f89/thumb_1143087_400_400_0_0_auto.jpg">
            </a>
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ad/662/thumb_1143168_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ad/662/thumb_1143168_400_400_0_0_auto.jpg">
            </a>
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ad/688/thumb_1143171_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3ad/688/thumb_1143171_400_400_0_0_auto.jpg">
            </a>
                <a href="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3b5/aa8/thumb_1143236_1400_1400_0_0_auto.jpg">
                <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fc/3b5/aa8/thumb_1143236_400_400_0_0_auto.jpg">
            </a>
            </div>
        
        
                    </div>
        </section>

        <section class="website-block comments d-flex position-relative bg-light text-center noshade py-5" style="">
            <div class="container py-0">
                            <h2>Komentar</h2>
        
        <div class="invitation-comments">
            <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                
                        <ul class="comment-list list-unstyled text-left">
                                <li>
                        <div>
                            <p>
                                <strong>Nino Abdillah</strong>
                                                        <br>
                                Woww Happy wedding mas abu &amp; Sitta. Langgeng dan bahagia selalu ya amin 😊🎊🎉🥳
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li>
                        <div>
                            <p>
                                <strong>Anita Nurlaili</strong>
                                                        <br>
                                Selamat menikah temanku sejak semester satu sitta &amp; mas abu. Luar biasa, akhirnya kalian bisa sampai tahap ini sebagai suami istri. Bahagia &amp; rukun selalu yah. Ditunggu launching sittabu juniornya 😍😍
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li>
                        <div>
                            <p>
                                <strong>Mas Anggie Harahap</strong>
                                                        <br>
                                Selamat ya mba Sitta dan suami. Selalu siap menghadapi perjalanan hidup yg baru.
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li>
                        <div>
                            <p>
                                <strong>Ditha Ayuningtias</strong>
                                                        <br>
                                Happy wedding sitaaaa dan suami.<br>
        Semoga sll berbahagia dan segera di berikan momongan. Aamiin ❤️
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li>
                        <div>
                            <p>
                                <strong>Bagus Setyawan</strong>
                                                        <br>
                                Happy wedding sistaaa dan mbah abuuu, semoga langgeng sampe kakek nenek!! 😘😘😘
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Ibu Yanti</strong>
                                                        <br>
                                Happy Wedding Pak Rizal &amp; Bu Sita. <br>
        Semoga bahagia selalu ❤
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Bapak Yohanes Andum Basuki</strong>
                                                        <br>
                                Semoga acaranya lancar..<br>
        Selamat untuk mbak Sitta dan calon suami..
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Mas Megandika Wicaksono</strong>
                                                        <br>
                                Mbak Sitta dan calon suami<br>
        Selamat memepersiapkan hari bahagia, sehat dan penuh berkat 🙏🙏
                                <br>
                                <small class="text-muted">1 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Sasika Usada</strong>
                                                        <br>
                                Happy Wedding mba sittaa... semoga langgeng dan cepet diberi momongan, amiiiinnn
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Yulianto Andreasta</strong>
                                                        <br>
                                Happy weeding sitta dan Abu, semoga lancar acaranya,bahagia, langgeng selamanya, amiin
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Stefanus Bayu</strong>
                                                        <br>
                                Happy Wedding Sitta dan Mas Abu, semoga acaranya lancar yaaaa
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Rosalia Henny</strong>
                                                        <br>
                                Happy Wedding mb sittaaaaa... <br>
        Semoga lancar acaranya, bahagia, langgeng dan setia selalu. ❤ Gbu
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Janu Arinda</strong>
                                                        <br>
                                Sitaaaaa...... finally mengabarkan berita terdebest di penghujung thn 2020 ini. Selamat yaaa Sitaaa akhirnyaa menemukan pelabuhan hatinya. Ikut bahagiaaa dan senang dpt kbr gembira ini. Semoga dilancarkan sampai hari H dan seterusnya yaa. Aamiin
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Frater Petrik Yoga</strong>
                                                        <br>
                                Happy wedding Sitta! <br>
        Semoga langgeng dan selalu setia, menjadi keluarga yang penuh berkat!
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Jessyca Monita</strong>
                                                        <br>
                                Happy Wedding Sittaa, God bless your marriage life! 😘
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Ibu Magdalena Purminarsih</strong>
                                                        <br>
                                Selamat dik Sitta, semoga lancar acaranya dan semua keluarga sehat selalu,  saling setia dan bahagia. GBU
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Yunita Achsanty</strong>
                                                        <br>
                                Selamat mba sitta. Semoga dilancarin segalanya sampai hari H dan selalu diberikan kesehatan🤗 samawa ya hihi😘💕
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Niken Arya</strong>
                                                        <br>
                                Selamat berbahagia sitta dan mas Abu. Semoga dilancarkan semuanya, diberikan pernikahan yg bahagia dan langgeng sampai maut memisahkan. 🤎
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Fatimah Meidian</strong>
                                                        <br>
                                Waaaa congraaats sitta. Semoga dilancarkan ya beb.... bahagia dan sehat selalu bersama keluarga barunya hihi
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Ibu Cicilia Budi Purwaningsih</strong>
                                                        <br>
                                Mbak Sitta dan Mas Abu..selamat atas sakramen pernikahan yang diterimakan 27 Des 2020, smg slalu setia dlm berbagai situasi, menerima kelebihan n kekurangan  pasangan ,  cpt dianugerahi momongan, dan smg  Tuhan senantiasa memberkati...doa kami Klg NingYunanto.
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Margaretha Sinar</strong>
                                                        <br>
                                Aaaaakhirnyaaa.. <br>
        Selamat menempuh hidup baru untuk Tante Sitta &amp; Om Abu. Seneng banget dapat kabar ini. Semoga lancar sampai hari H. Semoga selalu dan harus bahagia. Tuhan memberkati kalian berdua. ❤❤❤❤❤❤
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Indri Hastuti</strong>
                                                        <br>
                                Wkwkwkwk akhirnya gaesss kalian menikah juga.. despite all the differences, all the circumtances, in the end, love always win. I am extremely happy for you both, Sitta and Mas Abu. Pas terima undangannya deg-degan donggg 🤣 Doaku semoga Sitta dan Mas Abu selalu disatukan dalam kebaikan, cinta dan kasih sayang. Lancar sampai hari H yaa.. ❤❤❤
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Yustina Ardeta</strong>
                                                        <br>
                                Akhirnya 😍😍😍<br>
        Selamat menikah Tante sitta, Om abu. Bahagia atas kabar ini 🤗. Semoga cinta kalian awet hingga maut memisahkan 😍😍<br>
        <br>
        😇Caca, Deta, Toni 😇
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Maria Shinta</strong>
                                                        <br>
                                Happy Wedding Sitta &amp; Mas Abu...<br>
        May your love be strong and bright<br>
        May your love be filled with light<br>
        May all your dreams come true<br>
        Wishing all the best things in life for you two. 💐<br>
        God Bless You 😇😘
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Fransisca Novia</strong>
                                                        <br>
                                Happy Wedding Sitta &amp; Mas Abu...<br>
        I am very happy to received this invitation. <br>
        Teman yang sudah ku kenal sejak TK sudah memilih dan dipilih untuk ke jenjang yang lebih serius. Hope you always happy. <br>
        Sitta: seperti kamu menjadi teman yang luar biasa untuk kami. Kelak jadilah istri yang luar biasa pula. I know you can do it <br>
        Mas Abu: salam kenal, kutitipkan teman kecilku untuk menjadi teman hidupmu. Pasti Sitta &amp; Mas Abu sudah melewati proses yang luar biasa juga hingga kalian memutuskan. Mas Abu juga pasti akan jadi suami yang luar biasa juga untuk Sitta <br>
        Ku doakan semoga kalian bahagia selalu. Tak hanya menjadi seorang suami istri tapi juga partner hidup, bisa jadi teman, kakak, orang tua untuk satu sama lain juga. <br>
        <br>
        <br>
        Bahagia selalu kalian berdua. 😍😍
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Wulan Widyaningrum</strong>
                                                        <br>
                                Happy Wedding Sitta 💖 Abu, wishing you two a verry happy and blessed married life 💐😘
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                                <li style="display: none;">
                        <div>
                            <p>
                                <strong>Elizabeth Septi</strong>
                                                        <br>
                                Aaaarrgghhh gila gila gila!!!<br>
        Seneng bgt liatnya. Semoga lancar sampe hari H ya mbak! *sending virtual hug*
                                <br>
                                <small class="text-muted">2 minggu yang lalu</small>
                                                    </p>
                        </div>
                    </li>
                            </ul>
                        <a href="#" class="btn btn-outline-secondary btn-lg btn-block btn-show-comments">Show More Comments</a>
                <a href="#" class="btn btn-outline-secondary btn-lg btn-block btn-hide-comments" style="display: none;">Hide Comments</a>
                            </div>
        </div>
        
        </div>
                    </div>
        </section>

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
            $(".flexbin").lightGallery({
                pager: true
            });

            $('body').on('click', '.btn-show-comments', function(e) {
                // 'ul.comment-list'
                e.preventDefault();
                $('ul.comment-list > li').show();
                $('.btn-hide-comments').show();
                $(this).hide();
            });

            $('body').on('click', '.btn-hide-comments', function(e) {
                // 'ul.comment-list'
                e.preventDefault();
                $('ul.comment-list > li:gt(4)').hide();
                $('.btn-show-comments').show();
                $(this).hide();
            });
        })
    </script>
</body>