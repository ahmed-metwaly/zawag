<?php require_once 'template/header.php'; ?>
<?php //print_r($receiveUser); ?>
    <div class="row">
        <div id="multiActions" class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="datatable_products">
                <thead>
                <tr role="row" class="heading">

                    <th width="10%">
                        #
                    </th>
                    <th width="15%">
                        من
                    </th>
                    <th width="15%">
                        الى
                    </th>
                    <th width="10%">
                        نص الرسالة
                    </th>
                    <th width="10%">
                        الوقت
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($messagesData); $i++) {

                    echo "

                            <tr role='row' class='filter'>

                            <td>
                               {$messagesData[$i]['um_id']}
                            </td>
                            <td>";


                            echo isset($messagesData[$i]['ur_name']) ? $messagesData[$i]['ur_name'] : 'تم حذفة';

                            echo "</td>
                            <td>";
                               echo isset($receiveUser[$i]['ur_name']) ? $receiveUser[$i]['ur_name'] :'تم حذفة';

                                     echo "   </td>
                                        <td>
                                     {$messagesData[$i]['um_text']}
                                     </td>
                                      <td>
                                     {$messagesData[$i]['um_date']}
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