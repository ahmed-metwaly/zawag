<?php require_once 'template/header.php'; ?>
<?php //print_r($receiveUser); ?>
<?php if(isset($success)) { ?>
    <div class="alert alert-success alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
        echo $success;
        echo '<script>history.back();</script>';
        ?>
        <a href="" class="alert-link"></a>

    </div>

<?php } elseif(isset($error)) {  ?>
    <div class="alert alert-warning alert-dismissable" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <?php
        echo $error;
        echo '<script>history.back();</script>';
        ?>
        <a href="" class="alert-link"></a>
    </div>
<?php } ?>

    <div class="row">
        <div id="multiActions" class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="datatable_products">
                <thead>
                <tr role="row" class="heading">

                    <th width="10%">
                        #
                    </th>
                    <th width="15%">
عنوان القصة
                    </th>
                    <th width="15%">
                         المرسل
                    </th>
                    <th width="10%">
التاريخ
                    </th>
                    <th width="10%">
                        عرض
                    </th>
                    <th width="10%">
                        حذف
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($storiesData); $i++) {

                    echo "

                            <tr role='row' class='filter'>
                                <td>
                                   {$storiesData[$i]['ss_id']}
                                </td>
                                <td>
                                    {$storiesData[$i]['ss_title']}
                                </td>
                                <td>";
                                    echo isset($storiesData[$i]['ur_name']) ? $storiesData[$i]['ur_name'] : 'تم حذفة';
                                    echo "</td>
                                <td>
                                    {$storiesData[$i]['ss_date']}
                                </td>
                                <td class='text-center'>
                                    <a href='Admin/viewStories/{$storiesData[$i]['ss_id']}' ><i class='fa fa-desktop fa-2x'></i></a>
                                </td>
                                <td class='text-center'>
                                    <a href='Admin/allStories/{$storiesData[$i]['ss_id']}/?action=delete'><i class='fa fa-trash-o fa-2x'></i></a>
                                </td>

                            </tr>";
                }

                ?>

                </thead>
            </table>
        </div>
        <div class="pagination"><?php echo $pagination; ?></div>
    </div>

<?php require_once 'template/footer.php'; ?>