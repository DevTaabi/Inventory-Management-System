@extends("masterLayout")
@section("main-content")
    <div class="row">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

                <strong>Well done!</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="col-lg-6 col-md-6">
            <div class="form-panel">
                <div class="panel-body">
                    {{--{{ App::VERSION() }}--}}
                    @if($edit_stock != null)
                        @include("Frontend.stock.edit_form")
                    @else
                        @include("Frontend.stock.insert_form")
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-panel">
                <div class="panel-body">
                    @include("Frontend.stock.insert_size")
                </div>
            </div>
            <div class="form-panel">
                <div class="panel-body">
                    @include("Frontend.stock.insert_category")
                </div>
            </div>
            <a href="{{route('manage_cat_size')}}"><button style="margin-left: 20%;margin-top: 10%" class="btn btn-primary btn-lg"><i class="fa fa-cogs"></i>
                    Manage Size and category</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                 @include("Frontend.stock.show_stock")
            </div>
        </div>

    </div>
@endsection