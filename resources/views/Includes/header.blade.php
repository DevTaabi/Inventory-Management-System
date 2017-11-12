
<nav class="navigation">
    <div class="container-fluid">
        <!--Logo text start-->
        <div class="header-logo">
            <a href="{{route('show')}}" title="">
               <h5 style="color: white">
                   Alfajar Steel Works
               </h5>
        
            </a>
            <p style="background-color: #0d88c1"> {{date('D') }}, {{date('d-M-Y')}}</p>
        </div>
        <!--Logo text End-->












        <div class="top-navigation">
            <!--Collapse navigation menu icon start -->
        {{--<div class="menu-control hidden-xs">--}}
        {{--<a href="javascript:void(0)">--}}
        {{--<i class="fa fa-bars"></i>--}}
        {{--</a>--}}
        {{--</div>--}}

        <!--Collapse navigation menu icon end -->
            <!--Top Navigation Start-->

            <ul style="font-size: 36px">
        

        <li>
            <a href="{{url('/show')}}"><i class="fa fa-bank"> Home</i></a>
        </li>
        <li class="active">
            <a href="{{url('/stock')}}">
                <i class="glyphicon glyphicon-stats"> Stock</i></a>
        </li>
                <li><a href="{{url('/sale')}}">
                        <i class="glyphicon glyphicon-cloud-upload"> Sale</i>
                    </a></li>

                <li><a href="{{url('/show_purchase')}}">
                        <i class="glyphicon glyphicon-cloud-download"> Purchase</i>
                    </a></li>

                <li><a href="{{url('/suppliers')}}">
                        <i class="fa fa-truck"> Suppliers</i>
                    </a></li>

            <li>
            <a href="{{url('/customers')}}">
                <i class="fa fa-users"> Customers</i>
            </a>
                </li>
                {{--<li>--}}
                    {{--<a href="{{url('/importExport')}}">--}}
                        {{--<i class="glyphicon glyphicon-calendar"> Reports</i>--}}
                    {{--</a>--}}

                {{--</li>--}}

                
                <li>
                    <a href="{{route('logout')}}">
                        <i class="fa fa-power-off"> Logout</i>
                    </a>
                </li>

            </ul>
            <!--Top Navigation End-->
        </div>
    </div>
</nav>
