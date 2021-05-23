@extends('layouts.layout')

@section('template')
    <form action='/posts' method='post'>
        @csrf

        <div class='form'>
            <input type='text' name='content' value="{{ old('content') }}" class='content_input'>
            <input type='submit' value="投稿">
        </div>
    </form>
@endsection
