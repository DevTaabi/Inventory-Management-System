
<h4 class="mb"><i class="fa fa-angle-right"></i> Add Company</h4>
<form  action="{{route('add_supplier')}}"  method="post" class="form-horizontal style-form">

    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">
            <strong>Name</strong></label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('supplier_name')?'has-error':''}}" name="supplier_name" type="text">
            @if($errors->has('supplier_name'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('supplier_name')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">
            <strong>Phone.Num</strong></label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('phone_number')?'has-error':''}} " name="phone_number" type="text">
            @if($errors->has('phone_number'))
                <span class="help-block">
                                        <strong id="clr">{{$errors->first('phone_number')}} </strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">
            <strong>Total amount</strong></label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('Total_Amount')?'has-error':''}}"  name="Total_Amount" placeholder="" type="text">
            @if($errors->has('Total_Amount'))
                <span>
                                        <strong id="clr">{{$errors->first('Total_Amount')}}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">
            <strong>Current Pay</strong></label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('current_pay')?'has-error':''}}"  name="current_pay" placeholder="" type="text">
            @if($errors->has('current_pay'))
                <span>
                                        <strong id="clr">{{$errors->first('current_pay')}}</strong>
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