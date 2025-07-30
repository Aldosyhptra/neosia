    <nav id="navbar" class="w-full fixed top-0 z-50">
        <!-- Top bar -->
        <div class="bg-black flex flex-row justify-between items-center p-4 md:px-5 lg:px-10 navbar-transition" 
             :class="{ 'navbar-hidden': !showTopBar }">
             <a href="/">
                 <img src="/img/logo/logo.png" alt="" class="max-h-8 md:max-h-8">
             </a>

            <div class="flex flex-row gap-3 items-center">
                <!-- Burger Kategori (tetap ada) -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="p-2 text-white rounded-md hover:bg-gray-900 focus:outline-none transition-all flex items-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="1"/>
                            <circle cx="12" cy="5" r="1"/>
                            <circle cx="19" cy="5" r="1"/>
                            <circle cx="5" cy="12" r="1"/>
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="19" cy="12" r="1"/>
                            <circle cx="5" cy="19" r="1"/>
                            <circle cx="12" cy="19" r="1"/>
                            <circle cx="19" cy="19" r="1"/>
                            </svg>
                        <span class="text-white text-xs">Category</span>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg z-50">
                        <ul class="py-1">
                            <li><a href="#category1" class="block px-4 py-2 hover:bg-gray-100">Category 1</a></li>
                            <li><a href="#category2" class="block px-4 py-2 hover:bg-gray-100">Category 2</a></li>
                            <li><a href="#category3" class="block px-4 py-2 hover:bg-gray-100">Category 3</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Search -->
                <label for="Search" class="hidden sm:block">
                    <div class="relative">
                        <input
                            type="text"
                            id="Search"
                            placeholder="Search for courses"
                            class="mt-0.5 bg-white w-full rounded border border-gray-300 p-2 pe-10 shadow-sm text-xs md:text-sm focus:outline-none"
                        />
                        <span class="absolute inset-y-0 right-2 grid w-8 place-content-center">
                            <button
                                type="button"
                                aria-label="Submit"
                                class="rounded-full p-1.5 text-gray-700 transition-colors hover:bg-gray-100"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </label>

                <!-- Burger untuk mobile -->
                <div x-data="{ menuOpen: false }" class="xl:hidden">
                    <button @click="menuOpen = !menuOpen" class="p-2 text-white rounded-md hover:bg-gray-900 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Dropdown menu mobile -->
                    <div x-show="menuOpen" @click.away="menuOpen = false" x-transition
                        class="absolute top-16 left-0 w-full bg-[#1B1C1E] text-gray-400 p-5 z-50 space-y-4 xl:hidden">

                        <!-- Search -->
                        <label for="Search" class="block sm:hidden">
                            <div class="relative">
                                <input
                                    type="text"
                                    id="Search"
                                    placeholder="Search for courses"
                                    class="mt-0.5 bg-white w-full rounded border text-black border-gray-300 p-2 pe-10 shadow-sm text-xs md:text-sm focus:outline-none"
                                />
                                <span class="absolute inset-y-0 right-2 grid w-8 place-content-center">
                                    <button
                                        type="button"
                                        aria-label="Submit"
                                        class="rounded-full p-1.5 text-gray-700 transition-colors hover:bg-gray-100"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </label>

                        <a href="" class="block hover:text-white {{ request()->is('/') ? 'text-[#FFB71A]' : 'text-gray-400' }}">Home</a>
                        <a href="" class="block hover:text-white {{ request()->is('/about') ? 'text-[#FFB71A]' : 'text-gray-400' }}">About</a>
                        <!-- Dropdown for Courses -->
                        <div 
                            x-data="{ open: false, hover: false }" 
                            x-init="$watch('hover', val => { if (!val && !open) open = false })"
                            class="relative"
                            @mouseenter="hover = true"
                            @mouseleave="hover = false"
                        >
                            <!-- Trigger -->
                            <button 
                                @click="open = !open" 
                                class="flex items-center gap-1 text-gray-400 hover:text-white"
                            >
                                Courses
                                <ion-icon name="chevron-down-outline"
                                    :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                            </button>

                            <!-- Dropdown -->
                            <div
                                x-show="open || hover"
                                x-transition
                                class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                            >
                                <ul>
                                    <li>
                                        <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Dropdown for Layanan -->
                        <div 
                            x-data="{ open: false, hover: false }" 
                            x-init="$watch('hover', val => { if (!val && !open) open = false })"
                            class="relative"
                            @mouseenter="hover = true"
                            @mouseleave="hover = false"
                        >
                            <!-- Trigger -->
                            <button 
                                @click="open = !open" 
                                class="flex items-center gap-1 text-gray-400 hover:text-white"
                            >
                                Layanan
                                <ion-icon name="chevron-down-outline"
                                    :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                            </button>

                            <!-- Dropdown -->
                            <div
                                x-show="open || hover"
                                x-transition
                                class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                            >
                                <ul>
                                    <li>
                                        <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Dropdown for Product -->
                        <div 
                            x-data="{ open: false, hover: false }" 
                            x-init="$watch('hover', val => { if (!val && !open) open = false })"
                            class="relative"
                            @mouseenter="hover = true"
                            @mouseleave="hover = false"
                        >
                            <!-- Trigger -->
                            <button 
                                @click="open = !open" 
                                class="flex items-center gap-1 text-gray-400 hover:text-white"
                            >
                                Product
                                <ion-icon name="chevron-down-outline"
                                    :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                            </button>

                            <!-- Dropdown -->
                            <div
                                x-show="open || hover"
                                x-transition
                                class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                            >
                                <ul>
                                    <li>
                                        <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Dropdown for Blogs -->
                        <div 
                            x-data="{ open: false, hover: false }" 
                            x-init="$watch('hover', val => { if (!val && !open) open = false })"
                            class="relative"
                            @mouseenter="hover = true"
                            @mouseleave="hover = false"
                        >
                            <!-- Trigger -->
                            <button 
                                @click="open = !open" 
                                class="flex items-center gap-1 text-gray-400 hover:text-white"
                            >
                                Blogs
                                <ion-icon name="chevron-down-outline"
                                    :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                            </button>

                            <!-- Dropdown -->
                            <div
                                x-show="open || hover"
                                x-transition
                                class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                            >
                                <ul>
                                    <li>
                                        <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="" class="block hover:text-white {{ request()->is('/check-certificate') ? 'text-[#FFB71A]' : 'text-gray-400' }}">Check Certificate</a>
                        <a href="" class="block hover:text-white {{ request()->is('/contact') ? 'text-[#FFB71A]' : 'text-gray-400' }}">Contact</a>

                        <div class="flex gap-5 lg-5 lg:mt-0">
                            <div class="flex gap-2 mt-1">
                                <p class="text-white">Try For Free</p> 
                                <ion-icon name="arrow-forward-outline" class="text-white mt-1"> </ion-icon>
                            </div>
                            <div class="flex gap-2">
                                <a href="">
                                    <ion-icon name="bag-handle-outline" class="p-2 rounded-full text-white bg-[#4F46E5] hover:text-[#4F46E5] hover:bg-white transition-all"></ion-icon>
                                </a>
                                <a href="">
                                <ion-icon name="person-outline" class="p-2 rounded-full text-white bg-[#059669] hover:text-[#059669] hover:bg-white transition-all"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar bawah (hanya desktop) -->
        <div class="bg-[#1B1C1E] text-sm p-4 md:px-5 lg:px-10 hidden xl:flex flex-col lg:flex-row justify-between md:items-start lg:items-center gap-5">
            <div class="flex flex-col flex-wrap md:flex-row gap-4 lg:gap-10 ">
                <a href="" class="block hover:text-white {{ request()->is('/') ? 'text-[#FFB71A]' : 'text-gray-400' }}">Home</a>
                <a href="" class="block hover:text-white {{ request()->is('/about') ? 'text-[#FFB71A]' : 'text-gray-400' }}">About</a>
                    <!-- Dropdown for Courses -->
                    <div 
                        x-data="{ open: false, hover: false }" 
                        x-init="$watch('hover', val => { if (!val && !open) open = false })"
                        class="relative"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                    >
                        <!-- Trigger -->
                        <button 
                            @click="open = !open" 
                            class="flex items-center gap-1 text-gray-400 hover:text-white"
                        >
                            Courses
                            <ion-icon name="chevron-down-outline"
                                :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                        </button>

                        <!-- Dropdown -->
                        <div
                            x-show="open || hover"
                            x-transition
                            class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                        >
                            <ul>
                                <li>
                                    <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown for Layanan -->
                    <div 
                        x-data="{ open: false, hover: false }" 
                        x-init="$watch('hover', val => { if (!val && !open) open = false })"
                        class="relative"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                    >
                        <!-- Trigger -->
                        <button 
                            @click="open = !open" 
                            class="flex items-center gap-1 text-gray-400 hover:text-white"
                        >
                            Layanan
                            <ion-icon name="chevron-down-outline"
                                :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                        </button>

                        <!-- Dropdown -->
                        <div
                            x-show="open || hover"
                            x-transition
                            class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                        >
                            <ul>
                                <li>
                                    <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown for Product -->
                    <div 
                        x-data="{ open: false, hover: false }" 
                        x-init="$watch('hover', val => { if (!val && !open) open = false })"
                        class="relative"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                    >
                        <!-- Trigger -->
                        <button 
                            @click="open = !open" 
                            class="flex items-center gap-1 text-gray-400 hover:text-white"
                        >
                            Product
                            <ion-icon name="chevron-down-outline"
                                :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                        </button>

                        <!-- Dropdown -->
                        <div
                            x-show="open || hover"
                            x-transition
                            class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                        >
                            <ul>
                                <li>
                                    <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Dropdown for Blogs -->
                    <div 
                        x-data="{ open: false, hover: false }" 
                        x-init="$watch('hover', val => { if (!val && !open) open = false })"
                        class="relative"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                    >
                        <!-- Trigger -->
                        <button 
                            @click="open = !open" 
                            class="flex items-center gap-1 text-gray-400 hover:text-white"
                        >
                            Blogs
                            <ion-icon name="chevron-down-outline"
                                :class="{'rotate-180 transition-transform': open || hover}"></ion-icon>
                        </button>

                        <!-- Dropdown -->
                        <div
                            x-show="open || hover"
                            x-transition
                            class="absolute left-0 text-black mt-0.5 w-48 bg-white border rounded-lg shadow-lg z-50"
                        >
                            <ul>
                                <li>
                                    <a href="" class="block rounded-lg px-4 py-2 hover:bg-gray-200">Web Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Mobile Development</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 rounded-lg  hover:bg-gray-200">Data Science</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a href="" class="block hover:text-white {{ request()->is('/check-certificate') ? 'text-[#FFB71A]' : 'text-gray-400' }}">Check Certificate</a>
                    <a href="" class="block hover:text-white {{ request()->is('/contact') ? 'text-[#FFB71A]' : 'text-gray-400' }}">Contact</a>

                </div>
                <div class="flex gap-5 lg-5 lg:mt-0">
                    <div class="flex gap-2 mt-1">
                        <p class="text-white">Try For Free</p> 
                        <ion-icon name="arrow-forward-outline" class="text-white mt-1"> </ion-icon>
                    </div>
                    <div class="flex gap-2">
                        <a href="">
                            <ion-icon name="bag-handle-outline" class="p-2 rounded-full text-white bg-[#4F46E5] hover:text-[#4F46E5] hover:bg-white transition-all"></ion-icon>
                        </a>
                        <a href="">
                        <ion-icon name="person-outline" class="p-2 rounded-full text-white bg-[#059669] hover:text-[#059669] hover:bg-white transition-all"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
    </nav>

<script>
    const navbar = document.getElementById('navbar');
    let lastScrollTop = 0;

    navbar.style.transition = 'top 0.3s ease';

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (window.innerWidth < 768) {
            navbar.style.top = '0';
            return;
        }

        if (currentScroll > lastScrollTop && currentScroll > 100) {
            navbar.style.top = '-72px';
        } 
        else if (currentScroll < lastScrollTop) {
            navbar.style.top = '0';
        }

        if (currentScroll <= 0) {
            navbar.style.top = '0';
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
</script>