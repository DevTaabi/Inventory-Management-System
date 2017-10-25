<h4 class="mb"><i class="fa fa-angle-right"></i> Add Category</h4>
<form action="{{route('add_cat')}}" method="post" role="form" class="form-horizontal style-form">

    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('category_name')?'has-error':''}}"  name="category_name" type="text">
            @if($errors->has('category_name'))
                <span class="help-block">
                                <strong id="clr">{{$errors->first('category_name')}}</strong>
                            </span>
            @endif
            {{csrf_field()}}
        </div>
    </div>
    <div class="showback" style="margin-left: 18%">
        <input type="submit" class="btn btn-success" value="Save">
        <input type="reset" class="btn btn-danger" value="Reset">
    </div>
</form>