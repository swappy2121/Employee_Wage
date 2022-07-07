<?php
    
    echo "Welcome to Employee Wage Computation Program \n";

    $wagePerHour = 20;
    $empHours;
    $workingDaysPerMonth = 20;
    $numOfWorkingDays = 1;
    $monthlyEmpWage = 0;
   
    
    while($numOfWorkingDays <= $workingDaysPerMonth){
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
    $dailyEmpWage = $wagePerHour * $empHours;
    echo "Daily Wage Of Employees : $dailyEmpWage \n";
}
echo "Monthly Employee Wage : $monthlyEmpWage";
  
?>