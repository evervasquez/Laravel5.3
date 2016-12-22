@extends('base')

@section('content')
    <div class="title m-b-md">
       <ul>
           @foreach($names as $name)
               <li>{{ $name }}</li>
           @endforeach
       </ul>
    </div>
@stop

@section('js')
<script>
    alert("Contact Me!");
</script>
@stop