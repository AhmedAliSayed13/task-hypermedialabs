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
                <h3 class="page-title">List Categories </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">dashboard </a></li>
                    <li class="breadcrumb-item active"> List Categories</li>
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
                                        <th>Describe </th>
                                        <th>Action </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            {{$category->id}}
                                        </td>
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td>
                                            {{$category->describe}}
                                        </td>
                                        <td>
                                            <a type="button" class="btn"
                                                href="{{route('category.edit',$category->id)}}">
                                                <i class="material-icons text-warning">edit</i>
                                            </a>
                                            <button type="button" class="btn" onclick="showPopUp('{{$category->id}}')">
                                                <i class="material-icons text-danger">delete</i>
                                            </button>
                                        </td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <form method="POST" action="" id="deleteForm">
                                @csrf
                                {{ method_field('DELETE') }}
                                <div class="form-content p-2">
                                    <h4 class="modal-title">Delete</h4>
                                    <p class="mb-4">Are you sure want to delete?</p>
                                    <button type="submit" class="btn btn-primary">Save </button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Modal -->
            {{ $categories->links("pagination::bootstrap-4") }}
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