<section>
    <div class="w-full h-[75vh] relative py-25 md:pt-30 lg:pt-50">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-black/30"></div>

            <img src="/img/course/bg-hero.png" alt="" class="w-full h-full object-cover">
        </div>

        <!-- Text berada di atas background -->
        <div class="max-w-6xl mx-auto relative z-10 flex flex-col justify-center h-full px-3 md:px-10 ">
            <div class="text-white">
                <h1 class="text-center md:text-start text-3xl md:text-5xl font-bold mb-4">
                    Course
                </h1>
                <nav aria-label="Breadcrumb">
                    <ol class="flex items-center justify-center md:justify-start gap-1 text-sm text-gray-400">
                        <li>
                        <a href="/" class="block transition-colors hover:text-white"> Home </a>
                        </li>

                        <li class="rtl:rotate-180">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-4"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                            />
                        </svg>
                        </li>
                        @php
                            $labels = is_array($label) ? $label : [$label];

                            $base = '';
                        @endphp
                         @foreach ($labels as $index => $item)
                            @php
                                $base .= '/' . \Illuminate\Support\Str::slug($item);
                            @endphp

                            <li>
                                @if ($index === count($labels) - 1)
                                    <span class="block text-white">
                                        {{ $item }}
                                    </span>
                                @else
                                    <a href="{{ $base }}" class="block transition-colors hover:text-white">
                                        {{ $item }}
                                    </a>
                                @endif
                            </li>

                            @if ($index !== count($labels) - 1)
                                <li class="rtl:rotate-180">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="size-4"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>