<section id="hero" style="background-color:{{ ($settings->has('bg_color')) ? $settings->get('bg_color') : '#ffffff' }}"
    class="hero py-12 xl:pt-12 xl:pb-0 overflow-hidden">
    <div class="container mx-auto h-full">
        <!-- text & img -->
        <div class="flex flex-col xl:flex-row items-center justify-between h-full">
            <!-- text -->
            <div class="hero__text xl:w-[48%] text-center xl:text-left">
                <!-- bage -->
                @if($settings->has('bage_title'))
                <div class="flex items-center bg-white py-[10px] px-[20px]
                   w-max gap-x-2 mb-[26px] rounded-full mx-auto xl:mx-0">
                    <!-- bage icon -->
                    @if($settings->has('bage_icon'))
                    <i class="{{ $settings->get('bage_icon') }} text-2xl text-accent"></i>
                    @endif
                    <div class="uppercase text-base font-medium
                      text-[#9ab4b7] tracking-[2.24px]">{{ $settings->get('bage_title') }}</div>
                </div>
                @endif
                <!-- title -->
                @if($settings->has('hero_title'))
                <h1 class="h1 mb-6">{{ $settings->get('hero_title') }}</h1>
                @endif
                <!-- desc -->
                @if($settings->has('hero_text'))
                <p class="mb-[42px] md:max-w-xl">
                    {{ $settings->get('hero_text') }}
                </p>
                @endif
                <!-- btn-->
                @if($settings->has('hero_btn_title'))
                <a class="btn btn-lg btn-accent mx-auto xl:mx-0" href="{{ $settings->get('hero_btn_url') }}">
                    {{ $settings->get('hero_btn_title') }}
                </a>
                @endif
            </div>
            <!-- image -->
            <div class="hero__img hidden xl:flex max-w-[814px] self-end">
                {{-- <img src="assets/img/hero/img.png" alt=""> --}}
                <img src="{{ Storage::url($set['image']) }}" alt="{{ $set['name'] }}">
            </div>
        </div>
    </div>
</section>