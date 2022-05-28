<header class="bg-red-500 sticky top-0 z-50" x-data="dropdown()">
    <div class="container flex justify-between items-center h-16">

        <a x-on:click="show()" class="flex justify-center items-center flex-col text-white cursor-pointer bg-red-600 px-4 h-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list h-8 w-8"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
            <span class="select-none">Menú</span>
        </a>

        <a href="{{ route('home') }}" class="font-bold text-2xl text-white px-8 select-none">
            Recetas
        </a>

        <div class="flex-1">
            @livewire('search')
        </div>

        <!-- Settings Dropdown -->
        <div class="ml-6 relative">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Mis recetas') }}
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @endauth

            @guest
                <x-jet-dropdown>

                    <x-slot name="trigger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle h-8 w-8 text-white cursor-pointer" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </x-slot>

                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>

                </x-jet-dropdown>
            @endguest
        </div>

    </div>

    <nav id="navigation-menu" :class="{'block': open, 'hidden': !open}" class="bg-opacity-40 bg-gray-300 absolute w-full hidden">
        <div class="container h-full">
            <div class="grid grid-cols-4 h-full relative">
                <div class="bg-white overflow-y-auto" x-show="open" x-on:click.away="close()">
                    <ul>
                        @foreach ($categories as $category)
                            <li class="navigation-link hover:bg-red-600 hover:text-white font-semibold">
                                <a href="{{ route('category', $category) }}" class="flex px-4 py-2">
                                    {{ $category->name }}
                                </a>

                                <div class="navigation-submenu bg-gray-50 absolute w-3/12 h-full top-0 right-1/2 hidden border-l">
                                    <x-navbar-subcategories :category="$category" />
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
