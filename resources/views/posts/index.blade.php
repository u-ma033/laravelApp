@foreach ($posts as $post)
    <p>{{ $post->content }}</p>
    <a href='/posts/{{ $post->id }}/edit'>編集</a>
    <!-- 削除ボタン -->
    <form action='/posts/{{ $post->id }}' method='post'>
        @csrf
        @method('DELETE')

        <input type='submit' value='削除' onclick='return confirm("削除しますか？")'></input>
    </form>
    
@endforeach

<a href='/posts/create'>新規投稿</a>
