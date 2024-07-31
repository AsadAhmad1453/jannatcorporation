<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companies()
    {
        $companies = Company::OrderBy('id','desc')->get();
        return view('admin.company.company',get_defined_vars());
    }

    public function storeCompany(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'regex:/^[\pL\s\-]+$/u', 'max:255'],
            'status' => ['required'],
        ]);
        try{
            $company = new Company();
            $company->create([
                'name' => $request->name,
                'status' => $request->status,
            ]);
            return back()->with('success','Company Created Successfully');
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
       
    }

    public function editCompany($id)
    {
        $company = Company::findOrFail($id);
        if(!$company){
            return response()->json(['error' => true]);
        }
        return view('admin.company.modal.edit-company',compact('company'));
    }

    public function updateCompany(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'max:255'],
            'status' => ['required'],
        ]);
        try{
            $id = $request->id;
            $company = Company::findOrFail($id);
            $company->update([
                'name' => $request->name,
                'status' => $request->status
            ]);
            return back()->with('success','Company Updated Successfully');

        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function deleteCompany($id)
    {
        try{
            Company::findOrFail($id)->delete();
            return back()->with('success','Company Deleted Successfully');
           
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
        
    }
}
