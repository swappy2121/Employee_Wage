
<?php

    echo "Welcome to Employee Wage Computation Program \n";


    $wagePerHour = 20;
    $empHours;
    $workingDaysPerMonth = 20;
    $numOfWorkingDays = 1;
    $maxWorkingHours = 100;
    $totalEmpHours = 0;
    $monthlyEmpWage = 0;

    while($numOfWorkingDays <= $workingDaysPerMonth && $totalEmpHours <= $maxWorkingHours){
        $num = rand(0,2);
        switch($num){
            case 1:
                $empHours = 8;
                break;

            case 2:
                $empHours = 4;
                break;

            default:
                echo "Employee is absent \n";
                $empHours = 0;
                break;
        }
        $numOfWorkingDays++;
        $totalEmpHours += $empHours;
        $dailyEmpWage = $wagePerHour * $empHours;
        $monthlyEmpWage +=$dailyEmpWage;
    }
   
    echo "Monthly Employee Wage :" . $monthlyEmpWage;
?>