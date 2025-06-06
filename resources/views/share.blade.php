<!doctype html>
<html>

<head>
    <!-- Meta Tag Umum -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Narasea Indonesia - Yayasan Edukasi & Aksi Konservasi Laut Indonesia</title>

    <!-- Meta SEO -->
    <meta name="description" content="Bercerita, Beraksi & Advokasi untuk Konservasi Laut Indonesia.">
    <meta name="keywords"
        content="Narasea Indonesia, konservasi laut, edukasi lingkungan, advokasi laut, aksi nyata, lingkungan, laut Indonesia">
    <meta name="author" content="Narasea Indonesia Team">
    <meta name="robots" content="index, follow">

    <!-- Meta Open Graph (untuk Facebook, LinkedIn, dll.) -->
    <meta property="og:title" content="Narasea Indonesia - Bersuara untuk Laut, Bergerak untuk Perubahan!">
    <meta property="og:description"
        content="Edukasi, Advokasi, dan Aksi Nyata untuk konservasi laut Indonesia. Bergabunglah bersama kami dalam menjaga kelestarian laut.">
    <meta property="og:image" content="https://narasea.id/assets/images/Narasea%20Logo%20Official.png">
    <meta property="og:url" content="https://narasea.id">
    <meta property="og:type" content="website">

    <!-- Favicon untuk browser -->
    <link rel="icon" href="{{ asset('/assets/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/assets/favicon/favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/assets/favicon/favicon-96x96.png') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">

    <!-- Android Manifest -->
    <link rel="manifest" href="{{ asset('/assets/favicon/site.webmanifest') }}">
    <meta name="theme-color" content="#083C75">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('/assets/css/fonts.css') }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="loader"></div>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section
        class="min-h-screen bg-blue-900/90 bg-[url('/public/assets/images/landing-page-2-new.png')] bg-cover bg-center flex flex-col justify-center items-center px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:px-24 lg:py-28 xl:px-32 relative">
        <h1
            class="mb-4 overflow-hidden text-4xl font-bold tracking-wide text-center text-white sm:text-4xl sm:mb-5 md:text-5xl md:mb-6 lg:text-6xl font-calimate">
            <span id="changing-text" class="inline-block"></span>
        </h1>

        <p
            class="w-full mb-6 text-base leading-normal text-center text-white sm:text-lg sm:mb-7 md:text-xl md:mb-8 lg:text-2xl lg:leading-relaxed font-ttNorms">
            Narasea is built on five core pillars that connect people and the ocean.<br>
            Your support—whether through time, resources, or voice—makes all the difference.
        </p>
    </section>

    <!-- Section Educate: Empower Future Ocean Advocates.-->
    <section id="srt-educate"
        class="relative bg-[url('/public/assets/images/educate-share-mobile.png')] sm:bg-[url('/public/assets/images/educate-share.png')] bg-cover sm:bg-contain bg-no-repeat bg-bottom bg-white py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28 rounded-bl-[50px] rounded-br-[50px] z-40 overflow-hidden"
        style="margin-bottom: 50px;">
        <!-- Content Container with relative positioning -->
        <div class="relative z-10">
            <!-- Title Section -->
            <div class="max-w-6xl mx-auto mb-12 text-center lg:mb-16">
                <h2
                    class="text-4xl font-extrabold leading-tight tracking-wide sm:text-4xl md:text-5xl font-calimate text-blue">
                    Educate:
                </h2>
                <h5 class="mt-2 text-xl font-semibold sm:text-2xl md:text-3xl font-calimate text-teal-blue">
                    Empower Future Ocean Advocates.
                </h5>
                <p class="max-w-3xl mx-auto mt-4 text-lg text-center text-black font-ttNorms">
                    Knowledge is the first step to change.<br>
                    Help us inspire the next generation to protect our oceans.
                </p>
            </div>

            <!-- Cards Slider Section -->
            <div class="relative max-w-4xl mx-auto">
                <!-- Swiper Container -->
                <div class="swiper educate-slider">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="h-full px-2 swiper-slide group">
                            <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                                <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative bg-gray">
                                    <img src="{{ asset('assets/images/educate-card-1.png') }}" alt="Education"
                                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div
                                    class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex items-start justify-center relative h-[150px]">
                                    <p class="text-cocoa-brown text-lg font-bold lg:text-xl font-calimate min-h-[60px]">
                                        Join hands-on workshops on climate change & sustainable living
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="h-full px-2 swiper-slide group">
                            <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                                <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative bg-gray">
                                    <img src="{{ asset('assets/images/educate-card-2.png') }}" alt="Education"
                                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div
                                    class="bg-golden-yellow p-4 lg:p-6 rounded-b-2xl flex-grow flex items-start justify-center relative h-[150px]">
                                    <p class="text-bronze text-lg font-bold lg:text-xl font-calimate min-h-[60px]">
                                        Collaborate with universities & research centers for deeper impact
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="h-full px-2 swiper-slide group">
                            <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                                <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative bg-gray">
                                    <img src="{{ asset('assets/images/educate-card-3.png') }}" alt="Education"
                                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div
                                    class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex items-start justify-center relative h-[150px]">
                                    <p class="text-wine-red text-lg font-bold lg:text-xl font-calimate min-h-[60px]">
                                        Support marine literacy programs for students & coastal communities
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="h-full px-2 swiper-slide group">
                            <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                                <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative bg-gray">
                                    <img src="{{ asset('assets/images/educate-card-1.png') }}" alt="Education"
                                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div
                                    class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex items-start justify-center relative h-[150px]">
                                    <p
                                        class="text-cocoa-brown text-lg font-bold lg:text-xl font-calimate min-h-[60px]">
                                        Join hands-on workshops on climate change & sustainable living
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="h-full px-2 swiper-slide group">
                            <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                                <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative bg-gray">
                                    <img src="{{ asset('assets/images/educate-card-2.png') }}" alt="Education"
                                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div
                                    class="bg-golden-yellow p-4 lg:p-6 rounded-b-2xl flex-grow flex items-start justify-center relative h-[150px]">
                                    <p class="text-bronze text-lg font-bold lg:text-xl font-calimate min-h-[60px]">
                                        Collaborate with universities & research centers for deeper impact
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="h-full px-2 swiper-slide group">
                            <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                                <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative bg-gray">
                                    <img src="{{ asset('assets/images/educate-card-3.png') }}" alt="Education"
                                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div
                                    class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex items-start justify-center relative h-[150px]">
                                    <p class="text-wine-red text-lg font-bold lg:text-xl font-calimate min-h-[60px]">
                                        Support marine literacy programs for students & coastal communities
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Prev -->
                    <div class="swiper-button-prev"
                        style=" background-color: #083C75; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease, box-shadow 0.3s ease; position: absolute; top: 50%; left: 10px; transform: translateY(-50%); z-index: 10; ">
                    </div>
                    <!-- Tombol Next -->
                    <div class="swiper-button-next"
                        style=" background-color: #083C75; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease, box-shadow 0.3s ease; position: absolute; top: 50%; right: 10px; transform: translateY(-50%); z-index: 10; ">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Support Marine Conservation. -->
    <section id="support-marine-conservation"
        class="bg-black py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] relative z-30"
        style="margin-top: -150px;">
        <div class="flex flex-col items-stretch gap-6 ml-[2rem] mr-[2rem] lg:flex-row">
            <!-- Left Side - Title -->
            <div class="flex items-center lg:w-1/3">
                <div>
                    <h2
                        class="text-4xl font-extrabold leading-tight tracking-wide text-white sm:text-4xl md:text-5xl font-calimate">
                        <span>Support</span><br>
                        <span>Marine</span><br>
                        <span>Conservation.</span>
                    </h2>
                    <p class="mt-4 text-white font-ttNorms">
                        Be a driving force behind ocean protection. Your support fuels real impact.
                    </p>
                </div>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="relative w-full lg:w-2/3">
                <!-- Slider Container -->
                <div class="flex flex-col stats-slider lg:grid lg:grid-cols-3">
                    <!-- Card 1 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="{{ asset('assets/images/smc-1.png') }}" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-golden-yellow p-4 lg:p-6 rounded-b-2xl flex-grow flex items-left justify-center relative h-[150px]">
                                <p
                                    class="text-bronze text-2xl md:text-xl lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    Become a Monthly Donor
                                </p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex flex-col items-start justify-start p-6 space-y-2 transition-transform duration-300 transform translate-y-full bg-golden-yellow group-hover:translate-y-0">
                                <p
                                    class="text-bronze text-2xl md:text-xl lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    Become a Monthly Donor
                                </p>
                                <p class="text-sm text-bronze lg:text-base font-ttNorms">
                                    Provide ongoing support for conservation efforts.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="{{ asset('assets/images/smc-2.png') }}" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-left justify-center relative h-[150px]">
                                <p
                                    class="text-white text-2xl md:text-xl lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    Fundraise for Ocean Health
                                </p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex flex-col items-start justify-start p-6 space-y-2 transition-transform duration-300 transform translate-y-full bg-blue group-hover:translate-y-0">
                                <p
                                    class="text-white text-2xl md:text-xl lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    Fundraise for Ocean Health
                                </p>
                                <p class="text-sm text-white lg:text-base font-ttNorms">
                                    Start a campaign for birthdays, challenges, or community events.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="{{ asset('assets/images/smc-3.png') }}" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex items-left justify-center relative h-[150px]">
                                <p
                                    class="text-wine-red text-2xl md:text-xl lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    Sponsor a Program
                                </p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex flex-col items-start justify-start p-6 space-y-2 transition-transform duration-300 transform translate-y-full bg-raspberry-pink group-hover:translate-y-0">
                                <p
                                    class="text-wine-red text-2xl md:text-xl lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    Sponsor a Program
                                </p>
                                <p class="text-sm text-wine-red lg:text-base font-ttNorms">
                                    Amplifying unheard voices from coastal communities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Dive Into Learning & Action - Empower Communities. -->
    <section id="learning-action"
        class="relative px-4 py-[100px] bg-white rounded-bl-[50px] rounded-br-[50px] z-20 overflow-hidden"
        style="margin-top: -50px;">
        <div class="relative z-10 flex flex-col gap-8 md:gap-4 ml-[2rem] mr-[2rem]">

            <!-- Section Atas -->
            <div class="grid items-stretch grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-3 md:gap-4">
                <!-- Teks Kiri -->
                <div class="flex flex-col justify-start">
                    <h2 class="mb-4 text-4xl font-bold lg:text-5xl font-calimate">
                        <span class="text-teal-blue">Dive Into</span>
                        <span class="text-blue">Learning & Action.</span>
                    </h2>
                    <p class="mb-4 text-base text-black font-ttNorms">
                        Explore the depths of marine conservation through immersive experiences. Discover, engage, and
                        make an impact.
                    </p>
                </div>

                <!-- Card 1 -->
                <div class="h-full group">
                    <div class="relative flex flex-col overflow-hidden shadow-lg rounded-2xl">
                        <div class="aspect-[2/1] overflow-hidden relative">
                            <img src="{{ asset('assets/images/education.png') }}" alt="Coastal Community"
                                class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                            <div
                                class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                            </div>
                        </div>
                        <div class="bg-blue p-5 h-[120px] flex items-center">
                            <p class="text-2xl font-bold text-white font-calimate">Education Trips.</p>
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col items-start justify-start p-5 space-y-2 transition-transform duration-300 transform translate-y-full bg-blue group-hover:translate-y-0">
                            <p class="text-2xl font-bold text-white font-calimate">Education Trips.</p>
                            <p class="text-sm text-white lg:text-base font-ttNorms">Hands-on experiences for students,
                                professionals, and ocean enthusiasts.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="h-full group">
                    <div class="relative flex flex-col overflow-hidden shadow-lg rounded-2xl">
                        <div class="aspect-[2/1] overflow-hidden relative">
                            <img src="{{ asset('assets/images/speaker.png') }}" alt="Speaker"
                                class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                            <div
                                class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                            </div>
                        </div>
                        <div class="bg-golden-yellow p-5 h-[120px] flex items-center">
                            <p class="text-2xl font-bold text-bronze font-calimate">Request a Speaker.</p>
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col items-start justify-start p-5 space-y-2 transition-transform duration-300 transform translate-y-full bg-golden-yellow group-hover:translate-y-0">
                            <p class="text-2xl font-bold text-bronze font-calimate">Request a Speaker.</p>
                            <p class="text-sm text-bronze lg:text-base font-ttNorms">Bring marine conservation experts
                                to educate your organization or community.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Bawah -->
            <div class="grid items-stretch grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-3 md:gap-4">
                <!-- Card 3 -->
                <div class="h-full group">
                    <div class="relative flex flex-col overflow-hidden shadow-lg rounded-2xl">
                        <div class="aspect-[2/1] overflow-hidden relative">
                            <img src="{{ asset('assets/images/sponsor-a-coastal.png') }}" alt="Volunteer"
                                class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                            <div
                                class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                            </div>
                        </div>
                        <div class="bg-raspberry-pink p-5 h-[120px] flex items-center">
                            <p class="text-2xl font-bold text-wine-red font-calimate">Sponsor a Coastal Community.</p>
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col justify-start p-5 space-y-2 transition-transform duration-300 transform translate-y-full items-start- bg-raspberry-pink group-hover:translate-y-0">
                            <p class="text-2xl font-bold text-wine-red font-calimate">Sponsor a Coastal Community.</p>
                            <p class="text-sm text-wine-red lg:text-base font-ttNorms">Provide direct support for
                                grassroots conservation initiatives.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="h-full group">
                    <div class="relative flex flex-col overflow-hidden shadow-lg rounded-2xl">
                        <div class="aspect-[2/1] overflow-hidden relative">
                            <img src="{{ asset('assets/images/volunteer.png') }}" alt="Empower Communities"
                                class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                            <div
                                class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                            </div>
                        </div>
                        <div class="bg-peachy-orange p-5 h-[120px] flex items-center">
                            <p class="text-2xl font-bold text-cocoa-brown font-calimate">Become a Volunteer.</p>
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col items-start justify-start p-5 space-y-2 transition-transform duration-300 transform translate-y-full bg-peachy-orange group-hover:translate-y-0">
                            <p class="text-2xl font-bold text-cocoa-brown font-calimate">Become a Volunteer.</p>
                            <p class="text-sm text-cocoa-brown lg:text-base font-ttNorms">Strong coastal communities
                                mean a stronger ocean. Be part of their journey.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Teks Kanan -->
                <div id="empower-communitites" class="flex flex-col justify-end text-end">
                    <h2 class="mb-4 text-4xl font-bold lg:text-5xl font-calimate">
                        <span class="text-teal-blue">Empower</span><br>
                        <span class="text-blue">Communities.</span>
                    </h2>
                    <p class="mb-4 text-base text-black font-ttNorms">
                        Strong coastal communities mean a stronger ocean. Be part of their journey.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Advocate & Amplify the Message. - Empower Communities. -->
    <section id="advocate-amplify"
        class="relative px-4 py-[100px] bg-blue bg-[url('/public/assets/images/under-the-sea-1-mobile.png')] sm:bg-[url('/public/assets/images/under-the-sea-1.png')] bg-cover bg-no-repeat bg-bottom z-10 overflow-hidden"
        style="margin-top: -50px;">
        <!-- Content goes here -->
        <div class="relative z-10 mx-auto text-center text-white max-w-7xl" style="margin-top: 50px;">
            <h2 class="text-4xl font-bold sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-calimate">
                Advocate & Amplify the Message.
            </h2>
            <p class="max-w-2xl mx-auto mb-8 text-lg font-ttNorms">
                Your voice is a powerful tool for change. Help spread awareness and drive action.
            </p>
            <div x-data="{
                activeCard: 0,
                cards: [0, 1, 2],
                nextCard() {
                    this.activeCard = (this.activeCard + 1) % this.cards.length;
                }
            }" x-init="setInterval(() => nextCard(), 4000)"
                class="max-w-2xl mx-auto mt-8 relative min-h-[380px] md:min-h-[320px] mb-12">

                <!-- Card 1 -->
                <div x-show="true" x-transition.opacity.duration.500ms
                    :class="{ 'z-30': activeCard === 0, 'z-10': activeCard !== 0 }"
                    class="absolute inset-0 mt-0 transition-all">
                    <div class="overflow-hidden shadow-sm rounded-2xl bg-peachy-orange backdrop-blur-sm">
                        <div class="flex flex-col md:flex-row">
                            <!-- Flex for Mobile Layout: Left = Image, Right = Text -->
                            <div class="flex items-center justify-center w-full md:w-1/2 bg-white/30">
                                <img src="{{ asset('assets/images/close-up-hands-making-heart-shape-sea-against-clear-sky 1.png') }}"
                                    alt="Share on Social"
                                    class="object-cover object-center w-full h-full max-h-[200px] sm:max-h-[250px] md:max-h-full" />
                            </div>
                            <div class="flex flex-col justify-center w-full p-5 text-left md:p-6 md:w-1/2">
                                <h2 class="mb-3 text-2xl font-bold md:text-3xl font-calimate">Join the Conversation.
                                </h2>
                                <p class="text-sm font-ttNorms md:text-lg">
                                    Share Nanasea's content & inspire action on social media.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div x-show="activeCard !== 0" x-transition.opacity.duration.500ms
                    :class="{ 'z-20': activeCard === 1, 'z-10': activeCard !== 1 }"
                    class="absolute inset-0 mt-8 transition-all">
                    <div class="overflow-hidden shadow-sm rounded-2xl bg-teal-blue backdrop-blur-sm">
                        <div class="flex flex-col md:flex-row">
                            <!-- Flex for Mobile Layout: Left = Image, Right = Text -->
                            <div class="flex items-center justify-center w-full md:w-1/2 bg-white/30">
                                <img src="{{ asset('assets/images/aceppp1.png') }}" alt="Share on Social"
                                    class="object-cover object-center w-full h-full max-h-[200px] sm:max-h-[250px] md:max-h-full" />
                            </div>
                            <div class="flex flex-col justify-center w-full p-5 text-left md:p-6 md:w-1/2">
                                <h2 class="mb-3 text-2xl font-bold md:text-3xl font-calimate">Support Digital
                                    Storytelling.</h2>
                                <p class="text-sm font-ttNorms md:text-lg">
                                    Fund community-led documentaries, podcasts, and campaigns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div x-show="activeCard === 2" x-transition.opacity.duration.500ms
                    :class="{ 'z-30': activeCard === 2, 'z-10': activeCard !== 2 }"
                    class="absolute inset-0 mt-16 transition-all">
                    <div
                        class="overflow-hidden shadow-sm rounded-2xl bg-raspberry-pink text-wine-red backdrop-blur-sm">
                        <div class="flex flex-col md:flex-row">
                            <!-- Flex for Mobile Layout: Left = Image, Right = Text -->
                            <div class="flex items-center justify-center w-full md:w-1/2 bg-white/30">
                                <img src="{{ asset('assets/images/product-slide-4-from-image-stock-1.png') }}"
                                    alt="Share on Social"
                                    class="object-cover object-center w-full h-full max-h-[200px] sm:max-h-[250px] md:max-h-full" />
                            </div>
                            <div class="flex flex-col justify-center w-full p-5 text-left md:p-6 md:w-1/2">
                                <h2 class="mb-3 text-2xl font-bold md:text-3xl font-calimate">Collaborate with Content
                                    Creators.</h2>
                                <p class="text-sm font-ttNorms md:text-lg">
                                    Work with journalists, influencers, and filmmakers to amplify marine issues.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content goes here -->
        <div class="relative z-10 ml-[2rem] mr-[2rem]" style="margin-top: 200px;">
            <div class="flex items-start justify-start lg:w-2/4">
                <div class="text-start">
                    <h3 class="mb-4 text-4xl font-bold leading-snug sm:text-3xl md:text-4xl lg:text-5xl font-calimate">
                        <span class="text-white">Every Action Creates a<br>Wave of Change.</span>
                    </h3>
                    <p class="mb-4 text-white font-ttNorms">
                        The ocean gives us life—now it's our turn to give back. Whether you choose to volunteer,
                        donate, educate, or advocate, your efforts help protect marine ecosystems and empower coastal
                        communities.
                        Together, we can create a future where the ocean thrives for generations to come.
                    </p>
                    <p class="mb-8 text-golden-yellow font-ttNorms">
                        Ready to make an impact? Choose how you want to take action:
                    </p>
                </div>
            </div>

            <!-- 3 styled buttons aligned to the left -->
            <div class="flex flex-wrap justify-start gap-4 mx-auto">
                <!-- Button 1 -->
                <button onclick="toggleModal(true)"
                    class="py-2 text-xs font-bold tracking-wider text-white transition duration-200 hover:text-white px-7 sm:text-sm md:text-base bg-raspberry-pink rounded-2xl hover:bg-raspberry-pink-hover font-ttNorms">
                    Donate Now
                </button>

                <!-- Button 2 -->
                <a href="mailto:naraseaid@gmail.com"
                    class="py-2 text-xs font-bold tracking-wider text-white transition duration-200 hover:text-white px-7 sm:text-sm md:text-base bg-teal-blue rounded-2xl hover:bg-teal-blue-hover font-ttNorms">
                    Collaborate
                </a>

                <!-- Button 3 -->
                <a href="https://wa.me/628112372277" target="_blank"
                    class="py-2 text-xs font-bold tracking-wider text-white transition duration-200 hover:text-white px-7 sm:text-sm md:text-base bg-peachy-orange rounded-2xl hover:bg-peachy-orange-hover font-ttNorms">
                    Message Us
                </a>
            </div>

            <!-- Modal Background -->
            <div id="donateModal"
                class="fixed inset-0 z-[9999] flex items-center justify-center bg-black bg-opacity-50 hidden opacity-0 transition-opacity duration-300">
                <!-- Modal Content -->
                <div id="donateModalContent"
                    class="bg-white w-11/12 max-w-lg max-h-[90vh] overflow-y-auto p-6 rounded-2xl shadow-xl relative transform scale-95 transition-all duration-300">
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between mb-4">
                        <!-- Modal Title -->
                        <h2 class="font-bold text-gray-800 text2-xl">Donate Information</h2>

                        <!-- Close Button -->
                        <button onclick="toggleModal(false)" class="text-xl text-gray-500 hover:text-red-500">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <!-- Modal Body -->
                    <div class="space-y-4 text-sm text-gray-700">
                        <!-- Modal Body -->
                        <div class="w-full">
                            <img src="{{ asset('assets/images/coming-soon-paint-brush-stroke.png') }}"
                                alt="Donate Info" class="w-full h-auto rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-12 ml-[2rem] mr-[2rem] md:grid-cols-2" style="margin-top: 150px;">
            <!-- Left: Subscribe Component -->
            <div>
                @include('components.subscribe')
            </div>

            <!-- Right: Footer Navigation -->
            <div>
                @include('components.footer')
            </div>
        </div>
    </section>

    <!-- Section Every Action Creates a Wave of Change. -->
    {{-- <section class="relative px-4 py-[200px] bg-black rounded-bl-[50px] rounded-br-[50px] overflow-hidden"
        style="margin-top: -50px;">
        <!-- Semi-transparent overlay -->
        <div class="absolute inset-0 z-0 bg-black/80"></div>
    </section> --}}

    <!-- Newsletter Section -->
    {{-- <section class="relative px-4 py-12 sm:py-16 md:py-20" style="margin-top: -50px;">
    </section> --}}

    <!-- Component Copyright -->
    <div class="text-white bg-blue">
        @include('components.copyright')
    </div>

    <!-- Button Scroll to Top -->
    @include('components.scroll-to-top')

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
    <script src="{{ asset('assets/js/educate.js') }}"></script>

    <script>
        function toggleModal(show) {
            const modal = document.getElementById('donateModal');
            const modalContent = document.getElementById('donateModalContent');

            if (show) {
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
                setTimeout(() => {
                    modal.classList.add('opacity-100');
                    modal.classList.remove('opacity-0');
                    modalContent.classList.add('scale-100');
                    modalContent.classList.remove('scale-95');
                }, 10);
            } else {
                modal.classList.remove('opacity-100');
                modal.classList.add('opacity-0');
                modalContent.classList.remove('scale-100');
                modalContent.classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }, 300);
            }
        }

        document.getElementById('donateModal').addEventListener('click', function(e) {
            if (e.target.id === 'donateModal') {
                toggleModal(false);
            }
        });
    </script>
</body>

</html>
