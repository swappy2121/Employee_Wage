
<?php
    class EmployeeWage{
        public $wagePerHour = 20;
        public $empHours;
        public $workingDaysPerMonth = 20;
        public $numOfWorkingDays = 0;
        public $maxWorkingHours = 100;
        public $totalEmpHours = 0;
        public $monthlyEmpWage = 0;

       
        public function calculateMonthlyWage(){
            while($this->numOfWorkingDays <= $this->workingDaysPerMonth && $this->totalEmpHours <= $this->maxWorkingHours){
                $num = rand(0,2);
           
                switch($num){
                    case 1:
                        $this->empHours = 8;
                        break;

                    case 2:
                        $this->empHours = 4;
                        break;

                    default:
                        echo "Employee is absent \n";
                        $this->empHours = 0;
                        break;
                }
                $this->numOfWorkingDays++;
                $this->totalEmpHours += $this->empHours;
              
                $dailyEmpWage = $this->wagePerHour * $this->empHours;
                $this->monthlyEmpWage +=$dailyEmpWage;
            }
            echo "Monthly Employee Wage :" . $this->monthlyEmpWage . "\n";
            echo "Number of working days : $this->numOfWorkingDays";
        }
    }

 
    $Wage = new EmployeeWage();
    $Wage->calculateMonthlyWage();
?>