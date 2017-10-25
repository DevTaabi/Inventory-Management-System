<h4 class="mb"><i class="fa fa-angle-right"></i> Add size</h4>
<form action="{{route('add_size')}}" method="post" role="form" class="form-horizontal style-form">

    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">size</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('size')?'has-error':''}}" name="size" type="text">
            @if($errors->has('size'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('size')}}</strong>
                            </span>
            @endif
        </div>
        {{csrf_field()}}

    </div>
    <div class="showback" style="margin-left: 18%">
        <input type="submit" class="btn btn-success" value="Save">
        <input type="reset" class="btn btn-danger" value="Reset">
    </div>
</form>