<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function list()
    {
        $packages = Package::all();
        return view('admin.packages.list', compact('packages'));
    }

    public function new()
    {
        return view('admin.packages.new');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'details' => 'required',
            'price' => 'required|numeric',
        ]);
        $package = new Package();
        $package->name = $request->name;
        $package->description = $request->description;
        $package->details = $request->details;
        $package->price = $request->price;
        $package->save();
        return redirect('admin/packages/list')->with('success','New package added successfully.');
    }

    public function edit($id)
    {
        $package = Package::find($id);
        if($package != NULL)
        {
            return view('admin.packages.edit', compact('package'));
        }
        return redirect('admin/packages/list')->with('error','Package not found.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'details' => 'required',
            'price' => 'required|numeric',
        ]);
        $package = Package::find($request->id);
        if($package != NULL)
        {
            $package->name = $request->name;
            $package->description = $request->description;
            $package->details = $request->details;
            $package->price = $request->price;
            $package->save();
            return redirect('admin/packages/list')->with('success','Package updated successfully.');
        }
        return redirect('admin/packages/list')->with('error','Package not found.');
    }

    public function delete($id)
    {
        $package = Package::find($id);
        if($package != NULL)
        {
            $package->delete();
            return redirect('admin/packages/list')->with('success','Package delete successfully.');
        }
        return redirect('admin/packages/list')->with('error','Package not found.');
    }
}
