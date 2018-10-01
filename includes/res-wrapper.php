<div class="panel panel-default margin">
    <div class="panel-heading" >
        <h4><i class="glyphicon glyphicon-globe"></i> Results</h4>
    </div> <!-- end of .panel-heading-->
    <div class="panel-body" id="ajax-list-container">
        <?php require dirname(__FILE__).'/list.php';?>
    </div> <!-- end of .panel-body -->
</div> <!-- end of .panel -->

<!-- START MODAL-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="width:90%; margin:50px 5% 0; left:0;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 id="myModalLabel"></h3>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL-->
