<?php

namespace App\Http\Controllers;

class BackendApi extends Controller
{
    // This function must be called by the LiveWire component to get the data
    public function get(string $api): array
    {
        switch ($api) {
            case 'apexchart':
                return [
                    'series' => [
                        [
                            'name' => 'series1',
                            'data' => [31, 40, 28, 51, 42, 109, 100]
                        ],
                        [
                            'name' => 'series2',
                            'data' => [11, 32, 45, 32, 34, 52, 41]
                        ]
                    ],
                    'xaxis' => [
                        'categories' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    ]
                ];

            case 'datatable':
                $users = [];

                for ($i = 1; $i <= 50; $i++) {
                    $users[] = [
                        'id' => $i,
                        'name' => $this->getRandomName(),
                        'position' =>  $this->getRandomPosition(),
                        'office' =>  $this->getRandomOffice(),
                        'age' =>  rand(22, 65),
                        'start_date' =>  $this->getRandomStartDate(),
                        'salary' =>  rand(30000, 100000),
                    ];
                }
                return $users;

            default:
                throw new \Exception('API not found');
        }
    }

    // This function must be called by the LiveWire component to post the data
    public function post(string $api, array $data): array
    {
        switch ($api) {
            case 'form':
                try {
                    // Check if storage_path('saved-data.json') exists
                    if (!file_exists(storage_path('saved-data.json'))) {
                        file_put_contents(storage_path('saved-data.json'), json_encode([]));
                    }

                    // Write data to laravel storage/saved-data.json
                    $savedData = json_decode(file_get_contents(storage_path('saved-data.json')), true);
                    $savedData[] = $data;
                    file_put_contents(storage_path('saved-data.json'), json_encode($savedData));

                    return [
                        'status' => 'success'
                    ];
                } catch (\Exception $e) {
                    return [
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ];
                }
            default:
                throw new \Exception('API not found');
        }
    }


    // Helper functions to generate random data
    function getRandomName()
    {
        $firstNames = ['John', 'Jane', 'Bob', 'Alice', 'Eva', 'David', 'Sarah', 'Michael', 'Emily', 'Daniel'];
        $lastNames = ['Smith', 'Johnson', 'Doe', 'Brown', 'Davis', 'Wilson', 'Miller', 'Anderson', 'Garcia', 'Taylor'];
        return $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
    }

    function getRandomPosition()
    {
        $positions = ['Manager', 'Developer', 'Designer', 'Sales Rep', 'Analyst', 'Engineer', 'Marketing Specialist'];
        return $positions[array_rand($positions)];
    }

    function getRandomOffice()
    {
        $offices = ['New York', 'Los Angeles', 'Chicago', 'San Francisco', 'Miami', 'Dallas', 'Boston', 'Seattle'];
        return $offices[array_rand($offices)];
    }

    function getRandomStartDate()
    {
        return date('Y-m-d', strtotime('-' . rand(1, 10) . ' years'));
    }
}
