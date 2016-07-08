<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Teacher;

class TeacherList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teacher:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List of teachers';

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
        $teacher=new Teacher();
        $result=$teacher->all();
        foreach ($result as $teacherRecord)
        {
            $this->info($teacherRecord->id . " - " .$teacherRecord-> teacher_name ." - ". $teacherRecord->department);
        }
    }
}
