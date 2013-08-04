<div class="bootstrap-scope ">
    <div class="accordion " id="accordion_<?php if(!empty($name)){ echo str_replace(' ','',$name); } ?>">
        <?php foreach($tname as $k=>$v){ ?>
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_<?php if(!empty($name)){ echo str_replace(' ','',$name); } ?>" href="#acc_<?php if(!empty($v)){ echo str_replace(' ','',$v).'_'.$k; } ?>">
                        <?php if(!empty($v)){ echo $v; } ?>
                    </a>
                </div>
                <div id="acc_<?php if(!empty($v)){ echo str_replace(' ','',$v).'_'.$k; } ?>" class="accordion-body collapse ">
                    <div class="accordion-inner">
                        <?php if(!empty($accordion_content[$k])){ echo $accordion_content[$k]; } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>