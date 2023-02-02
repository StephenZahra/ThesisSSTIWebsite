<!DOCTYPE html>

<x-navbar/>

<br><br>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <h4>Reflected Injection</h4>

    <body>
        <form action='/' method='post'>
            @csrf
            <label>Name:</label>
            <input type='text' name='name'><br><br>
            <input type='submit' value='Submit'>
        </form>
    </body>
</html>
