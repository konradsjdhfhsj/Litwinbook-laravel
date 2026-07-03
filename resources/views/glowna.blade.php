<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<!-- PROFIL --> 
<form action="/aktualizacja_profilu" method="post" enctype="multipart/form-data">
  @csrf
  <input type="file" name="avatar" id="avatar-upload" style="display: none;">
  <label for="avatar-upload">
      <img src="{{$profile?->avatar}}" alt="pies" >
  </label>
  <br>

  imie: <input type="text" name="imie" value="{{$profile?->imie}}"><br>
  nazwisko: <input type="text" name="nazwisko" value="{{$profile?->nazwisko}}"><br>
  email: <input type="text" name="email" value="{{$profile?->email}}"><br>
  <input type="submit" value="Zaktualizuj profil">
</form>
              

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