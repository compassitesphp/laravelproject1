<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Employee_master;

class EmployeeList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List of Employees';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $employee=new Employee_master;
        $result=$employee->all();
        foreach($result as $employeeRecord)
        {
            $this->info($employeeRecord->id . " - " . $employeeRecord->employee_name . " - " . $employeeRecord->employee_email);
        }
    }
}
