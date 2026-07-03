<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
        };
    </script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">

<main class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- PROFIL -->
    <section class="bg-white rounded-xl shadow p-6 md:col-span-1">

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

        <section class="bg-white rounded-xl shadow p-6">

            <h2 class="text-xl font-semibold mb-4">
                Dodaj post
            </h2>

            <form action="/dodawanie_postu" method="post" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <input
                    type="file"
                    id="zdj"
                    name="zdjecie"
                    class="block w-full">

                <textarea
                    name="tresc"
                    rows="4"
                    placeholder="Co nowego?"
                    class="w-full border rounded-lg p-3 resize-none"></textarea>

                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded">
                    Dodaj post
                </button>

            </form>

        </section>


        <!-- Lista postów -->

        <section class="bg-white rounded-xl shadow p-6">

            <h2 class="text-xl font-semibold mb-5">
                Wszystkie posty
            </h2>

            @foreach($posty as $post)

                <article class="border-b last:border-none pb-5 mb-5">

                    <div class="font-semibold text-lg">
                        {{$post->autor}}
                    </div>

                    <div class="text-sm text-gray-500 mb-3">
                        {{$post->altor_komentarza}}
                    </div>

                    <p class="mb-4">
                        {{$post->tresc}}
                    </p>

                    @if($post->zdjecie)
                        <img
                            src="{{ asset($post->zdjecie) }}"
                            class="rounded-lg max-w-md w-full">
                    @endif

                </article>

            @endforeach

        </section>

    </section>

</main>

</body>
</html>