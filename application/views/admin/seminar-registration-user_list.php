
    <head>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/dataTables.bootstrap.min.css">
	</head>
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
			<div class="">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped" width="width:100%">
                                <thead>
                                    <tr>
                                        <th>SI.No</th>
                                        <th>Student Name</th>
                                        <th>Email ID</th>
                                        <th>Mobile NUmber</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(isset($user_list) && count($user_list)>0){ ?>
								<?php $cnt=1;foreach($user_list as $lis){ ?>
                                    <tr>
                                        <td><?php echo $cnt; ?></td>
                                        <td><?php echo isset($lis['u_name'])?$lis['u_name']:''; ?></td>
                                        <td><?php echo isset($lis['u_email'])?$lis['u_email']:''; ?></td>
                                        <td><?php echo isset($lis['u_mobile'])?$lis['u_mobile']:''; ?></td>
                                        <td><?php echo isset($lis['created_at'])?$lis['created_at']:''; ?></td>
                                        
                                    </tr>
								<?php $cnt++;} ?>
								<?php }else{ ?>
								<div>No data</div>
								<?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
	 <!--====== Nice Select js ======-->
 
