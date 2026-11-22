@php
    $enlacesImagenes=[
        'Firebase_Logo'=> asset('daiva/images/Firebase_Logo.svg.webp'),
        'Stripe_Logo'=>  "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png",
        'Coinbase_Logo'=> "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png",
        'Google_Logo'=> "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png"
    ];
    $seccionSeamlessConnectivity=[
        'small'=>'Seamless Connectivity',
        'h2'=>'Web3 Integrations',
        'p'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eaque unde quod doloremque,
                        accusantium dolorem odio asperiores aspernatur minima!',
       'a'=>'see more',
    ];
    $seccionesConnectivityFirst=4;
    $seccionSupertool=[
       'h4'=>'The title',
        'small'=>'Payment method of the 21st century',
    ];
    $seccionesAllInOne=4;
    $seccion=0;
    $seccionArticulosBlog=[
        'primerArticulo'=> ['h3'=>'True Ownership','small'=>"Your data, your assets, your rules. With Web3, you have complete authority over your digital
                            identity, finances, and online presence.",'span'=>'see more'],
        'segundoArticulo'=> ['h3'=>'Decentralized & Secure','small'=>"Powered by blockchain technology, our platform eliminates the need for intermediaries,
                            making it trustless, transparent, and resistant to censorship.",'span'=>'see more'],
    ];
@endphp
<main>
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
                        <a class="bg-black p-2 mt-4 px-6 text-white rounded-full hover:bg-gray-800" href="{{ route('evidencias.index') }}">
                            Let's start
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <section class="px-4 py-12">
        <div class="w-full max-w-5xl mx-auto">
            {{ $slot }}
        </div>
    </section>
    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto">
            <div class="flex flex-col gap-8">
                <small class="border-l-2 pl-2 text-xs">Trust by many</small>
                <div class="grid grid-cols-2 sm:grid-cols-4 items-center gap-4">
                @foreach ($enlacesImagenes as $nombre => $enlace )
                    <div>
                        <img class="grayscale max-w-[140px]"
                                src="{{$enlace}}"
                                alt="">
                    </div> 
                @endforeach
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
            @for ($i = 0; $i < $seccionesConnectivityFirst; $i++)
                <x-daiva.feature :id="$i" :etiquetaSmall="$seccionSeamlessConnectivity['small']" :titulo="$seccionSeamlessConnectivity['h2']" :descripcion="$seccionSeamlessConnectivity['p']" >
                    <x-slot:enlace>
                        <a href="#" class="underline text-sm">{{ $seccionSeamlessConnectivity['a'] }}</a>
                    </x-slot:enlace>
                </x-daiva.feature>
            @endfor
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
                    <a class="hover:bg-gray-800 bg-black p-2 mt-4 px-6 text-white rounded-full" href="{{ route('evidencias.index') }}">
                        Let's start
                    </a>
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
                @while ($seccion < $seccionesAllInOne )
                    <div class="bg-gray-100 rounded-full flex items-center gap-4 p-4 px-12">
                        <div class="flex bg-white p-4 rounded-full w-12 h-12 items-center">
                            <i class="bi bi-body-text font-bold text-xl h-[25px]"></i>
                        </div>
                        <div>
                            <h4 class="playfair font-bold">{{$seccionSupertool['h4']}}</h4>
                            <small class="text-gray-500">{{$seccionSupertool['small']}}</small>
                        </div>
                    </div>
                    @php
                        $seccion++;
                    @endphp
                @endwhile
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 py-24">
        <div class="w-full max-w-5xl mx-auto">
            <x-daiva.article :seccionArticulosBlog="$seccionArticulosBlog"/>
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
                <x-daiva.accordion/>
            </div>
        </div>
    </section>
</main>