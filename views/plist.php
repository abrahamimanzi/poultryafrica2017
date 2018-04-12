<?php 
switch($names) {
        case 'radisson':
            $suite = array(
                         'Single Rooms',
                         'Business Class Rooms',
                         'Junior Suites',
                         'Presidential Suites',
                         'Royal Suites',
                        );
            $price = array(
                         '290 USD',
                         '340 USD',
                         '540 USD',
                         '2940 USD',
                         '3940 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'serena':
            $suite = array(
                         'Standard / Deluxe',
                         'Superior Rooms',
                         'Junior Suites',
                        );
            $price = array(
                         '270 USD',
                         '310 USD',
                         '340 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'marriot':
            $suite = array(
                         'Single Rooms',
                         'Club Rooms',
                         'Junior Suites',
                         'Executive Suites',
                         'Presidential Suites',
                        );
            $price = array(
                         '231 USD',
                         '286 USD',
                         '385 USD',
                         '3300 USD',
                         '5500 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'collines':
            $suite = array(
                         'Single Rooms',
                         'Double Rooms',
                        );
            $price = array(
                         '230 USD',
                         '250 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
         case 'golf':
            $suite = array(
                         'Standard Rooms',
                         'Deluxe Rooms',
                         'Executive Suites',
                        );
            $price = array(
                         '175 USD',
                         '200 USD',
                         '300 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'portofino':
            $suite = array(
                
                         'Superior Rooms',
                         'Deluxe Rooms',
                         'Suite Rooms',
                        );
            $price = array(
                         '200 USD',
                         '240 USD',
                         '290 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'gorillas':
            $suite = array(
                
                         'Single Rooms',
                        );
            $price = array(
                         '90 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'lando':
            $suite = array(
                
                         'Bungalow / Pavilon',
                        );
            $price = array(
                         '118 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'legacy':
            $suite = array(
                
                         'Superior King Rooms',
                        );
            $price = array(
                         '188 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 't2000':
            $suite = array(
                
                         'Standard Rooms',
                         'Executive Suite',
                        );
            $price = array(
                         '160 USD',
                         '300 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'ubumwe':
            $suite = array(
                
                         'Apartment Rooms',
                         'Junior Suite',
                         'Deluxe Rooms',
                         'Classic Terrace',
                        );
            $price = array(
                         '200 USD',
                         '200 USD',
                         '200 USD',
                         '200 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'karisimbi':
            $suite = array(
                         
                         'Standard Rooms',
                         'Superior Rooms',
                         'Deluxe Rooms',
                         'Executive Suites',
                        );
            $price = array(
                         '95 USD',
                         '135 USD',
                         '135 USD',
                         '165 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'galaxy':
            $suite = array(
                         'Standard Rooms',
                         'Deluxe Rooms',
                         'Twin Rooms',
                         'Junior Suites',
                         'Superior Suites',
                        );
            $price = array(
                         '140 USD',
                         '150 USD',
                         '170 USD',
                         '200 USD',
                         '250 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'hilltop':
            $suite = array(
                         'Standard Rooms',
                         'Superior Rooms',
                         'Deluxe Rooms',
                         'Executive Suites',
                        );
            $price = array(
                         '80 USD',
                         '80 USD',
                         '150 USD',
                         '200 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'mirror':
            $suite = array(
                         'Single Standard Rooms',
                         'Standard Rooms',
                         'Deluxe Rooms',
                         'Junior Suites',
                        );
            $price = array(
                         '100 USD',
                         '120 USD',
                         '140 USD',
                         '200 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'legend':
            $suite = array(
                         'Standard Rooms',
                         'Deluxe Rooms',
                         'Junior Suites',
                        );
            $price = array(
                         '80 USD',
                         '100 USD',
                         '120 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'garr':
            $suite = array(
                         'Standard Rooms',
                         'Superior Rooms',
                         'Deluxe Rooms',
                         'Junior Suites',
                        );
            $price = array(
                         '99 USD',
                         '108 USD',
                         '117 USD',
                         '144 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'lemigo':
            $suite = array(
                         'Standard Rooms',
                         'Deluxe Rooms',
                         'Executive Rooms',
                         'Junior Suites',
                         'Executive Suites',
                        );
            $price = array(
                         '160 USD',
                         '180 USD',
                         '220 USD',
                         '300 USD',
                         '350 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'orient':
            $suite = array(
                         'Standard Rooms',
                         'Twin Rooms',
                         'Deluxe Rooms',
                         'Superior Suites',
                         'Junior Suites',
                        );
            $price = array(
                         '150 USD',
                         '180 USD',
                         '210 USD',
                         '250 USD',
                         '280 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
    default:
       //
        $suite = array(
                
                         'Starting from :',
                        );
            $price = array(
                         'TBD ',
                        );
        foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><h4 class="text-default"><?=$suite; ?> </h4></span> <span class="rl"><h4 class="text-default"> - <?=$price; ?> - </h4></span>
                        </li>
        <?php };
        
        }
?>
<style>
    .htl{
        margin-left: 0;
        height: 120px;
    }
    .htl li{
        margin-left: -10px;
        padding: 3px 0;
        text-align: left;
        font-size: 13px;
        list-style: none;
        color: #000;
    }
    .htl li .rl{
        font-size: 13px;
        margin-right: 10px;
        float: right;
    }
    .htl li .lr{
        margin-left: 6px;
        float: left;
    }
</style>