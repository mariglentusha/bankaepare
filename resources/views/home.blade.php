@extends('layouts.master')

@section('content')
    <div class="col-12 col-md-9">
        <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="jumbotron">
            @if (Auth::guest())
                <h1>Hello, ordinary mortal. Log in, will ya?</h1>
            @else
                <h1>Hello, {{ Auth::user()->name }}</h1>
            @endif

            <!-- Only if a user is logged in, the upload form is shown -->

            @if (Auth::user())

                <h3>Be a good student {{ Auth::user()->name }} and upload an exam here.</h3>
                <hr>

                <form action="{{ url('exams') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close-icon" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <div class="row">
                        <div class="form-group">
                            <label for="subject">Subject (Hardcoded for now)</label>
                            <input type="text" name="subject" class="form-control" placeholder="PHP and Mysql" value="1">
                        </div>
                        <div class="form-group">
                            <label for="image">Exam Image:</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>

                    @include ('layouts.errors')
                </form>
            @endif

        </div>

    @if ($exams->count())
        <div class="row">
            <div class='list-group gallery'>

                @foreach($exams as $exam)
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail" href="/images/exams/{{ $exam->id }}.jpg">
                            <img class="img-responsive" alt="" src="/images/exams/{{ $exam->id }}.jpg" />
                        </a>
                    </div>
                @endforeach

            </div>
        </div><!--/row-->
    @else
        <div class="row">
            <div class="col-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
        </div><!--/row-->
    @endif

    </div>
@endsection
