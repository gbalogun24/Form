@extends('layouts.default')

@section('content')

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello, world!</h1>
                <p>Welcome to my assignment. You can use the navigation links at the top or the buttons in the sections of the page</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>About</h2>
                    <p>You can use the button below or the link in the navigation bar to access this page</p>
                    <p><a class="btn btn-secondary" href="{{route('about')}}" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Contact</h2>
                    <p>You can use the button below or the link in the navigation bar to access this page </p>
                    <p><a class="btn btn-secondary" href="{{route('contact')}}" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Random</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->


@endsection
