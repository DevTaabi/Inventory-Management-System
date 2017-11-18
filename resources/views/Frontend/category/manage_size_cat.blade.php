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
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Categories</strong></h3>
                </div>
                <div class="panel-body">
                    <!--Table Wrapper Start-->
                    <div class="table-responsive ls-table">
                        @foreach($categories as $cat)
                        <table class="table table-bordered table-striped">
                            <thead id="hed">
                            <tr>
                                <th>Category Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$cat->category_name}}</td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!--Table Wrapper Finish-->

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Sizes</strong></h3>
                </div>
                <div class="panel-body">
                    <!--Table Wrapper Start-->
                    <div class="table-responsive ls-table">
                        @foreach($sizee as $size)
                            <table class="table table-bordered table-striped">
                                <thead id="hed">
                                <tr>
                                    <th>Size</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$size->size}}</td>
                                    <td class="text-center">
                                        <button class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                    </div>
                    <!--Table Wrapper Finish-->

                </div>
            </div>
        </div>

        </div>
    </div>

@endsection