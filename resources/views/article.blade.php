<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina cu Articole</title>
    <div class="m-auto px-20 max-w-xl">
        <button type="submit"
            class=" my-5 w-300 justify-content bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
            <a href="{{ url('/categories') }}" class="text-sm text-gray-700 dark:text-white underline">Categorii</a>

        </button>
        <button type="submit"
            class=" my-5 ml-20 w-300 justify-content bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
            <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-white underline">Home</a>

        </button>
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <!-- PENTRU A AFISA ARTICOLELE DIN BAZA DE DATE -->

    @foreach ($articles as $article)

        <!-- This is an example component -->
        <div class="card-blog-content">
            <div class="m-auto px-4 py-8 max-w-xl">
                <div class="bg-white shadow-2xl">
                    <div>
                        <img class="w-45 rounded-md border-2 border-gray-300" src="{{ asset($article->image) }}">
                    </div>
                    <div class="px-4 py-2 mt-2 bg-white">
                        <a href="{{ route('article.show', $article) }}">{{ $article->title }}</a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

</body>

</html>
