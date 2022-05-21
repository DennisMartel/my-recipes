<div class="mt-8">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        @foreach ($recipes as $recipe)
            <x-recipe-card :recipe="$recipe"/>
        @endforeach
    </div>
</div>
