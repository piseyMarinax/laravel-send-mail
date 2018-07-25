<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    </body>
        <form action="{{ route('sendMail')}}" method="Post">
            {{csrf_field() }}
            <span>Email</span>
            <input type="text" name="mail" id="mail">
            <span>Name</span>
            <input type="text" name="name" id="name">
            <button type="submit">Send</button>
        </form>
    </body>
    </html>
