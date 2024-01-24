<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Worker;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Project;
use App\Models\ProjectWorker;
use App\Models\Department;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some development commands';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $this->prepareData();
        // $this->prepareManyToMany();

        // $position = Position::create([
        //     'title' => 'Boss',
        //     'department_id' => 1,
        // ]);

        // $worker = Worker::create([
        //     'name' => 'Big',   
        //     'surname' => 'Boss',
        //     'email' => 'bossu@gmail.com',  
        //     'position_id' => $position->id,
        //     'age' => 40,
        //     'description' => 'I am a boss',
        //     'is_married' => true,
        // ]);

        $department = Department::find(1);

        dd($department->workers->toArray());

    }

    private function prepareData() {

        $department1 = Department::create([
            'title' => 'IT',
        ]); 

        $department2 = Department::create([
            'title' => 'Analytics',
        ]); 

        $position1 = Position::create([
            'title' => 'Developer',
            'department_id' => $department1->id,
        ]);

        $position2 = Position::create([
            'title' => 'Manager',
            'department_id' => $department1->id,
        ]);

        $position3 = Position::create([
            'title' => 'Disigner',
            'department_id' => $department1->id,
        ]);

        $workerData1 = [
            'name' => 'John',   
            'surname' => 'Doe',
            'email' => 'jonhdou@gmail.com',  
            'position_id' => $position1->id,
            'age' => 25,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies aliquam, nunc nisl ultricies nunc, quis aliquet nisl nunc eu nisl. Sed vitae nisl eget nisl aliquet ultricies. Sed vitae nisl eget nisl aliquet ultricies.',
            'is_married' => false,
        ];

        $workerData2 = [
            'name' => 'Carl',   
            'surname' => 'Duglas',
            'email' => 'carl@gmail.com',  
            'position_id' => $position2->id,
            'age' => 28,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies aliquam, nunc nisl ultricies nunc, quis aliquet nisl nunc eu nisl. Sed vitae nisl eget nisl aliquet ultricies. Sed vitae nisl eget nisl aliquet ultricies.',
            'is_married' => true,
        ];

        $workerData3 = [
            'name' => 'Kate',   
            'surname' => 'Smith',
            'email' => 'kate@gmail.com',  
            'position_id' => $position1->id,
            'age' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies aliquam, nunc nisl ultricies nunc, quis aliquet nisl nunc eu nisl. Sed vitae nisl eget nisl aliquet ultricies. Sed vitae nisl eget nisl aliquet ultricies.',
            'is_married' => false,
        ];

        $workerData4 = [
            'name' => 'Erik',   
            'surname' => 'Cartman',
            'email' => 'cartman@gmail.com',  
            'position_id' => $position3->id,
            'age' => 22,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies aliquam, nunc nisl ultricies nunc, quis aliquet nisl nunc eu nisl. Sed vitae nisl eget nisl aliquet ultricies. Sed vitae nisl eget nisl aliquet ultricies.',
            'is_married' => false,
        ];

        $workerData5 = [
            'name' => 'Keny',   
            'surname' => 'Broflovski',
            'email' => 'keny@gmail.com',  
            'position_id' => $position3->id,
            'age' => 21,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies aliquam, nunc nisl ultricies nunc, quis aliquet nisl nunc eu nisl. Sed vitae nisl eget nisl aliquet ultricies. Sed vitae nisl eget nisl aliquet ultricies.',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);
        $worker5 = Worker::create($workerData5);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'New York',
            'skill' => 'PHP',
            'experience' => 5,
            'finish_stady_at' => '2015-01-01',
        ];

        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Chicago',
            'skill' => 'Boss',
            'experience' => 10,
            'finish_stady_at' => '2014-01-01',
        ];
        
        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Miami',
            'skill' => 'JS',
            'experience' => 1,
            'finish_stady_at' => '2023-01-01',
        ];

        $profileData4 = [
            'worker_id' => $worker4->id,
            'city' => 'South Park',
            'skill' => 'Figma',
            'experience' => 3,
            'finish_stady_at' => '2021-01-01',
        ];

        $profileData5 = [
            'worker_id' => $worker5->id,
            'city' => 'South Park',
            'skill' => 'Figma',
            'experience' => 2,
            'finish_stady_at' => '2022-01-01',
        ];

        $profile1 = Profile::create($profileData1);
        $profile2 = Profile::create($profileData2);
        $profile3 = Profile::create($profileData3);
        $profile4 = Profile::create($profileData4);
        $profile5 = Profile::create($profileData5);

        // dd($profile->id);
    }

    private function prepareManyToMany() 
    {
        $workerManager = Worker::find(2);
        $workerBackend = Worker::find(1);
        $workerDisigner1 = Worker::find(5);
        $workerDisigner2 = Worker::find(4);

        $project1 = Project::create([
            'title' => 'Shop',
        ]);

        $project2 = Project::create([
            'title' => 'Blog',
        ]);

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerManager->id,
        ]);

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerBackend->id,
        ]);

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDisigner1->id,
        ]);

        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerManager->id,
        ]);

        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerBackend->id,
        ]);

        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerDisigner2->id,
        ]);
    }
}
