@props(['category'])

<div class="px-4 py-4">
    <p class="font-extrabold text-lg text-center text-gray-700 mb-4">Subcategorias</p>

    <ul>
        @forelse ($category->subcategories as $subcategory)
        <li>
            <a href="{{ route('subcategory', $subcategory) }}" class="flex py-1 px-2 text-gray-600 font-bold hover:text-red-600">
                {{ $subcategory->name }}
            </a>
        </li>
        @empty
            <p class="text-center font-semibold text-base text-gray-500 pt-4">No hay subcategorias</p>
        @endforelse
    </ul>
</div>