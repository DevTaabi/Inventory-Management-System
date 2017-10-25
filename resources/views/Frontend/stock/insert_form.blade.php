<h4 class="mb"><i class="fa fa-angle-right"></i> Enter Products</h4>
<form action="{{route('add_stock')}}" method="post" role="form" class="form-horizontal style-form" >

    <div class="form-group">
        <label  id="aln" class="col-sm-4 col-sm-4 control-label" for="name">Name</label>
        <div class="col-sm-8">
            <input id="len" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" name="name" type="text"">
            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong id="clr">{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label id="aln"  class="col-sm-4 col-sm-4 control-label" for="pur_price">Purchase Price</label>
        <div class="col-sm-8">
            <input id="len" class="form-control {{$errors->has('pur_price')?'has-error':''}}" name="pur_price" type="text">
            @if ($errors->has('pur_price'))
                <span class="help-block">
                                        <strong id="clr">{{ $errors->first('pur_price') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label id="aln"  class="col-sm-4 col-sm-4 control-label">Company</label>
        <div class="col-sm-8">
            <select id="len" class="form-control {{$errors->has('supplier_name')?'has-error':''}}" name="supplier_name">
                @foreach($suppliers as $supplier )
                    <option>{{$supplier->supplier_name}}</option>
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
        <label id="aln"  class="col-sm-4 col-sm-4 control-label">Size</label>
        <div class="col-sm-8">
            <select id="len" class="form-control {{$errors->has('size')?'has-error':''}}" name="size">
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
        <label id="aln"  class="col-sm-4 col-sm-4 control-label">Category</label>
        <div class="col-sm-8">
            <select id="len" class="form-control {{$errors->has('category')?'has-error':''}}" name="category">
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
        <label id="aln"  class="col-sm-4 col-sm-4 control-label">Profit</label>
        <div class="col-sm-8">
            <input  id="len" class="form-control {{$errors->has('profit')?'has-error':''}}" placeholder=""  name="profit" type="text">
            @if($errors->has('profit'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('profit')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label id="aln"  class="col-sm-4 col-sm-4 control-label">Quantity</label>
        <div class="col-sm-8">
            <input id="len" class="form-control {{$errors->has('quantity')?'has-error':''}}" placeholder="" name="quantity" type="text">
            @if($errors->has('quantity'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('quantity')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label id="aln"  class="col-sm-4 col-sm-4 control-label">Rack Number</label>
        <div class="col-sm-8">
            <input  id="len" class="form-control {{$errors->has('Rack_num')?'has-error':''}}" placeholder="" name="Rack_num" type="text">
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