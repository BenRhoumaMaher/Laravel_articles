<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            Add new post
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

<div class="m-auto pt-20">
    <div class="pb-8">
        @if ($errors->any())
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Something went wrong....
            </div>
            <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-text-red-700">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <form
        action="{{ route('blog.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <label for="is_published" class="text-gray-500 text-2xl">
            Is Published
        </label>
        <input
            type="checkbox"
            class="bg-transparent block border-b-2 inline text-2xl outline-none"
            name="is_published">

        <input
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none form-control mb-2 mt-2">

        <input
            type="text"
            name="excerpt"
            placeholder="Excerpt..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none form-control mb-2">

        <input
            type="number"
            name="min_to_read"
            placeholder="Minutes to read..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none form-control mb-2">

        <textarea
            name="body"
            placeholder="Body..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none form-control mb-2"></textarea>

        <div class="bg-grey-lighter py-10">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                <input
                    type="file"
                    name="image"
                    class="hidden form-control mb-2">
            </label>
        </div>

        <input
            type="text"
            name="meta_description"
            placeholder="description..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none form-control mb-2 mt-2">

            <input
            type="text"
            name="meta_keywords"
            placeholder="keywords..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none form-control mb-2 mt-2">

            <input
            type="text"
            name="meta_robots"
            placeholder="robots..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none form-control mb-2 mt-2">

        <button
            type="submit"
            class="btn btn-primary mb-5 text-secondary">
            Submit Post
        </button>
    </form>
</div>
</body>
</html>
