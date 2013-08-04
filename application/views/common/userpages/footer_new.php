<div id="footer" class="p_f bounceInUp animation_setting">
    <a href="#">Site Map</a>
    <a href="<?php echo site_url('userpages/support_request'); ?>">Contact us</a>
</div>

<script type="text/javascript">
    $(function(){
        
        $('.j_submenu_toggle').on('click',function(){
            $(this).parent().next('.lft_sub_menu').slideToggle();
            $(this).toggleClass('right-arrow');
        });
        
        $('.j_left_nav li a').removeClass('active');
        $('.j_left_nav li a').each(function(k,v){
            // console.log($(this).attr('href').split('/').pop())
            if($(this).attr('href').split('/').pop()==window.location.href.split('/').pop()){
                $(this).addClass('active');
                return;
            }
        });
        
        
        $('.j_general_validate').validate({
            errorElement: 'div'
        });

        $('.j_general_submit').on('click',function(){
            $(this).parents('form').submit();
        });
        
    })
    
</script>