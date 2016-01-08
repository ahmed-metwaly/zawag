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
                        النوع
                    </th>
                    <th width="10%">
البريد الالكترونى
                    </th>
                    <th width="10%">
                        العمر
                    </th>
                    <th width="10%">
                        الهدف من التسجيل
                    </th>
                    <th width="10%">
الدولة
                    </th>
                    <th width="10%">
                        تعديل
                    </th>
                    <th width="10%">
                        حذف
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($usersData); $i++) {

                    echo "

                            <tr role='row' class='filter'>
                                <td>
                                   {$usersData[$i]['ur_id']}
                                </td>
                                <td>
                                    {$usersData[$i]['ur_name']}
                                </td>
                                <td>";

                                    if($usersData[$i]['ur_gender'] == 0) {
                                        echo 'ذكر';
                                    } else {
                                        echo 'انثى';
                                    }

                                echo "</td>
                                <td>
                                    {$usersData[$i]['ur_email']}
                                </td>
                                <td>
                                    {$usersData[$i]['ur_age']}
                                </td>
                                <td>
                                    {$usersData[$i]['ur_target']}
                                </td>
                                <td>
                                    {$usersData[$i]['ur_country']}
                                </td>
                                <td>
                                    <a href='Admin/usersUpdate/{$usersData[$i]['ur_id']}/?action=edit'><i class='fa fa-edit fa-2x'></i></a>
                                </td>
                                <td>
                                    <a href='Admin/allUsers/{$usersData[$i]['ur_id']}/?action=delete'><i class='fa fa-trash-o fa-2x'></i></a>
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