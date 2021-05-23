@extends('layouts.layout')

@section('template')
    <div class='post-list'>
        @foreach ($posts as $post)
            <div class='post'>
                <span>{{ $post->content }}</span>
                <div class='buttons'>
                    <a href='/posts/{{ $post->id }}/edit' class='edit-btn'>編集</a>
                    <!-- 削除ボタン -->
                    <form action='/posts/{{ $post->id }}' method='post'>
                        @csrf
                        @method('DELETE')

                        <input type='submit' value='削除' class='delete-btn' onclick='return confirm("削除しますか？")'></input>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
