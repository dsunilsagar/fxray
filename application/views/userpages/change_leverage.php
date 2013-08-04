<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ForexRay - Change Leverage</title>
        <?php $this->load->view('common/userpages/head_links_new'); ?>
    </head>
    <body class="app">
        <div id="wrap">
            
            <?php $this->load->view('common/userpages/header_new'); ?>
            
            <div class="contentarea p_r">
                <div class="leftNav p_f tf_animation animation_setting fadeInLeft">
                    <?php $this->load->view('common/userpages/leftnav_new'); ?>
                </div>
                <div class="rightNav">
                    <div class="rightNav_head">Change Leverage</div>
                    <div class="rightNav_cnt">
                       
                        <div class="hdr1 f_b m_b_10">Change Leverage</div>


                        <div class="o_h sum_box r_f m_t_20">

                            <div class="log_bankdet col_blk ">
                                Please enter your message below:
                            </div>

                            <input type="text" class="ip r_f m_t_20" />
                            <br/>

                            <a class="button yellow m_t_20 cur_def">Submit</a>

                        </div>


                    </div>
                </div>
            </div> 
            
            <?php $this->load->view('common/userpages/footer_new'); ?>
              
        </div>    
        
    </body>
</html>