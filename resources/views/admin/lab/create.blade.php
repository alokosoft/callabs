@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Lab</h5>
                    <span>Add Lab</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Labs</a></li>
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
                <h3>Add Test</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('lab.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Lab name</label>
                            <input type="text" name="lab_name" class="form-control @error('lab_name') is-invalid @enderror" 
                            value="{{ old('lab_name') }}">
                            @error('lab_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">Address</label>
                            <input type="text" name="address1" class="form-control @error('address') is-invalid @enderror" value="{{ old('lab_name') }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">Address2</label>
                            <input type="text" name="address2" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">City</label>
                            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">Pin</label>
                            <input type="text" name="pin" class="form-control @error('pin') is-invalid @enderror" value="{{ old('pin') }}">
                            @error('pin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="">State</label>
                            <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" 
                            value="{{ old('state') }}">
                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    
                    <div class="row">


                    </div>

                    <div class="row">



                    </div>
                    <div class="row">

                    </div>

                    <button type="submit" class="btn btn-primary mr-2 mt-2">Submit</button>
                    <button class="btn btn-light mt-2">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection