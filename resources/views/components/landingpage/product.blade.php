<section>
    <div class="w-full bg-[#FFB71A] py-10 px-3">
        <p class="max-w-3xl mx-auto font-semibold text-black text-lg md:text-2xl">These Are Some of the Amazing Products We’ve Proudly Helped Bring to Life</p>
        <div class="flex flex-wrap justify-center items-center gap-5 mt-5 overflow-hidden">
            {{-- Product --}}
            @foreach ($products as $index => $product)
                <div class="py-5 px-3 flex flex-col items-center scale-105 group hover:scale-100 transition-all"
                    data-aos="fade-left"
                    data-aos-delay="{{ $index * 100 }}">
                    <img src="{{ $product['img_path'] }}" 
                        alt="Product" 
                        class="h-16 min-w-36 max-w-50 object-cover group-hover:scale-110 transition-all">
                </div>
            @endforeach
        </div>
    </div>
</section>