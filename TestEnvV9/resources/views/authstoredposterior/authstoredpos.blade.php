<!DOCTYPE html>

<x-navbar/>

<br><br>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <h4>Authenticated Stored Posterior Injection</h4>

    <body>
        <form action='{{route("authstoredposStore")}}' method='post'>
            @csrf
            <label>Change Your Username here:</label><br>
            <input type='text' name='name'><br><br>
            <input type='submit' value='Submit'>
        </form>
    </body>
</html>
