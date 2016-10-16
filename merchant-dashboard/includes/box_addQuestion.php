 <div class="card padding_top15">
                                    <form method="#" action="#">
                                        <div class="header">
                                            <h4 class="title">
                                               {{ TicketsDetails }}
                                                <hr/>
                                            </h4>
                                        </div>
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label>{{ NameMandatory }}</label>
                                                        <input type="text" placeholder="Attendee's Answer" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label>{{ EmailMandatory }}</label>
                                                        <input type="text" placeholder="Attendee's Answer" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4">
                                                    <a type="submit" class="btn btn-fill btn-info btn-block" href="<?php echo $cms->baseUrl(); ?>/add_more_questions.php">{{ AddMoreQuestions }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix" style="padding: 30px;"></div>
                                </div>