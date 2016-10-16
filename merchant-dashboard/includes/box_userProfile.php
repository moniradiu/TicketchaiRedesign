<div class="card">
                                    <div class="header">
                                        <h4 class="title">{{ PersonalDetails }}</h4>
                                        <hr/>
                                        <h2>{{ flyshow }}</h2>
                                    </div>
                                    <div class="content">
                                        <form method="post" ng-submit="userinsert(userprofileData)">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{ Username }}</label>
                                                        <input type="text" class="form-control border-input" placeholder="Username" value="michael23" ng-model="userprofileData.username">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">{{ Emailaddress }}</label>
                                                        <input type="email" class="form-control border-input" placeholder="Email" ng-model="userprofileData.emailaddress">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{ FirstName }}</label>
                                                        <input type="text" class="form-control border-input" placeholder="Company" value="Chet" ng-model="userprofileData.firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{ LastName }}</label>
                                                        <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker" ng-model="userprofileData.lastName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>{{ Address }}</label>
                                                        <textarea rows="3" class="form-control border-input" placeholder="Here can be your Home Address" value="Address" ng-model="userprofileData.address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>{{ City }}</label>
                                                        <input type="text" class="form-control border-input" placeholder="City" value="Melbourne" ng-model="userprofileData.city">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>{{ Country }}</label>
                                                        <input type="text" class="form-control border-input" placeholder="Country" value="country" ng-model="userprofileData.country">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>{{ PostalCode }}</label>
                                                        <input type="number" class="form-control border-input" placeholder="ZIP Code" ng-model="userprofileData.postalCode">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{ Company }}</label>
                                                        <input type="text" class="form-control border-input" placeholder="Company" value="company" ng-model="userprofileData.company">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{ Password }}</label>
                                                        <input type="password" class="form-control border-input" placeholder="Password" value="" ng-model="userprofileData.password">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="text-center">
                                                <button type="submit" ng-click="userinsert(userprofileData)" class="btn btn-info btn-fill btn-wd">{{ UpdateProfile }}</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>