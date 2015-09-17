<?php include('includes/htmlheader.php'); ?>
<?php include('includes/header.php');?>
            <div class="row spacer">
                <div class="col-md-12">
                    <form class="form-inline pull-right" method="get" action="<?php echo base_url('cases/filter');?>">
                        <div class="form-group">
                            <label>Module</label>
                            <select class="form-control" style="margin-right:20px" name="module">
                                <option value="">All</option>
                                <?php foreach($modules as $module): ?>
                                <option value="<?php echo $module->module_id;?>"
                                        <?php if($this->input->get('module') == $module->module_id){echo "selected";}?>
                                        ><?php echo $module->module_name;?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Version</label>
                            <select class="form-control" style="margin-right:20px" name="version">
                                <?php foreach($versions as $version):?>
                                <option value="<?php echo $version->version_id; ?>"
                                        <?php if($this->input->get('version') == $version->version_id){echo "selected";}?>
                                        ><?php echo $version->version_number;?></option>
                                <?php endforeach; ?>
                            </select>
                            <button type="submit" class="btn btn-default">Go</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row spacer">
                <div class="col-md-12">
                    <h2>ClockWork Web V<?php echo $v->version_number;?></h2>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success progress-bar-striped" style="width: <?php echo $stats['pass'];?>%">
                        <span>Pass </span>
                      </div>
                      <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?php echo $stats['fail'];?>%">
                        <span>Fail </span>
                      </div>
                      <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: <?php echo $stats['untested'];?>%">
                        <span>Untested </span>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                
                <div class="col-md-12" >
                    <table id="ticket-table" class="table table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-1">Status</th>
                            <th class="col-md-1">Module</th>
                            <th class="col-md-3">Test Case</th>
                            <th class="col-md-4">Notes</th>
                            <th class="col-md-1">Tech</th>
                            <th class="col-md-1"></th>
                        </tr>
                        </thead>
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
                            <td><?php echo $workflowCase->testcase_id; ?></td>
                            <td>
                                <?php if($workflowCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($workflowCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($workflowCase->result_id == 0){echo "<span class=\"label label-warning\">Untested</span>";} ?>
                            </td>
                            <td><?php echo $workflowCase->module_name; ?></td>
                            <td><a href="<?php echo base_url('cases/testcase/'.$workflowCase->testcase_id)?>"><?php echo $workflowCase->mastercase_title; ?></a></td>
                            <td><?php echo $workflowCase->testcase_notes; ?></td>
                            <td><?php echo $workflowCase->user_name; ?></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <?php endforeach; ?>
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
                            <td><?php echo $settingCase->testcase_id; ?></td>
                            <td>
                                <?php if($settingCase->result_id == 1){echo "<span class=\"label label-success\">Pass</span>";} ?>
                                <?php if($settingCase->result_id == 2){echo "<span class=\"label label-danger\">Fail</span>";} ?>
                                <?php if($settingCase->result_id == 0){echo "<span class=\"label label-warning\">Untested</span>";} ?>
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