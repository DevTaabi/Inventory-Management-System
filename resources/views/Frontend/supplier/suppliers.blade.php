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
                <img style="margin-top: 5%;margin-left:25%;width: 300px; height:350px"
                     src="{{url('supp.png')}}">

            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-panel">
                    <div class="panel-body">
                       @if($sup != null)
                            @include('Frontend.supplier.edit_form')

                           @else
                            @include('Frontend.supplier.insert_form')
                           @endif
                    </div>
                </div>
            </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Supplier</h3>
                    </div>
                    <div class="panel-body">
                        <!--Table Wrapper Start-->
                        <div class="ls-editable-table table-responsive ls-table">
                                <table class="table table-bordered table-striped table-bottomless dataTable no-footer" id="ls-editable-table" aria-describedby="ls-editable-table_info">
                                    <thead  id="hed" >
                                    <tr role="row">
                                        <th >Id</th>
                                        <th >Supplier Name</th>
                                        <th >Phone Number</th>
                                        <th >Total Amount</th>
                                        <th >Current Pay</th>
                                        <th >Remaining Amount</th>
                                        <th >Date</th>
                                        <th >Actions</th>
                                    </thead>
                                    <tbody>
                                    @foreach($suppliers as $supplier)
                                        <tr class="odd">
                                            <td class="">{{$supplier->id}}</td>
                                            <td class=" ">{{$supplier->supplier_name}}</td>
                                            <td class="sorting_1">{{$supplier->phone_number}}</td>
                                            <td class="">{{$supplier->Total_Amount}}</td>
                                            <td class="">{{$supplier->current_pay}}</td>
                                            <td class="">{{$supplier->remaining_amount}}</td>
                                            <td class=" ">{{$supplier->created_at}}</td>
                                            <td class="text-center">
                                                <a href="{{route('editsup',$supplier->id)}}"><button class="btn btn-xs btn-success" title="Edit keyword"><i class="fa fa-pencil-square-o"></i></button></a>
                                                <a href="{{route('deletesup',$supplier->id)}}">
                                                    <button
                                                            onclick="return confirm('Are you sure you want to delete this supplier?');"
                                                            class="btn btn-xs btn-danger" title="Delete Keyword"><i class="fa fa-times-circle"></i></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                        <!--Table Wrapper Finish-->
                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection