<?php
    //session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('index.php','_self')</script>";     
    }
    else
    {
            $username = $_SESSION['username'];
?>
    <!--Header Open-->
    <!--Hide Navbar Open-->
<div>
    <div id="header-style">
        <div class="container">
            <a class='wrapper hidden-lg wrapper hidden-md wrapper hidden-sm ' href="index.php"><br>
                <img src="images/logo_new.png" class="img img-responsive iips-logo-css">
            </a>    
            <ul class="nav navbar-nav">
                <a class='wrapper hidden-xs' href="index.php">
                    <img src="images/logo_new.png" class="img img-responsive iips-logo-css col-lg-7">
                </a>
                <li class="wrapper visible-lg visible-md nav navbar-nav navbar-right"><a href="index.php">Student</a></li>
               <!--  <li class="wrapper visible-lg visible-md visible-sm nav navbar-nav navbar-right"><a href="#FacultyModal" data-toggle="modal">Faculty &amp; Staff</a></li>
                 --><li class="wrapper visible-lg visible-md nav navbar-nav navbar-right"><a href="alumni_reg.php">Alumni</a><img src="images/new1.gif" style="border: 0px;"></li> 
                     
                <li class="wrapper visible-lg visible-md nav navbar-nav navbar-right"><a href="sitemap.php">Sitemap</a></li>
                <li class="wrapper visible-lg visible-md nav navbar-nav navbar-right"><a href="under_construction.php">Feedback</a></li>
                    <form class="wrapper hidden-xs navbar-form navbar-right" action="https://www.google.co.in/webhp?hl=en#hl=en&q=iips davv " target="__blank">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search IIPS Web">
                            <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                            </div>
                        </div>
                    </form>
            </ul>
        </div><!-- container-->
    </div><!--header-style-->
</div><!--Hide Navbar Close-->

<!--Main navbar starts-->
<div class="container-fluid">
    <div class="row">
        <div>
            <nav class="navbar navbar-default yamm" style="background-color:#10bf7e">
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header" style="background-color:#414141">
                            <button type="button" class="navbar-toggle collapsed" id="no-border" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-main">
                            <div class="wrapper visible-xs">
                                    <div class="container">
                                        <div class="row">
                                            <form class="navbar-form navbar-left" role="search">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5 mybutton">
                                                <a href="sitemap.php">Sitemap</a>
                                            </div>
                                            <!-- <div class="col-xs-1"></div> -->
                                            <!-- <div class="col-xs-5 mybutton">
                                                <a href="#FacultyModal" data-toggle="modal">Login</a>
                                            </div> -->
                                        </div>
                                    </div>    
                            </div>
                            <ul class="nav navbar-nav" id="test">
                                <!--About-->
                                <li class="dropdown yamm-fw" id="test_about" style='margin-right:50px'>
                                    <a href="#" class="dropdown-toggle navbar-underline navbar-two" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="no-underline" style="color:#FFF">About<span class="caret"></span></a>
                                    <ul class="dropdown-menu nav-margin" id="yamm-down-about" role="menu" style="margin:12px">
                                        <div class="image2">                
                                            <div class="col-md-7 col-sm-9 hidden-xs" id="i6">
                                                <div class="col-md-6 col-sm-6">
                                                    <img src="images/about/image1.png" class="img-responsive setSize" style="width:250px; height: 215px" alt="About IIPS image">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    The International Institute of Professional Studies, a department of Devi Ahilya Vishwavidyalaya established in the year 1992 is an academic mentor of its kind and an eminently practical institute, recognized by AICTE. With the quality in the content, scope and professionalism of its programs.
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-3">
                                                <div class="col-md-6">                 
                                                    <li id="link-style"><a href="about.php">Overview</a></li>
                                                    <li id="link-style"><a href="about_university.php">About University</a></li>
                                                    <li id="link-style"><a href="history.php">History</a></li>
                                                </div>
                                                <div class="col-md-6">
                                                    <li id="link-style"><a href="infrastructure.php">Infrastructure</a></li>
                                                    <li id="link-style"><a href="about_iips.php">About IIPS</a></li>
                                                    <li id="link-style"><a href="reach_us.php">Reach Us</a></li>
                                                </div>
                                            </div>
                                        </div>     
                                    </ul>
                                </li>

                                <!--Admission-->
                                <li class="dropdown yamm-fw" id="test_admission" style='margin-right:50px'>
                                    <a href="#" class="dropdown-toggle navbar-underline navbar-two" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" id="no-underline" style="color:#FFF">Admission<span class="caret"></span></a>
                                    <ul class="dropdown-menu nav-margin" id="yamm-down-admission" style="margin:12px">
                                        <div class="image2">
                                            <div class="col-md-7 col-sm-9 hidden-xs" id="i6">
                                                <div class="col-md-6 col-sm-6">
                                                    <img src="images/admission/auditorium.jpg" class="img-responsive" style="width:250px; height: 215px" alt="Responsive image">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    Every year CET is conducted in the month of JUNE for various courses at Graduate and post graduate level. The students from all over India apply to get admission through this exam. In this written exam the student’s general aptitude, language knowledge and mathematical ability is tested.
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-3">
                                                <div class="col-md-6">
                                                    <li id="link-style"><a href="admission.php">Overview</a></li>
                                                    <li id="link-style"><a href="courses.php">Courses</a></li>
                                                </div>
                                                <div class="col-md-6">
                                                    <li id="link-style"><a href="fee_structure.php">Fees Structure</a></li>
                                                    <li id="link-style"><a href="http://www.davvcet.in/" target="_blank">Common Entrance Test</a></li>
                                                </div>
                                            </div>
                                        </div><!--container-->        
                                    </ul>
                                </li>

                                <!--Academics-->
                                <li class="dropdown yamm-fw" id="test_academics" style='margin-right:50px'>
                                    <a href="#" class="dropdown-toggle navbar-underline" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="no-underline" style="color:#FFF">Academics<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu nav-margin" id="yamm-down-academics" style="margin:12px">
                                        <div class="image2">
                                            <div class="col-md-7 col-sm-8 hidden-xs" id="i6">
                                                <div class="col-md-6 col-sm-6">
                                                    <img src="images/academics/012.jpg" class="img img-responsive" style="width:250px; height: 215px" alt="Responsive image">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    The institute provides ample opportunities to students with a rigorous and challenging curriculum with flexibility to allow students to tailor their education to meet their professional and personal interests and goals.      
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-4">
                                                <div class="col-md-6">
                                                    <li id="link-style"><a href="academics.php">Overview</a></li>
                                                    <li id="link-style"><a href="syllabus.php">Syllabus</a></li>
                                                    <li id="link-style"><a href="academic_calendar.php">Academic Calendar</a></li>
                                                  <!--  <li id="link-style"><a href="results.php">Results</a></li> -->
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- <li id="link-style"><a href="news_and_announcements.php">News &amp; Announcements</a></li> -->
                                                    <li id="link-style"><a href="faculty_profile.php">Faculty Profile</a></li>
                                                    <li id="link-style"><a href="staff_profile.php">Staff Profile</a></li>
                                                </div>
                                            </div>
                                        </div><!--container-->        
                                    </ul>  
                                </li>

                                <!--Research -->
                                <li class="dropdown yamm-fw" id="test-research" style='margin-right:50px'>
                                    <a href="#" class="dropdown-toggle navbar-underline navbar-two" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="no-underline" style="color:#FFF">Research<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu nav-margin" id="yamm-down-research" style="margin:12px">
                                        <div class="image2">      
                                            <div class="col-md-7 col-sm-9 hidden-xs" id="i6">
                                                <div class="col-md-6 col-sm-6">
                                                    <img src="images/research/research_.png" class="img img-responsive" style="width:250px; height: 215px" alt="Responsive image">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    Research is a process to discover new knowledge. The development and research center allow students to learn standards that are currently adapted by industry. Mentors also guide students to publish new research papers.
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-3">
                                                <div class="col-md-6">
                                                    <li id="link-style"><a href="research.php">Overview</a></li>
                                                    <li id="link-style"><a href="development_center.php">Development Center</a></li>
                                                </div>
                                                <div class="col-md-6">
                                                    <li id="link-style"><a href="publication.php">Publication</a></li>
                                                    <li id="link-style"><a href="research_cell.php">Research Center</a></li>
                                                </div>
                                            </div>
                                        </div>        
                                    </ul>
                                </li>

                                <!--Campus Life-->
                                <li class="dropdown yamm-fw" id="campus_life" style='margin-right:50px'>
                                    <a href="#" class="dropdown-toggle navbar-underline navbar-two" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="no-underline" style="color:#FFF">Campus Life<span class="caret"></span>
                                    </a>
                                     <ul class="dropdown-menu nav-margin" id="yamm-down-campus" style="margin:12px">
                                      <div class="image2">
                                          <div class="col-md-7 col-sm-9 hidden-xs" id="i6">
                                              <div class="col-md-6 col-sm-6">
                                                  <img src="images/campuslife/campus.jpg" class="img-responsive" style="width:250px; height: 215px" alt="Responsive image">
                                              </div>
                                              <div class="col-md-6 col-sm-6">
                                                  Other than studies students also enjoy their college life by participating in different events. Every year top IT and management companies like TCS, Infosys, wipro visit campus and offer very good packages to students.                                        </div>
                                          </div>
                                          <div class="col-md-5 col-sm-3">
                                              <div class="col-md-6">
                                                  <li id="link-style"><a href="campus_life.php">Overview</a></li>
                                                  <li id="link-style"><a href="event.php">Events </a></li>
                                                  <li id="link-style"><a href="placement.php">Placements</a></li>
                                              </div>
                                              <div class="col-md-6">
                                                  <li id="link-style"><a href="video_channel.php">Video Channels</a></li>
                                                  <li id="link-style"><a href="gallery.php">Gallery</a></li>
                                                  <li id="link-style"><a href="nss.php">NSS</a></li>
                                              </div>
                                          </div>
                                      </div>        
                                    </ul>
                                </li>
                                <!-- Faculty  Profile-->
                                <li class="dropdown yamm-fw" id="test-faculty" style='margin-right:50px'>
                                    <a href="#" class="dropdown-toggle navbar-underline navbar-two" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="no-underline" style="color:#FFF">Faculty Profile<span class="caret"></span>
                                    </a>
                                     <ul class="dropdown-menu nav-margin" id="yamm-down-faculty" style="margin:12px">
                                      <div class="image2">
                                          <div class="col-md-6 col-sm-9 hidden-xs" id="i6">
                                            <!-- <div class="col-md-2"> -->
                                              <div class="col-md-6 col-sm-6">
                                               <?php  
                                                      $db =mysqli_connect("localhost","root","","pbas_db");

                                                      $query = "SELECT * FROM image WHERE User_Id='$username'";  
                                                      $result = mysqli_query($db, $query);  
                                                      $row = mysqli_fetch_array($result);
                                                ?>
                                                  <?php echo '<img src="images/faculty_pic/'.$row["image"].'" class="img-responsive" alt="Responsive image " style="width:250px; height: 215px">';
                                                  ?>
                                              </div>
                                              <div class="col-md-6 col-sm-6">
                                                  Other than studies students also enjoy their college life by participating in different events. Every year top IT and management companies like TCS, Infosys, wipro visit campus and offer very good packages to students.                                        </div>
                                          </div>
                                          <div class="col-md-5 col-sm-3">
                                              <div class="col-md-6">
                                                  <li id="link-style"><a href="over.php">Overview</a></li>
                                                  <li id="link-style"><a href="profile.php">Profile</a></li>
                                                  <li id="link-style"><a href="dompdf/pdf1.php">Pdf Report</a></li>
                                                  <li id="link-style"><a href="logout.php">Logout</a></li>
                                              </div>
                                              <div class="col-md-6">
                                                  <li id="link-style"><a href="research_pub.php">Research Publication and Academic Contribution</a></li>
                                                  <li id="link-style"><a href="cocurricular.php">Co-curricular Extension, Professional Development</a></li>
                                              </div>
                                          </div>
                                      </div>        
                                    </ul>
                                </li>
                            </ul>

                            <div class="wrapper visible-xs">
                              <h3 id="i38">Information for...</h3>
                              <ul class="nav navbar-nav">
                                <li><a href="under_construction.php">Students</a></li>
                                <!-- <li><a href="#FacultyModal" data-toggle="modal">Faculty &amp; Staff</a></li> -->
                                <li><a href="alumni_reg.php">Alumni</a></li>
                              </ul>
                            </div>
                        </div>
                    </div><!--Visible Content-->
                </div>
            </nav>
        </div><!-- container-fluid -->
    </div><!-- col-md-9 Close-->
</div><!-- row end-->
<!--Container Close--><!--Main navbar close-->

<?php 

 } //else end of sesion 

 ?>
