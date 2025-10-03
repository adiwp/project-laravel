<x-filament-panels::page>
    <div class="space-y-6">
        {{-- Hero Section --}}
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg shadow-lg p-8 text-white">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di LaraPress</h1>
            <p class="text-xl mb-6">Blog sederhana yang dibangun dengan Laravel & Filament</p>
            <p class="text-lg opacity-90">Eksplorasi kekuatan TALL Stack (Tailwind, Alpine.js, Livewire, Laravel)</p>
        </div>

        {{-- Info Section --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="flex items-center space-x-3">
                    <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-full">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Artikel Berkualitas</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Konten yang informatif</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="flex items-center space-x-3">
                    <div class="p-3 bg-green-100 dark:bg-green-900 rounded-full">
                        <svg class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Komunitas Aktif</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Bergabung dengan kami</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="flex items-center space-x-3">
                    <div class="p-3 bg-purple-100 dark:bg-purple-900 rounded-full">
                        <svg class="h-6 w-6 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Modern & Cepat</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Performa maksimal</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Latest Posts Section --}}
        <div class="mt-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Artikel Terbaru</h2>
            </div>

            <div class="space-y-4">
                {{-- Placeholder untuk artikel - nanti akan diisi dari database --}}
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                Tutorial
                            </span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">3 Oktober 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                            Memulai dengan Laravel & Filament
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Pelajari cara membangun aplikasi web modern menggunakan Laravel dan Filament. Panduan lengkap dari instalasi hingga deployment.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="h-8 w-8 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center">
                                    <span class="text-sm font-medium text-gray-700 dark:text-gray-200">A</span>
                                </div>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Admin</span>
                            </div>
                            <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium text-sm">
                                Baca Selengkapnya →
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                Tips & Trik
                            </span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">2 Oktober 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                            10 Tips Optimasi Laravel untuk Pemula
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Tingkatkan performa aplikasi Laravel Anda dengan tips dan trik yang mudah diimplementasikan untuk developer pemula.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="h-8 w-8 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center">
                                    <span class="text-sm font-medium text-gray-700 dark:text-gray-200">A</span>
                                </div>
                                <span class="text-sm text-gray-700 dark:text-gray-300">Admin</span>
                            </div>
                            <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium text-sm">
                                Baca Selengkapnya →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="mt-8 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg shadow-lg p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Siap Memulai Perjalanan Anda?</h2>
            <p class="text-lg mb-6">Bergabunglah dengan komunitas LaraPress dan dapatkan akses ke semua fitur</p>
            <div class="flex justify-center space-x-4">
                @guest
                    <a href="{{ route('filament.adminadmin.auth.login') }}" class="px-6 py-3 bg-white text-purple-600 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Login
                    </a>
                    <a href="{{ route('filament.adminadmin.auth.register') }}" class="px-6 py-3 bg-purple-700 text-white rounded-lg font-semibold hover:bg-purple-800 transition-colors border-2 border-white">
                        Daftar Sekarang
                    </a>
                @else
                    <a href="{{ route('filament.adminadmin.pages.dashboard') }}" class="px-6 py-3 bg-white text-purple-600 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Ke Dashboard
                    </a>
                @endguest
            </div>
        </div>
    </div>
</x-filament-panels::page>
