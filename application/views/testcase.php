<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            <div class="row spacer">
                <div class="col-md-12">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php echo $case->component_name;?> | Test Case <strong><?php echo $case->testcase_id;?></strong></h2>
                        </div>
                    </div>
                    <div class="row spacer">
                        <div class="col-md-12">
                            <form method="post" action="<?php echo base_url('cases/update/'.$case->testcase_id);?>">
                                <div class="form-group">
                                    <label>Tech</label>
                                    <select name="tech" class="form-control">
                                        <?php foreach($techs as $tech): ?>
                                            <option value="<?php echo $tech->user_id; ?>"
                                                    <?php if($tech->user_id == $case->testcase_tech){echo "selected";} ?>
                                                    ><?php echo $tech->user_name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Version</label>
                                    <select name="version" class="form-control"><option value="<?php echo $case->version_id; ?>" selected><?php echo $case->version_number;?></option></select>
                                </div>
                                <div class="form-group">
                                    <label>Result</label><br>
                                    <?php foreach($results as $result): ?>
                                    <label class="radio-inline">
                                    <input type="radio" name="result" id="inlineRadio1" value="<?php echo $result->result_id; ?>"
                                           <?php if($result->result_id == $case->testcase_result){echo "checked";}?>
                                           > <?php echo $result->result_name;?>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                                <div class="form-group">
                                    <label>Notes</label><br>
                                    <textarea class="form-control" rows="10" name="notes"><?php echo $case->testcase_notes;?></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="form-control btn-danger">Submit to Jira (Coming Soon)</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="form-control btn-info">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php echo $case->mastercase_title;?></h2>
                            <p><?php echo $case->mastercase_description;?></p>
                        <br>
                            <h2>Expected Result:</h2>
                            <p><?php echo $case->mastercase_expectedresults;?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            
<?php include('includes/footer.php'); ?>