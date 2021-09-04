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
                <h2>All menus </h2>
                {{-- @can('customer create') --}}

                <div class="ml-auto">
                    <a href="{{route('menu.create')}}" class="btn btn-outline-primary btn-sm"><i
                            class="fas fa-plus mr-1"></i>Add Menu</a>

                </div>
                {{-- @endcan --}}
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table-sm table table-bordered table-sm table-striped" id="menus">
                    <thead>
                        <tr>
                            <th class="m-1 b-1" width="3%">No</th>
                            <th class="m-1 b-1">Title</th>
                            <th class="m-1 b-1">Slug</th>
                            <th class="m-1 b-1">Link</th>
                            <th class="m-1 b-1">status</th>
                            <th class="m-1 b-1" width="3%">Edit</th>
                            <th class="m-1 b-1" width="3%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($menus as $menu)
                        <tr>
                            <td class='p-1'>{{$loop->index+1}}</td>
                            <td class='p-1'>{{$menu->title}}</td>
                            <td class='p-1'>{{$menu->slug}}</td>
                            <td class='p-1'>{{$menu->link}}</td>
                            <td class='p-1'>{{$menu->status}}</td>
                            <td class='p-1 text-center' data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="{{route('menu.edit', $menu)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class='p-1 text-center' data-toggle="tooltip" data-placement="top" title="Delete">
                                <a href="{{route('menu.destroy', $menu)}}"><i class="fas fa-trash danger"></i></a>
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

        $('#menus').DataTable();
                } );
</script>

@endsection
