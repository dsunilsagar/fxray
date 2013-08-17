    <?php $this->load->view('common/userpages/main_header'); ?>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/ckeditor/adapters/jquery.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jqgrid_new/js/i18n/grid.locale-en.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jqgrid_new/js/jquery.jqGrid.min.js"></script>
    
    
    <script type="text/javascript">
        var site_url = '<?php echo site_url(); ?>'
        $(document).ready(function(){
            $.ajaxSetup({
                jsonp: null,
                jsonpCallback: null
            });
			
            $('.user_details').html('<?php echo $info[1].", ".$info[0]?>');
            
            tableToGrid("#table-to-grid", {
                height:'auto',
                altRows: true,
                altclass :'alt-row',
                pager: '#grid_pager',
                pgbuttons:false, recordtext: '',
                pgtext : "Page {0} of {1}",
                recordtext: "View {0} - {1} of {2}",records:1000,
                jqModal: false,
                loadtext:'<img src="<?php echo base_url(); ?>/public/images/36.gif"/>'
            });
        });

    </script>

    <style type="text/css">
        div.panel select {
            width: 180px !important;
        }
    </style>

</head>


<body class="app">
    <?php $this->load->view('common/userpages/leftnav'); ?>

    <div class="right_content">

        <?php $this->load->view('common/userpages/menu_header'); ?>


        <section id="secondary_bar" class="section">

            <div class="breadcrumbs_container">
                <article class="breadcrumbs article">
                    <img src="<?php echo base_url(); ?>misc/css/images/fav.png" class="fl bread_logo" />
                    <div class="breadcrumb_divider"></div>
                    <a class="current">Trade</a>
                </article>
                
            </div>
        </section><!-- end of secondary bar -->



        <section id="main" class="column">


            <div class="form_prp mar0">


                <!-- START @@ CONTENT GOES HERE-->
<div class="grid-wrapper">
<table id="table-to-grid" class="gradient-styleXXX table-to-grid ui-jqgrid-htable" cellspacing="1" cellpadding="3" border="0" width="100%" style="font-size:12px; font-family:Tahoma, Arial, Helvetica, sans-serif;">
    <tr align="right" style="background-color: #a0a0a0;">
        <th align="left"><b>Order</b></th>
        <th><b>Time</b></th>
        <th><b>Type</b></th>
        <th><b>Lots</b></th>
        <th><b>Symbol</b></th>
        <th><b>Price</b></th>
        <th><b>S/L</b></th>
        <th><b>T/P</b></th>
        <th><b>Price</b></th>
        <th><b>Comm</b></th>
        <th><b>Swap</b></th>
        <th><b>Profit</b></th>
    </tr>
    <tbody>
<?php
$size = sizeof($info);
  $beginIndex = 3;


  $balance     = $this->mql_model->MQ_GetParam($info[$beginIndex]);
  $equity      = $this->mql_model->MQ_GetParam($info[$beginIndex+1]);
  $margin      = $this->mql_model->MQ_GetParam($info[$beginIndex+2]);
  $free_margin = $this->mql_model->MQ_GetParam($info[$beginIndex+3]);
  $margin_level= $margin!=0 ? number_format(100*($equity/$margin),2,'.','').'%' : '0%';

  $cnt = 0;
  for($i=$beginIndex+4;$i<$size;$i++)
    {
     if ($info[$i]==='0') break;
     $row = explode("\t",$info[$i]);
?>
  <tr align="right" bgcolor="<?=($cnt%2?'#e0e0e0':'#ffffff')?>">
    <td align="left"><?=$row[0]?></td>
    <td><?=$row[1]?></td>
    <td><?=$row[2]?></td>
    <td><nobr><?=$row[3]?></nobr></td>
    <td><?=strtolower($row[4])?></td>
    <td><nobr><?=$row[5]?><nobr></td>
    <td><nobr><?=$row[6]?><nobr></td>
    <td><nobr><?=$row[7]?><nobr></td>
    <td><nobr><?=$row[8]?><nobr></td>
    <td><nobr><?=$row[9]?><nobr></td>
    <td><nobr><?=$row[10]?><nobr></td>
    <td><nobr><?=$row[11]?><nobr></td>
  </tr>
<?php
     ++$cnt;
    }

  $profit = $this->mql_model->MQ_GetParam($info[$i+3])+$this->mql_model->MQ_GetParam($info[$i+1])+$this->mql_model->MQ_GetParam($info[$i+2]);
?>
  

  </tbody>
</table>
</div>
      <div id="grid_pager"></div>
          
<div>
    <table class="table-hor-minimalist" summary="Summery">
        <tbody>
            <tr class="row"><td>Balance: </td><td><nobr><?=$balance?></nobr></td></tr>
            <tr class="row"><td>Equity: </td><td><nobr><?=$equity?></nobr></td></tr>
            <tr class="row"><td>Margin: </td><td><nobr><?=$margin?></nobr></td></tr>
            <tr class="row"><td>Free margin: </td><td><nobr><?=$free_margin?></nobr></td></tr>
            <tr class="row"><td>Margin level: </td><td><nobr><?=$margin_level?></nobr></b></td></tr>
            <tr class="row"><td align="right" colspan='2'><b><?=$profit?></b></td></tr>
        </tbody>
    </table>
</div>
                
<?php
  $cnt = 0;
  for($i+=4;$i<$size;$i++)
    {
     if ($info[$i]==='0') break;
     $row = explode("\t",$info[$i]);
?>
  <div>
    <div class="row"><?=$row[0]?></div>
    <div class="row"><?=$row[1]?></div>
    <div class="row"><?=$row[2]?></div>
    <div class="row"><nobr><?=$row[3]?></nobr></div>
    <div class="row"><?=strtolower($row[4])?></div>
    <div class="row"><nobr><?=$row[5]?><nobr></div>
    <div class="row"><nobr><?=$row[6]?><nobr></div>
    <div class="row"><nobr><?=$row[7]?><nobr></div>
    <div class="row"><nobr><?=$row[8]?><nobr></div>
    <div class="row" colspan="3">&nbsp;</div>
  </div>
<?php
     ++$cnt;
    }
?>

                <!-- END @@ CONTENT GOES HERE-->


            </div>
        </section>

        <!--Start@@code for the Modal Window-->

        <div id="addpayment" class="m_w">

        </div>


        <!--End@@code for the Modal Window-->

        <!-- End of RTE Files -->

    </div>

</body>

</html>