<?php

namespace App\Livewire;

use Livewire\Component;


class Chart extends Component
{
    public array $barChart = [
        'type' => 'bar',
        'data' => [
            'labels' => ['Mary', 'Joe', 'Ana','Eriel','Michael'.'Jezebel'],
            'datasets' => [
                [
                    'label' => '# of Votes',
                    'data' => [12, 19, 3,5,6,7],
                ]
            ]
        ]
    ];

    public array $pieChart = [
        'type' => 'pie',
        'data' => [
            'labels' => ['Mary', 'Joe', 'Ana'],
            'datasets' => [
                [
                    'label' => '# of Votes',
                    'data' => [12, 19, 3],
                ]
            ]
        ]
    ];
 
    // public function randomize()
    // {
    //     Arr::set($this->myChart, 'data.datasets.0.data', [fake()->randomNumber(2), fake()->randomNumber(2), fake()->randomNumber(2)]);
    // }
    
    // public function switch()
    // {
    //     $type = $this->myChart['type'] == 'bar' ? 'pie' : 'bar';
    //     Arr::set($this->myChart, 'type', $type);
    // }


    public function render()
    {
        return view('livewire.chart');
    }
}
