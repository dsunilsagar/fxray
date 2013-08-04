<?php
    $data['active_link'] = "active";
    $data['active'] = "7";
    
    $url_1 = $this->uri->segment(1);
    $url_2 = $this->uri->segment(2);
    $url_3 = $this->uri->segment(3); 
?>

<?php $this->load->view('common/header', $data);?>

<div class="outside">
<!--	PAGE content -->
            <div class="contents pg_width">
                <div class="overlay_bg rel">
                    <div class="fore_ca">
                        <div class="fore_content">
                            <div class="content_wrap fl">
                                <h1 class="h_1">Registration</h1>
							
                                <?php $this->load->view('common/notifications'); ?>
                                
                                <div class="pg_data">
                                    <ul class="bread_crum" id="breadcrumbs-one">
                                        <li><a href="<?php echo site_url('/'); ?>">Forexray </a></li>
                                        <li><a class="current">Registration Success</a></li>
                                    </ul>
                                    <div class="pg_data_view">
                                        
                                            <div class="post  pad10 newsbox" style="">
                                                <div class="story bootstrap-scope">
                                                    <div style="">
                                                        <div class="well">
                                                            <p>Dear <b><?php if(!empty($registration_info['firstname'])) echo $registration_info['firstname']; ?></b>,</p>
                                                            <p>Thank you for opening an account with ForexRay.</p>
                                                            <p>Your account login details have been sent to the email address you have provided us - <?php if(!empty($registration_info['email'])) echo $registration_info['email']; ?>. Please check your inbox (as well as your spam folder).</p>
                                                        </div>
                                                        
                                                        <p>You can use the same Login and Password to log in to any of our 9 trading platforms, which you can access any time from our Platforms section.</p>
                                                        
                                                        <h4 class="title">HOW TO GET STARTED</h4>

                                                        <p>To start trading, please <a href="<?php echo base_url(); ?>/home/metatrader">download and install the ForexRay MetaTrader</a>, or use the credentials sent to your email address to log in to any of our 8 trading platforms that you can download or access any time from the Platforms section.</p>

                                                        <h4>HOW TO FUND YOUR ACCOUNT</h4>

                                                        <p>With the login details sent to your email address you can log in to our Members Area at ForexRay.com, where you can monitor your account, make deposits and withdrawals, and perform other account-related functions.</p>

                                                        <p>You can close this window now, or you can click here to go to our homepage.</p>

                                                        <p>The ForexRay Team</p>
                                                        
                                                    </div>
                                                    <div style="clear: both"></div>
                                                </div>
                                            </div>
										
                                    </div>
                                    <div>&nbsp;</div>
                                </div>
                            </div>
							
                            <div class="right_ca fl">
                                
                                <?php $this->load->view('common/sidebar_1'); ?>
                                
                                <div class="mt40 ml10 stocks_list">
                                    <div class="tabs">
                                        <ul class="navlist">
                                            <li class="bdr_none first"><a href="#first"><span>Forex</span></a></li>
                                            <li><a href="#second" class="second"><span>Commodities</span></a></li>
                                            <li><a href="#third"><span>Stocks</span></a></li>
                                            <li class="li_last"><a href="#four"><span>Indices</span></a></li>					
                                        </ul>

                                        <div class="tabs_content">
                                            <div id="first" class="first">
                                                <div class="mi_row">
                                                    <div class="mi_clo1 fwb">Instrument</div>
                                                    <div class="mi_clo2 fwb">Bid/Ask</div>
                                                    <div class="mi_clo3 fwb c_black">Spread</div>
                                                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                                                        <div class="mt10">
                                                            <div class="mi_clo1"><img src="<?= base_url(); ?>misc/css/images/euro.png" alt="symbol" /><img src="<?= base_url(); ?>misc/css/images/usd.png" alt="symbol" />EURUSD</div>
                                                            <div class="mi_clo2">CLOSED</div>
                                                            <div class="mi_clo3 tac">0.2</div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div id="second" class="second">
                                                Commodities updated soon
                                            </div>
                                            <div id="third" class="third">
                                                Stocks updated soon
                                            </div>
                                            <div id="four" class="four">
                                                Indicies updated soon
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="updates ml10 mt12 mb20">
                                    <div class="tabs_latest">
                                        <ul class="navlist">
                                            <li class="bdr_none first"><a href="#first"><span class="news">News</span></a></li>
                                            <li class="last"><a href="#second"><span class="events">Events</span></a></li>
                                        </ul>
                                        <div class="news_list">
                                            <div id="first" class="first">
                                                <?php for ($i = 0; $i <= 1; $i++) { ?>
                                                    <div class="c_555 mt10 tdu news_content">Stock Market flat on the day on fiscal conc...</div>
                                                    <span class="pl10"><b>14/12/2012 21:30:23</b></span>
                                                <?php } ?>
                                            </div>
                                            <div id="second" class="second">
                                                Events 
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                            <div class="cl"></div>
                        </div>
                    </div>
                </div>
            </div>
<!--	PAGE content -->
</div>
<style type="text/css">
    .req{
        color:#D83B39;
    }
</style>

<?php $this->load->view('common/footer');?>




