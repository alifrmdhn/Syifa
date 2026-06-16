<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            <!-- LEFT -->
            <div class="flex">

                <!-- LOGO -->
                <div class="shrink-0 flex items-center">

                    <a href="{{ url('/') }}">

                        <x-application-logo
                            class="block h-9 w-auto fill-current text-gray-800" />

                    </a>

                </div>

                <!-- MENU -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <x-nav-link
                        :href="url('/')"
                        :active="request()->is('/')">

                        Home

                    </x-nav-link>

                    <x-nav-link
                        :href="url('/display')"
                        :active="request()->is('display')">

                        Display

                    </x-nav-link>

                    @auth

                        <x-nav-link
                            :href="url('/admin-monitor')"
                            :active="request()->is('admin-monitor')">

                            Admin Monitor

                        </x-nav-link>

                    @endauth

                </div>

            </div>

            <!-- RIGHT -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                @auth

                    <div class="text-sm text-gray-700">

                        {{ Auth::user()->name }}

                    </div>

                    <!-- LOGOUT -->
                    <form method="POST"
                          action="{{ route('logout') }}"
                          class="ml-4">

                        @csrf

                        <button
                            type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">

                            Logout

                        </button>

                    </form>

                @else

                    <a href="/login"
                       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">

                        Login Admin

                    </a>

                @endauth

            </div>

            <!-- MOBILE BUTTON -->
            <div class="-me-2 flex items-center sm:hidden">

                <button
                    @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">

                    <svg class="h-6 w-6"
                         stroke="currentColor"
                         fill="none"
                         viewBox="0 0 24 24">

                        <path
                            :class="{'hidden': open, 'inline-flex': ! open }"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />

                        <path
                            :class="{'hidden': ! open, 'inline-flex': open }"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>

        </div>

    </div>

    <!-- MOBILE MENU -->
    <div :class="{'block': open, 'hidden': ! open}"
         class="hidden sm:hidden">

        <div class="pt-2 pb-3 space-y-1">

            <x-responsive-nav-link
                :href="url('/')"
                :active="request()->is('/')">

                Home

            </x-responsive-nav-link>

            <x-responsive-nav-link
                :href="url('/display')"
                :active="request()->is('display')">

                Display

            </x-responsive-nav-link>

            @auth

                <x-responsive-nav-link
                    :href="url('/admin-monitor')"
                    :active="request()->is('admin-monitor')">

                    Admin Monitor

                </x-responsive-nav-link>

            @endauth

        </div>

        <!-- MOBILE USER -->
        @auth

            <div class="pt-4 pb-1 border-t border-gray-200">

                <div class="px-4">

                    <div class="font-medium text-base text-gray-800">

                        {{ Auth::user()->name }}

                    </div>

                    <div class="font-medium text-sm text-gray-500">

                        {{ Auth::user()->email }}

                    </div>

                </div>

                <div class="mt-3 space-y-1">

                    <form method="POST"
                          action="{{ route('logout') }}">

                        @csrf

                        <x-responsive-nav-link
                            :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">

                            Logout

                        </x-responsive-nav-link>

                    </form>

                </div>

            </div>

        @else

            <div class="p-4">

                <a href="/login"
                   class="block text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">

                    Login Admin

                </a>

            </div>

        @endauth

    </div>

</nav>