@extends('app')

@section('content')
@include('people.home')

<div id="test">
HELLO {{ $user->id }}, {{$foo}}
</div>
@endsection
