<!DOCTYPE html>
<html class="no-js" lang=pt-br">
    <head>
    	<meta charset="utf-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Contact.me - @yield('title')</title>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<link type="text/css" rel="stylesheet" href="/components/Materialize/dist/css/materialize.min.css"  media="screen,projection"/>
  		<link href="/styles/styles.css" rel="stylesheet">
    </head>
    <body>
    	@yield('header')
    	
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                @include('template.message')         
                @yield('content')
            </div>
        </div>
        
        @yield('footer')

        <script type="text/javascript" src="/components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="/components/Materialize/dist/js/materialize.min.js"></script>
    </body>
</html>
