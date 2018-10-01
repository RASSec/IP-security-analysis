<?php
    $pager_data = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=";
    $rpp_data = "action=search&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=1&rec_per_page=";
    $data_prev = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=" . ($results['pagination']['page'] - 1);
    $data_next = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=" . ($results['pagination']['page'] + 1);
    $data_search = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&page=1&banner=" . htmlentities($filter['banner']) . "&exact-match=" . $filter['exact-match'] . "&text=";
?>
<div class="row">
    <div class="col-md-6">
        <form class="form-inline">
            <label>
                <select class="form-control" size="1" name="rec_per_page" onchange="searchData('<?php echo $rpp_data; ?>' + this.value)">
                    <option value="10"<?php if ($filter['rec_per_page'] == 10): echo ' selected="selected"'; endif; ?>>10</option>
                    <option value="20"<?php if ($filter['rec_per_page'] == 20): echo ' selected="selected"'; endif; ?>>20</option>
                    <option value="30"<?php if ($filter['rec_per_page'] == 30): echo ' selected="selected"'; endif; ?>>30</option>
                    <option value="50"<?php if ($filter['rec_per_page'] == 50): echo ' selected="selected"'; endif; ?>>50</option>
                    <option value="100"<?php if ($filter['rec_per_page'] == 100): echo ' selected="selected"'; endif; ?>>100</option>
                </select>
                records per page
            </label>
        </form>
    </div> 

<!-- end of col-md-6 -->

    <div class="col-md-6 text-right">

        <form class="form-inline">
            <div class="form-group">
                <span class="ajax-throbber-wrapper"><img src="./assets/img/ajax-loader.gif" alt="Loading..." title="Loading..." id="ajax-loader" /></span>
            </div>
        </form>
    </div> <!-- end of col-md-6 -->
</div> 
<!-- end of .row -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th class="ip">IP ADDRESS</th>
            <th class="banner">DATA LOG</th>
        </tr>
    </thead>
    <tbody>
    <?php if (!empty($results['data'])): ?>
        <?php foreach ($results['data'] as $k => $r):?>
            <tr>
                <td class="ip"><?php echo $r['ipaddress']; ?></td>
                <td class="banner">
                    <?php if (!empty($r['banner'])): ?>
 <?php echo htmlentities($r['banner']); ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">
                <p class="alert alert-danger">No results</p>
            </td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
<?php if ($results['pagination']['records'] > 0):?>
    <div class="row pagination-container">
        <div class="col-md-6">
            <p>Showing <?php echo $results['pagination']['from']; ?> to <?php echo $results['pagination']['to']; ?> of <?php echo $results['pagination']['records']; ?> entries</p>
        </div> <!-- end of col-md-6 -->
        <div class="col-md-6 text-right">

            <nav class="pull-right">
                <ul class="pagination pagination-sm">
                    <li class="prev<?php if ($results['pagination']['page'] == 1): echo " disabled"; endif; ?>">
                        <a href="javascript:void(0);" onclick="searchData('<?php echo $data_prev; ?>', 'ajax-loader-pagination');">&laquo; Prev</a>
                    </li>
                    <?php for ($i = 1; $i <= $results['pagination']['pages']; $i++): ?>
                        <?php if ((($results['pagination']['page'] - 3) < $i) && (($results['pagination']['page'] + 3) > $i)): ?>
                            <li class="<?php if ($results['pagination']['page'] == $i): echo "active"; endif; ?>">
                                <a href="javascript:void(0);" onclick="searchData('<?php echo $pager_data . $i; ?>', 'ajax-loader-pagination');"><?php echo (int)$i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <li class="next<?php if ($results['pagination']['page'] == $results['pagination']['pages']): echo " disabled"; endif; ?>">
                        <a href="javascript:void(0);" onclick="searchData('<?php echo $data_next; ?>');">Next  &raquo;</a>
                    </li>
                </ul>
            </nav>
            <img src="./assets/img/ajax-loader.gif" alt="Loading..." title="Loading..." id="ajax-loader-pagination" class="pull-right">
        </div> <!-- end of col-md-6 -->
    </div> <!-- end of .row -->
<?php endif;?>
