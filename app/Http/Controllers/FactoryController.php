<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FactoryRequest;
use App\Http\Controllers\Controller;
use App\Models\Factory;

class FactoryController extends Controller
{
    public function index()
    {
        $factory = Factory::all();

        return view('admin.factory.listfactory', compact('factory'));
    }
    public function create()
    {
        $factory = Factory::all();
        $parent = Factory::select('factory_name', 'factory_logo', 'factory_website', 'status')->get()->toArray();

        return view('admin.factory.addfactory', compact('factory', 'parent'));
    }
    public function store(FactoryRequest $request)
    {
        $factory = new Factory;
        $factory->factory_name = $request->factory_name;
        $factory->factory_logo = $request->logo;
        $factory->factory_website = $request->website;
        $factory->status = $request->status;
        $factory->save();

        return redirect()->route('factory-list.index')
            ->with(['flash_level' => 'success', 'flash_message' => trans('messages.success') ]);
    }
    public function destroy($id)
    {
        $factory = Factory::findOrFail($id);
        $factory->delete();

        return redirect()->route('factory-list.index')
                         ->with(['flash_level' => 'success', 'flash_message' => trans('messages.success') ]);
    }
    public function show(Request $request)
    {
        $factory = Factory::where('id', $request->id)
            ->select('factory_name', 'factory_logo', 'factory_website', 'status', 'created_at', 'updated_at')->get();

        $parent = Factory::select('factory_name', 'factory_logo', 'factory_website', 'status')->get()->toArray();

        return view('admin.factory.viewfactory', compact('factory', 'parent'));
    }
    public function edit($id, Request $request)
    {
        $factory = Factory::find($id);
        $parent = Factory::select('factory_name', 'id', 'status')->get();

        return view('admin.factory.editfactory', compact('factory', 'parent'));
    }

    public function update($id, Request $request)
    {
        $factory = Factory::find($id);
        $factory->factory_name = $request->factory;
        $factory->factory_logo = $request->logo;
        $factory->factory_website = $request->website;
        $factory->status = $request->status;
        $factory->save();

        return redirect()->route('factory-list.index')
                         ->with(['flash_level' => 'success', 'flash_message' => trans('messages.success')]);
    }
}
