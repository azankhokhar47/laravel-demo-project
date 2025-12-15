{{-- <h1>Home : First page</h1> --}}

{{-- {{ 5 + 2 }} --}}

{{-- <br><br> --}}

{{-- {{"HELLO WORLD"}} --}}

{{-- <br><br> --}}
{{-- 
{{"<h1>HELLO WORLD</h1>"}}

{!!"<h1>Azan</h1>"!!} --}}

<!-- {{"<script>alert('azan') </script>"}}

{!!"<script>alert('azan') </script>"!!} -->

{{-- @php
      $user = "AZAN";
@endphp
 
{{$user}} --}}


{{--

@php
      $names = ["azan", "atif", "salman"];
      $user = "AZAN";
@endphp

<ul>
@foreach ($names as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@{{$users}} --}}

{{-- 
@php
      $names = ["sunny", "azan", "miah"];
      $user = "AZAN";
@endphp

<ul>
@foreach ($names as $n)
    <li>{{$loop->index}} - {{$n}}</li>
@endforeach
</ul>


@php
      $names = ["sunny", "azan", "miah"];
      $user = "AZAN";
@endphp

<ul>
@foreach ($names as $n)
    <li>{{$loop->iteration}} - {{$n}}</li>
@endforeach
</ul>



@php
      $names = ["sunny", "azan", "miah"];
      $user = "AZAN";
@endphp

<ul>
@foreach ($names as $n)
    <li>{{$loop->count}} - {{$n}}</li>
@endforeach
</ul> --}}



{{-- 
@php
      $names = ["sunny", "azan", "miah"];
      $user = "AZAN";
@endphp

<ul>
@foreach ($names as $n)
    
      @if ($loop->first)
          <li style="color: brown";>{{$n}}</li>
      @elseif($loop->last)
          <li style="color: rgb(85, 42, 165)";>{{$n}}</li>
      @else
          <li>{{$n}}</li>
      @endif
      
@endforeach
</ul>
 --}}

{{-- 
@php
      $names = ["sunny", "azan", "miah","sunny", "azan", "miah","sunny", "azan", "miah"];
      $user = "AZAN";
@endphp

<ul>
@foreach ($names as $n)
    
      @if ($loop->even)
          <li style="color: brown";>{{$n}}</li>
      @elseif($loop->odd)
          <li style="color: rgb(48, 114, 4)";>{{$n}}</li>
      @endif
      
@endforeach
</ul> --}}

{{-- @include('pages.header',['name' => 'AZAN '])

<h1>Home page</h1>

@include('pages.footer') --}}


{{-- @php
    $fruit = ["Apple","banana","orange","grapes","strawbary"];
@endphp

@include('pages.header',['names' => $fruit])

<h1>Home page</h1>

@include('pages.footer') --}}

{{-- @php
    $fruit = ["one" =>"Apple","two"=>"banana","three"=>"orange"];
@endphp --}}


{{-- 
@php  
    $fruit = [];
@endphp

@include('pages.header',['names' => $fruit])

<h1>Home page</h1>

@include('pages.footer') --}}



{{-- @php
    $fruit = ["Apple","banana","orange","grapes","strawbary"];
@endphp

@includeWhen(true, 'pages.header', ['names' => $fruit])

<h1>Home page</h1>

@include('pages.footer')

@includeIf('pages.content') --}}
{{-- 
@php
    $fruit = ["Apple","banana","orange","grapes","strawbary"];
    $value="hello";
@endphp

@includeUnless(empty($value), 'pages.header', ['names' => $fruit])

<h1>Home page</h1>

@include('pages.footer')

@includeIf('pages.content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Azan</h1>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">post</a>
        </li>
    </div>
  </div>
</nav>

<h1>Home page</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia odio, inventore deserunt quod quibusdam accusamus cumque, vero, aliquid dolores rem laboriosam nostrum dolorem veritatis molestiae dicta? Ex mollitia veritatis enim.
Eveniet, ratione, vel cum sunt quam dignissimos accusamus hic soluta, nemo culpa placeat nostrum. Laudantium in ad libero earum optio autem, accusamus tempore! Assumenda fugit quasi porro illum, delectus praesentium.
Aut ea iusto nobis ex sint, atque mollitia vel dolorum tenetur non praesentium eum explicabo quia culpa quasi rem laudantium maiores molestias est quas dolores enim eaque voluptates! Odio, aliquam?</p>

<footer>@azan copyright 2025</footer>
</body>
</html>