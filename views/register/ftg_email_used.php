
 <?php 
    $email = $_POST['register-email'];
    $document_number = $_POST['register-document_number'];
    $participantTable = new \Participant();
    $participantTable->selectQuery("SELECT `code`,`payment_rn`,`firstname`,`lastname`,`othername`,`email`,`package_type`,`category`,`pass_type`,`state` FROM `events_participant` WHERE `email`=? || `document_number`=? ORDER BY `ID` DESC LIMIT 1",array($email,$document_number));

    if($participantTable->count()){
        $participant_data = $participantTable->first();?>

        <br>
        <div class="text-center" style="background: #fff; padding: 15px 20px 15px 20px;">
            
            <p class="" style="color: #777; font-size: 15px;">
             <span style="font-family: 'Roboto-Bold'; font-size: 15px"><?=$participant_data->firstname?> <?=$participant_data->lastname?></span>,
            you seem to have already registered for a pass for <?=EVENT?>.

                To upgrade your pass or get more information about your registration, contact us at <span style="font-family: 'Roboto-Bold'; font-size: 15px"><?=EMAIL1?></span><br>
                <br>
                <hr>
                <a href="<?=DN?>/ftg" class="btn btn-default btn-sm"><i class="fa fa-angle-double-left"></i> Back</a>
            </p>
        </div>
    <?php }?>