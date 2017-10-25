<section id="left-navigation">

    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="index-2.html" title="">
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>
        <div class="clearfix"></div>
    </div>

    <!--Left navigation start-->
    <ul class="mainNav" style="text-align: center">
        <li>
            <a  class="active" >
                <h2> {{date('D')}}</h2>
                <h2> {{date('d-M-Y')}}</h2>
            </a>
        </li>

        <li>
            <a href="{{url('/show')}}"><i class="fa fa-bank"></i><h4>Home</h4></a>
        </li>
        <li class="active">
            <a href="{{url('/stock')}}">
                <i class="glyphicon glyphicon-stats"></i><h4 > Stock</h4></a>
        </li>
        <li>

            <a href="{{url('/sale')}}">
                <i class="glyphicon glyphicon-cloud-upload"></i><h4> Sale</h4>
            </a>
            <a href="{{url('/show_purchase')}}">
                <i class="glyphicon glyphicon-cloud-download"></i><h4 > Purchase</h4>
            </a>
            <a href="{{url('/suppliers')}}">
                <i class="fa fa-truck"></i><h4 > Suppliers</h4>
            </a>
            <a href="{{url('/customers')}}">
                <i class="fa fa-users"></i><h4 > Customers</h4>
            </a>



            <a href="#" style="background-color: #262626">
               Developed by:<h4>Tayyaba Rani</h4>
            </a>


            {{--<a href="{{url('/importExport')}}">--}}
                {{--<i class="glyphicon glyphicon-calendar"></i><h4> Reports</h4>--}}
            {{--</a>--}}


        </li>

    </ul>
    <!--Left navigation end-->
</section>