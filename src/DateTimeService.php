<?php
namespace App;

use Carbon\Carbon;

class DateTimeService
{
    public function formatDate($date)
    {
       
        $carbon = Carbon::parse($date);
        return $carbon->isoFormat('MMMM Do YYYY, h:mm:ss a');
    }
    
    public function getWeekRange()
    {
        $now = Carbon::now();
        
   
        $startOfWeek = $now->copy()->startOfWeek();
        $endOfWeek = $now->copy()->endOfWeek();
        
        return [
            'start' => $startOfWeek->toISOString(),
            'end' => $endOfWeek->toISOString()
        ];
    }
}