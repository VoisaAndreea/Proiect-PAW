<!--
<div classe="categories-list">
<h1>Categories List</h1>
@foreach ($categories as $category)
<div class="item">
<p>{{ $category->name }}</p>
<div>
<a href="">Edit</a>
</div>
<form action="" method="">

<input type="submit" value="Delete">
</form>
</div>
@endforeach

<div class="index-categories">

<a href="{{ route('categories.create') }}">Create category<span>&#8594;</span></a>
</div>
</div>

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Categorii</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
    style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">

    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">CATEGORIES</h1>
            </div>
            <div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @foreach ($categories as $category)
                    <div class="flex mb-4 items-center">
                        <p class="w-full text-grey-darkest">{{ $category->name }}</p>
                        <form action="{{ route('categories.destroy', $category) }}" method="post">
                            @method('delete')
                            @csrf
                            <input
                                class="p-2 pl-5 pr-5 bg-red-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300"
                                type="submit" value="Delete">

                        </form>

                        <a class="p-2 pl-5 pr-5 bg-green-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"
                            href="{{ route('categories.edit', $category) }}">Edit</a>

                    </div>
                @endforeach
            </div>
            <div class="index-categories">

                <a href="{{ route('categories.create') }}">Create category<span>&#8594;</span></a>
            </div>
            <button type="submit"
                class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
            font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                <a href="{{ url('/article') }}" class="text-sm text-gray-700 dark:text-white underline">Articole</a>

            </button>
            <div class="index-categories">

                <a href="{{ url('/') }}">Inapoi<span>&#8594;</span></a>
            </div>
        </div>
    </div>
