
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="navlinks">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="<?php echo base_url();?>"><i class="fa fa-rocket"></i></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo base_url('tickets');?>">Tickets</a></li>
                            <li class="active act"><a href="<?php echo base_url('cases');?>">QA</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Knowledge Base</a></li>
                            <li><a href="#">Triage</a></li>
                            <li><a href="#">Calendar</a></li>
                            <li><a href="#">Emails</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                              </ul>
                            </li>
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-bell"></i> <span class="label label-danger label-as-badge"><?php echo $this->session->userdata('count')['assignedtome'];?></span></a></li>
                            <li><a href="#"><i class="fa fa-gear"></i></a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('FullName'); ?> <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('user/logout'); ?>">Log out</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
            