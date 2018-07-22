
<div class="write-comment">
    <h2>Escreva um comentário</h2><br>
    {{ Form::open(['method'=> 'POST', 'action' => "CommentsController@store"]) }}
        {{ Form::label('title', 'Nome:', ['class' => 'write-title']) }}<br>
        {{ Form::text('author','', ['placeholder' => 'Seu nome']) }}<br><br>
         {{ Form::label('comment', 'Comentário:', ['class' => 'write-title']) }}<br>
        {{ Form::textarea('comment', '', ['placeholder' => 'Escreva o seu comentário...', 'class' => 'comment-textarea']) }}<br>
        {{ Form::submit('Enviar') }}
        {{ Form::hidden('post_uri', $post->post_slug)}}
    {{ Form::close() }}
</div>