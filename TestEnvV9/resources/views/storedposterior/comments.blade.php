<!DOCTYPE html>

<x-navbar/>

<br><br>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <h4>What people Think</h4>

    <body>
        @foreach ($data as $comment)
            <p>{{$comment->data}}</p>
        @endforeach
    </body>
</html>
