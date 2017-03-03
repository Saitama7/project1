@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        Welcome {{ Auth::user()->name }}
                        <div class="row">
                            <div class="flot">
                            <div class="col-md-4"><img  src="uploads/img/img1.jpg" alt="" style="max-width: 100px; max-height: 100px;"></div>
                            <div class="col-md-4"><h1>vs</h1></div>
                            <div class="col-md-4"><img src="uploads/img/img2.jpg" alt="" style="max-width: 100px; max-height: 100px;"></div>
                                <a href="#" class="like">like</a> |
                                <a href="#" class="like">like</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
