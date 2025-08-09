<section>
    <div class="w-full bg-white py-10 px-3 relative overflow-hidden">

        <!-- Background kiri-->
        <div class="absolute inset-y-0 -left-15 w-1/3">
            <img src="/img/landingpage/sidebg-mengapa.png" class="h-full w-full object-cover transform scale-x-[-1]"
                alt="">
        </div>

        <!-- Background kanan-->
        <div class="absolute inset-y-0 -right-15 w-1/3">
            <img src="/img/landingpage/sidebg-mengapa.png" class="h-full w-full object-cover transform" alt="">
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-start text-black text-lg md:text-2xl">What News </h1>
                <a href="#"
                    class="bg-[#3D3D3D] text-white py-2 px-7 rounded-md text-xs md:text-sm hover:bg-white hover:text-[#3D3D3D] hover:outline hover:outline-[#3D3D3D] transition-all">Lainnya
                    ></a>
            </div>
            <!-- Wrapper Slider -->
            <div class="relative" data-aos="fade-up">
                <div class="flex justify-end gap-3 my-5 md:my-10">
                    <!-- Tombol Navigasi Kiri -->
                    <button id="prevBtnNews" class="bg-black/50 p-2 px-3 rounded-full hover:bg-black/70 transition">
                        <ion-icon name="arrow-back-outline" class="text-white pt-1"></ion-icon>
                    </button>

                    <!-- Tombol Navigasi Kanan -->
                    <button id="nextBtnNews" class="bg-black/50 p-2 px-3 rounded-full hover:bg-black/70 transition">
                        <ion-icon name="arrow-forward-outline" class="text-white pt-1"></ion-icon>
                    </button>
                </div>

                <!-- Swiper Container -->
                <div class="swiper mySwiperNews my-10">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div
                                class="flex flex-row justify-center max-w-130 mx-auto items-center bg-white rounded-md border border-gray-300 group overflow-hidden">
                                <div class="overflow-hidden">
                                    <img src="/img/landingpage/news.png" alt=""
                                        class="max-w-80 max-h-80 object-cover rounded-tl-md rounded-bl-md group-hover:scale-105 group-hover:brightness-90 transition-all">
                                </div>
                                <div class="flex flex-col gap-7 px-5 text-start">
                                    <p class="text-xs md:text-sm">July 10 2025</p>
                                    <h1 class="text-sm md:text-base text-black">Performance and skills in modern
                                        arts.......</h1>
                                    <a href="" class="text-xs md:text-sm">More Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="flex flex-row justify-center max-w-130 mx-auto  items-center bg-white rounded-md border border-gray-300 group overflow-hidden">
                                <div class="overflow-hidden">
                                    <img src="/img/landingpage/news.png" alt=""
                                        class="max-w-80 max-h-80 object-cover rounded-tl-md rounded-bl-md group-hover:scale-105 group-hover:brightness-90 transition-all">
                                </div>
                                <div class="flex flex-col gap-7 px-5 text-start">
                                    <p class="text-xs md:text-sm">July 10 2025</p>
                                    <h1 class="text-sm md:text-base text-black">Performance and skills in modern
                                        arts.......</h1>
                                    <a href="" class="text-xs md:text-sm">More Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="flex flex-row justify-center max-w-130 mx-auto  items-center bg-white rounded-md border border-gray-300 group overflow-hidden">
                                <div class="overflow-hidden">
                                    <img src="/img/landingpage/news.png" alt=""
                                        class="max-w-80 max-h-80 object-cover rounded-tl-md rounded-bl-md group-hover:scale-105 group-hover:brightness-90 transition-all">
                                </div>
                                <div class="flex flex-col gap-7 px-5 text-start">
                                    <p class="text-xs md:text-sm">July 10 2025</p>
                                    <h1 class="text-sm md:text-base text-black">Performance and skills in modern
                                        arts.......</h1>
                                    <a href="" class="text-xs md:text-sm">More Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="flex flex-row justify-center max-w-130 mx-auto  items-center bg-white rounded-md border border-gray-300 group overflow-hidden">
                                <div class="overflow-hidden">
                                    <img src="/img/landingpage/news.png" alt=""
                                        class="max-w-80 max-h-80 object-cover rounded-tl-md rounded-bl-md group-hover:scale-105 group-hover:brightness-90 transition-all">
                                </div>
                                <div class="flex flex-col gap-7 px-5 text-start">
                                    <p class="text-xs md:text-sm">July 10 2025</p>
                                    <h1 class="text-sm md:text-base text-black">Performance and skills in modern
                                        arts.......</h1>
                                    <a href="" class="text-xs md:text-sm">More Details</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper(".mySwiperNews", {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 1,
            loop: true,
            navigation: {
                nextEl: "#nextBtnNews",
                prevEl: "#prevBtnNews",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                }
            }
        });
    })
</script>
