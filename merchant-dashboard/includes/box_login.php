<form method="#" action="#" ng-submit="loginInsert(loginData)">

                                    <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                                    <div class="card">
                                        <div class="header text-center bold bg-primary" style="top: -25px;">
                                            <span class="pe-7s-unlock bold"></span>{{ sineUp }} 
                                            
                                            <p>{{ Ifyoualreadyhaveanaccount }}</p>
                                            <div class="social-line text-center">
                                                <a href="#!" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                                <a href="#!" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#!" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="form-group">
                                                <label>{{ Emailaddress }}</label>
                                                <input class="form-control" required aria-required="true"
                                                       type="text" 
                                                       name="email" 
                                                       email="true"
                                                       autocomplete="off"
                                                       placeholder="ex: hello@ticketchai.com" ng-model="loginData.Emailaddress">
                                            </div>
                                            <div class="form-group">
                                                <label>{{ Password }}</label>
                                                <input class="form-control"
                                                       name="password"
                                                       type="password"
                                                       required="true"
                                                       placeholder="Password" ng-model="loginData.Password">
                                            </div>                                    
                                            <div class="form-group">
                                                <label for="checkbox1" class="checkbox">
                                                    <span class="icons"><span class="first-icon fa fa-square"></span><span class="second-icon fa fa-check-square "></span></span><input type="checkbox" data-toggle="checkbox" id="checkbox1" value="" ng-model="loginData.Subscri">
                                                   {{  Subscribetonewsletter }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-fill btn-success btn-wd btn-round" ng-click="loginInsert(loginData)">{{ Login  }}<span class="pe-7s-angle-right-circle bold"></span></button>
                                        </div>
                                    </div>

                                </form>