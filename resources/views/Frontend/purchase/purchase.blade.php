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
        <div class="col-lg-6">
            <img style="margin-top: 10%; width: 550px;"
                 src="{{url('pur.jpg')}}">
        </div>
        <div class="col-lg-6">
            <div class="form-panel">
                <div class="panel-body">
                    @if($edit_purchase != null)
                        @include("Frontend.purchase.edit_purchase")
                    @else
                        @include("Frontend.purchase.insert_purchase")
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Purchase</h3>
                </div>
                <div class="panel-body">
                    <!--Table Wrapper Start-->
                    <div class="table-responsive ls-table">
                        <table class="table table-bordered table-striped">
                            <thead id="hed">
                            <tr role="row">
                                <th >Item Name</th>
                                <th>Purchase Price</th>
                                <th>Supplier Name</th>
                                <th>Size</th>
                                <th>Category</th>
                                <th>Profit</th>
                                <th>Quantity</th>
                                <th>Rack.No</th>
                                <th>Sale_price</th>
                                <th>Total_cost</th>
                                <th>Total_saleprice</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($purchases as $purchase)
                                <tr class="odd">
                                    <td class="">{{$purchase->name}}</td>
                                    <td class="">{{$purchase->cost}}</td>
                                       <td>@inject('supplier_name','App\Supplier')
                                        {{$supplier_name->where('id',$purchase->sup_id)->value('supplier_name')}}</td>
                                    <td class="">{{$purchase->size}}</td>
                                    <td class="">{{$purchase->category}}</td>
                                    <td class="">{{$purchase->profit}}</td>
                                    <td class="">{{$purchase->quantity}}</td>
                                    <td class="">{{$purchase->Rack_num}}</td>
                                    <td class="">{{$purchase->sale_price}}</td>
                                    <td class="">{{$purchase->Total_cost}}</td>
                                    <td class="">{{$purchase->Total_saleprice}}</td>
                                    <td class="">{{$purchase->created_at}}</td>
                                    <td class="text-center">
                                        <a href="{{route('editpur',$purchase->id)}}"><button class="btn btn-xs btn-success" title="Edit keyword"><i class="fa fa-pencil-square-o"></i></button></a>
                                        <a href="{{route('deletepur',$purchase->id)}}"><button
                                                    onclick="return confirm('Are you sure you want to delete this purchase?');"
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

@endsection