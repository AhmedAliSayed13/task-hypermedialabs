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
                <h3 class="page-title">List productss </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">dashboard </a></li>
                    <li class="breadcrumb-item active"> List productss</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <table class=" table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>id </th>
                                        <th>Name </th>
                                        <th>Price </th>
                                        <th>Category </th>
                                       


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>
                                            {{$product->id}}
                                        </td>
                                        <td>
                                            {{$product->name}}
                                        </td>
                                        <td>
                                            {{$product->price}}
                                        </td>
                                        <td>
                                            {{($product->category)?$product->category->name:"-"}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            
            {{ $products->links("pagination::bootstrap-4") }}
        </div>


    </div>
    <!-- /Page Header -->





</div>

<!-- /Page Wrapper -->


@endsection




@section('js')

<script>
    function showPopUp(id){
        let url="{{ route('category.destroy', ':id') }}";
        url = url.replace(':id', id);

        $("#deleteForm").attr("action",url);
        $("#delete_modal").modal('show');
    }
</script>

@endsection