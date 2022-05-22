@extends('admin.layouts.master')



@section('css')

@endsection


@section('content')

<!-- Page Wrapper -->

<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Add Product </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> dashboard</a></li>
                    <li class="breadcrumb-item active"> Add Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">name </label>
                            <div class="col-md-10">
                                <input type="text" value="{{  old('name')}}"
                                    class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">category </label>
                            <div class="col-md-10">
                                <select  value="{{  old('category_id')}}"
                                    class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                    <option value="">select option</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Price</label>
                            <div class="col-md-10">
                                <input type="number" 
                                    class="form-control @error('price') is-invalid @enderror" name="price">
                                    {{  old('price')}}
                                
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>



</div>

<!-- /Page Wrapper -->


@endsection




@section('js')



@endsection