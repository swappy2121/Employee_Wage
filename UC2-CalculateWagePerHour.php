<?php
     

     echo "Welcome to employee wage computation program \n";

        $present = 1; 
        $num = rand(0,1);
        $wagePerHr = 20;
        $empHrs;
                      
            if($num == $present){
                $empHrs=8;

            }
            else{
                $empHrs=0;
            }
           
               $dailyEmpWage = $empHrs*$wagePerHr;
               echo "employee is present and daily employee wage is $dailyEmpWage"; 
            
    
?>