<!DOCTYPE html>
<html>
    
    <head>

        <title>SF Movie Sets</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    </head>

        <body>

            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

            <form role="search" class="navbar-form navbar-right" id="movie-form" action="{{ route('lookup') }}" method="get">
                <div class="form-group">
                    <label for="inputMovie" class="addressInput"></label>
                    <input id="movie" size="50" type="text" class="form-control" placeholder="Start typing to search for movies">
                    <input type="submit" class="btn" value="Search" id="lookup">
                </div>
            </form>
            <p class="navbar-text navbar-left"><h2 id="logo">&#x2605; SF Movie Sets</h2></p>
            
            </nav>

            <div class="row">
                <div class="col-md-12 tall" id="top-row"></div>
            </div>

            <div class="row">
                <div class="col-md-6" id="left-column">
                    <div id="map-canvas"></div>
                </div> 
                <div class="col-md-6" id="right-column">
                    <div id="movie-info"></div>
                </div>
            </div>

            <div class="row" id="bottom-row">
                <div class="col-md-12" id="api-info">
                </div>
            </div>
<script>
    var base_url="{{url('/')}}" + '/';
</script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
        <!-- <script src=//code.jquery.com/jquery-3.5.1.min.js integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=anonymous></script> -->
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> 
        <!-- <script type="text/javascript" src="{{ asset('js/movies.js') }}"></script>  -->
        <script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfV6BqeNtz7M9KKw2of52azTo2FKh0s1E&amp;libraries=visualization&sensor=true"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

        </body>

</html>
