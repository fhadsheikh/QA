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
                            <h2>Self Registration | Test Case <strong>1.2</strong></h2>
                        </div>
                    </div>
                    <div class="row spacer">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group">
                                    <label>Tech</label>
                                    <select class="form-control"><option>Fhad Sheikh</option></select>
                                </div>
                                <div class="form-group">
                                    <label>Version</label>
                                    <select disabled="true" class="form-control"><option>5.14.7.23</option></select>
                                </div>
                                <div class="form-group">
                                    <label>Result</label><br>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Pass
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked> Fail
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked> Untested
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Notes</label><br>
                                    <textarea class="form-control" rows="10">Not redirecting to the right page</textarea>
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
                            <button class="btn btn-default pull-right"><i class="fa fa-pencil"></i></button>
                            <h2>Log on as another user</h2>
                            <p>
                                <ol>
                                    <li>Visit http://cwqa/clockwork/staff/shedule/default.aspx</li>
                                    <li>Enter your ClockWork username and password</li>
                                    <li>Enter the student number of the student you want to log in as</li>
                                    <li>Enter your ClockWork username and password and click enter</li>
                                </ol>
                            </p>
                        <br>
                            <h2>Expected Result:</h2>
                            <p>
                                You will be redirected to the home page and the student's student number should appear in the top right corner beside the log out link. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            
<?php include('includes/footer.php'); ?>