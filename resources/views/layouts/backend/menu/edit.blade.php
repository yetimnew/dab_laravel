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

        </div>

        <div class="card text-left">
            <div class="card-header">

                <div class="d-flex align-items-center">
                    <h2>Edit <span class="text-primary bold">{{$menu->title}}</span> Menus </h2>
                    {{-- <!-- @can('driver create') --> --}}
                    <div class="ml-auto">
                        <a href="{{route('menu.index')}}" class="btn btn-outline-primary">
                            <i class="fa fa-caret-left mr-1" aria-hidden="true"></i>Back</a>
                    </div>
                    {{-- <!-- @endcan --> --}}
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <div class="card-body">
                <form method="post" action="{{route('menu.update',$menu)}}" id="driver_reg">
                    @method('PUT')
                    @csrf
                    <div class="form-group 	required">
                        <label class="control-label">Title</label>
                        <div class="input-group">
                            <input name="title" type="text" id="title"
                                class="form-control select {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                value="{{old('title') ??  $menu->title}}" onfocusout="validatetitle()">
                            @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>

                    <div class="form-group 	required">
                        <label class="control-label">Link</label>
                        <div class="input-group">
                            <input name="link" type="text" id="link"
                                class="form-control select {{ $errors->has('link') ? ' is-invalid' : '' }}"
                                value="{{old('link') ??  $menu->link}}" onfocusout="validatelink()">
                            @if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>
                    <div class="form-group  required">
                        <label class="control-label" for="job_card_type">Mnue Status</label>
                        <div class="input-group">
                            <select name="status" id="status"
                                class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                onfocusout="validatestatus()">
                                @if ($menu->status == 1)
                                <option class="dropup" value="1" selected>Active </option>
                                <option class="dropup" value="0">InActive</option>
                                @else
                                <option class="dropup" value="0" selected>InActive</option>
                                <option class="dropup" value="1">Active</option>
                                @endif

                            </select>
                            @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>

                    <div class="form-group ml-auto">
                        <button type="submit" class="btn btn-primary" name="save"> <i class="fas fa-save mr-1"
                                aria-hidden="true"></i>Save</button>

                    </div>
                </form>
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
