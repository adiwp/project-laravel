{{-- resources/views/filament/custom-header.blade.php --}}
<header class="bg-white dark:bg-gray-900 shadow-md border-b border-gray-200 dark:border-gray-700">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            {{-- Logo & Brand --}}
            <a href="/admin/home" class="flex items-center space-x-3 group">
                <div class="relative">
                    <svg class="h-10 w-10 text-blue-600 dark:text-blue-400 group-hover:text-blue-700 dark:group-hover:text-blue-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">LaraPress</span>
                    <span class="text-xs text-gray-500 dark:text-gray-400">Blog Modern dengan Filament</span>
                </div>
            </a>

            {{-- Navigation Links --}}
            <div class="hidden md:flex items-center space-x-6">
                <a href="/admin/home" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                    Beranda
                </a>
                @auth
                    <a href="/admin" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                        Dashboard
                    </a>
                @endauth
            </div>

            {{-- Auth Actions --}}
            <div class="flex items-center space-x-4">
                @guest
                    <a href="/admin/login" class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all">
                        Login
                    </a>
                    <a href="/admin/register" class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 transition-all">
                        Daftar
                    </a>
                @endguest

                @auth
                    <div class="flex items-center space-x-3">
                        <div class="hidden md:flex flex-col items-end">
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</span>
                        </div>
                        <div class="h-10 w-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                    </div>
                @endauth
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div class="md:hidden mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
            <div class="flex flex-col space-y-3">
                <a href="/admin/home" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                    Beranda
                </a>
                @auth
                    <a href="/admin" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                        Dashboard
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</header>
