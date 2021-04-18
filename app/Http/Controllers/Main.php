<?php

namespace App\Http\Controllers;

use App\SchoolsModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Main extends Controller
{
    public function index()
    {
        $allschools = SchoolsModel::orderBy('created_at', 'desc')->paginate(15);
        $Filervalue=0;
        return view('client.index', compact('allschools','Filervalue'));
    }

    public function ByName(Request $request)
    {
        if($request->ajax())
        {
            $allschools=SchoolsModel::query()
            ->where('school_name', 'LIKE', "%{$request->val}%") 
            ->paginate(15);
            $Filervalue=0;
        return view('client.searchresult', compact('allschools','Filervalue'))->render();
        }
    }
    
    public function ByZip(Request $request)
    {
        if($request->ajax())
        {
            $allschools=SchoolsModel::query()
            ->where('zipcode', 'LIKE', "%{$request->val}%") 
            ->paginate(15);
            $Filervalue=0;
        return view('client.searchresult', compact('allschools','Filervalue'))->render();
        }
    } 
    
    public function FilterByName(Request $request)
    {
        if($request->ajax())
        {
            $Filervalue=$request->val;
            $Searchval=$request->search;
            if($Filervalue == 1)
            {
                if($request->byname ==true)
                {
                    $name='school_name';
                }else{
                    $name='zipcode';
                }
                $allschools=SchoolsModel::query()
                ->where($name, 'LIKE', "%{$Searchval}%") 
                ->orderBy($name, 'asc') 
                ->get();
            }else if($Filervalue == 2)
            {
                if($request->byname ==true)
                {
                    $name='school_name';
                }else{
                    $name='zipcode';
                }
                $allschools=SchoolsModel::query()
                ->where($name, 'LIKE', "%{$Searchval}%") 
                ->orderBy($name, 'desc') 
                ->get();
            }else if($Filervalue == 3)
            {
                if($request->byname ==true)
                {
                    $name='school_name';
                }else{
                    $name='zipcode';
                }
                $allschools=SchoolsModel::query()
                ->where($name, 'LIKE', "%{$Searchval}%") 
                ->orderBy('application_fee', 'asc') 
                ->get();
            }else if($Filervalue == 4)
            {
                if($request->byname ==true)
                {
                    $name='school_name';
                }else{
                    $name='zipcode';
                }
                $allschools=SchoolsModel::query()
                ->where($name, 'LIKE', "%{$Searchval}%") 
                ->orderBy('application_fee', 'desc')  
                ->get();
            }

          
            return view('client.searchresult', compact('allschools','Filervalue'))->render();
        }
    }   
}
