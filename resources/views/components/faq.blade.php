@if (count($faqs) > 0)
<section id="faq" class="faq">
    <div class="container mx-auto">
        <h2 class="faq__title h2 text-center mb-[50px]">We've got answers</h2>
        <!-- item wrapper -->
        <div class="max-w-5xl mx-auto">
            @foreach ( $faqs as $faq )
            <div class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none">
                <!-- title & icon -->
                <div class="flex items-center justify-between mb-[10px]">
                    <!-- title -->
                    <h4 class="h4">{{ $faq->question }}</h4>
                    <!-- icon -->
                    <div class="faq__btn text-accent">
                        <i class="ri-add-fill text-2xl"></i>
                    </div>
                </div>
                <!-- answer text -->
                <div class="faq__answer h-0 overflow-hidden">
                    <p class="font-light">
                        {!! $faq->answer !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif