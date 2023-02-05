<!DOCTYPE html>

<x-navbar/>

<br><br>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <h4>Stored Posterior Injection</h4>

    <body>
        <form action="{{route('storeStoredPos')}}" method='post'>
            @csrf
            <label>Tell us what you think:</label><br>
            <textarea type='text' name='message' style="resize: both;"></textarea><br><br>
            <input type='submit' value='Submit'>
        </form>

        <br><br>
        <a class="btn btn-success" href="{{route('comments')}}">See what other people think</a>
    </body>
</html>
