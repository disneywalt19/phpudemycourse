<?php
/**
 * Created by PhpStorm.
 * User: disney
 * Date: 2019-08-26
 * Time: 15:55
 */

// Create class

class myClass
{
    // Properties
    // public
    // protected
    // private
    public $fullName = 'Tom John';
    public $netIncome = 0;
    public static $age = 38;
    public static $people = 100;
    protected $workPlace = 'Pizza';
    private $salary = 3924;


    // Load class
    public function __construct()
    {
        // Calculate net income
        $this->taxSalary();
    }

    // Public method
    public function showName()
    {
        echo $this->fullName;
    }

    // Protected method
    protected function getWorkPlace()
    {
        echo $this->workPlace;
    }

    // Private method
    private  function taxSalary()
    {
        $this->netIncome = $this->salary / 100 * 80;
    }

    // Public static method
    public static function getDailymessage()
    {
        echo 'The weather is good for snowboard and outside are ' . self::$people . ' people<br>';
    }
}

echo 'The age is ' . myClass::$age . '<br>';
myClass::getDailymessage();

$myObj = new myClass();

echo 'My salary is ' . myClass::netIncome;

?>