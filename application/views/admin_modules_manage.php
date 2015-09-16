<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            
            <div class="row spacer">
                
                <div class="col-md-8 col-md-offset-2" >
                    <h2>Modules</h2>
                    <table class="table table-hover spacer">
                        <tr>
                            <th>ID</th>
                            <th>Module Name</th>
                        </tr>
                        <?php foreach($modules as $module): ?>
                        <tr>
                            <td><?php echo $module->module_id;?></td>
                            <td><?php echo $module->module_name;?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>