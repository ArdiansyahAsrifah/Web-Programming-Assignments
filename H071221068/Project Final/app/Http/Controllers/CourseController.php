<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;
use Auth;

class CourseController extends Controller
{
    public function list()
    {
        $data['getRecord'] = CourseModel::getRecord();
        $data['header_title'] = "Daftar Course";
        return view('admin.course.list',$data);
        
    }

    public function add()
    {
       
        $data['header_title'] = "Tambah Course";
        return view('admin.course.add',$data);
       
    }

    public function insert(Request $request)
    {
       $save = new CourseModel;
       $save->course_name = $request->course_name;
       $save->deskripsi = $request->deskripsi;
       $save->range_course = $request->daterange;
       $save->created_by = Auth::user()->id;
       $save->save();

       if(Auth::user()->role == 1)
       {
         return redirect('admin/course/list')->with('success','Course berhasil dibuat');
       }
       elseif(Auth::user()->role == 2)
       {
         return redirect('teacher/course/list')->with('success','Course berhasil dibuat');
       }
    }

    public function edit($id)
    {
        $data['getRecord'] = CourseModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Course";
            return view('admin.course.edit',$data);
         }
        else
        {
            abort(404);
        }
       
    }

    public function update($id, Request $request)
    {
       $save = CourseModel::getSingle($id);
       $id_user=Auth::user()->id;
       $role=Auth::user()->role;
       if($save->created_by == $id_user || $role == 1)
       {
            $save->course_name = $request->course_name;
            $save->deskripsi = $request->deskripsi;
            $save->range_course = $request->daterange;
            $save->save();

            if(Auth::user()->role == 1)
            {
              return redirect('admin/course/list')->with('success','Course berhasil diupdate');
            }
            elseif(Auth::user()->role == 2)
            {
              return redirect('teacher/course/list')->with('success','Course berhasil diupdate');
            }
       }
       else
       {
            if(Auth::user()->role == 1)
            {
                return redirect('admin/course/list')->with('error', "Anda Tidak Punya Akses untuk update data");
            }
            elseif(Auth::user()->role == 2)
            {
                return redirect('teacher/course/list')->with('error', "Anda Tidak Punya Akses untuk update data");
            }
           
       }

    }

    public function delete($id)
    {
        $save = CourseModel::getSingle($id);
        $id_user=Auth::user()->id;
        $role=Auth::user()->role;
        if($save->created_by == $id_user || $role == 1)
        {
             $save->is_delete=1;
             $save->save();
             if(Auth::user()->role == 1)
             {
                return redirect('admin/course/list')->with('success','Course berhasil dihapus');
             }
             elseif(Auth::user()->role == 2)
             {
                return redirect('teacher/course/list')->with('success','Course berhasil dihapus');
             }
             
                
        }
        else
        {
            if(Auth::user()->role == 1)
            {
                return redirect('admin/course/list')->with('error', "Anda Tidak Punya Akses untuk hapus data");
            }
            elseif(Auth::user()->role == 2)
            {
                return redirect('teacher/course/list')->with('error', "Anda Tidak Punya Akses untuk hapus data");
            }
            
        } 
    }
}
