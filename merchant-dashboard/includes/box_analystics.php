 <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-warning text-center">
                                                    <i class="ti-server"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>{{ boxTitle }}</p>
                                                    105GB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> {{ Updatednow }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-success text-center">
                                                    <i class="ti-wallet"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>{{ revenue }}</p>
                                                    $1,345
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-calendar"></i>{{ Lastday }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-danger text-center">
                                                    <i class="ti-pulse"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>{{ errors }}</p>
                                                    23
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-timer"></i>{{ Inthelasthour }} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-info text-center">
                                                    <i class="ti-twitter-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>{{ followers }}</p>
                                                    +45
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="ti-reload"></i> {{ Updatednow }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="numbers pull-left">
                                                    $34,657
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="pull-right">
                                                    <span class="label label-success">
                                                        +18%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="big-title">total earnings <span class="text-muted">in last</span> ten <span class="text-muted">quarters</span></h6>
                                        <div id="chartTotalEarnings"></div>
                                    </div>
                                    <div class="card-footer">
                                        <hr>
                                        <div class="footer-title">{{ FinancialStatistics }}</div>
                                        <div class="pull-right">
                                            <button class="btn btn-info btn-fill btn-icon btn-sm">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="numbers pull-left">
                                                    169
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="pull-right">
                                                    <span class="label label-danger">
                                                        -14%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="big-title">total subscriptions <span class="text-muted">in last</span> 7 days</h6>
                                        <div id="chartTotalSubscriptions"></div>
                                    </div>
                                    <div class="card-footer">
                                        <hr>
                                        <div class="footer-title">{{ Viewallmembers }}</div>
                                        <div class="pull-right">
                                            <button class="btn btn-default btn-fill btn-icon btn-sm">
                                                <i class="ti-angle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="numbers pull-left">
                                                    8,960
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="pull-right">
                                                    <span class="label label-warning">
                                                        ~51%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="big-title">total downloads <span class="text-muted">in last</span> 6 years</h6>
                                        <div id="chartTotalDownloads" ></div>
                                    </div>
                                    <div class="card-footer">
                                        <hr>
                                        <div class="footer-title">{{ Viewmoredetails }}</div>
                                        <div class="pull-right">
                                            <button class="btn btn-success btn-fill btn-icon btn-sm">
                                                <i class="ti-info"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-circle-chart" data-background="color" data-color="blue">
                                    <div class="header text-center">
                                        <h5 class="title">{{ dashboard }}</h5>
                                        <p class="description">{{ Monthlysalestarget }}</p>
                                    </div>
                                    <div class="content">
                                        <div id="chartDashboard" class="chart-circle" data-percent="70">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-circle-chart" data-background="color" data-color="green">
                                    <div class="header text-center">
                                        <h5 class="title">{{ orders }}</h5>
                                        <p class="description">{{ completed }}</p>
                                    </div>
                                    <div class="content">
                                        <div id="chartOrders" class="chart-circle" data-percent="34">34%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-circle-chart" data-background="color" data-color="orange">
                                    <div class="header text-center">
                                        <h5 class="title">{{ NewVisitors }}</h5>
                                        <p class="description">{{ Outoftotalnumber }}</p>
                                    </div>
                                    <div class="content">
                                        <div id="chartNewVisitors" class="chart-circle" data-percent="62">62%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-circle-chart" data-background="color" data-color="brown">
                                    <div class="header text-center">
                                        <h5 class="title">{{ subscriptions }}</h5>
                                        <p class="description">{{ Monthlynewsletter }}</p>
                                    </div>
                                    <div class="content">
                                        <div id="chartSubscriptions" class="chart-circle" data-percent="10">10%</div>
                                    </div>
                                </div>
                            </div>