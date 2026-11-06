<nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a href="#">
                <img class="w-auto h-6 sm:h-7" src="img\Batman logo.png" alt="">
            </a>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/">Home</a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/blog">Blog</a>
                <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/about">About</a>
            </div>
        </div>
    </div>
</nav>