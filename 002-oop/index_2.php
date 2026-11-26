<?php

interface LeadInterface
{
    public function lead(): string;
}

interface ApplicationCreatorInterface
{
    public function createApplication(): string;
}

interface WebinarSpeakerInterface
{
    public function speakWebinar(): string;
}

abstract class Employee
{
    protected string $firstName;
    protected string $lastName;
    protected int $money;
    public static int $totalEmployees = 0;
    public static int $totalMoney = 0;

    public function __construct(string $firstName, string $lastName, int $money)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->money = $money;
        self::$totalEmployees++;
        self::$totalMoney += $money;
    }

    public function getFullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    abstract public function getPosition(): string;
}

class Director extends Employee implements LeadInterface
{
    private string $department;
    private string $company;

    public function __construct(string $firstName, string $lastName, int $money, string $department, string $company)
    {
        parent::__construct($firstName, $lastName, $money);
        $this->department = $department;
        $this->company = $company;
    }

    public function getPosition(): string
    {
        return "директор";
    }

    public function lead(): string
    {
        return "управляет департаментом {$this->department}";
    }
}

class Manager extends Employee implements LeadInterface, WebinarSpeakerInterface
{
    private int $teamSize;
    private string $projectName;

    public function __construct(string $firstName, string $lastName, int $money, int $teamSize, string $projectName)
    {
        parent::__construct($firstName, $lastName, $money);
        $this->teamSize = $teamSize;
        $this->projectName = $projectName;
    }

    public function getPosition(): string
    {
        return "менеджер";
    }

    public function lead(): string
    {
        return "руководит отделом из {$this->teamSize} человек на проекте '{$this->projectName}'";
    }

    public function speakWebinar(): string
    {
        return "проводит вебинары";
    }
}

class Programmer extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    private string $language;

    public function __construct(string $firstName, string $lastName, int $money, string $language)
    {
        parent::__construct($firstName, $lastName, $money);
        $this->language = $language;
    }

    public function getPosition(): string
    {
        return "программист";
    }

    public function createApplication(): string
    {
        return "пишет код {$this->language}";
    }

    public function speakWebinar(): string
    {
        return "проводит вебинары на технические темы";
    }
}

class Tester extends Employee implements ApplicationCreatorInterface
{
    private string $testingType;
    private bool $isAutomated;

    public function __construct(string $firstName, string $lastName, int $money, string $testingType, bool $isAutomated)
    {
        parent::__construct($firstName, $lastName, $money);
        $this->testingType = $testingType;
        $this->isAutomated = $isAutomated;
    }

    public function getPosition(): string
    {
        return "тестировщик";
    }

    public function createApplication(): string
    {
        $automationText = $this->isAutomated ? "автоматизированные" : "ручные";
        return "занимается разработкой {$automationText} тестов ({$this->testingType})";
    }
}

$employees = [
    new Director("Иван", "Петров", 100, "Разработка", "ООО +"),
    new Manager("Петр", "Иванов", 50, 5, "CRM"),
    new Programmer("Андрей", "Сергеев", 30, "PHP"),
    new Programmer("Анна", "Сергеева", 25, "JS"),
    new Tester("Ольга", "Павлова", 20, "API", true)
];

foreach ($employees as $employee) {
    $info = "{$employee->getFullName()}, должность: {$employee->getPosition()}, зарплата: {$employee->getMoney()} попугаев";

    if ($employee instanceof ApplicationCreatorInterface) {
        $info .= ", может заниматься разработкой приложения: " . $employee->createApplication();
    }
    if ($employee instanceof WebinarSpeakerInterface) {
        $info .= ", может проводить вебинары: " . $employee->speakWebinar();
    }
    if ($employee instanceof LeadInterface) {
        $info .= ", может управлять: " . $employee->lead();
    }

    echo $info . ".\n";
}

echo "\nОбщее количество сотрудников: " . Employee::$totalEmployees . ".\n";
echo "Общая сумма зарплат: " . Employee::$totalMoney . " попугаев.\n";
