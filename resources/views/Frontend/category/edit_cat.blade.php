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
<h4 class="mb"><i class="fa fa-angle-right"></i>قسم شامل کریں
</h4>
<form action="{{route('update_cat')}}" method="post" role="form" class="form-horizontal style-form">

    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">نام</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('category')?'has-error':''}}"
                   value="{{$cat->category}}" name="category" type="text">
            @if($errors->has('category'))
            <span class="help-block">
                                <strong id="clr">{{$errors->first('category')}}</strong>
                            </span>
            @endif

        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">قطر</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('diameter')?'has-error':''}}"  name="diameter" type="text">
            @if($errors->has('diameter'))
            <span class="help-block">
                                <strong id="clr">{{$errors->first('diameter')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">اونچائی</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('height')?'has-error':''}}"  name="height" type="text">
            @if($errors->has('height'))
            <span class="help-block">
                                <strong id="clr">{{$errors->first('height')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">گھوٹ</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('ghot')?'has-error':''}}"  name="ghot" type="text">
            @if($errors->has('ghot'))
            <span class="help-block">
                                <strong id="clr">{{$errors->first('ghot')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">گیج</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('guage')?'has-error':''}}"  name="guage" type="text">
            @if($errors->has('guage'))
            <span class="help-block">
                                <strong id="clr">{{$errors->first('guage')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">وزن</label>
        <div class="col-sm-10">
            <input class="form-control {{$errors->has('weight')?'has-error':''}}"  name="weight" type="text">
            @if($errors->has('weight'))
            <span class="help-block">
                                <strong id="clr">{{$errors->first('weight')}}</strong>
                            </span>
            @endif
        </div>
    </div>
    {{csrf_field()}}
    <div class="showback" style="margin-left: 18%">
        <input type="submit" class="btn btn-success" value="Save">
        <input type="reset" class="btn btn-danger" value="Reset">
    </div>
</form>
@endsection