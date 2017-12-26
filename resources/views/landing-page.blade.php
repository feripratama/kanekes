@extends('layouts.landing-page')

{{-- Title --}}

@section('title', 'Kanekes')
@section('navbar-title', 'Kanekes')
@section('header-title', 'Kanekes')
@section('header-description', 'Kanekes is one of laravel base theme for bantenprov application.')

{{-- Content --}}

@section('content')
<section class="landing-section-sm landing-section-1 text-center">
    <div class="container">
        <a class="btn btn-primary mr-2" href="#non">Sign up</a>
        <a class="btn btn-light" href="#non">Log in</a>
    </div>
</section>

<section class="landing-section-xl landing-section-2">
    <div class="container">
        <h2 class="landing-section-title text-center">Etimologi</h2>
        <p class="landing-section-description text-center text-muted">Berdasarkan Kamus Besar Bahasa Indonesia, penulisan yang tepat adalah <strong>Badui</strong> dan bukan <strong>Baduy</strong>.</p>
        <div class="row">
            <div class="col-12 col-sm-6 mb-3">
                <div class="block-image">
                    <a class="block-image-bg caption-bottom" href="#non" style="background-image: url({{ asset('images/baduy/6.jpg') }});">
                        <div class="block-image-caption">
                            <h3 class="block-image-title">Etimologi 1</h3>
                            <p class="block-image-description">Sebutan "Baduy" merupakan sebutan yang diberikan oleh penduduk luar kepada kelompok masyarakat tersebut, berawal dari sebutan para peneliti Belanda yang agaknya mempersamakan mereka dengan kelompok Arab Badawi yang merupakan masyarakat yang berpindah-pindah (nomaden).</p>
                        </div>
                    </a><!-- /.block-image-bg -->
                </div><!-- /.block-image -->
            </div><!-- /col -->
            <div class="col-12 col-sm-6 mb-3">
                <div class="block-image">
                    <a class="block-image-bg caption-bottom" href="#non" style="background-image: url({{ asset('images/baduy/7.jpg') }});">
                        <div class="block-image-caption">
                            <h3 class="block-image-title">Etimologi 2</h3>
                            <p class="block-image-description">Kemungkinan lain adalah karena adanya Sungai Baduy dan Gunung Baduy yang ada di bagian utara dari wilayah tersebut. Mereka sendiri lebih suka menyebut diri sebagai urang Kanekes atau "orang Kanekes" sesuai dengan nama wilayah mereka, atau sebutan yang mengacu kepada nama kampung mereka seperti Urang Cibeo (Garna, 1993).</p>
                        </div>
                    </a><!-- /.block-image-bg -->
                </div><!-- /.block-image -->
            </div><!-- /col -->
        </div><!-- /.row -->
    </div>
</section>

<section class="landing-section-sm landing-section-3">
    <div class="container">
        <div class="dengdek dengdek-dark" style="background-color: #4caf50;">
            <div class="dengdek-content">
                <h2 class="dengdek-title">Asal Usul</h2>
                <p class="lead">Menurut kepercayaan yang mereka anut, orang Kanekes mengaku keturunan dari Batara Cikal, salah satu dari tujuh dewa atau batara yang diutus ke bumi.</p>
            </div><!-- /.dengdek-content -->
            <div class="dengdek-image">
                <img src="{{ asset('images/baduy/9.jpg') }}">
            </div><!-- /.dengdek-image -->
        </div><!-- /.dengdek -->
    </div>
</section>

<section class="landing-section-lg landing-section-4">
    <div class="container">
        <h2 class="landing-section-title text-center">Urang Kanekes</h2>
        <p class="landing-section-description text-center text-muted">Urang Kanekes, Orang Kanekes atau Orang Baduy/Badui merupakan kelompok masyarakat adat suku Banten di wilayah Kabupaten Lebak, Banten. Mereka merupakan salah satu suku yang mengisolasi diri mereka dari dunia luar. Selain itu mereka juga memiliki keyakinan tabu untuk difoto, khususnya penduduk wilayah Baduy Dalam.</p>
        <div class="row">
            <div class="col-12 col-sm-6 mb-3 mb-sm-4">
                <div class="block-image">
                    <div class="block-image-bg caption-middle" style="background-image: url({{ asset('images/baduy/a.jpg') }});">
                        <div class="block-image-caption">
                            <h3 class="block-image-title">Urang Kanekes pada acara Seba Baduy 2017.</h3>
                        </div>
                    </div><!-- /.block-image-bg -->
                </div><!-- /.block-image -->
            </div><!-- /col -->
            <div class="col-12 col-sm-6 mb-3 mb-sm-4">
                <div class="block-image">
                    <div class="block-image-bg caption-middle" style="background-image: url({{ asset('images/baduy/b.jpg') }});">
                        <div class="block-image-caption">
                            <h3 class="block-image-title">Orang Kanekes pada tahun 2010.</h3>
                        </div>
                    </div><!-- /.block-image-bg -->
                </div><!-- /.block-image -->
            </div><!-- /col -->
            <div class="col-12 col-sm-6 mb-3 mb-sm-4">
                <div class="block-image">
                    <div class="block-image-bg caption-middle" style="background-image: url({{ asset('images/baduy/c.jpg') }});">
                        <div class="block-image-caption">
                            <h3 class="block-image-title">Delegasi Kanekes sekitar tahun 1920.</h3>
                        </div>
                    </div><!-- /.block-image-bg -->
                </div><!-- /.block-image -->
            </div><!-- /col -->
            <div class="col-12 col-sm-6 mb-3 mb-sm-4">
                <div class="block-image">
                    <div class="block-image-bg caption-middle" style="background-image: url({{ asset('images/baduy/d.jpg') }});">
                        <div class="block-image-caption">
                            <h3 class="block-image-title">Lukisan seorang Baduy di Rijksmuseum Amsterdam sekitar tahun 1816 - 1846.</h3>
                        </div>
                    </div><!-- /.block-image-bg -->
                </div><!-- /.block-image -->
            </div><!-- /col -->
        </div><!-- /.row -->
    </div>
</section>
@endsection
