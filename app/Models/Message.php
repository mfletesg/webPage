<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';

    public function getMessageIP($ip){
        $query = DB::select("   SELECT count(*) as 'numSend'
                                FROM message 
                                WHERE origin = '{$ip}'
                            ");
/*        if ($query->isEmpty()) {
            return [];
        }*/

        return $query;
    }
}
