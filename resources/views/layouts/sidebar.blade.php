<aside class="relative bg-sidebar h-screen w-80 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">
            <img src="images/logo.png" alt="">
        </a>
    </div>

    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="flex m-3 rounded-lg items-center {{ \Route::is('dashboard') ? 'active-nav-link' : '' }} text-gray-500 py-4 pl-4 nav-item transition duration-300 ease-in-out">
            <img src="images/dashboard.png" class="mr-3 w-6" alt="">
            Dashboard
        </a>
        <a href="{{ route('hospital') }}" class="mt-5 m-3 rounded-lg flex items-center {{ \Route::is('hospital') ? 'active-nav-link' : '' }} text-gray-500 py-4 pl-4 nav-item transition duration-300 ease-in-out">
            <img src="images/hospital.png" class="mr-3 w-6" alt="">
            Hospital
        </a>
        <a href="{{ route('forum') }}" class="mt-5 m-3 rounded-lg flex items-center {{ \Route::is('forum') ? 'active-nav-link' : '' }} text-gray-500 py-4 pl-4 nav-item transition duration-300 ease-in-out">
            <img src="images/forum.png" class="mr-3 w-6" alt="">
            Forum
        </a>
    </nav>
</aside>
