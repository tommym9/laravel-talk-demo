<?php
/**
 * Available variables
 *  - Comment: The comment model
 */
?>

Posted: <b>{{ $comment->created_at->diffForHumans() }}</b>
Posted by: <b>{{ $comment->user_name }}</b>

<p>{{ $comment->body }}</p>

