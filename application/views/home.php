<?php
    $data['active_link'] = "active";
    $data['active'] = "0";
?>
	
<?php $this->load->view('common/header', $data);?>

	

<div class="outside">
<div class="pg_width">
    <div class="left_ca fl">
            <div class="slider_wrapper">
                <?php  if(!empty($news)){ $sliderHtmlCaptions=''; ?>
                <div class="sliders mt10 ml5">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <?php foreach ($news as $k => $v) { ?>
                            <img src="<?php echo base_url().$v->attachment; ?>" alt="" data-transition="slideInRight" title="#slider_htmlcaption_<?php echo $k; ?>" height="270" style="height:270px;"/>
                            <?php $sliderHtmlCaptions.='<div id="slider_htmlcaption_'.$k.'" class="nivo-html-caption f11">
                                        <div class="economica_reg f24">'.$v->heading.'</div>
                                        <div>'.substr(filterStringDecode($v->description), 0, 100).' ...</div>
                                        <div class="more fr tahoma_bold f11"><a href="'.site_url('news/full_story/' . $v->id).'">More</a></div>
                                    </div>'; 
                            ?>
                            <?php } ?>
                        </div>
                        <?php echo $sliderHtmlCaptions; ?>
                    </div>
                </div>
                <?php }  ?>
            </div>

            <script type="text/javascript" src="<?=base_url()?>misc/js/jquery.nivo.slider.js"></script>
            <div>
                    <div class="fl box">
                            <?php if(!empty($home_pages_sections[0]->content)){ echo html_entity_decode($home_pages_sections[0]->content); } ?>	
							<?php if(!empty($home_pages_sections[0]->read_more_link)){  ?>	
							<div class="overlay"><a style="color: white;" href="<?php echo $home_pages_sections[0]->read_more_link; ?>">Read More</a></div>
							<?php } ?>
<?php /*?>                            <?php if(!empty($home_pages_sections[0]->read_more_link)){  ?>	
                            <div class="fr r_more brad4"><a href="<?php echo $home_pages_sections[0]->read_more_link; ?>">Read More</a></div> <?php } ?>
<?php */?>                           
                    </div>
                    <div class="fl box">
                            <?php if(!empty($home_pages_sections[1]->content)){ echo html_entity_decode($home_pages_sections[1]->content); } ?>	
                           <?php /*?> <?php if(!empty($home_pages_sections[1]->read_more_link)){  ?>	
                            <div class="fr r_more brad4"><a href="<?php echo $home_pages_sections[1]->read_more_link; ?>">Read More</a></div>
                            <?php } ?><?php */?>
							<?php if(!empty($home_pages_sections[1]->read_more_link)){  ?>	
							<div class="overlay"><a style="color: white;" href="<?php echo $home_pages_sections[1]->read_more_link; ?>">Read More</a></div>
							<?php } ?>
							
                    </div>
                    <div class="fl box">
                            <?php if(!empty($home_pages_sections[2]->content)){ echo html_entity_decode($home_pages_sections[2]->content); } ?>	
                           <?php /*?> <?php if(!empty($home_pages_sections[2]->read_more_link)){  ?>	
                            <div class="fr r_more brad4"><a href="<?php echo $home_pages_sections[2]->read_more_link; ?>">Read More</a></div>
                            <?php } ?><?php */?>
							<?php if(!empty($home_pages_sections[2]->read_more_link)){  ?>	
							<div class="overlay"><a style="color: white;" href="<?php echo $home_pages_sections[2]->read_more_link; ?>">Read More</a></div>
							<?php } ?>
                    </div>						
                    <div class="cl"></div>			
            </div>	

            <div class="ml10 mt12">
                    <?php if(!empty($home_pages_sections[3]->content)){ echo html_entity_decode($home_pages_sections[3]->content); } ?>	
                    <?php if(!empty($home_pages_sections[3]->read_more_link)){  ?>	
                    <div class="fr r_more brad4"><a href="<?php echo $home_pages_sections[3]->read_more_link; ?>">Read More</a></div>
                    <?php } ?>
            </div>
<!--
            <div class="bdr stock_rates ml10">
                    <marquee id="m5" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4" height="20">

                    <span class="content_bold">BHEL 
                            &nbsp;<span class="green">232.6</span> 
                    </span>|

                    <span class="content_bold">BAAUTO 
                            &nbsp;<span class="red">2131.9</span> 
                    </span>|

                    <span class="content_bold">BHATE 
                            &nbsp;<span class="green">322.1</span> 
                    </span>|

                    <span class="content_bold">CIPLA 
                            &nbsp;<span class="red">417.45</span> 
                    </span>|

                    <span class="content_bold">COALIN 
                            &nbsp;<span class="green">359.95</span> 
                    </span>|

                    <span class="content_bold">DLFLIM 
                            &nbsp;<span class="green">235.35</span> 
                    </span>|

                    <span class="content_bold">GAIL 
                            &nbsp;<span class="red">357.4</span> 
                    </span>|

                    <span class="content_bold">HDFC 
                            &nbsp;<span class="green">832.95</span> 
                    </span>|

                    <span class="content_bold">HDFBAN 
                            &nbsp;<span class="green">684.5</span> 
                    </span>|

                    <span class="content_bold">HERHON
                            &nbsp;<span class="red">1897.35</span>
                    </span>|

                    <span class="content_bold">HINDAL 
                            &nbsp;<span class="green">134.15</span> 
                    </span>|

                    <span class="content_bold">WIPRO 
                            &nbsp;<span class="red">396.9</span> 
                    </span>


            </marquee>
            </div>-->
            <!--<div class="mb10">
                    <marquee id="m5" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4" height="20">
                            <img src="" />
                    </marquee>
            </div>-->

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
                                                <?php for($i=0;$i<=5;$i++){ ?>
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
                                        <?php for($i=0; $i<=1; $i++){ ?>
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
</div>
<div class="cl"></div>
<div class="trade_img">
<div class="pg_width">
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/visa_card.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/master_card.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/Neteller.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/Skrill.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/SofortBanking.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/WebMoney.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/ukash.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/iDeal.png" alt="trading partners" /></span>
		<span class="partners"><img src="<?= base_url(); ?>public/images/logos/bank-wire.png" alt="trading partners" /></span>
		
	</div>
</div>

</div>
	
<?php $this->load->view('common/footer');?>