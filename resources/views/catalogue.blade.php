@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet">
    <title>Document</title>

    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 40px;
        }
    </style>
    <style>
.card-img-top {
    width: 100%;  /* Mengatur lebar gambar menjadi 100% dari lebar elemen parent */
    height: auto; /* Mengatur tinggi gambar secara otomatis berdasarkan lebar gambar */
    max-height: 200px; /* Mengatur tinggi maksimum gambar */
    object-fit: cover; /* Membuat gambar selalu menutupi elemen parent tanpa mengubah rasio aspek */
}
</style>

</head>

<body id ="page-top">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('asset/img/blackmores.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Discount 20%</h5>
                    <p>Blackmores Bio C® 1000 a potent formula to give you a boost of vitamin C to support your immune system.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('asset/img/tolakangin.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('asset/img/panadol.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <!-- Kartu 1 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BLACKMORES BIO C500</h5>
                    <p class="card-text">Blackmores Bio C mengandung vitamin C 1000 mg untuk membantu memelihara daya tahan tubuh</p>
                    <a href="#" class="btn btn-primary">Rp 149.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 2 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TOLAK ANGIN</h5>
                    <p class="card-text">obat herbal yang diformulasi secara khusus untuk meringankan gejala selesma seperti : hidung tersumbat, pilek, sakit kepala dan badan terasa pegal</p>
                    <a href="#" class="btn btn-primary">Rp 42.500</a>
                </div>
            </div>
        </div>
        <!-- Kartu 3 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Panadol</h5>
                    <p class="card-text">Obat dengan kandungan Paracetamol yang dapat digunakan untuk meringankan rasa sakit pada sakit kepala, sakit gigi, sakit pada otot dan menurunkan demam.</p>
                    <a href="#" class="btn btn-primary">Rp 13.600</a>
                </div>
            </div>
        </div>
        <!-- Kartu 4 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Betadine</h5>
                    <p class="card-text">BETADINE SOLUTION mengandung zat aktif Povidone Iodine 10%. Betadine solution merupakan antiseptik pada luka untuk membunuh kuman penyebab infeksi.</p>
                    <a href="#" class="btn btn-primary">Rp 8.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 5 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">OBH Combi Anak</h5>
                    <p class="card-text">Meredakan batuk yang disertai gejala-gejala flu pada anak seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin.</p>
                    <a href="#" class="btn btn-primary">Rp 21.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 6 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card6.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Naprogesic</h5>
                    <p class="card-text">Naprogesic period pain memberikan bantuan sementara yang efektif dari rasa sakit dan ketidaknyamanan yang terkait dengan nyeri haid.</p>
                    <a href="#" class="btn btn-primary">Rp 209.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 7 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card7.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Seremind</h5>
                    <p class="card-text">Minyak lavender yang khusus dipersiapkan dan telah terbukti membantu meredakan gejala seperti mudah tersinggung, sulit menghentikan kekhawatiran, mudah lelah, dan gangguan tidur.</p>
                    <a href="#" class="btn btn-primary">Rp 115.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 8 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card8.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Daktarin</h5>
                    <p class="card-text">Krim yang digunakan untuk mengobati penyakit kulit yang diakibatkan oleh berbagai jenis jamur.</p>
                    <a href="#" class="btn btn-primary">Rp 47.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 9 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card9.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Swisse</h5>
                    <p class="card-text">Suplemen yang berasal dari tumbuhan yang berasal dari Amerika Utara dengan nama yang sama. Tanaman ini dipercaya dapat memberikan banyak manfaat bagi kesehatan tubuh.</p>
                    <a href="#" class="btn btn-primary">Rp 270.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 10 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card10.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bebelove</h5>
                    <p class="card-text">Produk ini diperkaya dengan Galakto Oligosakarida (GOS), Frukto Oligosakarida (FOS), 7 Mineral, serta 14 vitamin yang dapat membantu melengkapi kebutuhan nutrisi bayi Anda.</p>
                    <a href="#" class="btn btn-primary">Rp 180.000</a>
                </div>
            </div>
        </div>
        <!-- Kartu 11 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card11.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Salonpas</h5>
                    <p class="card-text">Plester dengan kandungan mentol, camphor, dan metil salisilat yang mambantu meredakan rasa nyeri yang disebabkan oleh nyeri otot, nyeri sendi, terkilir, dan punggung pegal.</p>
                    <a href="#" class="btn btn-primary">Rp 7.500</a>
                </div>
            </div>
        </div>
        <!-- Kartu 12 -->
        <div class="col">
            <div class="card h-100">
            <img src="{{ asset('asset/img/card12.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">APOHealth PE</h5>
                    <p class="card-text">Memberikan bantuan sementara dari gejala pilek dan flu termasuk; sakit kepala dan demam, sakit tenggorokan, hidung berair atau tersumbat, batuk kering, serta nyeri dan pegal-pegal pada tubuh.</p>
                    <a href="#" class="btn btn-primary">Rp 13.000</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
@endsection