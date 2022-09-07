<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Category;
use App\Lab;
use App\ParentTest;
use App\SubTest;

class TestController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $labs = Lab::all();
        $parent_tests = ParentTest::all();

        return view('admin.test.create', compact('categories', 'labs', 'parent_tests'));
    }

    public function store(Request $request)
    {
        $this->validateStore($request);
        $data = $request->all();
        Package::create($data);
        return redirect()->back()->with('message', 'Test added successfully');
    }

    public function validateStore($request)
    {
        return  $this->validate($request, [
            'package_name' => 'required',
            'price' => 'required|numeric',
            'no_of_tests' => 'required|numeric',
            'package_desc' => 'required',
            'parent_test_id' => 'required',
            'category'  => 'required|not_in:0',
            'lab_name'  => 'required|not_in:0'
        ]);
    }
    public function parenttest()
    {

        return view('admin.tests.create');
    }
    public function parentteststore(Request $request)
    {

        $data = $request->all();
        ParentTest::create($data);
        return redirect()->back()->with('message', 'Test Name added successfully');
    }

    public function subtest()
    {
        $parent_tests = ParentTest::all();
        return view('admin.subtest.create',compact('parent_tests'));
    
    }

    public function subtestshow()
    {
        
        $sub_tests = SubTest::get();
        dd($sub_tests);

        return view('admin.subtest.index',compact('sub_tests'));
    
    }

    public function subteststore(Request $request)
    {

        $data = $request->all();
       // dd($data['sub_test']);

        $sub_test  = implode(',', $data['sub_test']);

        
       // SubTest::create($data);

        SubTest::insert([
            ['parent_test_id' => $request->parent_test_id, 'sub_test_name' => $sub_test]
]);
        return redirect()->back()->with('message', 'Test Name added successfully');
    }


}
