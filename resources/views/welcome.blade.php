<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">
        <script>window.Laravel= {csrfToken: '{{csrf_token()}}'}</script>
        <title>Articles</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <div class="container">
                <articles></articles>
            </div>
        </div>

        @include('script')
        <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
    </body>
</html>
