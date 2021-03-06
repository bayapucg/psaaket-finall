
    
    <section id="page-banner" class="pt-10 pb-10 bg_cover" data-overlay="8" style="background-image: url(img/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Seminar Registration</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                               
                              
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-10 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Seminar Details</h5>
                            <!--<h2>Keep in touch</h2>-->
                        </div> <!-- section title -->
                        <div class="main-form">
                            <table class="table table-bordered">
								
								<tbody>
								  <tr>
									<th>Seminar Name</th>
									<td>Student - Management interactive discussion on Concept, Training methodology and Approach of PSAAKET MCI.</td>
								  </tr>
								  <tr>
								  	<th>Seminar Date</th>
									<td>March-10th-2019</td>
								  </tr> 
								  <tr>
									<th>Seminar venue</th>
									<td>Seminar will be conducted in Hyderabad KPHB colony. Exact venue will be informed only to the registered candidates.</td>
								
								  </tr> 
								  <tr>
									<th>Seminar speakers</th>
									<td>Institute management, Dr. Khan, Dr. Iftekar and others</td>
								
								  </tr> 
								  <tr>
									<th>Seminar objectives</th>
									<td>Leveraging our Vision & Mission of the Institute. Imparting the new way of education to the student. Demo class of PSAAKET MCI. Interactive session with the students & discussion on cracking the Medical PG Entrance Exam. </td>
								  </tr>								  <tr>
									<th>Strength</th>
									<td> 50-150 </td>
								  </tr>
								</tbody>
							  </table>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div> 
				<div class="col-lg-6 ">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Seminar Registration</h5>
                            <!--<h2>Keep in touch</h2>-->
                        </div> <!-- section title -->
                        <div class="main-form">
                            <form id="info-form" autocomplete="off" action="<?php echo base_url('seminars/registerpost'); ?>" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="uname" id="uname" type="text" placeholder="Your name" required>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="uemail" id="uemail" type="email" placeholder="Email" required>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="uphone" id="uphone" type="text" placeholder="Phone" required>
                                        </div> <!-- singel form -->
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn btn-block">Register Now</button>
                                        </div> <!-- singel form -->
                                    </div>   <div class="col-md-6">
                                        <div class="singel-form">
                                            <a href="<?php echo base_url('contact'); ?>" type="submit" class="main-btn btn-block">Contact Us</a>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
               
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
