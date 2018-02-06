<?php
/**
 * Available variables
 *  - Comment: The comment model (always empty in this template
 *  - Post: The Post model
 */
?>

@extends('layouts.app')

@section('content')

    <?php
        /**
         * https://laravel.com/docs/4.2/html#form-model-binding
         *
         * Using Laravels Model form binding takes care of re-populating the form on reload (in case of a validation error)
         * and can allow us to map a model to the form without having to manually set the mapping
         */
    ?>
    {!! Form::model($comment, ['route' => ['comments.store', $post]]) !!}

    <?php
        /**
         * https://laravel.com/docs/5.5/validation#quick-displaying-the-validation-errors
         *
         * Laravel stores validation errors in the error MessageBag.
         *
         * The $errors variable is bound to the view by the Illuminate\View\Middleware\ShareErrorsFromSession.
         */
    ?>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <?php
        /**
         * There are form types that cover all input types.
         */
    ?>
    {!! Form::label('user_name', 'Your name') !!}
    {!! Form::text('user_name', null, ['required' => 'required']) !!}

    <br /><br />

    {!! Form::label('body', 'Your comment') !!}
    {!! Form::textarea('body', null, ['required' => 'required']) !!}

    <br /><br />

    {!! Form::submit('Submit', ['class' => 'btn']) !!}

    {!! Form::close() !!}
@endsection