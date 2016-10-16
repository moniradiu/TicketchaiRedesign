<div class="card padding_top15">
    
    <form method="post"  ng-submit="insert(mrchntNew)">
                                        <div class="header">
                                            <h4 class="title">
                                               {{ newEventtickets }}
                                               <h1>{{msg}}</h1>
                                                <hr/>
                                            </h4>
                                        </div>
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label>{{ TicketName }}</label>
                                                        <input type="text" placeholder="ex:Entry Pass" class="form-control" ng-model="mrchntNew.TicketName">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label>{{ Qty }}</label>
                                                        <input type="text" placeholder="Qty." class="form-control" ng-model="mrchntNew.Qty">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>{{ MinQty }}</label>
                                                        <input type="text" placeholder="Min Qty." class="form-control" ng-model="mrchntNew.MinQty">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>{{ MaxQty }}</label>
                                                        <input type="text" placeholder="Max Qty." class="form-control" ng-model="mrchntNew.MaxQty">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label>{{ TicketType }}</label>
                                                        <select class="form-control selectpicker" data-title="Single Select" data-style="btn-success btn-block" ng-model="mrchntNew.TicketType">
                                                            <option class="bs-title-option" value="">Select Type</option>
                                                            <option label="NORMAL" value="1">NORMAL</option>
                                                            <option label="DONATION" value="2">DONATION</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group col-sm-6">
                                                        <label for="ticketPrice" class="control-label">{{ Currency }}</label>
                                                        <select class="form-control selectpicker" data-title="Single Select" data-style="btn-success btn-block" ng-model="mrchntNew.Currency">
                                                            <option label="EUR" value="1" selected="selected">BDT</option>
                                                            <option label="INR" value="2">INR</option>
                                                            <option label="USD" value="3">USD</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="ticketPrice" class="control-label">{{ Price }}</label>
                                                        <input type="text"  placeholder="Ex: 1000" class="form-control" name="ticketPrice" id="ticketPrice" required="required" ng-model="mrchntNew.Price">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label>{{ Availability }}</label><br/>
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button"  ng-click='mrchntNew.aid = "1"' class="btn btn-success">Available</button>
                                                            <button type="button"  ng-click='mrchntNew.aid = "2"'  class="btn btn-success">Halt</button>
                                                            <button type="button" ng-click='mrchntNew.aid = "3"' class="btn btn-success">Hidden</button>
                                                        </div>
                                                        
                                                       
                                                        
<!--                                                        <select class="form-control selectpicker" data-title="Single Select" data-style="btn-success btn-block" ng-model="mrchntNew.Availability">
                                                            <option value="1">Available</option>
                                                            <option value="2">Halt</option>
                                                            <option value="3">Hidden</option>
                                                        </select>-->
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>{{ WhowillpayTicketchaifee }}</label><br/>
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" ng-click='mrchntNew.WhowillpayTicketchaifee="1"' class="btn btn-success" value="1">Me</button>
                                                            <button type="button"  ng-click='mrchntNew.WhowillpayTicketchaifee="2"' class="btn btn-success" value="2">Customer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">{{ StartDate }}</label>
                                                        <input id="start-date" type="text" date-type='string' date-format='yyyy/MM/yyyy'  class="form-control datepicker" placeholder="Date Picker Here" />
                                                        
                                                        
                                                        
                                                        <a href="javascript:void(0);" id="start-date-box" class="preview preview-date start" style="margin-top: 30px;">
                                                            <!--                                                                                    <input type="text" class='form-control input-group date' id='datetimepicker1' required>-->
                                                            <div id="date-start">
                                                                <p class="text-info">
                                                                    <span>08</span>
                                                                    <br>
                                                                    <span>Aug, 2016</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">{{ StartTime }}</label>
                                                        <input  id="start-time" type="text" class="form-control timepicker"  placeholder="Time Picker Here" />
                                                        <a href="javascript:void(0);" id="start-time-box" class="preview preview-time start" style="margin-top: 30px;">
                                                            <!--                                                                                    <input type="text"class="form-control date-time-sr-only" id="startTime">-->
                                                            <div>
                                                                <p class="text-info">
                                                                    <span>06:00</span>
                                                                    <span>PM</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">{{ EndDate }}</label>
                                                        <input id="end-date" type="text" class="form-control datepicker" placeholder="Date Picker Here" />
                                                        <a href="javascript:void(0);" id="end-date-box" class="preview preview-date start" style="margin-top: 30px;">
                                                            <!--                                                                                    <input type="text" class="form-control date-time-sr-only" required>-->
                                                            <div>
                                                                <p class="text-info">
                                                                    <span>08</span>
                                                                    <br>
                                                                    <span>Aug, 2016</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">{{ EndTime }}</label>
                                                        <input id="end-time" type="text" class="form-control timepicker" placeholder="Time Picker Here" ng-model="mrchntNew.EndTime"/>
                                                        <a href="javascript:void(0);" id="end-time-box" class="preview preview-time start" style="margin-top: 30px;">
                                                            <!--                                                                                    <input type="text" class="form-control date-time-sr-only" id="startTime">-->
                                                            <div>
                                                                <p class="text-info">
                                                                    <span>06:00</span>
                                                                    <span>PM</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label for="1">{{ TicketDescription }}</label>
                                                        <textarea rows="3" placeholder="ex:This Ticket Includes Lunnch" class="form-control" ng-model="mrchntNew.TicketDescription"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label for="1">{{ MessageToAttendee }}</label>
                                                        <textarea rows="3" placeholder="ex:Please Reach The Venue 15 Minutes Before The Show Start Time" class="form-control" ng-model="mrchntNew.MessageToAttendee"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4">
                                                    <button type="submit" class="btn btn-fill btn-info btn-block">{{ Save }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix" style="padding: 30px;"></div>
                                </div>