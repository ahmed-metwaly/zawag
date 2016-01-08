<?php require_once 'template/header.php'; ?>
<?php //var_dump($countUsersUsed); ?>
    <div class="row">
        <div id="multiActions" class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="datatable_products">
                <thead>
                <tr role="row" class="heading">

                    <th width="10%">
                        #
                    </th>
                    <th width="15%">
                        اسم المستوى
                    </th>
                    <th width="10%">
                        عدد المنتسبين
                    </th>
                    <th width="10%">
                        تعديل
                    </th>
                </tr>
                <?php
                for($i = 0; $i < count($allLevels); $i++) {

                    echo "

                        <tr role='row' class='filter'>
                            <td>
                               {$allLevels[$i]['ul_id']}
                            </td>
                            <td>
                               {$allLevels[$i]['ul_name']}
                            </td>
                            <td>
                                {$countUsersUsed->countUserIsUsed($allLevels[$i]['ul_id'])}
                            </td>

                            <td class='text-center'>
                                <a href='" . base_url() . "Admin/editLevel/{$allLevels[$i]['ul_id']}'><i class='fa fa-edit fa-2x'></i></a>
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