@extends('layouts.layout')

@section('template')
    <form action='/posts/{{ $post->id }}' method='post'>
        @csrf

        <div class='form'>
            <input type="hidden" name="_method" value="patch">
            <input type='text' name='content' value='{{ $post->content }}' class='content_input'>
            <input type='submit' value="更新">
        </div>
    </form>
@endsection
