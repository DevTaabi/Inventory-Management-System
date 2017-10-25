<table class="table table-bordered table-striped table-bottomless dataTable no-footer" id="ls-editable-table" aria-describedby="ls-editable-table_info">
    <thead id="hed">
    <tr role="row">
        <th >Product-Name</th>
        <th>Size</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>price</th>
        <th>Total-Amount</th>
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
