@foreach ($posts as $post)
    <p>{{ $post->content }}</p>
    <a href='/posts/{{ $post->id }}/edit'>編集</a>
@endforeach
