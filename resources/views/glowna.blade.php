<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LitwinBook</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
        };
    </script>
    @vite(['resources/js/app.js'])

</head>

<body class="bg-gray-100 dark:bg-gray-800 text-gray-800 font-sans">

<header class="bg-white dark:bg-gray-700 shadow-md sticky top-0">
    <section class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-violet-600 hidden sm:block">LitwinBook</h1>
    
    <form class="flex items-center max-w-lg mx-auto" method="POST" action="">   
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3">
                <div class="w-4 h-4 text-gray-500 dark:text-gray-400 flex">
                <label for="wyszukaj_post" class="z-100"><i class="fa fa-search items-center flex cursor-pointer"></i></label>
                <input type="submit" id="wyszukaj_post" class="hidden">
                </div>
            </div>
            <input type="text" name="osoba" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 max-w-[200px] overflow-hidden whitespace-nowrap text-ellipsis inline-block align-middle" placeholder="Wyszukaj Posty" required />
        </div>
    </form>
    <nav>
      <ul class="flex gap-4 text-sm text-gray-700 dark:text-black">
        <li class="hidden sm:block text-sm text-gray-600"><?= date('d-m-Y'); ?></li>
        <li><a href="#" id="homepage" class="hover:text-blue-500">Strona główna</a></li>
        <li><a href="#" id="profile" class="hover:text-blue-500">Profil</a></li>
        <li><a href="#" id="add-post-button" class="hover:text-blue-500">Dodaj post</a></li>
        <li><a href="logout.php" class="text-red-500 hover:underline">Wyloguj się</a></li>
      </ul>
    </nav>
  </section>
</header>

<main class="max-w-6xl mx-auto p-4 grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- PROFIL -->
    <section id="profilePage" class="hidden bg-white p-6 rounded-xl shadow space-y-4 dark:bg-gray-700 dark:text-black">

        <h2 class="text-xl font-semibold mb-5">
            Profil
        </h2>

        <form action="/aktualizacja_profilu" method="post" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <input type="file" name="avatar" id="avatar-upload" class="hidden">

            <label for="avatar-upload" class="cursor-pointer flex justify-center">
                <img
                    src="{{ asset($profile?->avatar) }}"
                    class="w-32 h-32 rounded-full object-cover border-4 border-gray-200 hover:opacity-80 transition"
                >
            </label>

            <div>
                <label class="font-semibold">Imię</label>
                <input
                    type="text"
                    name="imie"
                    value="{{$profile?->imie}}"
                    class="w-full mt-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>

            <div>
                <label class="font-semibold">Nazwisko</label>
                <input
                    type="text"
                    name="nazwisko"
                    value="{{$profile?->nazwisko}}"
                    class="w-full mt-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>

            <div>
                <label class="font-semibold">Email</label>
                <input
                    type="text"
                    name="email"
                    value="{{$profile?->email}}"
                    class="w-full mt-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>

            <button
                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded">
                Zaktualizuj profil
            </button>

        </form>

    </section>


    <!-- POSTY -->
    <section class="md:col-span-2 space-y-6">

        <!-- Dodawanie posta -->

        <section id="add-posts" class=" bg-white p-6 rounded-xl shadow md:col-span-2 dark:bg-gray-700 dark:text-black">

            <h3 class="text-xl font-semibold mb-4">
                Dodaj nowy post
            </h3>

            <form action="/dodawanie_postu" method="post" id="upload_zdj" enctype="multipart/form-data">
                @csrf

                <textarea
                    name="tresc"
                    rows="4"
                    placeholder="Co nowego?"
                    class="w-full border rounded p-2 mb-4 dark:bg-gray-800 dark:text-black"
                    id="zdj" 
                    accept="image/jpeg, image/png, image/webp, image/heic, image/heif"
                    ></textarea>

                <input
                    type="file"
                    id="zdj"
                    name="zdjecie"
                    accept="image/jpeg, image/png, image/webp, image/heic, image/heif" 
                    class="mb-4">


                <button
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Opublikuj
                </button>
            </form>
        </section>


        <!-- Lista postów -->

        <section id="posts-container" class="bg-white p-4 rounded-xl shadow dark:bg-gray-700">

            <h4 class="text-xl font-semibold mb-4 dark:text-black">
                Wszystkie posty
            </h4>

            @foreach($posty as $post)

                <div class="border-b border-gray-200 py-4">
                <div class="flex items-center gap-2 mb-2">

                    <img src="{{ asset($profile->avatar) }}" class="w-10 h-10 rounded-full">
                    <span class="font-semibold dark:text-black">
                        {{$post->autor}}
                    </span>
                </div>
                <p class="text-sm text-gray-600 dark:text-black">
                    {{ $post->data }}
                </p>

                    <p class="mt-2 dark:text-black">
                        {{$post->tresc}}
                    </p>

                    @if($post->zdjecie)
                        <img
                            src="{{ asset($post->zdjecie) }}"
                            class="mt-2 rounded-lg max-w-xs">

                    @endif
                    <div class="text-sm text-gray-500 mb-3">
                        {{$post->altor_komentarza}}
                    </div>
                    <div class="text-sm text-gray-600 mt-2 dark:text-black">
                        <span class="like-count">polubień</span>
                        <button class="ml-2 text-blue-500 hover:underline like-button">Polub</button>
                    </div>
                </div>

            @endforeach

        </section>

    </section>

</main>

</body>
</html>