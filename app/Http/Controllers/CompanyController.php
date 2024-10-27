<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companies()
    {
        $companies = Company::orderBy('id','asc')->paginate(2);
        $users = User::all();
        return view('tables/companies', ['companies' => $companies, 'users' => $users]);
    }
    public function company_create()
    {
        $users = User::all();
        return view('tables.createPages.company-create', ['users' => $users]);
    }

    public function store(CompanyStoreRequest $request)
    {
        // dd($request->all());

        $company = new Company();
        $company->name = $request->name;
        $company->user_id = $request->user_id;
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
        $users2 = User::all();
        // dd(vars: $company);

        return view('tables.showPages.company-show', ['company' => $company, 'users2' => $users2]);
    }

    public function update_company(Company $company)
    {
        // dd($company);
        $users = User::all();
        return view('tables.updatePages.company-update', ['users' => $users, 'company' => $company]);
    }

    public function company_update(CompanyStoreRequest $request, Company $com)
    {
     
        $com->update([
            'name' => $request->name,
            'user_id' => $request->user_id,
        ]);

        return redirect('/companies')->with('warning', 'Ma\'lumot yangilandi!');
    }
    public function search(Request $request)
    {
        $companies = Company::where('name','like','%'.$request->search.'%')->orderBy('id', 'asc')->paginate(2);
        $users = User::all();

        return view('tables/companies', ['companies' => $companies, 'users' => $users]);
        

    }
}
