<!doctype html>
<html>

<head>
    <!-- Meta Tag Umum -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Narasea Indonesia - Platform Edukasi & Advokasi Konservasi Laut</title>

    <!-- Meta SEO -->
    <meta name="description"
        content="Narasea Indonesia: Bersuara untuk Laut, Bergerak untuk Perubahan! Edukasi, Advokasi, dan Aksi Nyata untuk konservasi laut Indonesia.">
    <meta name="keywords"
        content="Narasea Indonesia, konservasi laut, edukasi lingkungan, advokasi laut, aksi nyata, lingkungan, laut Indonesia">
    <meta name="author" content="Narasea Indonesia Team">
    <meta name="robots" content="index, follow">

    <!-- Meta Open Graph (untuk Facebook, LinkedIn, dll.) -->
    <meta property="og:title" content="Narasea Indonesia - Bersuara untuk Laut, Bergerak untuk Perubahan!">
    <meta property="og:description"
        content="Edukasi, Advokasi, dan Aksi Nyata untuk konservasi laut Indonesia. Bergabunglah bersama kami dalam menjaga kelestarian laut.">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <!-- Favicon untuk browser -->
    <link rel="icon" href="/assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/favicon/favicon.svg" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">

    <!-- Android Manifest -->
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <meta name="theme-color" content="#083C75">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/assets/css/fonts.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section
        class="min-h-screen bg-black flex flex-col justify-center items-start px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:px-24 lg:py-28 xl:px-32 relative">
        <h1
            class="text-2xl font-bold mb-2 sm:text-3xl sm:mb-3 md:text-4xl md:mb-4 lg:text-5xl lg:mb-5 tracking-wide font-calimate text-white">
            The Narasea Story:
        </h1>
        <p class="text-xl leading-relaxed sm:text-2xl md:text-3xl lg:text-4xl font-ttNorms text-white max-w-[42ch]">
            Where People and Oceans Unite
        </p>
    </section>

    <!-- Section Who We Are -->
    <section class="bg-black py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-6 lg:gap-8 items-stretch">
            <!-- Left Side - Title -->
            <div class="lg:w-2/4 flex items-center">
                <div>
                    <h2
                        class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                        <span class="text-white">Who We Are</span>
                    </h2>
                    <p class="text-white mt-4 text-lg">
                        Narasea (Yayasan Cerita Laut Nusantara) is more than an organization - it's a movement. We are
                        storytellers, conservationists, and educators working to connect people with the ocean. Through
                        education, action, and storytelling, we empower coastal communities and amplify their voices to
                        protect marine ecosystems.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Our Journey -->
    <section class="bg-black py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row-reverse gap-6 lg:gap-8 items-stretch">
            <!-- Right Side - Content -->
            <div class="lg:w-2/4 flex items-center">
                <div>
                    <h2
                        class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                        <span class="text-white">Our Journey</span>
                    </h2>
                    <p class="text-white mt-4 text-lg">
                        Founded in 2020, Narasea began as a small community of
                        passionate marine students celebrating World Ocean Day.
                        Narasea began with a mission to bridge the gap in ocean
                        awareness. What started as a grassroots movement soon
                        evolved into a platform for marine education, conservation,
                        and storytelling.
                    </p>
                    <br>
                    <p class="text-white mt-4 text-lg">
                        By 2025, we transformed into Yayasan Cerita Laut Nusantara,
                        strengthening our mission and expanding our impact. Today,
                        we continue to connect people with the ocean, amplifying
                        stories that inspire real change.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Our Mission -->
    <section class="relative z-40 bg-blue py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
        style="margin-top: -50px;">
        <div class="max-w-full mx-auto flex flex-col md:flex-row gap-16 px-6 md:px-16">
            <!-- Text Area -->
            <div class="md:w-1/2 text-white">
                <h2 class="font-calimate text-5xl md:text-6xl font-bold mb-4">Our Mission :</h2>
                <p class="font-ttNorms text-xl md:text-2xl mb-6">Echoing the Ocean’s Call.</p>
                <div class="space-y-4">
                    <p class="font-ttNorms text-base md:text-lg leading-relaxed">
                        We listen, we amplify, and we act — ensuring<br>
                        that every ripple of change grows into a wave of<br>
                        transformation for our oceans and coastal communities.
                    </p>
                </div>
            </div>

            <!-- Image Cards Area -->
            <div class="md:w-1/2 overflow-hidden">
                <div class="flex gap-8 items-end">
                    <img src="assets/images/Rectangle 2.png" alt="Ocean Mission 1"
                        class="w-[240px] h-[320px] object-cover rounded-3xl">
                    <img src="assets/images/Rectangle 2.png" alt="Ocean Mission 2"
                        class="w-[190px] h-[260px] object-cover rounded-3xl">
                    <img src="assets/images/Rectangle 2.png" alt="Ocean Mission 3"
                        class="w-[150px] h-[210px] object-cover rounded-3xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Section The Values We Live -->
    <section class="relative z-30 bg-white py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
        style="margin-top: -50px;">

        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-6 lg:gap-8 items-stretch">
            <!-- Left Side - Title -->
            <div class="lg:w-1/3 flex items-center">
                <div>
                    <h2
                        class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                        <span class="text-blue">The </span>
                        <span class="text-teal-blue">Values</span><br>
                        <span class="text-blue">We Live By :</span>
                    </h2>
                </div>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="lg:w-2/3 w-full">
                <!-- Slider Container -->
                <div class="stats-slider">
                    <!-- Card 1 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Connection.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-teal-blue bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Empowerment.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-peachy-orange bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Storytelling for
                                    Impact.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-raspberry-pink bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-golden-yellow p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Sustainability.
                                </p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-golden-yellow bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-black p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Innovation.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-black bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section The Lighthouse Advisory and Ocean Trustees -->
    <section
        class="relative z-20 bg-teal-blue py-[200px] px-4 md:px-16 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-16">
            <!-- Text Area -->
            <div class="md:w-1/2 text-white">
                <h3 class="text-peachy-orange text-xl md:text-2xl font-bold font-calimate mb-2">Together for the Ocean
                </h3>
                <p class="font-ttNorms text-sm md:text-base mb-12">
                    Every wave of change starts with passionate people.<br>
                    Meet the dedicated team behind Narasea.
                </p>
                <h2 class="text-3xl md:text-4xl font-bold font-calimate">
                    <span class="text-peachy-orange">The Lighthouse Advisory</span><br>
                    <span class="text-golden-yellow">and Ocean Trustees</span>
                </h2>
            </div>

            <!-- Cards Area -->
            <div class="md:w-1/2 flex gap-6 items-end overflow-x-auto"
                style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Card 1 -->
                <div class="w-[240px] h-[320px] px-2 flex-shrink-0">
                    <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-black group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="assets/images/image-1.png" alt="Wiro Nur Wirandi"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-4 lg:p-6 flex flex-col flex-grow">
                            <h3 class="text-white text-base sm:text-lg font-bold font-calimate mb-1">
                                Wiro Nur Wirandi
                            </h3>
                            <p class="text-white/80 text-xs font-ttNorms">
                                Chairman of Trustee
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-[190px] h-[260px] px-2 flex-shrink-0">
                    <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-navy group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="assets/images/image-1.png" alt="Ahmad Baihaqi"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-4 lg:p-6 flex flex-col flex-grow">
                            <h3 class="text-white text-base sm:text-lg font-bold font-calimate mb-1">
                                Ahmad Baihaqi
                            </h3>
                            <p class="text-white/80 text-xs font-ttNorms">
                                Advisor Member of Trustee
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-[150px] h-[210px] px-2 flex-shrink-0">
                    <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-golden-yellow group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="assets/images/image-1.png" alt="Dr. Tries Budi"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-4 lg:p-6 flex flex-col flex-grow">
                            <h3 class="text-black text-base sm:text-lg font-bold font-calimate mb-1">
                                Dr. Tries Budi
                            </h3>
                            <p class="text-black/80 text-xs font-ttNorms">
                                Supervisor of Trustee
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section The Ocean’s Story is Still Being Written – Be Part of It -->
    <section class="relative z-10 bg-black py-12 px-4 sm:py-16 md:py-20 -mt-[50px]">
        <div class="max-w-4xl mx-auto text-center" style="margin-top: 50px;">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold font-calimate text-white mb-6">
                The Ocean's Story is Still Being Written - Be Part of It
            </h2>

            <p class="font-ttNorms text-lg sm:text-xl text-white mb-8 max-w-3xl mx-auto">
                Every ripple starts with a single drop. At Narasea,<br>
                we believe that education, action, and storytelling can create<br>
                waves of change for our oceans. Together, we can protect marine ecosystems,<br>
                uplift coastal communities, and amplify the voices of the sea.
            </p>
        </div>

        <!-- Buttons Wrapper as 2-column grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10 w-full max-w-[700px] mx-auto"
            style="margin-top: 100px;">
            <!-- Button 1 -->
            <div class="flex justify-start">
                <a href="#"
                    class="group relative flex items-center justify-center bg-peachy-orange text-white font-semibold font-calimate rounded-full overflow-hidden h-12 w-12 hover:w-[260px] transition-[width] duration-300 ease-in-out">
                    <span
                        class="absolute left-5 flex items-center gap-2 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out group-hover:text-black text-sm">
                        Learn More About Our Work
                        <i class="fas fa-arrow-right text-sm"></i>
                    </span>
                    <span class="group-hover:opacity-0 transition-opacity duration-300 ease-in-out">
                        <i class="fas fa-arrow-right text-sm"></i>
                    </span>
                </a>
            </div>

            <!-- Button 2 -->
            <div class="flex justify-start md:pl-[150px]">
                <a href="#"
                    class="group relative flex items-center justify-center bg-peachy-orange text-white font-calimate font-semibold rounded-full overflow-hidden h-12 w-12 hover:w-[200px] transition-[width] duration-300 ease-in-out pl-4 pr-4">
                    <span
                        class="absolute left-4 flex items-center gap-2 whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out group-hover:text-black text-sm">
                        Join the Movement
                        <i class="fas fa-arrow-right text-sm"></i>
                    </span>
                    <span class="group-hover:opacity-0 transition-opacity duration-300 ease-in-out">
                        <i class="fas fa-arrow-right text-sm"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
</body>

</html>
