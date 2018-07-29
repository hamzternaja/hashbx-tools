<?php
//app/Helpers/Promptchai/Utility.php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
use Auth;
 
class HashBXCounter {


    public static function get_counter($name)
    {
        // Connnect to Database to retrieve it
        $counterObj = DB::table('stats')
        ->select(
            'id',
            'view_count',
            'request_count'
        )
        ->first();

        if($name == 'view_count')
        {
            return $counterObj->view_count;
        }
        else
        {
            return $counterObj->request_count;
        }
    }

    public static function counter_plus_one($name, $number = 1)
    {
        if($name == 'view_count')
        {
            DB::table('stats')->increment('view_count', $number);
        }
        else
        {
            DB::table('stats')->increment('request_count', $number);
        }
    }
}