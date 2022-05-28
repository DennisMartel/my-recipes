<div class="pb-10">

    @auth
        <div class="flex gap-4">
            <figure>
                <img class="h-16 w-16 rounded-full shadow-lg object-cover object-center"
                    src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
            </figure>
            <div class="flex-1">
                <form wire:submit.prevent="store({{ $recipe }})" method="post">
                    <textarea wire:model.defer="comment" class="w-full focus:ring-0 border-gray-500 focus:border-gray-700 rounded-md"
                        placeholder="Agrega un comentario" rows="2"></textarea>
                    <x-jet-input-error for="comment" />

                    <div class="flex items-center" x-data="{ rating: 5 }">
                        <div>
                            <ul class="flex">
                                <p class="mr-1 text-gray-700 font-semibold">Calificación</p>
                                <li class="mr-2">
                                    <i class="bi bi-star-fill cursor-pointer" wire:click="$set('rating', 1)"
                                        x-bind:class="rating >= 1 ? 'text-yellow-500' : 'text-gray-700'"
                                        x-on:click="rating = 1"></i>
                                </li>
                                <li class="mr-2">
                                    <i class="bi bi-star-fill cursor-pointer" wire:click="$set('rating', 2)"
                                        x-bind:class="rating >= 2 ? 'text-yellow-500' : 'text-gray-700'"
                                        x-on:click="rating = 2"></i>
                                </li>
                                <li class="mr-2">
                                    <i class="bi bi-star-fill cursor-pointer" wire:click="$set('rating', 3)"
                                        x-bind:class="rating >= 3 ? 'text-yellow-500' : 'text-gray-700'"
                                        x-on:click="rating = 3"></i>
                                </li>
                                <li class="mr-2">
                                    <i class="bi bi-star-fill cursor-pointer" wire:click="$set('rating', 4)"
                                        x-bind:class="rating >= 4 ? 'text-yellow-500' : 'text-gray-700'"
                                        x-on:click="rating = 4"></i>
                                </li>
                                <li class="mr-2">
                                    <i class="bi bi-star-fill cursor-pointer" wire:click="$set('rating', 5)"
                                        x-bind:class="rating >= 5 ? 'text-yellow-500' : 'text-gray-700'"
                                        x-on:click="rating = 5"></i>
                                </li>
                            </ul>

                            <x-jet-input-error for="rating  " />
                        </div>

                        <x-jet-danger-button type="submit" class="ml-auto">Comentar</x-jet-danger-button>
                    </div>
                </form>
            </div>
        </div>
    @endauth

    @if (count($comments) > 0)
        <div class="mt-4">
            <p class="text-xl text-gray-700 font-bold my-5">Ultimos comentarios</p>

            <div>
                <ul>
                    @foreach ($comments as $comment)
                        <li class="mb-6 {{ $loop->last ? '' : 'border-b-2 pb-2' }}">
                            <article class="flex flex-row gap-4">
                                <figure>
                                    <img class="h-12 w-12 rounded-full border-gray-500 shadow-sm object-cover object-center"
                                        src="{{ $comment->user->profile_photo_url }}"
                                        alt="{{ $comment->user->name }}">
                                </figure>
                                <div class="flex flex-col flex-1">
                                    <h1 class="font-semibold text-base text-gray-700">{{ $comment->user->name }}</h1>
                                    <p class="text-sm text-gray-500 font-medium">{{ $comment->comment }}</p>
                                </div>

                                @auth
                                    @if (auth()->user()->id === $comment->user->id)
                                        <!-- Settings Dropdown -->
                                        <div class="relative">
                                            <x-jet-dropdown class="ml-auto" width="48">
                                                <x-slot name="trigger">
                                                    <i class="fas fa-ellipsis-v cursor-pointer p-4 text-lg"></i>
                                                </x-slot>

                                                <x-slot name="content">
                                                    <x-jet-dropdown-link class="cursor-pointer"><i class="fas fa-edit mr-1"></i> Editar</x-jet-dropdown-link>
                                                    <div class="border-t border-gray-100"></div>
                                                    <x-jet-dropdown-link class="cursor-pointer" wire:click="destroy({{ $comment->id }})"><i class="fas fa-trash-alt mr-1"></i> Eliminar</x-jet-dropdown-link>
                                                </x-slot>
                                            </x-jet-dropdown>
                                        </div>
                                    @endif
                                @endauth

                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

</div>
