<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;
use App\Models\User2;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companies()
    {
        $companies = Company::all();
        $users = User2::all();
        return view('tables/companies', ['companies' => $companies, 'users' => $users]);
    }
    public function company_create()
    {
        $users2 = User2::all();
        return view('tables.createPages.company-create', ['users2'=>$users2]);
    }

    public function store(CompanyStoreRequest $request)
    {
        // dd($request->all());
        
        $company = new Company();
        $company->name=$request->name;
        $company->user2_id=$request->user2_id;
        $company->save();
        return redirect('/companies')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function delete(Company $id)
    {
        
        $id->delete();
        return redirect('/companies')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function show(Company $company)
    {
        $users2 = User2::all();
        // dd(vars: $company);
        
        return view('tables.showPages.company-show', ['company'=>$company, 'users2'=>$users2]);
    }
}
