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

@php
    $fruit = ["one" =>"Apple","two"=>"banana","three"=>"orange"];
@endphp

@include('pages.header',['names' => $fruit])

<h1>Home page</h1>

@include('pages.footer')