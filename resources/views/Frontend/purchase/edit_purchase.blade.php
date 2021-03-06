
<h4 class="mb"><i class="fa fa-angle-right"></i> Edit Purchase</h4>
<form action="{{route('update_purchase',$edit_purchase->id)}}" method="post" role="form" class="form-horizontal style-form" >

    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" name="name"
                   value="{{$edit_purchase->name}}" type="text">
            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong id="clr">{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Purchase Price</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('pur_price')?'has-error':''}}"
                   value="{{$edit_purchase->pur_price}}" name="pur_price" type="text">
            @if ($errors->has('pur_price'))
                <span class="help-block">
                                        <strong id="clr">{{ $errors->first('pur_price') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Company Name</label>
        <div class="col-sm-10">
            <select class="form-control {{$errors->has('supplier_name')?'has-error':''}}" name="supplier_name">
                <option value="{{$edit_purchase->supplier_name}}" class="selected">{{$edit_purchase->supplier_name}}</option>
                @foreach($suppliers as $supplier )
                    <option value="{{$supplier->supplier_name}}">{{$supplier->supplier_name}}</option>
                @endforeach
            </select>
            @if($errors->has('supplier_name'))
                <span class="help-block">
                                    <strong id="clr">{{$errors->first('supplier_name')}}</strong>
                                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Size</label>
        <div class="col-sm-10">
            <select class="form-control {{$errors->has('size')?'has-error':''}}" name="size">
                <option class="selected" value="{{$edit_purchase->size}}">{{$edit_purchase->size}}</option>
                @foreach($sizee as $siz)
                    <option>{{$siz->size}}</option>
                @endforeach
            </select>
            @if($errors->has('size'))
                <span class="help-block">
                                    <strong id="clr">{{$errors->first('size')}}</strong>
                                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Category</label>
        <div class="col-sm-10">
            <select class="form-control {{$errors->has('category')?'has-error':''}}" name="category">
                <option class="selected" value="{{$edit_purchase->category}}">{{$edit_purchase->category}}</option>
                @foreach($categories as $cat)
                    <option>{{$cat->category_name}}</option>
                @endforeach
            </select>
            @if($errors->has('category'))
                <span class="help-block">
                                    <strong id="clr">{{$errors->first('category')}}</strong>
                                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Profit</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('profit')?'has-error':''}}" placeholder=""
                   value="{{$edit_purchase->profit}}" name="profit" type="text">
            @if($errors->has('profit'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('profit')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Quantity</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('quantity')?'has-error':''}}"
                   value="{{$edit_purchase->quantity}}" placeholder="" name="quantity" type="text">
            @if($errors->has('quantity'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('quantity')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Rack Number</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('Rack_num')?'has-error':''}}"
                   value="{{$edit_purchase->Rack_num}}" placeholder="" name="Rack_num" type="text">
            @if($errors->has('Rack_num'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('Rack_num')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    {{csrf_field()}}
    <div class="showback" style="margin-left: 18%">
        <input type="submit" class="btn btn-success" value="Save">
        <input type="reset"  class="btn btn-danger" value="Reset">
    </div>
</form>