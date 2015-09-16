<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            
            <div class="row spacer">
                
                <div class="col-md-8 col-md-offset-2" >
                    <h2>Manage Users <a href="<?php echo base_url('admin/users/add');?>"><button class="btn btn-info pull-right">Add <i class="fa fa-plus"></i></button></a></h2>
                    <table class="table table-hover spacer">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $user->user_id; ?></td>
                            <td><?php echo $user->user_name; ?></td>
                            <td><?php echo $user->role_name; ?></td>
                            <td><?php echo $user->user_username; ?></td>
                            <td><?php echo $user->status_name; ?></td>
                            <td style="text-align:right"><a href="<?php echo base_url('admin/users/edit/'.$user->user_id);?>"><i class="fa fa-pencil"></i> </a><a href="<?php echo base_url('admin/users/delete/'.$user->user_id);?>"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>