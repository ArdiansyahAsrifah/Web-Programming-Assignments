<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    use HasFactory;

    protected $table = 'content';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecord()
    {
        $return = ContentModel::select('content.*', 'users.name as created_by_name')
                        ->join('users','users.id', 'content.created_by')
                        ->where('content.is_delete','=',0)
                        ->orderBy('content.id', 'desc')
                        ->get();
        
        return $return;
                        
    }

    static public function getRecordBy($q)
    {
        $return = ContentModel::select('content.*', 'users.name as created_by_name')
                        ->join('users','users.id', 'content.created_by')
                        ->where('content.is_delete','=',0)
                        ->where('content.judul', 'like', '%' . $q . '%')
                        ->orderBy('content.id', 'desc')
                        ->get();
        
        return $return;
                        
    }
}
