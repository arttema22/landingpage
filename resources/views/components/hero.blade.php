<section id="hero" style="background-color:#ffffff" class="hero py-12 xl:pt-12 xl:pb-0 overflow-hidden">
    <div class="container mx-auto h-full">
        <!-- text & img -->
        <div class="flex flex-col xl:flex-row items-center justify-between h-full">
            <!-- text -->
            <div class="hero__text xl:w-[48%] text-center xl:text-left">
                <!-- bage -->
                <div class="flex items-center bg-white py-[10px] px-[20px]
                   w-max gap-x-2 mb-[26px] rounded-full mx-auto xl:mx-0">
                    <!-- bage icon -->
                    <i class="{{ $set['data']['bage'][0]['icon'] }} text-2xl text-accent"></i>
                    <div class="uppercase text-base font-medium
                      text-[#9ab4b7] tracking-[2.24px]">{{ $set['data']['bage'][0]['title'] }}</div>
                </div>
                <!-- title -->
                <h1 class="h1 mb-6">{{ $set['data']['content'][0]['title'] }}</h1>
                <!-- desc -->
                <p class="mb-[42px] md:max-w-xl">
                    {{ $set['data']['content'][0]['text'] }}
                </p>
                <!-- btn-->
                <a class="btn btn-lg btn-accent mx-auto xl:mx-0" href="{{ $set['data']['button'][0]['url'] }}">
                    {{ $set['data']['button'][0]['title'] }}
                </a>
            </div>
            <!-- image -->
            <div class="hero__img hidden xl:flex max-w-[814px] self-end">
                {{-- <img src="assets/img/hero/img.png" alt=""> --}}
                <img src="{{ Storage::url($set['image']) }}" alt="{{ $set['name'] }}">
            </div>
        </div>
    </div>
</section>