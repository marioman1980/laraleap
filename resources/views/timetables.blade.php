@extends('app')

@section('content')
@include('timetables.index')

<div id="test">
HELLO {{ $user->id }}, TIMETABLES
</div>
@endsection