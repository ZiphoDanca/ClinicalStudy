@extends('dashboard')

@section('content')

    {{--<ol class="breadcrumb hidden-xs">--}}
        {{--<li><a href="{{ url('/master') }}">Home</a></li>--}}
        {{--<li class="active">Products</li>--}}
        {{--<li class="active"><a>  </a></li>--}}
        {{--<li class="active"><a>Posts</a></li>--}}
    {{--</ol>--}}
    {{--<h4 class="page-title">Products Listing</h4>--}}


    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" >
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive overflow">
                        <h3 class="block-title">Messages</h3>
                        <table class="table tile table-striped" id="messagesTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Cellphone</th>
                                <th>Message</th>
                                <th>Received</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('footer')

@endsection