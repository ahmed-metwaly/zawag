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
                        صورة الاعلان
                    </th>
                    <th width="15%">
                        رابط الاعلان
                    </th>
                    <th width="10%">
الذى قام بالاضافة
                    </th>
                    <th width="10%">
تاربخ الاضافة
                    </th>
                    <th width="10%">
تعديل
                    </th>
                    <th width="10%">
                        حذف
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($adsData); $i++) {

                    echo "

                            <tr role='row' class='filter'>
                                <td>
                                   {$adsData[$i]['ads_id']}
                                </td>
                                <td>
                                    <img width='100' height='100' src='" . HOST_NAME . 'upload/' . $adsData[$i]['ads_photo'] ."' alt='لايوجد صوره'>
                                </td>
                                <td>
                                {$adsData[$i]['ads_url']}
                                </td>
                                <td>";
                                    echo isset($adsData[$i]['ur_name']) ? $adsData[$i]['ur_name'] : 'تم حذفة';
                                echo "</td>
                                <td>
                                    {$adsData[$i]['ads_date']}
                                </td>
                                <td>
                                    <a href='Admin/editAds/{$adsData[$i]['ads_id']}/?action=edit'><i class='fa fa-edit fa-2x'></i></a>
                                </td>
                                <td>
                                    <a href='Admin/allAds/{$adsData[$i]['ads_id']}/?action=delete'><i class='fa fa-trash-o fa-2x'></i></a>
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