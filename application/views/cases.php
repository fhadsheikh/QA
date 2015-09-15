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
                      <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 40%">
                        <span>Pass</span>
                      </div>
                      <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 20%">
                        <span>Bugs</span>
                      </div>
                      <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 40%">
                        <span>Untested</span>
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
                       
                            <tr class="danger"> 
                                <td>1.1</td>
                                <td><span class="label label-danger">Bug</span></td>
                                <td>Self Registration</td>
                                <td><a href="<?php echo base_url('cases/testcase')?>">Log in as another user</a></td>
                                <td>Not being redirected to right page</td>
                                <td>Fhad Sheikh</td>
                                <td><button class="btn btn-default">Submit to JIRA</button></td> 
                            </tr>
                       
                        <tr>
                            <td>1.1</td>
                            <td><span class="label label-success">Pass</span></td>
                            <td></td>
                            <td>Request Accommodation Letter</td>
                            <td></td>
                            <td></td>
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
                        <tr>
                            <td>1.1</td>
                            <td><span class="label label-warning">Untested</span></td>
                            <td></td>
                            <td>Only allow student to book if LOA has been generated</td>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <tr>
                            <td>1.1</td>
                            <td><span class="label label-warning">Untested</span></td>
                            <td></td>
                            <td>Only allow student to book if LOA has been generated</td>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                        <tr>
                            <td>1.1</td>
                            <td><span class="label label-warning">Untested</span></td>
                            <td></td>
                            <td>Only allow student to book if LOA has been generated</td>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-default">Submit to JIRA</button></td>
                        </tr>
                    </table>
                </div>
                
            </div>
<?php include('includes/footer.php'); ?>