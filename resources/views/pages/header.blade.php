<h1>Header page</h1>

{{-- <p>{{$names}}</p> --}}

{{-- @foreach ($names as $n)
    <p>{{$n}}</p>
@endforeach --}}

@foreach ($names as $key => $value )
    <p>{{$key}} - {{$value}}</p>
@endforeach