<section>
    <div class="w-full h-full lg:h-screen relative py-25 md:pt-30 lg:pt-50">
        <!-- Swiper Container -->
        <div class="absolute inset-0 z-0">
            <div class="swiper bgSwiper w-full h-full relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/img/hero.jpg" class="w-full h-full object-cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/course/bg-hero.png" class="w-full h-full object-cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/service/hero-bg.jpg" class="w-full h-full object-cover" />
                    </div>
                </div>

                <!-- Overlay di atas slide -->
                <div class="absolute inset-0 bg-gradient-to-r from-black to-black/30 z-10"></div>
            </div>
        </div>

        <!-- TEXT CONTAINER -->
        <div class="relative z-20 flex flex-col justify-center h-full px-3 md:px-10" data-aos="fade-up">
            <div class="text-white px-10 md:px-15">
                <h1 class="text-center md:text-start text-3xl md:text-5xl font-bold mb-7">
                    UNLOCK YOUR POTENTIAL <br>
                    <span class="text-[#FFB71A]">WITH NEOSIA TRAINING CENTER</span></h1>
                <p class="text-center md:text-start text-sm md:text-base max-w-2xl">
                    Discover Comprehensive Solutions at Neosia Training Center : Your Premier Destination for Comprehensive Training Programs, Licensing Services, Professional Certification, and Expert Consultation Services”
                    <br><br>
                    Empowering you with the skills and knowledge to succeed in the ever-evolving tech industry.
                </p>
                <a href="" class="w-fit text-start px-5 py-2 flex justify-center lg:justify-start mx-auto lg:mx-0  rounded-2xl bg-[#FFB71A] max-w-40 text-sm text-black font-semibold  mt-10   hover:bg-[#ff8b10] hover:text-white transition-all">
                    About Us
                </a>
            </div>

            <!-- Tombol Custom -->
            <div class="absolute top-1/2 left-5 z-50 -translate-y-1/2">
                <button id="prevBtn" class="bg-white/30 p-2 px-3 rounded-full hover:bg-white/50 transition">
                    <ion-icon name="arrow-back-outline" class="text-white pt-1"></ion-icon>
                </button>
            </div>

            <div class="absolute top-1/2 right-5 z-50 -translate-y-1/2">
                <button id="nextBtn" class="bg-white/30 p-2 px-3 rounded-full hover:bg-white/50 transition">
                    <ion-icon name="arrow-forward-outline" class="text-white pt-1"></ion-icon>
                </button>
            </div>

            {{-- desktop --}}
            <div class="xl:flex flex-wrap mt-20 hidden mx-auto">
                <div class="relative flex items-center w-70">
                    <div class="absolute left-0 bg-[#FFB71A] w-[3px] rounded h-25"></div>
                    <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">HOME</p>
                </div>
                <div class="relative flex items-center w-70">
                    <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">PROFESSIONAL COURSES</p>
                </div>
                <div class="relative flex items-center w-70">
                    <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">GLOBAL CERTIFICATION</p>
                </div>
                <div class="relative flex items-center w-70">
                    <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">SOFTWARE LICENSE</p>
                </div>
                <div class="relative flex items-center w-70">
                    <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">COMMUNITY EVENTS</p>
                    <div class="absolute right-0 bg-gray-200 w-[3px] rounded h-25"></div>
                </div>
            </div>
            {{-- tab --}}
            <div class="hidden md:block xl:hidden">
                <div class="md:flex flex-row mt-20 justify-center">
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-[rgb(255,183,26)] w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">HOME</p>
                    </div>
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">PROFESSIONAL COURSES</p>
                    </div>
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">GLOBAL CERTIFICATION</p>
                        <div class="absolute right-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    </div>
                </div>
                <div class="flex flex-row mt-20 justify-center">
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">SOFTWARE LICENSE</p>
                    </div>
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">COMMUNITY EVENTS</p>
                        <div class="absolute right-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    </div>
                </div>
            </div>
            {{-- mobile --}}
            <div class="block md:hidden mt-20">
                <div class="flex flex-row mt-5  justify-center">
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-[#FFB71A] w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">HOME</p>
                    </div>
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">PROFESSIONAL COURSES</p>
                        <div class="absolute right-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    </div>
                </div>    
                <div class="flex flex-row mt-25  justify-center">
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">GLOBAL CERTIFICATION</p>
                    </div>
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">SOFTWARE LICENSE</p>
                        <div class="absolute right-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    </div>
                </div>
                <div class="flex flex-row mt-25  justify-center">
                    <div class="relative flex items-center w-70">
                        <div class="absolute left-0 bg-gray-200 w-[3px] rounded h-25"></div>
                        <p class="mx-auto text-sm md:text-base text-white px-2 md:px-5">COMMUNITY EVENTS</p>
                        <div class="absolute right-0 bg-gray-200 w-[3px] rounded h-25"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper(".bgSwiper", {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
        },
    });
  });
</script>
