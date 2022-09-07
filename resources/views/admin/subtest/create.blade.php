@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Category</h5>
                    <span>Add Category</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10">
        @if (Session::has('message'))
        <div class="alert bg-success alert-success text-white text-center" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Add Category</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('subtest.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">

                    <div class="col-lg-6">
                            <label for="">Select Parent Test</label>
                            <select name="parent_test_id"  id="parent_test_id" class="form-control @error('parent_test_id') is-invalid @enderror">
                                <option value="0">-- Choose Category --</option>

                                @forelse($parent_tests as $parent_test)

                                <option value="{{$parent_test->id}}">{{$parent_test->parent_test_name}}</option>

                                @empty

                                @endforelse

                            </select>
                           
                           
                            @error('parent_test_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror      
                        </div>

                        <div class="col-lg-6">
                            <label for="">Sub Test name</label>
                            <input type="text" id="sub_test" name="sub_test[]" placeholder="Enter Test" class="form-control sub_test_input" />

                            <input type="button" id="btAdd" value="Add Field" class="btn btn-primary mr-2 mt-2" style="float: right" />


                        </div>

                        <div id="main" class="col-lg-6"></div>

                    </div>

                    <br />

                    <button type="submit" class="btn btn-primary mr-2"  >Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection