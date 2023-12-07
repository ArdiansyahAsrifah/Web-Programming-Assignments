<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;

    protected $table = 'course';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecord()
    {
        $return = CourseModel::select('course.*', 'users.name as pengajar')
                        ->join('users','users.id', 'course.created_by')
                        ->where('course.is_delete','=',0)
                        ->orderBy('course.id', 'desc')
                        ->get();
        
        return $return;
                        
    }

    static public function getRecordBy($q)
    {
        $return = CourseModel::select('course.*', 'users.name as pengajar')
                        ->join('users','users.id', 'course.created_by')
                        ->where('course.is_delete','=',0)
                        ->where('course_name', 'like', '%' . $q . '%')
                        ->orderBy('course.id', 'desc')
                        ->get();
        
        return $return;
                        
    }
}
