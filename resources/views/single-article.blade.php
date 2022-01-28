<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postare</title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <style>
        .pt-\[17\%\] {
            padding-top: 17%;
        }

        .mt-\[-10\%\] {
            margin-top: -10%;
        }

        .pt-\[56\.25\%\] {
            padding-top: 56.25%;
        }

    </style>

    <main class="relative container mx-auto bg-white px-4">
        <div class="relative -mx-4 top-0 pt-[17%] overflow-hidden">
            <img class="absolute inset-0 object-cover object-top w-full h-full filter blur"
                src="{{ asset($article->image) }}" alt="" />
        </div>

        <div class="mt-[-10%] w-1/2 mx-auto">
            <div class="relative pt-[56.25%] overflow-hidden rounded-2xl">
                <img class="w-full h-full absolute inset-0 object-cover" src="{{ asset($article->image) }}" alt="" />
            </div>
        </div>

        <article class="max-w-prose mx-auto py-8">
            <h1 class="text-2xl font-bold">{{ $article->title }}</h1>

            <p class="mt-6">{{ $article->body }}</p>

        </article>
    </main>
</body>

</html>
