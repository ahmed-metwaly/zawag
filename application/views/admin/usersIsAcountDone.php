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
                        اسم المستخدم
                    </th>
                    <th width="15%">
                        اسم الخطة
                    </th>
                    <th width="10%">
                    وقت البدا
                    </th>
                    <th width="10%">
                        وقت الانتهاء
                    </th>
                    <th width="10%">
                        السعر
                    </th>
                    <th width="10%">
                        حذف
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($paypalData); $i++) {

                    echo "

                            <tr role='row' class='filter'>
                                <td>
                                   {$paypalData[$i]['c_id']}
                                </td>
                                <td>
                                    {$paypalData[$i]['ur_name']}
                                </td>
                                <td>
                                    {$paypalData[$i]['pp_name']}
                                </td>
                                <td>
                                    {$paypalData[$i]['c_start']}
                                </td>
                                <td>
                                    {$paypalData[$i]['c_start']}
                                </td>
                                <td>
                                    {$paypalData[$i]['pp_price']}
                                </td>
                                <td>
                                    <a href='Admin/usersIsAcountDone/{$paypalData[$i]['e_id']}/?action=delete'><i class='fa fa-trash-o fa-2x'></i></a>
                                </td>

                            </tr>
                                            ";
                }

                ?>

                </thead>
            </table>
        </div>
        
    </div>

<?php require_once 'template/footer.php'; ?>