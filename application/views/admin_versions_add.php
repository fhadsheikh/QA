<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            
            <div class="row spacer">
                
                <div class="col-md-8 col-md-offset-2" >
                    <h2>Add User</h2>
                    <form method="post" action="<?php echo base_url('admin/addversion');?>">
                                <div class="form-group" style="margin-top:60px;">
                                    <label>Version Number</label>
                                    <input name="version" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Component</label>
                                    <select name="component" class="form-control">
                                        <?php foreach($metas as $meta): ?>
                                        <option value="<?php echo $meta->component_id;?>"><?php echo $meta->component_name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="form-control">Add User</button>
                            </form>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>

