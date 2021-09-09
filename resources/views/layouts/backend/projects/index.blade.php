@extends('layouts.backend.app')

@section('breadcrumb')
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
</ol>
@endsection
@section('content')

<div class="col-md-12">
    <div class="card text-left col-md-12">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h2>All projects </h2>
                {{-- @can('customer create') --}}

                <div class="ml-auto">
                    <a href="{{route('project.create')}}" class="btn btn-outline-primary btn-sm"><i
                            class="fas fa-plus mr-1"></i>Add project</a>

                </div>
                {{-- @endcan --}}
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-bordered  table-striped" id="projects">
                    <thead>
                        <tr>
                            <th class="m-1 b-1" width="3%">No</th>
                            <th class="m-1 b-1">Avatar</th>
                            <th class="m-1 b-1">Title</th>
                            <th class="m-1 b-1">Link</th>
                            <th class="m-1 b-1">status</th>
                            <th class="m-1 b-1" width="3%">Edit</th>
                            <th class="m-1 b-1" width="3%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                        <tr>
                            <td class='p-1'>{{$loop->index+1}}</td>
                            <td class='p-1'><img src="/images/thumbnail/{{ $project->image }}" alt=""
                                    class="rounded-circle" width="40" height="40"></td>
                            <td class='p-1'>{{$project->title}}</td>
                            <td class='p-1'>{{$project->link}}</td>
                            <td class='p-1'>
                                @if ($project->status)
                                <span class="badge badge-primary">Published</span>
                                @else
                                <span class="badge badge-danger">Not Published</span>

                                @endif
                            </td>
                            <td class='p-1 text-center' data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="{{route('project.edit', $project)}}"><i class="fas fa-edit"></i></a>
                            </td>

                            <td class='p-1 text-center' data-toggle="tooltip" data-placement="top" title="delete">
                                <button id="delete_meue" class="delete_meue red"> <i class="fas fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>

                        </tr>

                        @empty
                        <tr>
                            <td class='m-1 p-1 text-center' colspan="2">No Data Avilable</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready( function () {

        $('#projects').DataTable();

        $('#delete_meue').click(function (e) {

e.preventDefault();
var deleted_id = $(this).closest("tr").find('.deleted_value_id').val();
console.log('deleted_id')

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this record!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            var data = {
                "_token": "{{ csrf_token() }}",
                "id": deleted_id
            }
            var urlPath = '/hrm/department/'+ deleted_id;
            // alert(urlPath);

            $.ajax({
                type: "DELETE",
                url:  urlPath,
                data: data,
                dataType: "JSON",
                success: function (response) {
                    // swal("Your imaginary file is safe!");
                    console.log(response.success);
                    swal(response.success, {
                    icon: 'success',
                    }).then((result)=>{
                        location.reload();
                    });
                },
                error:function(){
                    swal("Your imaginary file is safe!");
                }
            });

        }
        });

        });

                } );
</script>

@endsection
