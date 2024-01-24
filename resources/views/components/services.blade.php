@if (count($services) > 0)
<section id="service" class="services">
    <!-- bg -->
    <div class="bg-services bg-cover bg-no-repeat max-w-[1466px]
          mx-4 xl:mx-auto rounded-[20px] xl:pt-[70px] px-6 xl:px-0
          relative h-[368px] flex items-center xl:items-start -z-10">
        <div class="container mx-auto">
            <!-- text -->
            <div class="services__top flex items-center flex-col
                xl:flex-row xl:mb-[60px]">
                <h2 class="h2 text-white flex-1 mb-4 xl:mb-0 text-center
                   xl:text-left">
                    Наши лучшие сервисы для Вас
                </h2>
                <p class="text-white flex-1 text-center xl:text-left
                   max-w-2xl xl:max-w-none">
                    Учитывая ключевые сценарии поведения, глубокий уровень погружения способствует повышению качества
                    экспериментов,
                    поражающих по своей масштабности и грандиозности. А также представители современных социальных
                    резервов.
                </p>
            </div>
        </div>
    </div>
    <!-- grid container -->
    <div class="container mx-auto mt-8 xl:-mt-[144px]">
        <!-- grid -->
        <div class="grid xl:grid-cols-4 gap-5 px-8 xl:px-0">
            @foreach ( $services as $service )
            <!-- grid item -->
            <div class="services__item bg-white p-[30px]
                rounded-[10px] shadow-custom2 min-h-[288px]
                flex flex-col items-center text-center">
                <!-- grid item icon -->
                <div class="mb-[15px]">
                    <img src="{{ $service->icon }}" alt="">
                </div>
                <!-- grid item title-->
                <h3 class="h3 mb-[10px]">{{ $service->title }}</h3>
                <!-- grid item description -->
                <p class="font-light leading-normal max-w-[300px]">
                    {{ $service->text }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif