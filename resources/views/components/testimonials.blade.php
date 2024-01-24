@if (count($testimonials) > 0)
<section id="testimonial"
    class="testimonial bg-testimonials bg-cover bg-right bg-no-repeat py-12 xl:min-h-[595px] xl:py-0">
    <div class="testimonial__container container mx-auto">
        <div class="flex flex-col items-center gap-x-14 xl:flex-row">
            <!-- img -->
            <div class="hidden xl:flex">
                <img src="assets/img/testimonials/img.png" alt="">
            </div>
            <!-- slider -->
            <div class="max-w-[98%] xl:max-w-[710px]">
                <!-- Slider main container -->
                <div class="swiper h-[400px]">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @foreach ( $testimonials as $testimonial )
                        <div class="swiper-slide">
                            <div class="h-full flex flex-col justify-center items-start">
                                <div class="max-w-[680px] mx-auto text-center xl:text-left">
                                    <!-- message -->
                                    <p class="font-light relative text-[22px] text-[#4c5354]
                                  leading-[190%] text-center xl:text-left before:bg-quoteLeft
                                  before:bg-contain before:bg-bottom before:inline-block
                                  before:top-0 before:w-10 before:h-10 before:bg-no-repeat
                                  after:bg-quoteRight after:bg-contain after:bg-bottom
                                  after:inline-block after:top-0 after:w-10 after:h-10
                                  after:bg-no-repeat mb-7">
                                        <span class="mx-2">
                                            {{ $testimonial->text }}
                                        </span>
                                    </p>
                                    <!-- name -->
                                    <div class="text-[26px] text-[#4c5354] font-semibold">
                                        {{ $testimonial->name }}
                                    </div>
                                    <!-- job -->
                                    <div class="text-[#9ab4b7] font-medium uppercase
                                  tracking-[2.24px]">
                                        {{ $testimonial->position }}
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
    </div>
</section>
@endif