<section id="hero" style="background-color:{{ $set['data']['style'][0]['bg'] }}"
    class="hero py-12 xl:pt-12 xl:pb-0 overflow-hidden">
    <div class="container mx-auto h-full">
        <!-- text & img -->
        <div class="flex flex-col xl:flex-row items-center justify-between h-full">
            <!-- image -->
            @if (!empty($set['image']))
            <div class="hero__img hidden xl:flex max-w-[814px] self-end">
                <img src="{{ Storage::url($set['image']) }}" alt="{{ $set['name'] }}">
            </div>
            @endif
            <!-- text -->
            <div class="hero__text xl:w-[48%] text-center xl:text-left">
                <!-- bage -->
                <div style="background-color:{{ $set['data']['style'][0]['bage_bg_color'] }}" class="flex items-center bg-white py-[10px] px-[20px]
                   w-max gap-x-2 mb-[26px] rounded-full mx-auto xl:mx-0">
                    <!-- bage icon -->
                    <i style="color:{{ $set['data']['style'][0]['bage_text_color'] }}"
                        class="{{ $set['data']['bage'][0]['icon'] }} text-2xl text-accent"></i>
                    <div style="color:{{ $set['data']['style'][0]['bage_text_color'] }}" class="uppercase text-base font-medium
                      text-[#9ab4b7] tracking-[2.24px]">{{ $set['data']['bage'][0]['title'] }}</div>
                </div>
                <!-- title -->
                <h1 style="color:{{ $set['data']['style'][0]['content_title_color'] }}" class="h1 mb-6">{{
                    $set['data']['content'][0]['title']
                    }}</h1>
                <!-- desc -->
                <p style="color:{{ $set['data']['style'][0]['content_text_color'] }}" class="mb-[42px] md:max-w-xl">
                    {{ $set['data']['content'][0]['text'] }}
                </p>
                <!-- btn-->
                @if (!empty($set['data']['button'][0]['title']))
                <a style="background-color:{{ $set['data']['style'][0]['button_bg_color'] }};
                color:{{ $set['data']['style'][0]['button_text_color'] }}"
                    class="btn btn-lg btn-accent mx-auto xl:mx-0" href="{{ $set['data']['button'][0]['url'] }}">
                    {{ $set['data']['button'][0]['title'] }}
                </a>
                @endif
            </div>
        </div>
    </div>
</section>