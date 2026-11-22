@props(['titulo' => null])


@php
    $tarjetas = [
        [
            'etiqueta' => 'Seamless Connectivity',
            'titulo' => 'Web3 Integrations',
            'texto' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eaque unde quod doloremque, accusantium dolorem odio asperiores aspernatur minima!',
            'enlace' => '#',
        ],
        [
            'etiqueta' => 'Seamless Connectivity',
            'titulo' => 'Web3 Integrations',
            'texto' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eaque unde quod doloremque, accusantium dolorem odio asperiores aspernatur minima!',
            'enlace' => '#',
        ],
        [
            'etiqueta' => 'Seamless Connectivity',
            'titulo' => 'Web3 Integrations',
            'texto' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eaque unde quod doloremque, accusantium dolorem odio asperiores aspernatur minima!',
            'enlace' => '#',
        ],
        [
            'etiqueta' => 'Seamless Connectivity',
            'titulo' => 'Web3 Integrations',
            'texto' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eaque unde quod doloremque, accusantium dolorem odio asperiores aspernatur minima!',
            'enlace' => '#',
        ],
    ];

    $preguntas = [
        'How does it work?' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi laboriosam vitae reiciendis corrupti! Explicabo, libero reiciendis iste ipsa voluptatem, cupiditate ab culpa expedita asperiores at quasi laborum tempore magnam corrupti.',
        'What the lorem?' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum ratione expedita possimus inventore in. Explicabo, quasi repellendus a dolore totam laudantium, molestias quis reiciendis rerum vero, numquam sint earum voluptatum?',
        'Can I cancel my subscription?' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ex cum repellendus eligendi maxime magni molestiae saepe beatae, excepturi id dolores recusandae ea perferendis repudiandae? Ea deleniti blanditiis quae iusto!',
        'is it safe?' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat aspernatur iste ab optio magni veritatis voluptatibus quaerat. Error ipsam dolore, explicabo consequatur incidunt rem culpa, est corporis nihil necessitatibus cum!',
        'Can I use 2 account?' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est placeat veritatis ex perspiciatis, incidunt, quos quia accusantium recusandae aspernatur inventore nulla, esse aut expedita numquam rem! Quibusdam deleniti magni rerum.',
        'Is it a free service?' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, consequuntur optio tempore voluptatibus quae commodi voluptate excepturi pariatur vitae odit eius placeat dicta cum, culpa quod similique, incidunt delectus est.',
    ];
@endphp

<main id="main">

    {{-- Content: el contenido propio de cada vista --}}
    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto flex flex-col items-start gap-4">
            <h1 class="playfair font-bold text-4xl">{{ $titulo ?? config('app.name') }}</h1>

            {{ $slot }}
        </div>
    </section>

    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto">
            <div class="flex flex-col sm:flex-row gap-8">
                <div class="w-full hidden sm:block sm:max-w-[400px]">
                    <img class="object-cover w-full" src="{{ asset('daiva/images/codye.png') }}" alt="">
                </div>
                <div class="w-full flex flex-col items-start gap-4">
                    <small class="border-l-2 pl-2 mb-4 text-xs">Done with passion</small>
                    <h1 class="playfair font-bold text-2xl md:text-4xl xl:text-6xl">
                        Build by developers for developers
                    </h1>
                    <p class="text-md text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, itaque veniam, sequi totam
                        asperiores omnis id facere quod exercitationem qui vitae perferendis eveniet! Dignissimos quia
                        dolorum cumque enim cupiditate quod!
                    </p>
                    <x-daiva.boton href="#" class="mt-4">Let's start</x-daiva.boton>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto">
            <div class="flex flex-col gap-8">
                <small class="border-l-2 pl-2 text-xs">Trust by many</small>
                <div class="grid grid-cols-2 sm:grid-cols-4 items-center gap-4">
                    <div>
                        <img class="grayscale max-w-[140px]"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Firebase_Logo.svg/1280px-Firebase_Logo.svg.png"
                            alt="">
                    </div>
                    <div>
                        <img class="grayscale max-w-[140px]"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                            alt="">
                    </div>
                    <div>
                        <img class="grayscale max-w-[140px]"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png"
                            alt="">
                    </div>
                    <div>
                        <img class="grayscale max-w-[140px]"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto">
            <h2 class="playfair font-bold text-4xl mb-12">
                Connectivity first
            </h2>
            <div class="flex flex-col md:grid md:grid-cols-2 gap-4">
                @foreach ($tarjetas as $tarjeta)
                    <x-daiva.tarjeta :etiqueta="$tarjeta['etiqueta']" :titulo="$tarjeta['titulo']" :class="$loop->first ? 'mb-8' : ''">
                        {{ $tarjeta['texto'] }}

                        <x-slot:enlace>
                            <a href="{{ $tarjeta['enlace'] }}" class="underline text-sm">see more</a>
                        </x-slot:enlace>
                    </x-daiva.tarjeta>
                @endforeach
            </div>
        </div>
    </section>
    <section class="px-4 py-24">
        <div class="relative">
            <div class="bg-skew"></div>
        </div>
        <div class="w-full max-w-5xl mx-auto">
            <div class="flex flex-col-reverse sm:flex-row-reverse gap-8 items-start md:items-center">
                <div class="w-full sm:max-w-[400px]">
                    <img class="object-cover w-full" src="{{ asset('daiva/images/codye.png') }}" alt="">
                </div>
                <div class="flex flex-col items-end text-right gap-4 w-full">
                    <small class="border-r-2 pr-2 mb-4 text-xs">Proven impact</small>
                    <h2 class="playfair font-bold text-4xl">
                        Shape the future
                    </h2>
                    <p class="text-md text-gray-500">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, sunt accusamus? Placeat et
                        vero, labore, facilis quia porro fuga ipsam eveniet ipsa ad tempore nulla quidem magnam
                        voluptate culpa earum!
                    </p>
                    <x-daiva.boton href="#" class="mt-4">Let's start</x-daiva.boton>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto">
            <div class="flex flex-col gap-4">
                <small class="border-l-2 pl-2 mb-4 text-xs">Super tool</small>
                <h2 class="playfair font-bold text-4xl">
                    All in one !
                </h2>
                <p class="text-md text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sit perferendis quod mollitia ut
                    pariatur nihil atque labore neque eius, autem, culpa aut ab alias nisi dolorum corporis voluptates
                    minima.
                </p>
                <div class="mt-4 flex flex-col md:grid grid-cols-2 gap-4">
                    <div class="bg-gray-100 rounded-full flex items-center gap-4 p-4 px-12">
                        <div class="flex bg-white p-4 rounded-full w-12 h-12 items-center">
                            <i class="bi bi-body-text font-bold text-xl h-[25px]"></i>
                        </div>
                        <div>
                            <h4 class="playfair font-bold">The title</h4>
                            <small class="text-gray-500">Payement method of the 21 century</small>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-full flex items-center gap-4 p-4 px-12">
                        <div class="flex bg-white p-4 rounded-full w-12 h-12 items-center">
                            <i class="bi bi-body-text font-bold text-xl h-[25px]"></i>
                        </div>
                        <div>
                            <h4 class="playfair font-bold">The title</h4>
                            <small class="text-gray-500">Payement method of the 21 century</small>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-full flex items-center gap-4 p-4 px-12">
                        <div class="flex bg-white p-4 rounded-full w-12 h-12 items-center">
                            <i class="bi bi-body-text font-bold text-xl h-[25px]"></i>
                        </div>
                        <div>
                            <h4 class="playfair font-bold">The title</h4>
                            <small class="text-gray-500">Payement method of the 21 century</small>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-full flex items-center gap-4 p-4 px-12">
                        <div class="flex bg-white p-4 rounded-full w-12 h-12 items-center">
                            <i class="bi bi-body-text font-bold text-xl h-[25px]"></i>
                        </div>
                        <div>
                            <h4 class="playfair font-bold">The title</h4>
                            <small class="text-gray-500">Payement method of the 21 century</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto">
            <div class="flex flex-col items-start gap-4">
                <small class="border-l-2 pl-2 mb-4 text-xs">pepitasses</small>
                <h2 class="playfair font-bold text-4xl">
                    Blog's articles
                </h2>
                <p class="text-md text-gray-500">
                    Effortlessly integrate dApps, track on-chain data, and automate insights with powerful Web3-native
                    solutions. The future is decentralized—build with confidence.
                </p>
                <div class="flex flex-col sm:flex-row gap-8 mt-8">
                    <a href="#" class="flex flex-col gap-4 w-full">
                        <h3 class="playfair font-bold text-2xl">
                            True Ownership
                        </h3>
                        <img class="object-cover" src="{{ asset('daiva/images/codye2.png') }}" alt="">
                        <small>
                            Your data, your assets, your rules. With Web3, you have complete authority over your digital
                            identity, finances, and online presence.
                        </small>
                        <span class="text-xs underline">see more</span>
                    </a>
                    <a href="#" class="flex flex-col gap-4 w-full">
                        <h3 class="playfair font-bold text-2xl">
                            Decentralized & Secure
                        </h3>
                        <img class="object-cover" src="{{ asset('daiva/images/codye2.png') }}" alt="">
                        <small>
                            Powered by blockchain technology, our platform eliminates the need for intermediaries,
                            making it trustless, transparent, and resistant to censorship.
                        </small>
                        <span class="text-xs underline">see more</span>
                    </a>
                </div>
                <x-daiva.boton href="#" class="mt-4">More articles</x-daiva.boton>
            </div>
        </div>
    </section>
    <section class="px-4 py-20">
        <div class="w-full max-w-5xl mx-auto">
            <div class="grid grid-cols-1 gap-6 lg:gap-12 lg:grid-cols-3">
                <div class="text-left">
                    <div>
                        <h2 class="playfair text-2xl font-bold">
                            Lorem ipsum dolor sit
                        </h2>
                        <small class="text-gray-500 text-md">
                            Dolorem cupiditate voluptatem veniam reprehenderit.
                        </small>
                    </div>
                </div>
                <div class="relative w-full mx-auto font-normal lg:col-span-2" x-data="{
        activeAccordion: '',
        setActiveAccordion(id) {
        this.activeAccordion = (this.activeAccordion == id) ? '' : id
        }
        }">
                    @foreach ($preguntas as $pregunta => $respuesta)
                        <x-daiva.pregunta :pregunta="$pregunta">
                            {{ $respuesta }}
                        </x-daiva.pregunta>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</main>