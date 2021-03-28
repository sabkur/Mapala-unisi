<div id="rating">
        <div class="rate-ex3-cnt">
            <div id="1" class="rate-btn-1 rate-btn"></div>
            <div id="2" class="rate-btn-2 rate-btn"></div>
            <div id="3" class="rate-btn-3 rate-btn"></div>
            <div id="4" class="rate-btn-4 rate-btn"></div>
            <div id="5" class="rate-btn-5 rate-btn"></div>
            <input type=hidden name=id_post value="<?php print $id; ?>">
        </div>
        <div class="box-result-cnt">
            <?php
            $queli = mysql_query("SELECT * FROM wcd_rate WHERE id_post = $id");                 
                while($data = mysql_fetch_assoc($queli)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
            ?> <br/>       
            
            <div class="rate-result-cnt">
                <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
                <div class="rate-stars"></div>
            </div>
            <script>
        // rating script
                $(function(){ 
                    $('.rate-btn').hover(function(){
                        $('.rate-btn').removeClass('rate-btn-hover');
                        var therate = $(this).attr('id');
                        for (var i = therate; i >= 0; i--) {
                            $('.rate-btn-'+i).addClass('rate-btn-hover');
                        };
                    });
                                    
                    $('.rate-btn').click(function(){    
                        var therate = $(this).attr('id');
                        var dataRate = 'act=rate&id_post=<?php print $id; ?>&rate='+therate; //
                        $('.rate-btn').removeClass('rate-btn-active');
                        for (var i = therate; i >= 0; i--) {
                            $('.rate-btn-'+i).addClass('rate-btn-active');
                        };
                        $.ajax({
                            type : "POST",
                            url : "ajax.php",
                            data: dataRate,
                            success:function(){}
                        });
                        
                    });
                });
            </script>
        </div>
    </div>