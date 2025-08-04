<section>
    <div class="w-full bg-black text-white p-6 py-15" x-data="industrySlider()">
        <div class="max-w-6xl mx-auto">
            {{-- Header --}}
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold">Industry</h2>
                <div class="flex space-x-2">
                    <button 
                        @click="slidePrev()" 
                        :disabled="currentIndex === 0"
                        :class="currentIndex === 0 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-yellow-300'"
                        class="w-10 h-10 bg-yellow-400 text-black rounded-full flex items-center justify-center transition-all duration-200">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </button>
                    <button 
                        @click="slideNext()" 
                        :disabled="currentIndex >= maxIndex"
                        :class="currentIndex >= maxIndex ? 'opacity-50 cursor-not-allowed' : 'hover:bg-yellow-300'"
                        class="w-10 h-10 bg-yellow-400 text-black rounded-full flex items-center justify-center transition-all duration-200">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
            </div>

            {{-- Slider Container --}}
            <div class="overflow-hidden">
                <div 
                    class="flex transition-transform duration-500 ease-in-out"
                    :style="`transform: translateX(-${currentIndex * (100/visibleItems)}%)`">
                    
                    {{-- Industry Cards --}}
                    <div class="flex gap-4 transition-transform duration-500"
                        :style="`transform: translateX(-${currentIndex * (100/visibleItems)}%)`">
                        
                        @foreach ($industries as $industry)
                            <div class="flex-shrink-0 " :style="`width: ${100/visibleItems}%`">
                                <div class="bg-white rounded-b-lg overflow-hidden group ">
                                    <div class="aspect-square flex items-center justify-center relative overflow-hidden">
                                        <img src="{{ $industry['img'] }}" 
                                            alt="{{ $industry['description'] }}" 
                                            class="object-cover w-full h-full group-hover:scale-100 scale-105 transition-all group-hover:brightness-75">
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-sm text-black group-hover:scale-102 transition-all font-medium text-center">
                                            {{ $industry['description'] }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>    
    </div>
</section>

<script>
function industrySlider() {
    return {
        currentIndex: 0,
        visibleItems: 6,
        totalItems: {{ count($industries) }},
        
        get maxIndex() {
            return Math.max(0, this.totalItems - this.visibleItems);
        },

        slideNext() {
            if (this.currentIndex < this.maxIndex) {
                this.currentIndex++;
            }
        },

        slidePrev() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
            }
        },

        init() {
            this.updateVisibleItems();
            window.addEventListener('resize', () => {
                this.updateVisibleItems();
            });
        },

        updateVisibleItems() {
            if (window.innerWidth < 640) {
                this.visibleItems = 2; 
            } else if (window.innerWidth < 1024) {
                this.visibleItems = 4; 
            } else {
                this.visibleItems = 6;
            }
            
            if (this.currentIndex > this.maxIndex) {
                this.currentIndex = this.maxIndex;
            }
        }
    }
}
</script>