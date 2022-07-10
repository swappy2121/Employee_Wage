
<?php


    class EmployeeWage{
     
        
        public $empHours;
        public $isFullTime = 1;
        public $isPartTime = 2;

      
        
        public function getEmpHours(){
                $num = rand(0,2);
                        
                switch($num){
                    case 1:
                        $this->empHours = 8;
                        break;

                    case 2:
                        $this->empHours = 4;
                        break;

                    default:
                      
                    
                        $this->empHours = 0;
                        break;
                }
                return $this->empHours;
            }
        }
    

    class EmpWageBuilder extends EmployeeWage{
        //Variables
        public $wagePerHour;
        public $workingDaysPerMonth;
        public $maxWorkingHours;
        public $company;

       
        
        public function __construct($company, $wagePerHour, $workingDaysPerMonth, $maxWorkingHours)
        {
            $this->company = $company;
            $this->wagePerHour = $wagePerHour;
            $this->workingDaysPerMonth = $workingDaysPerMonth;
            $this->maxWorkingHours = $maxWorkingHours;    
        }

     
        
        public function calculateMonthlyWage(){
            $numOfWorkingDays = 0;
            $totalEmpHours = 0;
            $monthlyEmpWage = 0;
            $obj = new EmployeeWage();

          
            while($numOfWorkingDays <= $this->workingDaysPerMonth && $totalEmpHours <= $this->maxWorkingHours){
                $empHours = $obj->getEmpHours();
                $totalEmpHours += $empHours;
                $numOfWorkingDays++;
                $dailyEmpWage = $this->wagePerHour * $empHours;
                $monthlyEmpWage += $dailyEmpWage;
            }
            echo $this->company . " "  . "Monthly Employee Wage :" . $monthlyEmpWage . "\n";
        }
    }

    $Wage = new EmpWageBuilder("TATA", 50, 20, 120);
    $Wage->calculateMonthlyWage();
    $Wage1 = new EmpWageBuilder("Dmart", 40, 25, 150);
    $Wage1->calculateMonthlyWage();
    $Wage2 = new EmpWageBuilder("Mahindra", 60, 22, 140);
    $Wage2->calculateMonthlyWage();
?>