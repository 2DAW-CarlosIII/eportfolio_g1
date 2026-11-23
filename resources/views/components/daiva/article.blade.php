@props(['seccionArticulosBlog'])
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
    @foreach ($seccionArticulosBlog as $articulo)
        <a href="#" class="flex flex-col gap-4 w-full">
            <h3 class="playfair font-bold text-2xl">
                {{$articulo['h3']}}
            </h3>
            <img class="object-cover" src="{{ asset('daiva/images/codye2.png') }}" alt="">
            <small>
                {{$articulo['small']}}
            </small>
            <span class="text-xs underline">{{$articulo['span']}}</span>
        </a>
    @endforeach
    </div>
    <a class="bg-black p-2 mt-4 px-6 text-white rounded-full hover:bg-gray-800" href="#">
        More articles
    </a>
</div>