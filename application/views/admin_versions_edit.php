<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            
            <div class="row spacer">
                
                <div class="col-md-8 col-md-offset-2" >
                    <h2>Edit Version</h2>
                    <form method="post" action="<?php echo base_url('admin/addversion');?>">
                                <div class="form-group" style="margin-top:60px;">
                                    <label>Version Number</label>
                                    <input name="version" type="text" class="form-control" value="<?php echo $componentData->version_number;?>">
                                </div>
                                <div class="form-group">
                                    <label>Component</label>
                                    <select name="component" class="form-control">
                                        <?php foreach($components as $component): ?>
                                        <option value="<?php echo $component->component_id;?>"<?php if($component->component_id == $componentData->component_id){echo "selected";};?>><?php echo $component->component_name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="form-control">Edit Version</button>
                            </form>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>

