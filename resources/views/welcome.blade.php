<h1>Home : First page</h1>

{{ 5 + 2 }}

<br><br>

{{"HELLO WORLD"}}

<br><br>

{{"<h1>HELLO WORLD</h1>"}}

{!!"<h1>Azan</h1>"!!}

<!-- {{"<script>alert('azan') </script>"}}

{!!"<script>alert('azan') </script>"!!} -->

@php
      $user = "AZAN";
@endphp

{{$user}}


@php
      $names = ["azan", "atif", "salman"];
      $user = "AZAN";
@endphp

<ul>
@foreach ($names as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@{{$users}}