<?php require_once 'template/header.php'; ?>
<?php //print_r($receiveUser); ?>
    <div class="row">
        <div id="multiActions" class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="datatable_products">
                <thead>
                <tr role="row" class="heading">

                    <th width="5%">
                        #
                    </th>
                    <th width="10%">
                        اسم المرسل
                    </th>
                    <th width="10%">
                        البريد الالكترونى
                    </th>
                    <th width="15%">
                        عنوان الرسالة
                    </th>
                    <th width="40%">
                        نص الرسالة
                    </th>
                    <th >تاريخ الارسال</th>
                    <th>رد</th>
                </tr>
                <?php
                for($i = 0; $i < count($messagesData); $i++) {

                    echo "

                        <tr role='row' class='filter'>
                            <td>
                               {$messagesData[$i]['am_id']}
                            </td>
                            <td>
                                {$messagesData[$i]['am_name']}
                            </td>
                            <td>
                                {$messagesData[$i]['am_email']}
                            </td>
                            <td>
                                {$messagesData[$i]['am_title']}
                            </td>
                            <td>
                                {$messagesData[$i]['am_message']}
                            </td>
                            <td>
                                {$messagesData[$i]['am_date']}
                            </td>
                            <td>
                                <a href='mailTo: {$messagesData[$i]['am_email']}'><i class='fa  fa-reply'></i></a>
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