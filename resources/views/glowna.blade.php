<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<!-- PROFIL -->
<!-- POSTY -->
 <section id="post">
  @foreach($posty as $post)
    imie: {{$post?->imie}}
    nazwisko: {{$post?->nazwisko}}
    wiek: {{$post?->wiek}}
    email: {{$post?->email}}
    data: {{$post?->data_powstania_konta}}
  @endforeach
 </section>
</body>
</html>