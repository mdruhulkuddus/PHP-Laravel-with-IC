<?php


class Calculator
{
    private $income = [];
    private $expense = [];
    private $savings = 0;
    private $incomeCategory = ["Salary", "Business", "Rent"];
    private $expenseCategory = ["Family", "Personal", "Sadakah"];

    function addIncome($category, $amount)
    {
        $this->income[] = new Income($category, $amount);
        $this->totalIncome();
    }

    function viewIncomes()
    {
        foreach ($this->income as $income) {
            echo $income->getCategory() . " " . $income->getAmount() . PHP_EOL;
        }
    }

    function addExpense($category, $amount)
    {
        $this->expense[] = new Expense($category, $amount);
        $this->totalExpense();
    }

    function viewExpenses()
    {
        foreach ($this->expense as $expense) {
            echo $expense->getCategory() . " " . $expense->getAmount() . PHP_EOL;
        }
    }

    function totalIncome()
    {
        if(empty($this->income)) return;
        foreach ($this->income as $income) {
            $this->savings += $income->getAmount();
        }
    }

    function totalExpense()
    {
        if(empty($this->expense)) return;
        foreach ($this->expense as $expense) {
            $this->savings -= $expense->getAmount();
        }
    }

    function updateSavings(){
        $this->totalExpense();
        $this->totalIncome();
    }

    function viewSavings()
    {
        echo $this->savings . PHP_EOL;
    }

    function viewCategories()
    {
        echo "Income Category.\n";
        foreach ($this->incomeCategory as $index => $cat){
            echo "$index. $cat \n";
        }
        echo "Expense Category.\n";
        foreach ($this->expenseCategory as $index => $cat){
            echo "$index. $cat \n";
        }
    }
     function loadFromFile() {
        // Load the data from the `incomes.txt` and `expenses.txt` files.
        $this->income = unserialize(file_get_contents('incomes.txt'));
        $this->expense = unserialize(file_get_contents('expenses.txt'));

        // Update the savings.
        $this->updateSavings();
    }

     function saveToFile() {
        // Save the data to the `incomes.txt` and `expenses.txt` files.
        file_put_contents('incomes.txt', serialize($this->income));
        file_put_contents('expenses.txt', serialize($this->expense));
    }
}

class Income
{
    private $category;
    private $amount;

    function __construct($category, $amount)
    {
        $this->amount = $amount;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}

class Expense
{

    private $category;
    private $amount;

    function __construct($category, $amount)
    {
        $this->amount = $amount;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}

$calculator = new Calculator();
$calculator->loadFromFile();
while (true) {

    echo "-------------------------\n";
    echo "What to you want to do?\n";
    echo "1. Add income\n";
    echo "2. Add expense\n";
    echo "3. View incomes\n";
    echo "4. View expenses\n";
    echo "5. View savings\n";
    echo "6. View categories\n";
    echo "7. Exit\n";

    echo PHP_EOL . 'Enter your option: ';
    fscanf(STDIN, "%d", $option);

    switch ($option) {
        case 1:
            fscanf(STDIN, "%s %d", $category, $amount);
            $calculator->addIncome($category, $amount);
            break;
        case 2:
            fscanf(STDIN, "%s %d", $category, $amount);
            $calculator->addExpense($category, $amount);
            break;
        case 3:
            $calculator->viewIncomes();
            break;
        case 4:
            $calculator->viewExpenses();
            break;
        case 5:
            $calculator->viewSavings();
            break;
        case 6:
            $calculator->viewCategories();
            break;
        case 7:
            echo "Exiting. Goodbye!".PHP_EOL;
            $calculator->saveToFile();
            exit();
        default:
            echo 'Invalid option.' . PHP_EOL;
            break;
    }

}