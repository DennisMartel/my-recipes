<div class="py-8">

    <div class="flex-1 mb-6">
        <x-jet-input wire:model="search" type="text" class="w-full focus:ring-0 focus:border-red-600 select-none" placeholder="Busca una receta del autor {{ $user->name }}"/>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        @if (count($recipes) > 0)
            @foreach ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        @else
            @for ($i = 0; $i < 4; $i++)
                <x-skeleton />
            @endfor
        @endif
    </div>

    <div class="py-4">
        {{ $recipes->links() }}
    </div>

</div>
