<?php
define('DOC_ROOT', dirname(__FILE__).'/');
require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/includes/functions.php';
require dirname(__FILE__).'/includes/data_validation.php';
include dirname(__FILE__).'/includes/header.php';
?>    <!-- 模态框（Modal） -->
<!--<script src="http://www.w3school.com.cn/jquery/jquery-1.11.1.min.js"></script>-->
    <script>
        // function delip(the,ipip) {
        //     if(confirm("确定删除该IP地址，请确认！?")){
        //         alert(1111);
        //         //点击确定后操作
        //         $.ajax({
        //             type: "POST",
        //             url: "./ajax.php",
        //             data: "ipip=" + ipip,
        //             success: function (data) {
        //                 if (data == "1") {
        //                     location.href = "index.php";
        //                     return true;
        //                 }
        //                 else {
        //                     alert("处理成功！");
        //                     location.href = "index.php";
        //                     return false;
        //                 }
        //             }
        //         })
		//
        //     }
		//
        // }
    </script>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        添加规则
                    </h4>
                </div>
                <div class="modal-body">
                    <!-- 添加规则，测试版本 -->
                    <form class="form-horizontal" role="form" action="vv.php" METHOD="POST">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-2 control-label">有效规则</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="firstname"
                                       placeholder="|nessus|w3af|t00ls" name="addrule" value="<?php echo htmlentities($filter['banner']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">提交</button>
                            </div>
                        </div>
                        <div class="alert alert-danger">
                            <strong>警告！</strong>请填写有效的规则，并且精准度要高，否则请慎重填写（以| 开始，中间以|分隔）
                        </div>
                    </form>

                    <!--上面是测试版本 -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>






<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <!-- BEGIN FORM CONTENT-->
        <div class="panel panel-default margin">
            <div style="display:block;" class="panel-heading clearfix" data-toggle="collapse" href="#collapsetop10">
                <h4 class="pull-left"><i class="glyphicon  glyphicon-th-large"></i> TOP 10 Date Week ,Month</h4>
                <div id="search-params" class="pull-left"></div>
                <a data-toggle="collapse" href="#collapse" style="display:block;" class="pull-right glyphicon glyphicon-minus"></a>
            </div>
            <div id="collapsetop10" class="panel-collapse collapse in">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active">
                        <a href="#home" data-toggle="tab">
                            TOP 10
                        </a>
                    </li>
                    <li><a href="#cdate" data-toggle="tab">当天</a></li>
                    <li class="dropdown">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle"
                           data-toggle="dropdown">月/周
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                            <li><a href="#month" tabindex="-1" data-toggle="tab">当月</a></li>
                            <li><a href="#week" tabindex="-1" data-toggle="tab">当周</a></li>
                        </ul>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <div class="list-group">
                        	<ul class="list-group">
							<?php if (!empty($getip['data'])): ?>
								<?php foreach ($getip['data'] as $k => $r):?>
                                    <li class="list-group-item"><span class="label label-danger"><?php echo $r['cc']; ?></span><code><?php echo htmlentities($r['ips']); ?></code><code>ddddddd</code><span class="glyphicon glyphicon-remove"></span> <a href="javascript:delip(this,'<?php echo htmlentities($r['ips']); ?>')" class="label label-default">点我处理</a> </li>
								<?php endforeach; ?>
							<?php endif; ?>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="cdate">


                        <div class="list-group">
                        	<ul class="list-group">
							<?php if (!empty($getipdate['data'])): ?>
								<?php foreach ($getipdate['data'] as $k => $r):?>
                                    <li class="list-group-item"><span class="label label-danger"><?php echo $r['cc']; ?></span><code><?php echo htmlentities($r['ips']); ?></code><span class="glyphicon glyphicon-remove"></span> <a href="javascript:" onclick="delip(this,'<?php echo htmlentities($r['ips']); ?>')" class="label label-default">点我处理</a> </li>
								<?php endforeach; ?>
							<?php endif; ?>
                        </div>



                    </div>
                    <div class="tab-pane fade" id="month">

                        <div class="list-group">
                        	<ul class="list-group">
							<?php if (!empty($getipmonth['data'])): ?>
								<?php foreach ($getipmonth['data'] as $k => $r):?>
                                    <li class="list-group-item"><span class="label label-danger"><?php echo $r['cc']; ?></span><code><?php echo htmlentities($r['ips']); ?></code><span class="glyphicon glyphicon-remove"></span> <a href="javascript:" onclick="delip(this,'<?php echo htmlentities($r['ips']); ?>')" class="label label-default">点我处理</a> </li>
								<?php endforeach; ?>
							<?php endif; ?>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="week">
                        <div class="list-group">
							<?php if (!empty($getipweek['data'])): ?>
								<?php foreach ($getipweek['data'] as $k => $r):?>
                                    <li class="list-group-item"><span class="label label-danger"><?php echo $r['cc']; ?></span><code><?php echo htmlentities($r['ips']); ?></code><span class="glyphicon glyphicon-remove"></span> <a href="javascript:" onclick="delip(this,'<?php echo htmlentities($r['ips']); ?>')" class="label label-default">点我处理</a> </li>
								<?php endforeach; ?>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- add payload-->
        <div class="panel panel-default margin">
            <div style="display:block;" class="panel-heading clearfix" data-toggle="collapse" href="#collapsetop101">
                <h4 class="pull-left"><i class="glyphicon  glyphicon-duplicate "></i> RULE LIST </h4>
                <div id="search-params" class="pull-left"></div>
                <a data-toggle="collapse" href="#collapse" style="display:block;" class="pull-right glyphicon glyphicon-minus"></a>
            </div>
            <div id="collapsetop101" class="panel-collapse collapse">
                <div class="alert alert-danger">
                <code>
                    <?php if (!empty($getrule['data'])): ?>
                        <?php foreach ($getrule['data'] as $k => $r):?>
                    <?php echo htmlentities($r['rule']); ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </code>
                </div>
                </div>
            </div>


        <!-- search -->
        <div class="panel panel-default margin">
             <div style="display:block;" class="panel-heading clearfix" data-toggle="collapse" href="#collapse">
                 <h4 class="pull-left"><i class="glyphicon glyphicon-search"></i> Search</h4>
                 <div id="search-params" class="pull-left"></div>
                 <a data-toggle="collapse" href="#collapse" style="display:block;" class="pull-right glyphicon glyphicon-minus"></a>
             </div>
             <div id="collapse" class="panel-collapse collapse">
                 <div class="panel-body">
                     <form action="./index.php" class="horizontal-form" onsubmit="return submitSearchForm();" id="form">
                         <input type="hidden" name="action" value="search"/>
                         <div class="row">
                             <div class="col-md-7">
                                 <div class="form-group">
                                     <label for="pBanner">key word</label>
                                     <input type="text" class="form-control input-sm" id="pBanner" name="banner" value="<?php echo htmlentities($filter['banner']); ?>" placeholder="www.rar">
                                 </div>
                                 <div class="checkbox">
                                     <label><input type="checkbox" name="exact-match" value="1"<?php if ($filter['exact-match'] === 1): echo ' checked'; endif; ?>>Exact match</label>
                                 </div>
                                 <div>
                                     <button type="submit" class="btn btn-primary btn-sm" style="width:100px;"><i class="glyphicon glyphicon-ok"></i> Search</button>
                                     <span class="ajax-throbber-wrapper-form"><img src="./assets/img/ajax-loader.gif" alt="Loading..."    title="Loading..." id="ajax-loader-form"/></span></div>
                             </div>
                         </div> <!-- end of .row-->
                     </form>
                 </div>
             </div>
         </div>










         <!-- END FORM CONTENT-->
     </div> <!--end of .row -->

    <div class="row" id="ajax-search-container">
        <?php require dirname(__FILE__).'/includes/res-wrapper.php'; ?>
    </div>
</div> <!-- end of .container-fluid -->
<!-- END PAGE CONTENT -->
<?php
include dirname(__FILE__).'/includes/footer.php';
