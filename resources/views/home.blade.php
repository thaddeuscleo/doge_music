@extends('layouts.app')

@section('content')
    <section class="home-page">

        <div class="hero-banner">
            <div class="hero-banner__overlay"></div>
            <div class="hero-banner__section">
                <div class="hero-banner__section__text">
                    <h1>Clearly the best sound.</h1>
                    @if (!auth()->user())
                        <button id="join-member">Join Member</button>
                    @endif
                </div>
            </div>
        </div>

        <div class="presentation-banner">
            <div class="banner-content">
                <div class="banner-content__head">
                    <i class="fas fa-music" style="color: #cd005e;"></i>
                    <h1>7 Million songs</h1>
                </div>
                <p>With over 7 million tracks, exclusive releases, and tons of interviews and music videos, DOGE MUSIC
                    brings you closer to the artists you listen to.</p>
            </div>
            <div class="banner-content">
                <div class="banner-content__head">
                    <i class="fas fa-podcast" style="color: #4165d9;"></i>
                    <h1>Mixes and Radio</h1>
                </div>
                <p>Get a personalized curation of songs and videos with My Mix, or discover new music with Artist
                    Radio.</p>
            </div>
            <div class="banner-content">
                <div class="banner-content__head">
                    <i class="fas fa-heart" style="color: #a077d0;"></i>
                    <h1>Hand-picked qualities</h1>
                </div>
                <p>Check out original music hand-picked by our team of experts, or feel the fidelity curated by the
                    artists you love.</p>
            </div>
            <div class="banner-content">
                <div class="banner-content__head">
                    <i class="fas fa-wave-square" style="color: #fcd394;"></i>
                    <h1>High Fidelity Audio</h1>
                </div>
                <p>Track remastered by professional experienced sound engineer in the known music production
                    studios.</p>
            </div>
        </div>

        <div class="audio-banner">
            <div class="content">
                <div class="audio-banner__img">
                    <img src="{{asset('storage/images/waves.svg')}}" alt="waves">
                    <h2>Hi Res Audio</h2>
                    <div class="audio-banner__img__desc">
                        <p>Master</p>
                        <p>High-Res Quality</p>
                        <p>2304-9216 Kbps</p>
                    </div>
                </div>
                <div class="audio-banner__desc">
                    <h1>Elevate your sound.</h1>
                    <p>Master sound quality is authenticated and unbroken, with the highest possible resolution — as
                        flawless as it sounded in the mastering suite and precisely as the artist intended. The audio is
                        remastered with famous analogue audio equipment to enrich the enjoyment of the audio track. The
                        standard audio console is SSL Audio Mixer</p>
                </div>
            </div>
        </div>

        <div class="testimony-banner">
            <div class="testimony-banner__text">
                <h1 id="testimony-text"></h1>
            </div>
            <div class="testimony-banner__comp">
                <img class="selected" src="{{ asset('storage/images/soundguys.png') }}" alt="" id="soundguys">
                <img src="{{ asset('storage/images/business-insider.png') }}" alt="" id="business-insider">
                <img src="{{ asset('storage/images/pcmag.png') }}" alt="" id="pcmag">
                <img src="{{ asset('storage/images/techradar.png') }}" alt="" id="techradar">
                <img src="{{ asset('storage/images/what-hifi.png') }}" alt="" id="what-hifi">
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/banner.js') }}"></script>
@endsection
