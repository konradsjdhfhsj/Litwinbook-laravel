<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<!-- PROFIL -->                  
    imie: {{$profile?->imie}}<br>
    nazwisko: {{$profile?->nazwisko}}<br>
    wiek: {{$profile?->wiek}}<br>
    email: {{$profile?->email}}<br>
    data: {{$profile?->data_powstania_konta}}<br>
<!-- POSTY -->
 <section id="post">
  @foreach($posty as $post)
    imie: {{$post?->autor}}<br>
    nazwisko: {{$post?->tresc}}<br>
    wiek: {{$post?->data}}<br>
    email: {{$post?->like}}<br>
    data: {{$post?->altor_komentarza}}<br>
  @endforeach
 </section>
</body>
</html>