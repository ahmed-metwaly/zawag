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
اسم  القسم
                    </th>
                    <th width="15%">
                         وثف القسم
                    </th>
                    <th width="10%">
الذى قام بالاضافة
                    </th>
                    <th width="10%">
التاريخ
                    </th>
                    <th width="10%">
                        تعديل
                    </th>
                    <th width="10%">
                        حذف
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($sectionsData); $i++) {

                    echo "

                            <tr role='row' class='filter'>
                                <td>
                                   {$sectionsData[$i]['se_id']}
                                </td>
                                <td>
                                    {$sectionsData[$i]['se_name']}
                                </td>
                                <td>
                                {$sectionsData[$i]['se_description']}
                                </td>
                                <td>";
                                    echo isset($sectionsData[$i]['ur_name']) ? $sectionsData[$i]['ur_name'] : 'تم حذفة';
                                echo "</td>
                                <td>
                                    {$sectionsData[$i]['se_date']}
                                </td>
                                <td>
                                    <a href='Admin/editSection/{$sectionsData[$i]['se_id']}/?action=edit'><i class='fa fa-edit fa-2x'></i></a>
                                </td>
                                <td>
                                    <a href='Admin/allSections/{$sectionsData[$i]['se_id']}/?action=delete'><i class='fa fa-trash-o fa-2x'></i></a>
                                </td>

                            </tr>
                                            ";
                }

                ?>

                </thead>
            </table>
        </div>
        <div class="pagination"><?php echo $pagination; ?></div>
    </div>

<?php require_once 'template/footer.php'; ?>