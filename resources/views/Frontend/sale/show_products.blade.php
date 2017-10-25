<div class="panel-heading">
    <h3 class="panel-title"><strong>Products in Stock</strong></h3>
</div>
<div class="panel-body">
    <!--Table Wrapper Start-->
    <div class="ls-editable-table table-responsive ls-table">
        <div id="ls-editable-table_wrapper" class="dataTables_wrapper" role="grid">


            <div class="dataTables_length" id="ls-editable-table_length">
                <form action="{{route('search')}}" method="post" role="form" class="form-horizontal style-form">

                    <label>
                        <select name="value">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select></label>
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-info" value="show">

                </form>
            </div>





            <div id="ls-editable-table_filter" class="dataTables_filter">
                <form action="{{route('search_by_name')}}" method="post" role="form" class="form-horizontal style-form">
                    <input class=""  type="text" name="by_name">
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-info" value="search" >
                </form>
            </div>



            <table class="table table-bordered table-striped table-bottomless dataTable no-footer" id="ls-editable-table" aria-describedby="ls-editable-table_info">
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
                @foreach($stock as $item)
                    <tr class="odd">
                        <td class="">{{$item->name}}</td>
                        <td class="">{{$item->cost}}</td>
                        <td>@inject('supplier_name','App\Supplier')
                            {{$supplier_name->where('id',$item->sup_id)->value('supplier_name')}}</td>
                        <td class="">{{$item->size}}</td>
                        <td class="">{{$item->category}}</td>
                        <td class="">{{$item->profit}}</td>
                        <td class="">{{$item->quantity}}</td>
                        <td class="">{{$item->Rack_num}}</td>
                        <td class="">{{$item->sale_price}}</td>
                        <td class="">{{$item->Total_cost}}</td>
                        <td class="">{{$item->Total_saleprice}}</td>
                        <td class="">{{$item->created_at}}</td>
                        <td class="text-center">
                            <a href="{{route('edititem',$item->id)}}"><button class="btn btn-md btn-success">
                                    <i class="fa fa-plus-square-o"></i> Add</button></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!--Table Wrapper Finish-->
    </div>
</div>