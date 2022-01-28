<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creare Articole</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

    <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
        style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-5 text-3xl font-bold text-gray-900">
                    Scrie un articol
                </h2>
            </div>
            <form class="mt-8 space-y-3" action="{{ route('article.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <!--Spatiul unde se va scrie titlul articolului -->
                <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide">Title</label>
                    <input name="title"
                        class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        type="">
                </div>

                <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide">Imagine</label>
                    <input name="image" type="file" id="image" name="image"
                        class="p-2 border border-gray-300 rounded-lg"></input>
                </div>

                <!--Spatiul unde se va scrie textul articolului -->
                <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide">Conținut</label>
                    <textarea name="body" id="description" cols="30" rows="10" placeholder="scrie.."
                        class="w-full font-serif p-2 border border-gray-300  
                            p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
                </div>

                <!-- <div class="grid grid-cols-1 space-y-2">
                                    <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                    
                                    <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                    <img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
                                    </div>
                                    <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
                                </div>
                                <input type="file" class="hidden">
                            </label>
                        </div>
                    </div> -->
                <!-- <p class="text-sm text-gray-300">
                                <span>File type: doc,pdf,types of images</span>
                            </p> -->
                <div>
                    <button type="submit"
                        class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Adaugă articol
                    </button>
                </div>
                <div class="index-categories">

                    <a href="{{ url('/') }}">Inapoi<span>&#8594;</span></a>
                </div>
            </form>
        </div>
    </div>

    <style>
        .has-mask {
            position: absolute;
            clip: rect(10px, 150px, 130px, 10px);
        }

    </style>

</body>

</html>
