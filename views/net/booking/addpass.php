<style>
    .panel-reg .panel{
        box-shadow: none;
        background: #fff;
        border: 1px solid #eee;
        border-radius: 0px;
/*        box-shadow: 0px 0px 1px rgba(0,0,0,.1);*/
    }
</style>

<div class="panel panel-reg" >
    <form method="post" id="add-passes" class="form-horizontal" enctype="multipart/form-data">
        
        <div class="reg-header" style="background: #fff; border-bottom: 1px solid #ddd; padding: 15px 30px;">
            <h2 style="font-size: 18px">Group Registration - Purchase additional passes</h2>
        </div>

        <div class="panel-body" style="padding: 35px 40px 45px 40px;">
            
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            
            <br>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-silver">
                        <div class="panel-heading">
                            <h4 class="text-left text-default1 h4-packs text-uppercase">Silver Package</h4>
                            <hr class="hr-packs-gold">
                        </div>
                        <div class="panel-body">
                            <p class="text-gold">Early Bird <strong>$150 | RWF 125,000</strong><br> (valid till 10 April 2017)<br>
                            Normal Rate <strong>$200 | RWF 170,000</strong></p>
                            <div class="clearfix"></div>
                            <span class="text-default"><strong>Gives access to:</strong></span><hr class="hr-packs-gold">
                            <ul class="text-gold">
                              <li>Smart Africa Exhibition</li>
                              <li>Smart Africa Conference</li>
                              <li>Smart Africa Leaders Summit Plenary</li>
                              <li>Smart Invest Program</li>
                              <br>
                            </ul>
                        </div>
                        <div class="panel-footer">
                        
                            <label>Number :</label>  
                            <select name="allocate-Silver_size" class="form-control input-sm pull-right" style="width: 120px">
                                <?php
                                for($i=0;$i<11;$i++){?>
                                <option value="<?=$i?>"><?=$i?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-gold1">
                        <div class="panel-heading">
                            <h4 class="text-left text-default1 h4-packs text-uppercase">Gold Package</h4>
                            <hr class="hr-packs-gold">
                        </div>
                        <div class="panel-body">
                            <p class="text-default">Early Bird <strong>$350 | RWF 290,000</strong> <br>(valid till 10 April 2017)<br>
                            Normal Rate <strong>$500 | RWF 425,000</strong></p>
                            <div class="clearfix"></div>
                            <span class="text-default"><strong>Gives access to:</strong></span><hr class="hr-packs-gold">
                            <ul class="text-default">
                              <li>Smart Africa Exhibition</li>
                              <li>Smart Africa Conference</li>
                              <li>Smart Africa Leaders Summit Plenary</li>
                              <li>Smart Invest Program</li>
                              <li>Smart Africa Gala Dinner</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                        
                            <label>Number :</label>  
                            <select name="allocate-Gold_size" class="form-control input-sm pull-right" style="width: 120px">
                                <?php
                                for($i=0;$i<11;$i++){?>
                                <option value="<?=$i?>"><?=$i?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-platinum1">
                        <div class="panel-heading">
                            <h4 class="text-left text-default1 h4-packs text-uppercase">Platinum Package</h4>
                            <hr class="hr-packs-gold">
                        </div>
                        <div class="panel-body">
                            <p class="text-gold">Rate <strong>$750 | RWF 635,000</strong><br><br>
                              </p>
                            <div class="clearfix"></div>
                            <span class="text-default"><strong>Gives access to:</strong></span><hr class="hr-packs-gold">
                            <ul class="text-gold">
                              <li>Unlimited Access to the Smart Networking room</li>
                              <li>Smart Africa Exhibition</li>
                              <li>Smart Africa Conference</li>
                              <li>Smart Africa Leaders Summit Plenary</li>
                              <li>Smart Invest Program</li>
                              <li>Smart Africa Gala Dinner</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                        
                            <label>Number :</label>  
                            <select name="allocate-Platinum_size" class="form-control input-sm pull-right" style="width: 120px">
                                <?php
                                for($i=0;$i<11;$i++){?>
                                <option value="<?=$i?>"><?=$i?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="<?=DN?>/net" class="btn btn-default btn-md"> <i class="fa fa-angle-double-left"></i> Back</a>
                    <input type="hidden" name="webToken" value="56">
                    <input type="hidden" name="request" value="passes-addmore">
                    <input type="hidden" name="token" value="true">
                    <input type="hidden" name="task" value="passes-addmore">
                    <button type="submit" class="submit_btn btn orange-bg white-color btn-default btn-md pull-right"> <i class="fa fa-shopping-cart"></i> Allocate</button>
                </div>
            </div>
        </div>
    </form>
</div>
    