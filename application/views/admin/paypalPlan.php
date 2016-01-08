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
الاسم
                    </th>
                    <th width="15%">
     الزمن
                    </th>
                    <th width="10%">
السعر
                    </th>
                    <th width="10%">
     التاريخ
                    </th>
                    <th>
                        اسم المضيف
                    </th>
                    <th>
                        صورة الخطة
                    </th>
                    <th width="10%">
                        تعديل
                    </th>
                    <th width="10%">
                        حذف
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($planData); $i++) {

                    echo "

                            <tr role='row' class='filter'>
                                <td>
                                   {$planData[$i]['pp_id']}
                                </td>
                                <td>
                                    {$planData[$i]['pp_name']}
                                </td>
                                <td>
                                {$planData[$i]['pp_duration']}
                                </td>
                                <td>
                                    {$planData[$i]['pp_price']}
                                </td>
                                <td>";
                                    echo isset($planData[$i]['ur_name']) ? $planData[$i]['ur_name'] : 'تم حذفة';
                                echo "</td>
                                <td>
                                    {$planData[$i]['pp_date']}
                                </td>
                                <td><img src='" . HOST_NAME . 'upload/' ."{$planData[$i]['pp_photo']}' alt='no image' width='100' height='100' ></td>
                                <td>
                                    <a href='Admin/editPaypalPlan/{$planData[$i]['pp_id']}/?action=edit'><i class='fa fa-edit fa-2x'></i></a>
                                </td>
                                <td>
                                    <a href='Admin/paypalPlan/{$planData[$i]['pp_id']}/?action=delete'><i class='fa fa-trash-o fa-2x'></i></a>
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