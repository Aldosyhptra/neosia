<section class="bg-white w-full  py-10 md:py-15">
    <div class="max-w-6xl mx-auto">
        {{-- Category --}}
        <div class="flex justify-between items-center bg-[#FFEFCD] px-3 py-5 md:px-5 md:py-7 rounded-md">
            <p class="font-semibold">Category Courses</p>
            <div x-data="{ open: false }" class="relative inline-block">
                <!-- Tombol -->
                <button 
                    @click="open = !open"
                    class="px-5 py-2 rounded-2xl bg-[#FFB71A] text-black font-semibold text-sm hover:bg-[#ff8b10] hover:text-white transition-all flex gap-2 items-center"
                >
                    Default
                    <ion-icon name="chevron-down-outline" class=""
                        :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                </button>

                <!-- Dropdown -->
                <div 
                    x-show="open" 
                    @click.away="open = false"
                    x-transition
                    class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg"
                >
                    <ul class="py-1">
                        <li>
                            <a href="/course/1" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 capitalize">
                                course 1
                            </a>
                        </li>
                        <li>
                            <a href="/course/2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 capitalize">
                                course 2
                            </a>
                        </li>
                        <li>
                            <a href="/course/3" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 capitalize">
                                course 3
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Courses Section --}}
        <div class="flex flex-wrap justify-center items-center gap-5 my-10 px-3 md:px-0">
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
            <div class="group sm:max-w-70 md:max-w-92 relative block overflow-hidden border-1 border-gray-300 shadow-sm">
                    <div
                        class="absolute start-4 top-4 z-20 bg-[#FFB71A] p-1.5 px-3 text-black transition hover:text-[#FFB71A] hover:bg-black"
                    >
                        Development
                    </div>
                    
                    <div class="relative h-64 sm:h-72 w-full overflow-hidden">
                        <img
                        src="/img/course/course.png"
                        alt=""
                        class="h-full w-full object-cover transition duration-500 scale-105 group-hover:scale-100 group-hover:brightness-75"
                        />
                    </div>

                    <div class="relative border border-gray-100 bg-white">
                        <div class="p-6 text-start flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="star-outline" class="text-[#FFB71A] hover:bg-[#FFB71A] hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">4.5 (100 )</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="heart-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">18.400</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <a href="" class="mt-1">
                                        <ion-icon name="person-outline" class="text-gray-800 hover:bg-gray-800 hover:text-white p-1 rounded-full transition-all"></ion-icon>
                                    </a>
                                    <p class=" text-xs md:text-sm">365</p>
                                </div>
                            </div>
                            <h1 class="font-semibold">The most complete design Thingking course.........</h1>
                            <div class="flex gap-2 items-center -mb-2">
                                <img src="/img/landingpage/person.png" alt="" class="rounded-full w-10">
                                <p>Alex Exelson</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center gap-3 border-t-1 border-gray-300">
                            <a href="/course/detail"
                                class="w-full rounded-2xl text-gray-700 py-4 text-sm font-medium transition hover:scale-105 hover:text-black flex justify-center items-center gap-1"
                            >
                                Read More
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                            <p
                                class="w-full rounded-2xl py-4 text-sm transition hover:scale-105 font-semibold"
                            >
                                Rp900,000
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>