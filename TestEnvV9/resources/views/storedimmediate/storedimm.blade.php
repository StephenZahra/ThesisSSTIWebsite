<!DOCTYPE html>

<x-navbar/>

<br><br>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <h4>Stored Immediate Injection</h4>

    <body>
        <form action='{{route('send')}}' method='post'>
            @csrf
            <label>Send us an Email:</label><br>
            <textarea type='text' name='message'></textarea><br><br>
            <input type='submit' value='Submit'>
        </form>
    </body>
</html>