<form action='/posts/{{ $post->id }}' method='post'>
    <!-- @method('PATCH') -->
    @csrf

    <input type="hidden" name="_method" value="patch">
    <input type='text' name='content' value='{{ $post->content }}'></input>
    <input type='submit'></input>
</form>
