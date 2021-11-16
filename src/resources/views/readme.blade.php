@extends('realease-notes::master_layout')

@section('content')
    @foreach ($readmes as $readme)
        <x-realeasenotes-readme :readme=$readme />
        <hr class="my-6">
    @endforeach
@endsection
