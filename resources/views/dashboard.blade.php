<x-app-layout>
    <body class="relative flex items-center justify-center h-screen">
        <div class="absolute inset-0 bg-blue-500 opacity-20"></div>
        <form class="border border-white-500 rounded-md px-6 py-8 w-1/4 h-auto bg-white relative z-10 flex flex-col items-center justify-start">
            <h2 class="text-blue-500 p-4 mt-10 font-bold text-5xl">Facebook</h2>
            <input type="text" placeholder="Email address or phone number" class="border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 mt-4 w-full">
            <input type="password" placeholder="Password" class="border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 mt-4 w-full">
            <button class="bg-blue-500 text-black px-4 py-2 rounded-md mt-4 w-full">Log in</button>
            <p class="mt-4 text-gray-600 text-sm">Forgotten account? · <a href="#">Sign up for Facebook</a></p>
        </form>
    </body>
</x-app-layout>
