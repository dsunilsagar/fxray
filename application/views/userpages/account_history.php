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
                recordtext: "View {0} - {1} of {2}",records:10,
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
                    <a class="current">Account History</a>
                </article>
                
            </div>
        </section><!-- end of secondary bar -->



        <section id="main" class="column">


            <div class="form_prp mar0">


                <!-- START @@ CONTENT GOES HERE-->
<div class="grid-wrapper">
<table id="table-to-grid" cellspacing="1" cellpadding="3" border="0" width="100%" style="font-size:12px; font-family:Tahoma, Arial, Helvetica, sans-serif;">
  <tr align="right" style="background-color: #a0a0a0;">
    <th align="left"><b>Order</b></th>
    <th><b>Time</b></th>
    <th><b>Type</b></th>
    <th><b>Lots</b></th>
    <th><b>Symbol</b></th>
    <th><b>Price</b></th>
    <th><b>S/L</b></th>
    <th><b>T/P</b></th>
    <th><b>Time</b></th>
    <th><b>Price</b></th>
    <th><b>Swap</b></th>
    <th><b>Profit</b></th>
  </tr>
  <tbody>
<?php
  $beginIndex = 3;
$size = sizeof($info);
  $cnt = 0;
  for($i=$beginIndex;$i<$size;$i++)
    {
     if ($info[$i]==='0') break;
     $row = explode("\t",$info[$i]);
     if (strpos($row[2],'balance')!==false)
       {
?>
  <tr align="right" bgcolor="<?=($cnt%2?'#e0e0e0':'#ffffff')?>">
    <td align="left"><?=$row[0]?></td>
    <td><?=$row[1]?></td>
    <td><?=$row[2]?></td>
    <td align="left" colspan="8"><nobr><?=$row[13]?><nobr></td>
    <td><nobr><?=$row[12]?><nobr></td>
  </tr>
<?php
       }
     else
       {
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
<?php
        if (strpos($row[2],'limit')!==false)
          {
?>
    <td colspan="2" align="right"><?=$row[13]?></td>
<?php
          }
        else
          {
?>
    <td><nobr><?=$row[11]?><nobr></td>
    <td><nobr><?=$row[12]?><nobr></td>
<?php
          }
?>
  </tr>
<?php
       }
     ++$cnt;
    }
  $profit_loss = $this->mql_model->MQ_GetParam($info[$i+6]);
  $deposit = $this->mql_model->MQ_GetParam($info[$i+1]);
  $credit = $this->mql_model->MQ_GetParam($info[$i+3]);
  $withdrawal = $this->mql_model->MQ_GetParam($info[$i+2]);
  $profit = $deposit+$profit_loss;
?>
  </tbody>
  </table>
</div>
       <div id="grid_pager"></div>
       
<div>
    <table class="table-hor-minimalist" summary="Summery">
        <tbody>
            <tr><td>Profit/Loss:</td><td><nobr><?= $profit_loss ?></nobr></td></tr>
            <tr><td>Credit: 	</td><td><nobr><?= $credit ?></nobr></td></tr>
            <tr><td>Deposit: 	</td><td><nobr><?= $deposit ?></nobr></td></tr>
            <tr><td>Withdrawal: </td><td><nobr><?= $withdrawal ?></nobr></b></td></tr>
            <tr><td align="right" colspan="2"><b><?= $profit ?></b></td></tr>
        </tbody>
    </table>
</div>

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