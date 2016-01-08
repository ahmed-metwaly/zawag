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
 السؤال
                    </th>
                    <th width="10%">
الاجابة
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
                for($i = 0; $i < count($faqsData); $i++) {

                    echo "

                            <tr role='row' class='filter'>
                                <td>
                                   {$faqsData[$i]['f_id']}
                                </td>
                                <td>
                                    {$faqsData[$i]['f_question']}
                                </td>
                                <td>
                                {$faqsData[$i]['f_answer']}
                                </td>
                                <td>";
                                    echo isset($faqsData[$i]['ur_name']) ? $faqsData[$i]['ur_name'] : 'تم حذفة';
                                echo "</td>
                                <td>
                                    {$faqsData[$i]['f_date']}
                                </td>
                                <td>
                                    <a href='Admin/editFaqs/{$faqsData[$i]['f_id']}/?action=edit'><i class='fa fa-edit fa-2x'></i></a>
                                </td>
                                <td>
                                    <a href='Admin/faqs/{$faqsData[$i]['f_id']}/?action=delete'><i class='fa fa-trash-o fa-2x'></i></a>
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