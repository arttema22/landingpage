@if (count($team) > 0)
<section id="team" class="team section">
    <div class="container mx-auto">
        <!-- title-->
        <h2 class="team__title h2 mb-[50px] text-center xl:text-left">Our Team</h2>
        <!-- slider -->
        <div class="team__slider swiper min-h-[400px]">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @foreach ( $team as $person )
                <div class="swiper-slide">
                    <div class="flex flex-col md:flex-row gap-9">
                        <!-- item -->
                        <div class="flex-1 flex flex-col xl:flex-row">
                            <div class="flex flex-col xl:flex-row items-center gap-[30px] ">
                                <!-- img -->
                                <div class="flex-1">
                                    <img src="{{ Storage::url($person->photo) }}" alt="{{ $person->name }}">
                                </div>
                                <!-- info -->
                                <div class="flex-1 flex flex-col">
                                    <!-- name -->
                                    <h4 class="h4 mb-[10px] ">{{ $person->name }}</h4>
                                    <!-- job -->
                                    <div class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7]
                                  mb-[20px]">
                                        {{ $person->position }}
                                    </div>
                                    <!-- desc -->
                                    <p class="font-light mb-[26px] max-w-[320px]">
                                        {{ $person->text }}
                                    </p>
                                    <!-- socials -->
                                    <div class="flex items-center text-[30px] gap-x-5 text-accent-tertiary">
                                        <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                            <i class="ri-youtube-fill"></i>
                                        </a>
                                        <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                            <i class="ri-facebook-circle-fill"></i>
                                        </a>
                                        <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                            <i class="ri-instagram-fill"></i>
                                        </a>
                                        <a href="#" class="cursor-pointer hover:text-accent transition-all">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- swiper pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    </div>
</section>
@endif