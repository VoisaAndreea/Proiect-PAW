<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina cu Articole</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href= "https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> 
</head>
<body>

<!-- PENTRU A AFISA ARTICOLELE DIN BAZA DE DATE -->
   
    @foreach($articles as $article)

        <!-- This is an example component -->
        <div class="card-blog-content">
            <div class="m-auto px-4 py-8 max-w-xl">
                <div class="bg-white shadow-2xl" >
                    <div>
                        <img class="w-45 rounded-md border-2 border-gray-300" src="{{asset($article->image)}}">
                    </div>
                    <div class="px-4 py-2 mt-2 bg-white">
                        <a href="{{route('article.show', $article)}}">{{$article->title}}</a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

</body>
</html>