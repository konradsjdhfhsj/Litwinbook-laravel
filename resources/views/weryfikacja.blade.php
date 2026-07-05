<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LitwinBook</title>
    <!-- Tailwind & SweetAlert -->
  <script src="skrypty-js/tab-index.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
    };
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
      @vite(['resources/js/rejestracja.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center p-4 text-gray-800 font-sans">
    <section class="w-full max-w-md bg-white dark:bg-gray-800 shadow-md rounded-xl p-6">
      <label for="nocdzien"><p id="emotka">☀️</p></label>
      <input type="checkbox" name="nocdzien" id="nocdzien" class="hidden">
      <header class="text-center mb-6">
          <h1 class="text-3xl font-bold text-violet-600">LitwinBook</h1>
          <p class="text-sm text-gray-600">Podziel sie nowymi postami</p>
        </header>
        <!-- taby -->
        <section class="flex justify-around mb-4">
          <a href="#signup-tab-content" class="tab-link text-blue-600 hover:underline">Zarejestruj się</a>
          <a href="#login-tab-content" class="tab-link text-blue-600 hover:underline">Zaloguj sie</a>
        </section>
        <!-- rejestracja -->
        <section id="signup-tab-content" class="tab-content mb-6 hidden">
          <form action="/rejestracja" id="form-rej" method="post" class="space-y-4">
            @csrf
            <input type="email" id="email" name="email" placeholder="Adres e-mail" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none focus:ring-indigo-300" required>
            <input type="text" id="imie" name="imie" placeholder="Imię" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none focus:ring-indigo-300" required>
            <input type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none focus:ring-indigo-300" required>
            <input type="number" id="wiek" name="wiek" placeholder="Wiek" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none focus:ring-indigo-300" required>
            <input type="password" id="haslo" name="password" placeholder="Hasło" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none focus:ring-indigo-300" required>
            <input type="submit" id="zarejestruj" value="Zarejestruj się" class="w-full bg-violet-600 text-white py-2 rounded-lg hover:bg-violet-700 transition">
          </form>
          <p class="text-xs text-black/70 dark:text-white/70 mt-4 text-center">
            Rejestrując się, akceptujesz nasze <a href="warunki.html" class="underline">Warunki korzystania z usługi</a>
          </p>
        </section>
        <!-- logowanie -->
        <section id="login-tab-content" class="tab-content mb-6">
          <form action="/logowanie" method="post" class="space-y-4">
            @csrf
            <input type="text" name="email" placeholder="E-mail lub nazwa użytkownika" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-purple-300" required>
            <input type="password" name="password" placeholder="Hasło" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-purple-300" required>
            <input type="submit" value="Zaloguj się" class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
          </form>
        </section>
</html>