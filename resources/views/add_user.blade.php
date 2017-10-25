@extends("masterLayout")
@section("main-content")
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>

            <strong>Well done!</strong>{{Session::get('message')}}
        </div>
    @endif
<div class="panel-body">
    <form role="form" class="ls_form" action="{{route('add')}}" method="post">
        <div class="form-group">
            <label>Name</label>
            <input placeholder="Enter name" name="name" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" type="text">
            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong id="clr">{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group">
            <label>Password</label>
            <input placeholder="Password" name="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" type="password">
            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong id="clr">{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
        <button class="btn ls-blue-btn" type="submit"> Submit</button>
        {{csrf_field()}}
    </form>
</div>
@endsection