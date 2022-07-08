
<?php

    class EmployeeWage{
       
        public $empHours;
        public $isFullTime = 1;
        public $isPartTime = 2;
        public $isAbsent = 0;

       
        public function calculateMonthlyWage($company, $wagePerHour, $workingDaysPerMonth, $maxWorkingHours){
            $monthlyEmpWage = 0;
            $numOfWorkingDays = 0;
            $totalEmpHours = 0;
            
            while($numOfWorkingDays <= $workingDaysPerMonth && $totalEmpHours <= $maxWorkingHours){
                $num = rand(0,2); 
               
                switch($num){ 
                    case 1 :
                        $this->empHours = 8;
                        break;

                    case 2 :
                        $this->empHours = 4;
                        break;

                    default :
                        $this->empHours = 0;
                }
                $numOfWorkingDays++;
                $totalEmpHours += $this->empHours;
                
                $dailyEmpWage = $wagePerHour * $this->empHours;
                $monthlyEmpWage += $dailyEmpWage;
            }
            echo "$company total employee wage for a month :" . $monthlyEmpWage . "\n";
           
        }
    }

    
    $empWage = new EmployeeWage();
    $empWage->calculateMonthlyWage("TATA", 50, 25, 150);
    $empWage->calculateMonthlyWage("Mahindra", 30, 20, 100);
    $empWage->calculateMonthlyWage("Cognizant", 40, 22, 120);
?>