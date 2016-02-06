<?php require_once 'template/pagesHeader.php'; ?>

<div class="container paypal_data center-block">
    <h2 class="text-center"><?php echo $sittings['planRegisterCase']; ?></h2>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table table-condensed">
                <tr class="success">
                    <td><?php echo $sittings['plandStartDate']; ?></td>
                    <td><?php echo isset($planStatus->c_start) ? $planStatus->c_start : ''; ?></td>
                </tr>
                <tr class="warning">
                    <td><?php echo $sittings['planEndDate']; ?></td>
                    <td><?php echo isset($planStatus->c_end) ? $planStatus->c_end : ''; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<?php require_once 'template/footer.php'; ?>
