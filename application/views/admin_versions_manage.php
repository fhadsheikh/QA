<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            
            <div class="row spacer">
                
                <div class="col-md-8 col-md-offset-2" >
                    <h2>Manage Versions <a href="<?php echo base_url('admin/versions/add');?>"><button class="btn btn-info pull-right">Add <i class="fa fa-plus"></i></button></a></h2>
                    <table class="table table-hover spacer">
                        <tr>
                            <th>ID</th>
                            <th>Component</th>
                            <th>Version</th>
                            <th></th>
                        </tr>
                        <?php foreach($versions as $version): ?>
                        <tr>
                            <td><?php echo $version->version_id;?></td>
                            <td><?php echo $version->component_name;?></td>
                            <td><?php echo $version->version_number;?></td>
                            <td style="text-align:right"><a href="<?php echo base_url('admin/versions/edit/'.$version->version_id);?>"><i class="fa fa-pencil"></i> </a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>