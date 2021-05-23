@extends('layouts.layout')

@section('template')
    <form action='/posts' method='post'>
        @csrf
        <input type='text' name='content' value="{{ old('content') }}">
        <input type='submit'>
    </form>
@endsection
