<?php

namespace App\Services;

class ServiceBulananChart
{
    public function generate()
    {
        // Logika untuk membuat data chart
        return [
            'labels' => ['Januari', 'Februari', 'Maret'],
            'data' => [100, 200, 300],
        ];
    }
}
