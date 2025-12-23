<h1>Home page</h1>


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

{{-- <!DOCTYPE html>
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
</html> --}}



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Azan</h1>
        </header>
        <nav>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Post</a>
        </nav>
        <main>
            <article>
                <h1>home page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe eligendi unde soluta, aliquid quae voluptate vitae eaque eius a ex tempore voluptatum labore nesciunt recusandae nisi in natus placeat minus!
                Ratione doloremque dolorum minus vero sequi esse deleniti ab, optio fugit molestiae, earum similique temporibus odio quam rerum perspiciatis ipsam. Quasi at dolor in ipsum veritatis hic nisi quod nam?
                Neque, at nisi, debitis ab nobis consectetur veniam voluptatum tempora sit quibusdam dicta id sapiente nam ducimus assumenda fugit adipisci libero quaerat eligendi explicabo. Sint in repellendus saepe at eos!
                Nihil sunt repudiandae ducimus blanditiis deserunt aperiam accusantium porro possimus reiciendis cum temporibus libero, vel tenetur illo unde voluptatum cupiditate et minus aliquam soluta iure. Blanditiis, voluptatum quos! Cum, iure.
                Ullam pariatur ducimus consequatur! Rem cum, suscipit tempora recusandae nam excepturi modi laudantium reiciendis qui earum quam sint sit doloribus impedit neque alias culpa libero rerum laborum inventore. Temporibus, ullam!</p>
            </article>
            <aside>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Post</a></li>
                </ul>
            </aside>
        </main>
        <footer>Azan@copyright 2025.</footer>
    </div>
</body>
</html> --}}
{{-- 
@extends('layouts.masterlayout')

@section('content')
    <h2>Home page</h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptates expedita quam aspernatur, mollitia eum, dignissimos, totam autem beatae recusandae exercitationem vero. Harum eaque quam amet aspernatur eum sunt veniam!
    Corporis, sapiente odit minus adipisci quidem numquam similique, ea ut nobis nisi ducimus repellat perferendis quasi assumenda natus saepe at odio quis impedit. Ipsa labore, praesentium debitis molestiae suscipit impedit.
    Velit officiis laboriosam nostrum optio vel nulla consequatur enim, voluptas, est expedita iure asperiores eius! Asperiores quis cumque repellat, harum eligendi nisi ipsum quae sit deserunt repudiandae ipsam delectus molestias?
@endsection

@section('title')
    Home
@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush --}}