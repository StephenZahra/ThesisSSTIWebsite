<!DOCTYPE html>

<x-navbar/>

<br><br>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <h4>Blind Immediate Injection</h4>

    <body>
        <form action='{{route("blindimmStore")}}' method='post'>
            @csrf
            <label>What you write here will also be logged:</label><br>
            <textarea type='text' name='message'></textarea><br><br>
            <input type='submit' value='Submit'>
        </form>
    </body>
</html>
