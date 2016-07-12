<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0-beta.1/themes/smoothness/jquery-ui.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/main.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="website" content="1">
    </head>
    <body>

        @yield('content')
        <script src="/js/main.js"></script>
    </body>
</html>