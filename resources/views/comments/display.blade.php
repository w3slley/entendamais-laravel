
<div class="write-comment">
    {{ Form::open(['method'=> 'POST', 'action' => "CommentsController@store"]) }}
        {{ Form::text('author','', ['placeholder' => 'Your name']) }}<br>
        {{ Form::textarea('comment', '', ['placeholder' => 'Write a comment']) }}<br>
        {{ Form::submit('Comment') }}
        {{ Form::hidden('post_uri', $post->post_slug)}}
    {{ Form::close() }}
</div>