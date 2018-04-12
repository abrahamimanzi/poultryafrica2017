<div class="panel panel-reg" >
    <form method="post" id="reg-form" class="form-horizontal" enctype="multipart/form-data">
        
        <div class="reg-header" style="background: #fff; border-bottom: 1px solid #ddd; padding: 15px 30px;">
            <h2 style="font-size: 18px">Group Registration - Summary</h2>
        </div>

        <div class="panel-body" style="padding: 5px 30px 15px 30px;">
            <br>
            <table width="100%" style="color: #2a51a3">
                <tbody>
                    <tr>
                        <td width="50%">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="width: 140px">
                                            <b>Company Name:</b>
                                        </td>
                                        <td>
                                            <span><?=$session_subscriber_data->company_name?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Administrator:</b>
                                        </td>
                                        <td>
                                            <span><?=$session_subscriber_data->firstname?> <?=$session_subscriber_data->lastname?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Group ID:</b>
                                        </td>
                                        <td>
                                            <span><?=$session_subscriber_data->group_ID?></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="50%">
                            <!-- <div style="float:right" class="ituButton">
                                <a href="<?=DN?>/net/group/passes/addmore" class="btn btn-orange btn-default white-color orange-bg" style="background-image: none;"><i class="fa fa-plus-circle" style="font-size: 25px;"></i> <span class="pull-right" style="margin-top: 4px; padding-left: 5px">Purchase Additional passes</span></a>&nbsp;
                            </div> -->
                        </td>
                    </tr>   
                </tbody>
            </table>
            <br>
            <hr style="margin: 0px">
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="reg-header" style="background: #fff; padding: 15px 0px;">
                        <h2 style="font-size: 15px">Assigned passes</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed no-margin">
                          <thead class="tb_head">
                              <tr>
                                <th>Pass type</th>
                                <th style="width: 80px">Total</th>
                                <th style="width: 90px">Remaining</th>
                                <th style="width: 90px">Registered</th>
                                <th style="width: 120px">Plan</th>
                                <th style="width: 90px">Discount</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php 
                                $subscategTable = new \SubscriberCategory();
                                $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `subscriber_ID`='{$session_subscriber_ID}' AND `type`='Assigned' ORDER BY `type` DESC");

                                if($subscategTable->count()){
                                    foreach($subscategTable->data() as $subscateg_data){
                                        $categTable = new ParticipantCategory();
                                        $categTable->selectQuery("SELECT * FROM `events_participant_category` WHERE `ID`='{$subscateg_data->category_ID}' ORDER BY `type` ASC");
                                        $categ_data = $categTable->first();
                                        ?>
                                        <tr>
                                            <td><?=$categ_data->name?></td>
                                            <td><?=$subscateg_data->size?></td>
                                            <td><?=$subscateg_data->size-$subscateg_data->size_used?></td>
                                            <td><?=$subscateg_data->size_used?></td>
                                            <td><?=$subscateg_data->plan?></td>
                                            <td><?php if($subscateg_data->discount){ echo $subscateg_data->discount.'%'; }?></td>
                                        </tr>
                                        <?php
                                    }
                                }else{?>
                                  <tr>
                                      <td colspan="7">
                                        Empty purchased passes list</td>
                                  </tr>
                              <?php }
                            ?>
                           </tbody>
                        </table>
                    </div>
                    
                    <div class="table-responsive">

                        <div class="reg-header" style="background: #fff; border-bottom: 1px solid #ddd; padding: 15px 0px;">
                            <h2 style="font-size: 15px">Purchased passes</h2>
                        </div>
                        <table class="table table-bordered table-condensed no-margin">
                          <thead class="tb_head">
                              <tr>
                                <th>Pass type</th>
                                <th style="width: 90px">Total</th>
                                <th style="width: 90px">Remaining</th>
                                <th style="width: 120px">Registered</th>
                                <th style="width: 90px">Plan</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php 
                                $subscategTable = new \SubscriberCategory();
                                $subscategTable->selectQuery("SELECT* FROM `subscriber_category` WHERE `subscriber_ID`='{$session_subscriber_ID}' AND `type`='Allocated' ORDER BY `type` DESC");

                                if($subscategTable->count()){
                                    foreach($subscategTable->data() as $subscateg_data){
                                        $categTable = new ParticipantCategory();
                                        $categTable->selectQuery("SELECT * FROM `events_participant_category` WHERE `ID`='{$subscateg_data->category_ID}' ORDER BY `type` ASC");
                                        $categ_data = $categTable->first();
                                        ?>
                                        <tr>
                                            <td><?=$categ_data->name?></td>
                                            <td><?=$subscateg_data->size?></td>
                                            <td><?=$subscateg_data->size-$subscateg_data->size_used?></td>
                                            <td><?=$subscateg_data->size_used?></td>
                                            <td><?=$subscateg_data->plan?></td>
                                        </tr>
                                        <?php
                                    }
                                }else{?>
                                  <tr>
                                      <td colspan="7">
                                        Empty purchased passes list</td>
                                  </tr>
                              <?php }
                            ?>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    