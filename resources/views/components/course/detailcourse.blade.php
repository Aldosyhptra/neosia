<section>
    <div class="w-full bg-white py-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 overflow-hidden">
                <!-- Bagian kiri (3/4) -->
                <div class="md:col-span-3 px-3" data-aos="fade-right">
                    <h6 class="text-start py-2 px-5 bg-[#FFB71A] w-fit font-semibold text-xs md:text-sm" data-aos="fade-right" data-aos-delay="100">Development</h6>
                    <h1 class="text-start text-lg md:text-2xl font-bold my-5" >The business Intelligence analyst Course 2022</h1>
                    <div class="flex gap-2">
                        <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10 h-10 object-cover">
                        <div class="flex gap-5">
                            <div class="text-start">
                                <h6 class="font-semibold text-xs md:text-sm">Teacher</h6>
                                <p class="text-xs md:text-sm">Elon Gated</p>
                            </div>
                            <div class="text-start">
                                <h6 class="font-semibold text-xs md:text-sm">Last Update:</h6>
                                <p class="text-xs md:text-sm">July 20 2025</p>
                            </div>
                        </div>
                    </div>
                    <img src="/img/course/course.png" alt="" class="w-full h-auto object-cover rounded-md mt-10">

                    <div x-data="{ tab: 'description' }" class="w-full">
                        {{-- Menu Tabs --}}
                        <div class="flex flex-wrap justify-center items-center gap-1 my-5">
                            <button 
                                @click="tab = 'description'" 
                                :class="tab === 'description' ? 'bg-[#FFB71A] text-black' : 'bg-[#D9D9D9] text-black hover:bg-gray-400'" 
                                class="transition-all w-35 text-sm md:text-base md:w-50 py-3 px-5 rounded-md font-semibold break-words">
                                Description
                            </button>

                            <button 
                                @click="tab = 'curriculum'" 
                                :class="tab === 'curriculum' ? 'bg-[#FFB71A] text-black' : 'bg-[#D9D9D9] text-black hover:bg-gray-400'" 
                                class="transition-all w-35 text-sm md:text-base md:w-50 py-3 px-5 rounded-md font-semibold break-words">
                                Curriculum
                            </button>

                            <button 
                                @click="tab = 'review'" 
                                :class="tab === 'review' ? 'bg-[#FFB71A] text-black' : 'bg-[#D9D9D9] text-black hover:bg-gray-400'" 
                                class="transition-all w-35 text-sm md:text-base md:w-50 py-3 px-5 rounded-md font-semibold break-words">
                                Review
                            </button>

                            <button 
                                @click="tab = 'member'" 
                                :class="tab === 'member' ? 'bg-[#FFB71A] text-black' : 'bg-[#D9D9D9] text-black hover:bg-gray-400'" 
                                class="transition-all w-35 text-sm md:text-base md:w-50 py-3 px-5 rounded-md font-semibold break-words">
                                Member
                            </button>
                        </div>

                        {{-- Content --}}
                        <div x-show="tab === 'description'" class="text-justify">
                            <h2 class="text-sm md:text-base font-bold mb-4">Course Overview</h2>
                            <p class="text-xs md:text-sm">Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how's your father David skive off sloshed, don't get shirty with me chip shop vagabond crikey bugger Queen's English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it's your round don't get shirty with me down the pub well. Give us a bell bits and bobs Charles he lost his bottle super my lady cras starkers bite your arm off Queen's English, pardon me horse play Elizabeth a blinding shot chinwag knees up do one David, blag cup of tea Eaton so I said bleeding haggle James Bond cup of char. Gosh William ummm I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do with me nancy boy show off show off pick your nose and blow off spiffing good time lavatory me old mucker, chimney pot what a load of rubbish boot squiffy lost the plot brolly wellies excuse my french.</p>
                        </div>
                        <div x-show="tab === 'curriculum'" x-cloak>
                            <div x-data="{ open: false }" class="border border-gray-300 my-5">
                                <!-- Header Week -->
                                <div 
                                    class="flex flex-row gap-2 justify-center md:justify-between items-center p-5 cursor-pointer" 
                                    @click="open = !open"
                                >
                                    <h1 class="font-bold">Week 01</h1>
                                        <ion-icon 
                                            name="chevron-down-outline"
                                            class="transition-transform duration-300"
                                            :class="open ? 'rotate-180' : 'rotate-0'"
                                        >
                                        </ion-icon>
                                </div>

                                <!-- Detail Week -->
                                <div x-show="open" x-transition>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="document-text-outline"></ion-icon>
                                                <p>Reading: Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                                <p class="py-2 px-4 rounded-xs bg-[#FFB71A]">2 Questions</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="videocam-outline"></ion-icon>
                                                <p>Video: Greetings and introduction</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="headset-outline"></ion-icon>
                                                <p>Audio: Interactive lesson</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                                <p class="py-2 px-4 rounded-xs bg-[#FFB71A]">2 Questions</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="document-text-outline"></ion-icon>
                                                <p>Reading: Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ open: false }" class="border border-gray-300 my-5">
                                <!-- Header Week -->
                                <div 
                                    class="flex flex-row gap-2 justify-center md:justify-between items-center p-5 cursor-pointer" 
                                    @click="open = !open"
                                >
                                    <h1 class="font-bold">Week 02</h1>
                                        <ion-icon 
                                            name="chevron-down-outline"
                                            class="transition-transform duration-300"
                                            :class="open ? 'rotate-180' : 'rotate-0'"
                                        >
                                        </ion-icon>
                                </div>

                                <!-- Detail Week -->
                                <div x-show="open" x-transition>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="document-text-outline"></ion-icon>
                                                <p>Reading: Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                                <p class="py-2 px-4 rounded-xs bg-[#FFB71A]">2 Questions</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="videocam-outline"></ion-icon>
                                                <p>Video: Greetings and introduction</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="headset-outline"></ion-icon>
                                                <p>Audio: Interactive lesson</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                                <p class="py-2 px-4 rounded-xs bg-[#FFB71A]">2 Questions</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="flex flex-col md:flex-row gap-5 md:gap-2 justify-between items-center p-5">
                                            <div class="flex items-center gap-1">    
                                                <ion-icon name="document-text-outline"></ion-icon>
                                                <p>Reading: Ut enim ad minim veniam</p>
                                            </div>
                                            <div class="flex justify-end items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <p class="py-2">14 minutes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="tab === 'review'" x-cloak>
                            <h2 class="text-xl font-bold mb-4">Review</h2>
                            <p>Ini adalah konten review.</p>
                        </div>
                        <div x-show="tab === 'member'" x-cloak>
                            <h2 class="text-xl font-bold mb-4">Member</h2>
                            <p>Ini adalah konten member.</p>
                        </div>
                    </div>
                </div>

                <!-- Bagian kanan (1/4) -->
                <div class="md:col-span-1 px-3 md:px-5" data-aos="fade-left">
                    <div class="rounded-lg shadow-lg border-1 border-gray-200 p-3 text-xs md:text-sm text-start">
                        <img src="/img/course/course.png" alt="" class="w-full h-auto object-cover rounded-md">
                        <div class="py-2 px-5 bg-[#FFB71A] flex flex-wrap justify-between items-center my-3 font-semibold rounded-md">
                            <p>Price:</p>
                            <p>Rp150.000</p>
                        </div>
                        <div class="flex gap-2">
                            <p class="font-semibold">Instructor:</p>
                            <p>Elon Gated</p>
                        </div>
                        <div class="h-[0.5px] w-full bg-gray-300 mt-1 mb-3"></div>
                        <div class="flex gap-2">
                            <p class="font-semibold">Lectures:</p>
                            <p>14</p>
                        </div>
                        <div class="h-[0.5px] w-full bg-gray-300 mt-1 mb-3"></div>
                        <div class="flex gap-2">
                            <p class="font-semibold">Duration:</p>
                            <p>6 weeks</p>
                        </div>
                        <div class="h-[0.5px] w-full bg-gray-300 mt-1 mb-3"></div>
                        <div class="flex gap-2">
                            <p class="font-semibold">Enrolled:</p>
                            <p>Elon Gated</p>
                        </div>
                        <div class="h-[0.5px] w-full bg-gray-300 mt-1 mb-3"></div>
                        <div class="flex gap-2">
                            <p class="font-semibold">Language:</p>
                            <p>English</p>
                        </div>
                        <div class="h-[0.5px] w-full bg-gray-300 mt-1 mb-3"></div>
                        <a href="" class="flex mx-auto w-fit px-5 py-2 rounded-2xl bg-[#FFB71A] text-black font-semibold text-sm hover:bg-[#ff8b10] hover:text-white transition-all">
                            Paynow
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>