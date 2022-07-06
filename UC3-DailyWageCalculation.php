<?php
     

     echo "Welcome to employee wage computation program \n";

        $isPresent = 1;        
        $isPartTime = 2;
        $wagePerHr = 20;
        $dailyEmpWage;
        $empHrs;
        $num = rand(0,2);

           switch($num){
            case 1:
                   $empHrs = 8;
                   break;
            case 2:
                   $empHrs = 4;
                   break;
            default:                   
                   $empHrs = 0;             
        }
               $dailyEmpWage = $empHrs*$wagePerHr;
               echo "daily employee wage of employee is $dailyEmpWage"; 
            
    
?>