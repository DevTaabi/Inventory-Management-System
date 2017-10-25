@extends("masterLayout")
@section("main-content")
    <div class="container-fluid">
        <!-- Main Content Element  Start-->
        <div class="row">
            <div class="col-md-9">
                <div class="memberBox">
                    <div class="memberBox-header">
                        <h5>Logged In Member</h5>
                    </div>
                    <div id="realTimeChart" class="flotChartRealTime widgetRealTime">

                    </div>
                    <div class="memberBox-details">
                        <ul>
                            <li>
                                <div class="memberBox-title">
                                    <i class="fa fa-users"></i>
                                    <h4>Member</h4>
                                </div>
                                <div class="memberBox-value up"><i class="fa fa-user"></i> <span>4250</span></div>
                            </li>
                            <li>
                                <div class="memberBox-title">
                                    <i class="fa fa-eye"></i>
                                    <h4>Visitor</h4>
                                </div>
                                <div class="memberBox-value down"><i class="fa fa-flag"></i> <span>9050</span></div>
                            </li>
                            <li>
                                <div class="memberBox-title">
                                    <i class="fa fa-shopping-cart"></i>
                                    <h4>Sales</h4>
                                </div>
                                <div class="memberBox-value up"><i class="fa  fa-money"></i> <span>50250</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="current-status-widget">
                    <ul>
                        <li>
                            <div class="status-box">
                                <div class="status-box-icon label-light-green white">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="status-box-content">
                                <h5 id="sale-view">2,129</h5>
                                <p class="lightGreen"><i class="fa fa-arrow-up lightGreen"></i> Total sold</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="status-box">
                                <div class="status-box-icon label-red white">
                                    <i class="fa fa-download"></i>
                                </div>
                            </div>
                            <div class="status-box-content">
                                <h5 id="download-show">5,340</h5>
                                <p class="light-blue"><i class="fa fa-arrow-down light-blue"></i> Total download</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="status-box">
                                <div class="status-box-icon label-lightBlue white">
                                    <i class="fa fa-truck"></i>
                                </div>
                            </div>
                            <div class="status-box-content">
                                <h5 id="deliver-show">10,490.0</h5>
                                <p class="light-blue"><i class="fa fa-arrow-up light-blue"></i> Product delivered</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="status-box">
                                <div class="status-box-icon label-light-green white">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <div class="status-box-content">
                                <h5 id="user-show">132,129</h5>
                                <p class="lightGreen"><i class="fa fa-arrow-up lightGreen"></i> Total users</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="status-box">
                                <div class="status-box-icon label-success white">
                                    <i class="fa fa-github"></i>
                                </div>
                            </div>
                            <div class="status-box-content">
                                <h5 id="product-up">39</h5>
                                <p class="text-success"><i class="fa fa-arrow-up text-success"></i> Uploaded project</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="status-box">
                                <div class="status-box-icon label-light-green white">
                                    <i class="fa fa-dollar"></i>
                                </div>
                            </div>
                            <div class="status-box-content">
                                <h5 id="income-show">10,299.30</h5>
                                <p class="lightGreen"><i class="fa fa-arrow-up lightGreen"></i> Total income</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- Main Content Element  End-->

    </div>



    <div class="row home-row-top">
        <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
            <div class="pie-widget">
                <div id="pie-widget-1" class="chart-pie-widget" data-percent="73">
                    <span class="pie-widget-count-1 pie-widget-count">33</span>
                    <canvas height="110" width="110"></canvas></div>
                <p>
                    New Projects
                </p>
                <h5><i class="fa fa-bomb"></i> 240 </h5>

            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
            <div class="pie-widget">
                <div id="pie-widget-2" class="chart-pie-widget" data-percent="93">
                    <span class="pie-widget-count-2 pie-widget-count">4</span>
                    <canvas height="110" width="110"></canvas></div>
                <p>
                    New Users
                </p>
                <h5><i class="fa fa-child"></i> 1240 </h5>

            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
            <div class="pie-widget">
                <div id="pie-widget-3" class="chart-pie-widget" data-percent="23">
                    <span class="pie-widget-count-3 pie-widget-count">17</span>
                    <canvas height="110" width="110"></canvas></div>
                <p>
                    Total income
                </p>
                <h5><i class="fa fa-dollar"></i> 120,040.35 </h5>

            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3">
            <div class="pie-widget">
                <div id="pie-widget-4" class="chart-pie-widget" data-percent="33">
                    <span class="pie-widget-count-4 pie-widget-count">84</span>
                    <canvas height="110" width="110"></canvas></div>
                <p>
                    Sale reports
                </p>
                <h5><i class="fa fa-file-excel-o"></i> 40</h5>

            </div>
        </div>
    </div>



@endsection