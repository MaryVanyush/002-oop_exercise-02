<?php


declare(strict_types=1);

require_once('autoload.php');


use Objects\Director;
use Objects\Manager;
use Objects\Programmer;
use Objects\Tester;
use Objects\LeadInterface;
use Objects\ApplicationCreatorInterface;
use Objects\WebinarSpeakerInterface;

$employees = [
    new Director("Иван", "Иванов", 100),
    new Manager("Петр", "Петров", 80),
    new Programmer("Сергей", "Сергеев", 60),
    new Tester("Антон", "Антонов", 50)
];


$totalSalary = 0;

foreach ($employees as $employee) {
    echo $employee->getInfo() . ", ";
    
    if ($employee instanceof LeadInterface) {
        echo $employee->manageTeam() . ", ";
    }
    
    if ($employee instanceof ApplicationCreatorInterface) {
        echo $employee->developApplication() . ", ";
    }
    
    if ($employee instanceof WebinarSpeakerInterface) {
        echo $employee->conductWebinar() . ".\n";
    } else {
        echo ".\n";
    }
    
    $totalSalary += $employee->salary;
}


echo "\nОбщее количество сотрудников: " . count($employees) . ".\n";
echo "Общая сумма зарплат: {$totalSalary} попугаев.\n";

