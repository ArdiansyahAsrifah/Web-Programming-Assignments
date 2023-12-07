<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentModel;
use Auth;

class ContentController extends Controller
{
    public function list()
    {
        $data['getRecord'] = ContentModel::getRecord();
        $data['header_title'] = "Daftar Content";
        return view('admin.content.list',$data);
        
    }

    public function add()
    {
       
        $data['header_title'] = "Tambah Content";
        return view('admin.content.add',$data);
       
    }

    public function insert(Request $request)
    {
       $save = new ContentModel;
       $save->judul = $request->judul;
       $save->isi_materi = $request->isi_materi;
       $save->created_by = Auth::user()->id;
       $save->save();
       
       if(Auth::user()->role == 1)
       {
         return redirect('admin/content/list')->with('success','Content berhasil dibuat');
       }
       elseif(Auth::user()->role == 2)
       {
         return redirect('teacher/content/list')->with('success','Content berhasil dibuat');
       }

    }

    public function edit($id)
    {
        $data['getRecord'] = ContentModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Content";
            return view('admin.content.edit',$data);
         }
        else
        {
            abort(404);
        }
       
    }

    public function update($id, Request $request)
    {
        $save = ContentModel::getSingle($id);
        $id_user=Auth::user()->id;
        $role=Auth::user()->role;
        if($save->created_by == $id_user || $role == 1)
        {
             $save->judul = $request->judul;
             $save->isi_materi = $request->isi_materi;
             $save->save();
             
             if(Auth::user()->role == 1)
            {
              return redirect('admin/content/list')->with('success','Content berhasil diupdate');
            }
            elseif(Auth::user()->role == 2)
            {
              return redirect('teacher/content/list')->with('success','Content berhasil diupdate');
            }
            
                
        }
        else
        {
            if(Auth::user()->role == 1)
            {
                return redirect('admin/content/list')->with('error', "Anda Tidak Punya Akses untuk update data");
            }
            elseif(Auth::user()->role == 2)
            {
                return redirect('teacher/content/list')->with('error', "Anda Tidak Punya Akses untuk update data");
            }
            
        }

      
    }

    public function delete($id)
    {
        $save = ContentModel::getSingle($id);
        $id_user=Auth::user()->id;
        $role=Auth::user()->role;
        if($save->created_by == $id_user || $role == 1)
        {
             $save->is_delete=1;
             $save->save();

             if(Auth::user()->role == 1)
             {
                return redirect('admin/content/list')->with('success','Content berhasil dihapus');
             }
             elseif(Auth::user()->role == 2)
             {
                return redirect('teacher/content/list')->with('success','Content berhasil dihapus');
             }

                
        }
        else
        {
            if(Auth::user()->role == 1)
            {
                return redirect('admin/content/list')->with('error', "Anda Tidak Punya Akses untuk hapus data");
            }
            elseif(Auth::user()->role == 2)
            {
                return redirect('teacher/content/list')->with('error', "Anda Tidak Punya Akses untuk hapus data");
            }
            
        } 
      
    }
}
