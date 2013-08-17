<div class="right_ca fl">
    <div class="demo mt20 ml10">
        <div>
            <img src="<?= base_url(); ?>/misc/css/images/open_trading.png" alt="Open Trading" />
            <img src="<?= base_url(); ?>/misc/css/images/open_demo.png" alt="Open Demo" class="mt8" />
            <img src="<?= base_url(); ?>/misc/css/images/live_chat.png" alt="Live Chat" class="mt8" />
        </div>
    </div>
    <div class="mt40 ml10 stocks_list">
        <div class="tabs" style="display:none">
            <ul class="navlist">
                <li class="bdr_none first"><a href="#first"><span>Forex</span></a></li>
                <li><a href="#second" class="second"><span>Commodities</span></a></li>
                <li><a href="#third"><span>Stocks</span></a></li>
                <li class="li_last"><a href="#four"><span>Indices</span></a></li>					
            </ul>

            <div class="tabs_content" >
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