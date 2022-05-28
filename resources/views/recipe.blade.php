<x-app-layout>

    <div class="container py-8">
        <div class="grid lg:grid-cols-2 lg:gap-8 gap-4">

            <div>
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($recipe->images as $image)
                            <li data-thumb="{{ Storage::url($image->url) }}">
                                <img src="{{ Storage::url($image->url) }}" />
                            </li>
                        @endforeach
                    </ul>
                </div>

                @livewire('rating-recipe', ['recipe' => $recipe])

            </div>

            <div>
                <div class="sticky top-24">
                    <div class="bg-white shadow-md rounded-xl px-6 py-6">
                        <h1 class="text-gray-600 text-2xl font-semibold mb-2">{{ $recipe->name }}</h1>
                        <div class="flex flex-col sm:flex-col md:flex-row">
                            <p class="text-lg">
                                Categoria: 
                                <a class="underline">{{ $recipe->subcategory->category->name }}</a>
                            </p>
        
                            <p class="flex items-center mx-6">
                                <span>
                                    {{ $recipe->rating }}
                                </span>
                                <i class="fas fa-star text-yellow-500"></i>
                            </p>
        
                            <p class="text-yellow-500 font-bold text-lg underline">
                                {{ $recipe->reviews_count }} Reseñas
                            </p>
                        </div>
                        <a href="{{ route('author.show', $recipe->author) }}" class="inline-block text-base text-gray-500 my-2 font-bold hover:text-red-500">Autor: {{ $recipe->author->name }}</a>
                        <p class="text-base font-semibold text-gray-500 mt-2">{{ $recipe->description }}</p>
    
                        <h1 class="text-red-600 font-semibold text-3xl mt-5">Ingredientes</h1>
                        <p class="text-base font-semibold text-gray-500 mt-2">{{ $recipe->preparation }} {{ $recipe->description }}</p>
    
                        <h1 class="text-red-600 font-semibold text-3xl mt-5">Preparación</h1>
                        <p class="text-base font-semibold text-gray-500 mt-2">{{ $recipe->preparation }} {{ $recipe->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush

</x-app-layout>
