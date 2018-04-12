<?php
include 'admin/core/init.php';

if(Input::checkInput('reference','get','1')){
    
    $token_ID = Input::get('reference','get');
    
    $participantItemTable = new \ParticipantItem();
    $participantItemTable->selectQuery("SELECT* FROM `events_participant_item` WHERE `token`=? ORDER BY `ID` DESC LIMIT 1",array($token_ID));
    if(!$participantItemTable->count()){
        Redirect::to(DN.'/404'); 
    }
        
    $participant_item_data = $participantItemTable->first();
    
    $amount_total = $participant_item_data->amount;
    $currency = $participant_item_data->currency;
    
    $subscriberTable = new \Subscriber();
    $subscriberTable->selectQuery("SELECT* FROM `subscriber` WHERE `group_ID`=?",array($participant_item_data->host_ID));
    $subscriber_data = $subscriberTable->first();
    
    $bill_to_name = $subscriber_data->company_name;
    
    if($participant_item_data->payment_state == "Confirmed"){
        
        class PDF extends FPDF{
            
            // Page header
            function Header()
            {
                
                // $this->Image(DN.'/img/logo.png',30,40,150);
                $this->Image(DN.'/img/tcl-logo.png',30,40,80);
                // Arial bold 15
                $this->SetFont('Arial','B',15);
                
                
                $this->SetFont('Arial','',10);
                // $this->Cell(0,40,'Makuza Peace Plaza 09th Floor, Bloc C',0,0,'R');
                // $this->Cell(0,65,'10 KN4 Avenue, Kigali, Rwanda',0,0,'R');
                // $this->Cell(0,95,' www.transformafricasummit.org',0,0,'R');
                // $this->Cell(0,130,'(+250) 732-301-014',0,0,'R');
                $this->Cell(0,65,EVENT,0,0,'R');
                $this->Cell(0,95,' www.poultryafrica2017.com',0,0,'R');
                $this->Cell(0,125,'Tel: '.PHONE1,0,0,'R');
                $this->Cell(0,150,'Email: '.EMAIL1,0,0,'R');
                // Move to the right
                $this->Cell(80);
                // Line break
                $this->Ln(90);
                $this->SetDrawColor(244,120,34);
                $this->Cell(0,0,'',1,1,'L');
                $this->Ln(30);
            }

//             Page footer
            function Footer(){
                // Position at 1.5 cm from bottom
                // $this->Image(DN.'/img/holder_email.jpg',0,720,600);
                
                $this->SetY(-40);
                $this->SetFont('Arial','',10);
                // Page number
                $this->Cell(0,10,'Page '.$this->PageNo().' of {nb}',0,0,'C');
            }
        }


        if ($participant_data->card_issue == 'VC') {
            $card_issue = 'Visa Card';
        }else{
            $card_issue = 'MastrerCard';
        }
        
        // Instanciation of inherited class
        $pdf = new PDF('P','pt','a4');
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(true,120);


        $pdf->SetY(160); 
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(0,0,'Receipt',0,0,'L');
        
        $pdf->SetY(185); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,Dates::get('d M Y, h:i:s A',$participant_item_data->payment_date),0,2,'L');
        
        $pdf->SetY(215); 
        $pdf->SetFont('Arial','',13);
        $pdf->Cell(0,0,'Your Registration ID',0,0,'L');
        
        
        $pdf->SetY(230);
        $pdf->SetX(30);
        $pdf->SetFillColor('255','255','255');
        $pdf->SetDrawColor('200','200','200');
        $pdf->Cell(155,30,'',1,1,'L',1);
        
        $pdf->SetY(245); 
        $pdf->SetX(35);
        $pdf->SetFont('Arial','B',13);
        $pdf->Cell(0,0,$participant_item_data->host_ID,0,0,'L');
        
        $pdf->SetY(225); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,-60,'Payment method: '.$card_issue,0,0,'R');
        $pdf->Cell(0,-30,'Card Number: '.$participant_item_data->card_number,0,0,'R');
        $pdf->Cell(0,0,'Receipt #: '.$participant_item_data->receipt_number,0,0,'R');
        $pdf->Cell(0,30,'Transaction #: '.$participant_item_data->transaction_number,0,0,'R');
        $pdf->Cell(0,60,'Payment Reference #: '.$participant_item_data->payment_rn,0,0,'R');
        
        
        $pdf->SetY(290);
        $pdf->SetX(20);
        $pdf->SetFillColor('240','240','240');
        $pdf->SetDrawColor('200','200','200');
        $pdf->Cell(555,105,'',1,1,'L',1);
        
        $pdf->SetY(310); 
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(0,0,'Bill To:',0,0,'L');
        
        $pdf->SetY(325);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,0,$bill_to_name,0,0,'L');
        $pdf->SetY(342);
        $pdf->Cell(0,0,$subscriber_data->company_address,0,0,'L');
//        $pdf->SetY(358);
        $pdf->SetY(342);
        $pdf->Cell(0,0,'Group ID #: '.$participant_item_data->host_ID,0,0,'L');
        $pdf->SetY(376);
        $pdf->Cell(0,0,$subscriber_data->phone,0,0,'L');
        
        $payment_info_name = trim($subscriber_data->firstname.' '.$subscriber_data->lastname);
        
        $pdf->SetY(310); 
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(0,0,'Payment Information',0,0,'R');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,32,$payment_info_name,0,0,'R');
        $pdf->Cell(0,64,'Paid: '.$currency.' '.number_format($amount_total),0,0,'R');
        
        $start_pt = 420;
        $pdf->SetY($start_pt); 
        $pdf->SetFont('Arial','B',10);
        
        $pdf->Cell(0,0,'#',0,0,'L');
        $pdf->SetFont('Arial','B',10);
        
        $pdf->SetY($start_pt); 
        $pdf->Cell(50);
        $pdf->Cell(50,0,'Registation ID',0,0,'C');
        
        $pdf->SetY($start_pt); 
        $pdf->Cell(150);
        $pdf->Cell(50,0,'Item',0,0,'C');
        
        $pdf->SetY($start_pt); 
        $pdf->Cell(245);
        $pdf->Cell(80,0,'Unit Price',0,0,'C');
        
        $pdf->SetY($start_pt); 
        $pdf->Cell(360);
        $pdf->Cell(0,0,'Discount',0,0,'L');
        
        $pdf->SetY($start_pt); 
        $pdf->Cell(420);
        $pdf->Cell(0,0,'Total',0,0,'R');
         
        
        $pdf->SetY($start_pt+10); 
        $pdf->SetDrawColor('200','200','200');
        $pdf->Cell(0,0,'',1,1,'L');
        
        
        $participantTable = new \Participant();
        $participantTable->selectQuery("SELECT `code`,`payment_rn`,`payment_state`,`payment_date`,`firstname`,`lastname`,`othername`,`email`,`unit_price`,`amount`,`discount`,`currency`,`category`,`pass_type`,`state`,`receipt_number`,`transaction_number`,`residence_country`,`residence_city`,`telephone` FROM `events_participant` WHERE `payment_rn`=? AND `payment_state`='Confirmed' ORDER BY `ID` DESC",array($participant_item_data->payment_rn));

        $items_array = array();
         foreach($participantTable->data() as $participant_data){
             $items_array[] = array('item'=>$participant_data->category.' Pass',
                                    'reg_code'=>$participant_data->code,
                                    'unit_price'=>$currency.' '.number_format($participant_data->unit_price),
                                    'discount'=>$participant_data->discount,
                                    'total'=>$currency.' '.number_format($participant_data->amount));
        }
        
        $item_number = 0;
        
        for($i = 0;$i<count($items_array);$i++){
            $item_number++;
            $this_row_data = (object)$items_array[$i];

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(0,25,$item_number,0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(66);
            $pdf->Cell(40,25,$this_row_data->reg_code,0,1,'L');

            $pdf->Ln(-25);
            $pdf->SetX(185);
            $pdf->Cell(40,25,$this_row_data->item,0,1,'C');

            $pdf->Ln(-25);
            $pdf->SetX(270);
            $pdf->Cell(90,25,$this_row_data->unit_price,0,1,'C');

            $pdf->Ln(-25);
            $pdf->SetX(370);
            $pdf->Cell(90,25,$this_row_data->discount.' %',0,1,'C');

            $pdf->Ln(-25);
            $pdf->SetX(480);
            $pdf->Cell(90,25,$this_row_data->total,0,1,'R');

            $pdf->Cell(0,0,'',1,1,'L');
        }
        
        // End Item
        
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(0,35,'Total: '.$currency.' '.number_format($amount_total),0,0,'R'); 
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,67,'VAT (18%) Inclusive',0,0,'R');

        $pdf->Output('I','RECEIPT-'.$participant_item_data->payment_rn.'.pdf');
        
        
    }
    
}



?>

<html>
    <head><title>Invoice</title></head>
    <body>
    </body>
</html>