
<?php


    class EmployeeWage{
        
        public $empHours;
        public $isFullTime = 1;
        public $isPartTime = 2;

        //To get employee full time and part time hours
        public function getEmpHours(){
                $num = rand(0,2); 
                
                //Condition to get empHours i.e part time, full time or absent
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

        //Function to calculate monthly wage of employee
        public function calculateMonthlyWage(){
            $numOfWorkingDays = 0;
            $totalEmpHours = 0;
            $monthlyEmpWage = 0;
            $obj = new EmployeeWage();

            //Calculate wage till condition of working days per month or maximum working hours reached
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

    
    $company1 = new EmpWageBuilder("Reliance", 50, 20, 120);
    $company2 = new EmpWageBuilder("Dmart", 40, 25, 150);
    $company3 = new EmpWageBuilder("TCS", 60, 22, 140);
    $companyArray = [$company1, $company2, $company3];
    for($i = 0; $i < count($companyArray); $i++){
        echo $companyArray[$i]->calculateMonthlyWage();
    }
?>