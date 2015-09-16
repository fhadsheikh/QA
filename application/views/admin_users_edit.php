<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            
            <div class="row spacer">
                <div class="col-md-8 col-md-offset-2" >
                    <h2>Edit User</h2>
                    <form method="post" action="<?php echo base_url('admin/edituser/'.$userData->user_id);?>">
                                <div class="form-group" style="margin-top:60px;">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control" value="<?php echo $userData->user_name;?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" type="text" class="form-control" value="<?php echo $userData->user_username;?>">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="form-control">
                                        <?php foreach($metas as $meta): ?>
                                        <option value="<?php echo $meta->role_id; ?>" <?php if($userData->user_role == $meta->role_id){echo "selected";}?>><?php echo $meta->role_name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <?php foreach($metas as $meta): ?>
                                        <option value="<?php echo $meta->status_id;?>" <?php if($userData->user_status == $meta->status_id){echo "selected";}?>><?php echo $meta->status_name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="form-control">Edit User</button>
                            </form>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>

