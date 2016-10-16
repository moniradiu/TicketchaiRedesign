<div class="card padding_top15">
    <form method="post" id="morequestion" action="#" ng-submit="morequstion(questions)" >
        <div class="header">
            <h4 class="title">
                <h2>{{ flyshow}}</h2>
                {{ headeTitle}}
                <hr/>
            </h4>
        </div>
        <div class="content">

            <table id="productmore" style="width: 100%;">
                <tbody>
                    <tr id="cl">
                        <td>
                            <div class="row well" style="margin-bottom: 5px;">
                                <a style="display: none;" href="javascript:closeclone(0);"><i class="fa fa-times-circle"></i></a>
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>{{ QuestionTitle}}</label>
                                        <input type="text" placeholder="eg:Contact Number" data-ng-model="questions.name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ QuestionType}}</label>
                                        <select class="form-control selectpicker" data-title="Single Select" data-style="btn-success btn-block">
                                            <option class="" disabled="" value="" selected="selected">Please select type</option>
                                            <option label="textbox" value="textbox">Text Box</option>
                                            <option label="selectbox" value="selectbox">Select Box Option</option>
                                            <option label="radio" value="radio">Radio</option>
                                            <option label="checkbox" value="checkbox">Check Box</option>
                                            <option label="File" value="File">File</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>{{ Showfollowingtickets}}</label>
                                        <label class="checkbox" for="checkbox1">
                                            <input  type="checkbox" value="pass" id="checkbox1" data-toggle="checkbox">
                                            {{  EntryPass}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ QuestionStatus}}</label>
                                        <label class="radio">
                                            <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span><input type="radio" value="yes" name="required" id="required_0"  data-toggle="radio">
                                            {{ required}}
                                        </label>
                                        <label class="radio">
                                            <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span><input type="radio" value="no" name="required" id="required_1" data-toggle="radio">
                                            {{  optional}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>                    

            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <button type="button" onclick="return addTableRow('#productmore');
                        return false;" class="btn btn-fill btn-info btn-block"><i class="fa fa-plus"></i> {{ AddMoreQuestions}}</button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-fill btn-info btn-block" ng-click="morequstion(questions)" >{{ Submit}}</button>
                </div>
            </div>
        </div>
    </form>
    <div class="clearfix" style="padding: 30px;"></div>
</div>


<script type="text/javascript">
    function addTableRow(table)
    {
       
        
        var $tr = $(table + ' tbody:first').children("tr:last").clone();
        
        $tr.find("input[type!='hidden'][name*=first_name],select,button").clone();
        $tr.find("button[name*='ViewButton']").remove();
        var lastincre=$tr.attr("id");
        console.log(lastincre);
        if(lastincre=="cl")
        {
            var i=1;
        }
        else
        {
            //var i;
            var i=(lastincre-0)+(1-0);
        }
        $tr.attr("id",i);
        $tr.find("a").css("display","inline");
        $tr.find("a").attr("href","javascript:closeclone("+i+");");
        $(table + ' tbody:first').children("tr:last").after($tr);
        
        
        
    }
    
    function closeclone(par)
    {
        if(par!="0")
        {
            $("#"+par).remove();
        }
    }

</script>