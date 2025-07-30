<section>
    <div class="w-full bg-black py-10 px-3">
        <h1 class="max-w-3xl mx-auto font-semibold text-white text-lg md:text-2xl">Meet our team <br>in Neosia</h1>
        <p class="max-w-3xl mx-auto text-white text-sm md:text-base my-10">Etiam porttitor risus massa nec condiment gravida.</p>
        <div class="relative max-w-7xl mx-auto px-4 overflow-hidden ">
            <!-- Carousel Container -->
            <div id="carousel-track" class="flex items-stretch gap-5 transition-transform duration-500 ease-in-out">
                @foreach ($profiles as $profile)
                    <div class="flex-shrink-0 w-72">
                        <div class="rounded-2xl h-full flex flex-col relative overflow-hidden">
                            <!-- Foto -->
                            <div class="relative flex justify-center bg-{{ $profile['color'] }}">
                                <img src="{{ $profile['img'] }}" alt="">
                                <a href="" 
                                class="absolute -bottom-4 left-2 w-8 h-8 bg-{{ $profile['color'] }} rounded flex items-center justify-center text-white hover:brightness-75">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </div>
                            <!-- Info -->
                            <div class="text-center text-black bg-white px-3 py-5 flex-grow flex flex-col justify-center">
                                <h3 class="text-xl font-bold mb-2">{{ $profile['name'] }}</h3>
                                <p class="text-sm opacity-90 mb-1">{{ $profile['title'] }}</p>
                                <p class="text-sm opacity-90">{{ $profile['subtitle'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button id="nextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

        </div>
    </div>
</section>

<script>
class ProfileCarousel {
    constructor() {
        this.carouselTrack = document.getElementById('carousel-track');
        this.cards = this.carouselTrack.querySelectorAll('.flex-shrink-0');

        this.currentCard = 0;
        this.totalCards = this.cards.length;
        this.cardWidth = 288 + 32; 

        this.prevBtn = document.getElementById('prevBtn');
        this.nextBtn = document.getElementById('nextBtn');

        this.addEvents();
        this.updateSlide();
    }

    addEvents() {
        this.prevBtn.addEventListener('click', () => this.prevCard());
        this.nextBtn.addEventListener('click', () => this.nextCard());

        window.addEventListener('resize', () => {
            this.updateSlide();
        });
    }

    nextCard() {
        if (this.currentCard < this.totalCards - 4) {
            this.currentCard++;
            this.updateSlide();
        }
    }

    prevCard() {
        if (this.currentCard > 0) {
            this.currentCard--;
            this.updateSlide();
        }
    }

    updateSlide() {
        const translateX = -(this.currentCard * this.cardWidth);
        this.carouselTrack.style.transform = `translateX(${translateX}px)`;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new ProfileCarousel();
});
</script>