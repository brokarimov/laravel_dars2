<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product2StoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Company;
use App\Models\Product2;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    public function products2()
    {
        $products2 = Product2::orderBy('id', 'asc')->paginate(2);
        $companies = Company::all();
        return view('tables/products2', ['products2' => $products2, 'companies' => $companies]);
    }
    public function product2_create()
    {
        // dd($id);
        $product2 = Product2::all();
        return view('tables.createPages.product2-create', ['product2' => $product2]);
    }

    public function store(Product2StoreRequest $request)
    {
        // dd($request->all());


        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }
        Product2::create($data);
        return redirect('/products2')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function delete(Product2 $id)
    {

        $id->delete();
        return redirect('/products2')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function show(Product2 $product2)
    {
        $company = Company::find($product2->company_id);
        // dd(vars: $company);

        return view('tables.showPages.product2-show', ['product2' => $product2, 'company' => $company]);
    }

    public function update_product(Product2 $product)
    {
        // dd($product);
        $company = Company::all();
        return view('tables.updatePages.product-update', ['product' => $product, 'company' => $company]);
    }

    public function product_update(ProductUpdateRequest $request, Product2 $prod)
    {
        // dd($request->hasFile('image'));
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }

        $prod->update($data);

        return redirect('/products2')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function search(Request $request)
    {
        $products2 = Product2::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'asc')->paginate(2);
        $companies = Company::all();

        return view('tables/products2', ['products2' => $products2, 'companies' => $companies]);

    }
}
