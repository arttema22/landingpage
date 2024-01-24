<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Insove</title>
    <!-- css -->
    @vite('resources/css/app.css')
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.1/fonts/remixicon.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700&display=swap"
        rel="stylesheet">
    <!-- swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <!-- header -->
    <header id="home" class="py-8 lg:pt-6 lg:pb-14">
        <div class="container mx-auto lg:relative flex flex-col
      lg:flex-row lg:justify-between gap-y-4 lg:gap-y-0">
            <!-- logo -->
            <div class="flex justify-center lg:justify-normal">
                <a href="#">
                    <img src="assets/img/header/logo.svg" alt="">
                </a>
            </div>

            <div class="flex flex-col gap-y-4 lg:flex-row lg:gap-x-10 lg:gap-y-0">
                <!-- location -->
                @if($settings->has('address'))
                <div class="flex justify-center items-center gap-x-2 lg:justify-normal">
                    <i class="ri-map-pin-2-fill text-2xl text-accent"></i>
                    <div class="text-secondary">{{ $settings->get('address') }}</div>
                </div>
                @endif
                <!-- phone -->
                @if($settings->has('phone'))
                <div class="flex justify-center items-center gap-x-2 lg:justify-normal">
                    <i class="ri-phone-fill text-2xl text-accent"></i>
                    <div class="text-secondary">{{ $settings->get('phone') }}</div>
                </div>
                @endif
                <!-- btn-->
                <button class="btn btn-sm btn-outline
            w-[240px] lg:w-auto mx-auto lg:mx-0">
                    Book now
                </button>
                <!-- mobile nav -->
                <nav class="mnav bg-white fixed w-[300px] top-0 h-screen
            -left-[300px] shadow-2xl lg:hidden transition-all duration-300 z-20">
                    <!-- nav trigger btn -->
                    <div class="mnav__close-btn bg-primary w-8 h-8 relative
               -right-full top-8 flex justify-center items-center
               rounded-tr-lg rounded-br-lg cursor-pointer transition-all">
                        <i class="mnav__close-btn-icon ri-arrow-right-s-line
                  text-2xl text-white"></i>
                    </div>

                    <!-- logo, list, form -->
                    <div class="px-12 flex flex-col gap-y-12 h-full">
                        <!-- logo -->
                        <a href="#">
                            <img src="assets/img/header/logo.svg" alt="">
                        </a>
                        <!-- list -->
                        <ul>
                            <li><a href="#home" class="text-secondary hover:text-accent transition-all duration-300">
                                    Home
                                </a></li>
                            <li><a href="#hero" class="text-secondary hover:text-accent transition-all duration-300">
                                    Hero
                                </a></li>
                            <li><a href="#stats" class="text-secondary hover:text-accent transition-all duration-300">
                                    Statistic
                                </a></li>
                            <li><a href="#service" class="text-secondary hover:text-accent transition-all duration-300">
                                    Services
                                </a></li>
                            <li><a href="#testimonial"
                                    class="text-secondary hover:text-accent transition-all duration-300">
                                    Testimonials
                                </a></li>
                            <li><a href="#team" class="text-secondary hover:text-accent transition-all duration-300">
                                    Team
                                </a></li>
                            <li><a href="#faq" class="text-secondary hover:text-accent transition-all duration-300">
                                    FAQ
                                </a></li>
                            <li><a href="#brand" class="text-secondary hover:text-accent transition-all duration-300">
                                    Brand
                                </a></li>
                        </ul>
                        <!-- form -->
                        <form class="relative flex gap-x-[10px]">
                            <label for="mnav-search-input">
                                <i class="ri-search-line text-2xl text-accent"></i>
                            </label>
                            <input type="text" id="mnav-search-input" placeholder="Search..." class="outline-none w-[160px] border-b-2 focus:border-b-2
                        focus:border-accent placeholder:italic">
                        </form>
                    </div>
                </nav>
                <!-- desktop nav -->
                <nav class="bg-white absolute w-full left-0 -bottom-[86px]
            shadow-custom1 h-16 rounded-[10px] hidden lg:flex
            lg:items-center lg:justify-between lg:px-[50px]">
                    <!-- list -->
                    <ul class="flex gap-x-4">
                        <li class="border-r last:border-none">
                            <a href="#home" class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                Home
                            </a>
                        </li>
                        <li class="border-r last:border-none">
                            <a href="#hero" class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                Hero
                            </a>
                        </li>
                        <li class="border-r last:border-none">
                            <a href="#stats" class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                Statistic
                            </a>
                        </li>
                        <li class="border-r last:border-none">
                            <a href="#service"
                                class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                Services
                            </a>
                        </li>
                        <li class="border-r last:border-none">
                            <a href="#testimonial"
                                class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                Testimonials
                            </a>
                        </li>
                        <li class="border-r last:border-none">
                            <a href="#team" class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                Team
                            </a>
                        </li>
                        <li class="border-r last:border-none">
                            <a href="#faq" class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                FAQ
                            </a>
                        </li>
                        <li class="border-r last:border-none">
                            <a href="#brand" class="pr-4 text-secondary hover:text-accent transition-all duration-300">
                                Brand
                            </a>
                        </li>
                    </ul>
                    <!-- form -->
                    <form class="relative flex gap-x-[10px]">
                        <label for="search-input" class="flex justify-center
                  items-center group">
                            <i class="ri-search-line text-2xl text-accent"></i>
                        </label>
                        <input type="text" id="search-input" placeholder="Search..." class="outline-none w-[100px] focus:w-[180px] focus:border-b-2
                        focus:border-accent placeholder:italic placeholder:text-base
                        transition-all duration-150">
                    </form>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- footer -->
    <footer class="footer pt-12 xl:pt-[150px]">
        <div class="container mx-auto pb-12 xl:pb-[100px]">
            <div class="flex flex-col xl:flex-row gap-x-5 gap-y-10">
                <!-- footer contact section -->
                <div class="footer__item flex-1">
                    <!-- logo -->
                    <a href="#">
                        <img class="mb-[30px]" src="assets/img/header/logo.svg" alt="">
                    </a>
                    <!-- description -->
                    <p class="mb-[20px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, labore.
                    </p>
                    <!-- location, email & phone -->
                    <div class="flex flex-col gap-y-3 mb-10">
                        @if($settings->has('address'))
                        <div class="flex items-center gap-x-[6px]">
                            <i class="ri-map-pin-fill text-[24px] text-accent"></i>
                            <div>{{ $settings->get('address') }}</div>
                        </div>
                        @endif
                        @if($settings->has('email'))
                        <div class="flex items-center gap-x-[6px]">
                            <i class="ri-mail-fill text-[24px] text-accent"></i>
                            <div>{{ $settings->get('email') }}</div>
                        </div>
                        @endif
                        @if($settings->has('phone'))
                        <div class="flex items-center gap-x-[6px]">
                            <i class="ri-phone-fill text-[24px] text-accent"></i>
                            <div>{{ $settings->get('phone') }}</div>
                        </div>
                        @endif
                    </div>
                    <!-- socials -->
                    <div class="flex gap-[14px] text-[30px]">
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-facebook-circle-fill"></i>
                        </div>
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-instagram-fill"></i>
                        </div>
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-twitter-fill"></i>
                        </div>
                        <div
                            class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all">
                            <i class="ri-linkedin-fill"></i>
                        </div>
                    </div>
                </div>
                <!-- footer quick links section -->
                <div class="footer__item flex-1">
                    <h4 class="h4 mb-5">Quick Links</h4>
                    <div class="flex gap-x-5">
                        <!-- list 1 -->
                        <ul class="flex-1 flex flex-col gap-y-5">
                            <li><a href="#home" class="hover:text-accent transition-all">Home</a></li>
                            <li><a href="#hero" class="hover:text-accent transition-all">Hero</a></li>
                            <li><a href="#stats" class="hover:text-accent transition-all">Statistic</a></li>
                            <li><a href="#service" class="hover:text-accent transition-all">Services</a></li>
                            <li><a href="#testimonial" class="hover:text-accent transition-all">Testimonials</a></li>
                        </ul>
                        <!-- list 2 -->
                        <ul class="flex-1 flex flex-col gap-y-5">
                            <li><a href="#team" class="hover:text-accent transition-all">Team</a></li>
                            <li><a href="#faq" class="hover:text-accent transition-all">FAQ</a></li>
                            <li><a href="#brand" class="hover:text-accent transition-all">Brand</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer opening hours section -->
                <div class="footer__item flex-1">
                    <h4 class="h4 mb-5">Opening Hours</h4>
                    <!-- list -->
                    <div class="flex flex-col gap-5">
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center
                     border-b pb-[10px]">
                                <div>Monday - Thursday</div>
                                <div class="text-accent font-medium">8:00 Am - 6:00 Pm</div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center
                                                         border-b pb-[10px]">
                                <div>Friday - Saturday</div>
                                <div class="text-accent font-medium">10:00 Am - 4:00 Pm</div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center
                                                                           border-b pb-[10px]">
                                <div>Sunday</div>
                                <div class="text-accent font-medium">Emergency Only</div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="flex-1">
                            <div class="flex justify-between items-center
                                                                                             border-b pb-[10px]">
                                <div>Personal</div>
                                <div class="text-accent font-medium">7:00 Am - 9:00 Pm</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- copyright-->
            <div class="py-[30px] border-t">
                <div class="container mx-auto text-center">
                    <div class="font-light text-base">
                        &copy; 2024 Insove - All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- SCRIPTS -->
    <!-- swiper -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- scroll reveal -->
    <script src="js/scrollreveal.min.js"></script>
    <!-- main -->
    @vite('resources/js/app.js')
</body>

</html>