<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            <div class="row spacer">
                <div class="col-md-12">
                    <form class="form-inline pull-right">
                        <div class="form-group">
                            <label>Module</label>
                            <select class="form-control" style="margin-right:20px"><option>All</option><option>Self-Registration</option></select>
                            <label>Version</label>
                            <select class="form-control" style="margin-right:20px"><option>5.14.7.23</option></select>
                            <button type="submit" class="btn btn-default">Go</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row spacer">
                <div class="col-md-12">
                    <h2>ClockWork Web V5.14.7.23</h2>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 70%">
                        <span>Pass </span>
                      </div>
                      <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:20%">
                        <span>Fail </span>
                      </div>
                      <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 10%">
                        <span>Untested </span>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                
                <div class="col-md-12" >
                    <table class="table table-hover">
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-1">Status</th>
                            <th class="col-md-1">Module</th>
                            <th class="col-md-3">Test Case</th>
                            <th class="col-md-4">Notes</th>
                            <th class="col-md-1">Tech</th>
                            <th class="col-md-1"></th>
                        </tr>
                        <tr class="active">
                            <td><strong>Workflows</strong></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                        <?php foreach($workflowCases as $workflowCase): ?>
                        <tr <?php if($workflowCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $workflowCase->mastercase_id; ?></td>
                            <td>
                                <?php if($workflowCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($workflowCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($workflowCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $workflowCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$workflowCase->testcase_id)?>"><?php echo $workflowCase->mastercase_title; ?></a></td>
                            <td><?php echo $workflowCase->testcase_notes; ?></td>
                            <td><?php echo $workflowCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td>1.1</td>
                            <td><span class="label label-success">Pass</span></td>
                            <td>Self Registration</td>
                            <td>Request Accommodation Letter</td>
                            <td></td>
                            <td>Fhad Sheikh</td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <tr>
                            <td>1.1</td>
                            <td><span class="label label-success">Pass</span></td>
                            <td>Test Booking</td>
                            <td>Auto Find Seat</td>
                            <td></td>
                            <td>Azim Ahmed</td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <tr>
                            <td>1.1</td>
                            <td><span class="label label-success">Pass</span></td>
                            <td>Online Intake</td>
                            <td>Field Mapping</td>
                            <td></td>
                            <td>Azim Ahmed</td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <tr class="active">
                            <td><strong>Settings</strong></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php foreach($settingCases as $settingCase): ?>
                        <tr <?php if($settingCase->result_id == 2){echo "class=\"danger\"";}?> >
                            <td><?php echo $settingCase->mastercase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 3){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $settingCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$settingCase->testcase_id)?>"><?php echo $settingCase->mastercase_title; ?></a></td>
                            <td><?php echo $settingCase->testcase_notes; ?></td>
                            <td><?php echo $settingCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>