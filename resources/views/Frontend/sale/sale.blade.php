@extends("masterLayout")
@section("main-content")
    <div class="row">
        <div class="col-md-12">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                    @include('Frontend.livesearch')
                    <form action="{{route('add_sale')}}" method="post" class="form-inline ls_form" role="form">
                        <div class="form-group">
                            <input type="text" name="product_name" class="form-control  {{ $errors->has('product_name') ? ' has-error' : '' }}"
                                   placeholder="Product Name">
                            @if ($errors->has('product_name'))
                                <span class="help-block">
                    <strong id="clr">{{ $errors->first('product_name') }}</strong>
                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control  {{ $errors->has('price') ? ' has-error' : '' }}"
                                name="price"   placeholder="Price">
                            @if ($errors->has('price'))
                                <span class="help-block">
                                <strong id="clr">{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control  {{ $errors->has('quantity') ? ' has-error' : '' }}"
                                  name="quantity" placeholder="Quantity">
                            @if ($errors->has('quantity'))
                                <span class="help-block">
                                    <strong id="clr">{{ $errors->first('quantity') }}</strong>
                                      </span>
                            @endif

                        </div>
                        </br>
                        </br>
                        <div class="form-group">
                            <label>Grand Total </label>
                            <input type="text" style="font-size: 25px;font-family:SansSerif;
                            font-weight:bold;color:white;background-color:#1f1f14"
                                   class="form-control  {{ $errors->has('name') ? ' has-error' : '' }}"
                                   placeholder="Grand Total">
                            @if ($errors->has('name'))
                                <span class="help-block">
                    <strong id="clr">{{ $errors->first('name') }}</strong>
                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Current Pay </label>
                            <input type="text" style="font-size:25px;font-family:SansSerif;
                            font-weight:bold;color:white;background-color: #1f1f14"
                                   class="form-control  {{ $errors->has('name') ? ' has-error' : '' }}"  placeholder="Current Pay">
                            @if ($errors->has('name'))
                                <span class="help-block">
                    <strong id="clr">{{ $errors->first('name') }}</strong>
                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Previous Balance </label>
                            <input type="text" style="font-size: 25px;font-family:SansSerif;
                            font-weight:bold;color:white;background-color:#1f1f14"
                                   class="form-control  {{ $errors->has('name') ? ' has-error' : '' }}"  placeholder="Previous Balance">
                            @if ($errors->has('name'))
                                <span class="help-block">
                    <strong id="clr">{{ $errors->first('name') }}</strong>
                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Remaing Balance </label>
                            <input type="text" style="font-size: 25px;font-family:SansSerif;
                            font-weight:bold;color:white;background-color:#1f1f14"
                                   class="form-control  {{ $errors->has('name') ? ' has-error' : '' }}"  placeholder="Remaining Balance">
                            @if ($errors->has('name'))
                                <span class="help-block">
                    <strong id="clr">{{ $errors->first('name') }}</strong>
                </span>
                            @endif
                        </div>
                        {{csrf_field()}}
                        <br><br>
                        <div class="showback" style="margin-left: 18%">
                            <input type="submit" class="btn btn-success" value="Save">
                            <input type="reset"  class="btn btn-danger" value="Reset">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


   

@endsection