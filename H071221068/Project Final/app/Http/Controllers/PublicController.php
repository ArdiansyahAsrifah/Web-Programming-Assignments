<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CourseModel;
use App\Models\ContentModel;
use Auth;

class PublicController extends Controller
{
    public function index()
    
    {
       return view('frontend.app');
    }

    public function home(Request $request){
        $data['getRecord'] = CourseModel::getRecordBy($request->q);
    	return view('frontend.home', $data);
	}
 
	public function course(){
        $data['getRecord'] = CourseModel::getRecord();
        return view('frontend.course', $data);
	}
 
	public function user(){
       if(!empty(Auth::check()))
        {
            $data['getRecord'] = User::getAdminBy(Auth::user()->id);
            return view('frontend.user',$data);
        }
        else
        {
            $data['getRecord'] = User::getAdmin();
            return view('frontend.user',$data);
        }
	}

    public function lesson(Request $request){
        $data['getRecord'] = ContentModel::getRecordBy($request->q);
		return view('frontend.lesson', $data);
	}

}
