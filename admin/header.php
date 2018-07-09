<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background:#000; color:#fff">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" style="font-family:'Amaranth', sans-serif; ">
                            <img src="../images/logo.png" width="18%"> <span style="color:#fff">Centre for Vernacular Architecture Trust</span></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="margin-right: 50px;">
                 
                 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff">
                        <i class="fa fa-user fa-fw"></i><i>&nbsp;<?php echo $_SESSION['name']; ?>&nbsp;</i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <!--  <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a> </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> </li>
                        <li class="divider"></li> -->
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="margin-top: 68px;"> 
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <?php
                            if($_SESSION['usertype'] == 'Administrator')
                            {
                        ?> 
                        <li>
                            <a href="#"><i class="fa fa-users"></i> User management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="createuser.php">Create User</a>
                                </li>
                                <li>
                                    <a href="existingusers.php">Existing Users</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> Project management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="createproject.php">Create Project</a>
                                </li>
                                <li>
                                    <a href="existingprojects.php">Existing Projects</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



                        <li>
                            <a href="#"><i class="fa fa-users"></i> Contact management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="">Create Project</a>
                                </li> -->
                                <li>
                                    <a href="existingcontacts.php">Existing Contacts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } 
                        elseif($_SESSION['usertype'] == 'Moderator')
                        { ?>
                            <li>
                            <a href="#"><i class="fa fa-users"></i> Project management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="createproject.php">Create Project</a>
                                </li>
                                <li>
                                    <a href="existingprojects.php">Existing Projects</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php }
                        ?>
                        <!-- <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                         </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>