<x-app-layout>

    <section class="relative mb-16">
        <div class="relative w-full h-96">
            <div class="absolute inset-0 w-full h-full bg-gray-900 bg-opacity-60"></div>
            <img class="object-cover object-bottom w-full h-full" src="{{ asset('img/banner.jpg') }}" alt="">
        </div>

        <div class="md:absolute sm:left-0 sm:top-0 w-full">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:pt-6 md:pt-8 lg:pt-20">
                    <div class="bg-white shadow-xl sm:rounded-lg px-6 py-8 block md:max-w-sm md:py-2 lg:py-4">
                        <h1 class="font-bold text-3xl">Encuentra una receta para tu próxima comida</h1>

                        <p class="lg:text-lg">Divierteté con la explosión de sabor con los mejores ingredientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container w-full pb-16">
        <h1 class="font-semibold text-2xl uppercase border-red-600 border-b-2 inline">últimas recetas</h1>
        @livewire('recipes')
    </section>

</x-app-layout>
