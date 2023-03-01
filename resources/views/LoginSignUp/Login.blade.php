@extends('templates.default2')

@section('section')
    <header class="max-w-lg mx-auto">
        <a href="">
            <h1 class="text-4xl text-white text-center">AdminLogin</h1>
        </a>
    </header>
    <br>
    <main class="bg-white max-w-lg mx-auto p-8 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Welcome to student system!</h3>
            <p class="text-gray-600 pt-2">Sign in your account!</p>
        </section>
        <section class="mt-10">
            <form action="" class="flex flex-col">
                <div class="mb-6 pt-3 rounded bg-gray-500">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" class="bg-gray-400 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" class="bg-gray-400 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    <button class="bg-gray-400 hover:bg-gray-600 text-with font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>
@endsection