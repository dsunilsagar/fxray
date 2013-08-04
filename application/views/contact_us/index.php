<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <title>Contact Us Edealspot.com</title>
        <meta name="description" content="Register Edealspot.com" />
        <meta name="keywords" content="Register Liberty reserve, Account Liberty reserve, New Account Liberty reserve" />
        <meta name="author" content="edealspot"
        <meta name="robots" content="index, follow" />



        <!--<link href="<?php echo base_url();  ?>default.css" rel="stylesheet" type="text/css" />-->

        <?php $this->load->view('common/general/links');  ?>


        <link href="<?php echo base_url();  ?>public/css/general/redmond/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();  ?>public/css/general/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();  ?>public/css/general/style2.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();  ?>public/css/general/admin-style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();  ?>public/css/general/pagination.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();  ?>public/css/general/ui.jqgrid.css"/>
        <link href="<?php echo base_url();  ?>public/css/general/forms.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" language="javascript" src="<?php echo base_url();  ?>public/js/general/jquery.jqGrid.src.js" ></script>

        <link href="<?php echo base_url();  ?>public/css/general/jquery.tooltip.css" type="text/css"  rel="stylesheet"/>
        <link href="<?php echo base_url();  ?>public/css/general/redmond/jquery-ui-1.8.18.custom.css" type="text/css"  rel="stylesheet"/>
        <script type="text/javascript" src="<?php echo base_url();  ?>public/js/general/jquery.cluetip.js"></script>
        <script src="<?php echo base_url();?>public/js/validate.js" type="text/javascript"></script>

    </head>

    <body class="app">
        
        <?php $this->load->view('common/general/header');  ?>

		
        <div id="wrapper" class="content">
            <div class="inner">

                <?php $this->load->view('common/general/menu');  ?>
		
                <?php $this->load->view('common/general/alexa');  ?>
                <!-- end div#header -->

                <div class="contentcontainer roundbottomfour"><div class="contentelements ovrclr">
                        <div id="page" class="page takecareearning fl borderradiusfour" >
                            <?php $this->load->view('common/notifications');  ?>
                            <div id="page-bgtop">

                                <div id="content">

                                    <div class="post pad10">

                                        <div class="h_1">Contact Us</div>

                                        <form name="save_cu" id="save_cu" action="<?php echo site_url('contact_us/save_cs')  ?>" method="post" >
                                                <input type='hidden' name='id' id='id' value=''/> 	
                                                <div class="d_fds">
                                                        <div class="left_fld">
                                                            <label for="name"><span class="validcol">*</span> Name:</label> 
                                                        </div>
                                                        <div class="right_fld">
                                                            <input type='text' name='name' id='name' value='' class="required ip"/>
                                                        </div>
                                                        <div class="cb"></div>
                                                </div>

                                                <div class="d_fds">
                                                        <div class="left_fld">
                                                            <label for="email"><span class="validcol">*</span> Email:</label> 
                                                        </div>
                                                        <div class="right_fld">
                                                            <input type='text' name='email' id='email' value='' class="required ip"/>
                                                        </div>
                                                        <div class="cb"></div>
                                                </div>
                                                <div class="d_fds">
                                                        <div class="left_fld">
                                                            <label for="subject"><span class="validcol">*</span> Subject:</label> 
                                                        </div>
                                                        <div class="right_fld">
                                                            <input type='text' name='subject' id='subject' value='' class="required ip"/>
                                                        </div>
                                                        <div class="cb"></div>
                                                </div>
                                                <div class="d_fds">
                                                        <div class="left_fld">
                                                            <label for="phone"><span class="validcol">*</span> Contact No:</label> 
                                                        </div>
                                                        <div class="right_fld">
                                                            <input type='text' name='phone' id='phone' value='' class="required ip"/>
                                                        </div>
                                                        <div class="cb"></div>
                                                </div>

                                                <div class="d_fds">
                                                        <div class="left_fld">
                                                            <label for="message"><span class="validcol">*</span> Message:</label> 
                                                        </div>
                                                        <div class="right_fld">
                                                            <textarea id='message' name='message' class="required t_ar"></textarea>
                                                        </div>
                                                        <div class="cb"></div>
                                                </div>
                                                <hr/>
                                                    <div class="d_fds">
                                                        <div class="left_fld"><label></label></div>
                                                        <div class="right_fld">
                                                            <input type='button' name='save' value=' Submit ' class="alt_btn jsave_cu" style="padding: 5px 15px" />
                                                            <input type='button' name='cancel' value=' Cancel ' class="alt_btn jcancel" style="padding: 5px 15px; margin-left: 140px;" />
                                                        <span class="jerror_msg"></span>
                                                        <?php echo formtoken::getField(); ?>
                                                        </div>
                                                    </div>
                                        </form>
                                    </div>

                                </div>

                                <!-- end div#content -->


                                <!-- end div#sidebar -->

                                <div style="clear: both; height: 1px"></div>

                            </div>

                        </div>
                    </div></div>
                <!-- end div#page -->
            </div>
        </div>

        <!-- end div#wrapper -->
       	<!--	Start footer content-->
			<?php $this->load->view('common/general/footer');  ?>
		<!--end footer content-->


        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
            $(document).ready(function() {
                $("#save_cu").validate({
                    rules: {
                        name: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        subject: "required",
                        phone: {
                            required: true,
                            number: true
                        },
                        message: "required"
                    },
                    messages: {
                        name: "Name should not be empty",
                        email: "Please enter a valid email address",
                        subject: "Subject should not be empty",
                        phone: {
                            required: "Please enter your Contact Number",
                            number: "Contact Number Should be Number"
                        },
                        message: "Message should not be empty"
                    },
                    errorPlacement: function(error, element) {
                        error.insertAfter(element);
                    },
                    submitHandlerXX: function(){

                        var data = $('#save_cu').serialize();
                        $.ajax({
                            type: "POST",	
                            data: data,
                            url: base_url+"contact_us/save_cs", 
                            beforeSend : function(){
                                $('.jerror_msg').html('<img src="<?php echo base_url();  ?>/public/images/loader.gif"');
                            },
                            success: function(data)
                            {
                                if(data > 0)
                                {
                                    var error_msg = 'Your Enquiry was submitted successfully.';
                                    if(data > 1) error_msg = 'Your Enquiry was submitted successfully.';
                                    $('.jerror_msg').html(error_msg);
                                }
                                else
                                {
                                    var error_msg = 'Unable to process.. please check your data and try again.';
                                    $('.jerror_msg').html(error_msg);
                                }
                                $('#save_cu').each (function(){
                                    this.reset();
                                });
                            },
                            complete : function()
                            {
                                //$("#sub_grid_tbl").trigger("reloadGrid");
                            }
                        });

                    }
                });
                $('.jsave_cu').live('click',function(){
                    $("#save_cu").submit();
                })
                $('.jcancel').live('click',function(){
                    window.location = base_url+'home';
                })

            });
        </script>

    </body>

</html>



