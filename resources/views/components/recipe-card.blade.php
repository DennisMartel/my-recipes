@props(['recipe'])

<article class="bg-white shadow-md rounded-lg flex flex-col overflow-hidden">
    <figure>
        <img src="{{ Storage::url($recipe->images->pluck('url')[0]) }}" alt="{{ $recipe->name }}" class="h-36 w-full object-cover object-center">
    </figure>
    <div class="px-2 py-2 flex flex-col flex-1">
        <div class="self-end float-right -mt-8 mb-1">
            <img class="h-10 w-10 rounded-xl object-cover shadow-lg" src="{{ $recipe->author->profile_photo_url }}" alt="">
        </div>
        <h1 class="text-xl text-gray-700 font-semibold leading-6 mb-1 line-clamp-2">{{ $recipe->name }}</h1>
        <p class="text-gray-500 text-sm mt-auto truncate">Autor: {{ $recipe->author->name }}</p>
        <ul class="flex">
            <li class="mr-1">
                <i class="bi bi-star-fill text-{{ $recipe->rating >= 1 ? 'yellow' : 'gray' }}-500"></i>
            </li>
            <li class="mr-1">
                <i class="bi bi-star-fill text-{{ $recipe->rating >= 2 ? 'yellow' : 'gray' }}-500"></i>
            </li>
            <li class="mr-1">
                <i class="bi bi-star-fill text-{{ $recipe->rating >= 3 ? 'yellow' : 'gray' }}-500"></i>
            </li>
            <li class="mr-1">
                <i class="bi bi-star-fill text-{{ $recipe->rating >= 4 ? 'yellow' : 'gray' }}-500"></i>
            </li>
            <li class="mr-1">
                <i class="bi bi-star-fill text-{{ $recipe->rating >= 5 ? 'yellow' : 'gray' }}-500"></i>
            </li>
        </ul>
        <a href="{{ route('recipe', $recipe) }}" class="inline-block uppercase bg-red-500 w-full rounded-lg text-white hover:bg-red-400 text-center py-1.5 font-bold mt-2">ver receta</a>
    </div>
</article>