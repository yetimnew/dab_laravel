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
                    <h2>Create New Project </h2>
                    {{-- <!-- @can('driver create') --> --}}
                    <div class="ml-auto">
                        <a href="{{route('project.index')}}" class="btn btn-outline-primary">
                            <i class="fa fa-caret-left mr-1" aria-hidden="true"></i>Back</a>
                    </div>
                    {{-- <!-- @endcan --> --}}
                </div>

            </div>

            <div class="card-body">
                <form method="post" action="{{route('project.store')}}" class="form-horizontal" id="driver_reg"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group 	required">
                        <label class="control-label">Title</label>
                        <div class="input-group">
                            <input name="title" type="text" id="title"
                                class="form-control select {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                value="{{old('title') }}">
                            @if ($errors->has('title'))
                            <span class=" invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="control-label">Body</label>
                        <div class="input-group">
                            <textarea name="body" class="form-control {{ $errors->has('body') ? ' is-invalid' : '' }}"
                                id="body">{{ old('body')}}</textarea>
                            @if ($errors->has('body'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>
                    <div class="form-group 	required">
                        <label class="control-label" for="when">When the Project Done? </label>
                        <div class="input-group">
                            <input name="when" type="date" id="when"
                                class="form-control select {{ $errors->has('when') ? ' is-invalid' : '' }}"
                                value="{{old('when') }}" onfocusout="validatewhen()">
                            @if ($errors->has('when'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('when') }}</strong>
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
                                value="{{old('link') }}" onfocusout="validatelink()">
                            @if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>

                    <div class="form-group  required">
                        <label class="control-label" for="category_id">Catagory</label>
                        <div class="input-group">
                            <select name="category_id[]" id="category_id"
                                class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                                <option class="dropup" value=""> Select One</option>

                                @foreach ($catagories as $catagory)
                                <option value="{{$catagory->id}}"
                                    {{old('category_id') == $catagory->id ? 'selected' : ''}}> {{$catagory->title}}
                                </option>

                                @endforeach
                            </select>
                            @if ($errors->has('catagory_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('catagory_id') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>

                    <div class="form-group  required">
                        <label class="control-label" for="client_id">Customer Name</label>
                        <div class="input-group">
                            <select name="client_id" id="client_id"
                                class="form-control {{ $errors->has('client_id') ? ' is-invalid' : '' }}"
                                onfocusout="validateclient_id()">
                                <option class="dropup" value="" selected> Select One</option>
                                @foreach ($customers as $customer)
                                <option class="dropup" value="{{$customer->id}}">
                                    {{$customer->name}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('client_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('client_id') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>

                    <div class="form-group  required">
                        <label class="control-label" for="tag_id">Tag</label>
                        <div class="input-group">
                            <select name="tag_id[]" id="tag_id"
                                class="form-control {{ $errors->has('tag_id') ? ' is-invalid' : '' }}"
                                onfocusout="validatetag_id()">
                                @foreach ($tags as $tag)
                                <option class="dropup" value="{{$tag->id}}">
                                    {{$tag->name}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('tag_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tag_id') }}</strong>
                            </span>
                            @endif
                            <span class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="control-label" for="image">Image</label>
                        <div class="input-group input-group-sm">
                            <input name="image" type="file" id="image"
                                class="form-control  {{ $errors->has('image') ? ' is-invalid' : '' }}" value="}"
                                onfocusout="validateimage()">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"
                                        aria-hidden="true"></i></span>
                            </div>
                            @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
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
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    $('#category_id').select2({
        placeholder: "Select Catagory",
        allowClear: true,
         multiple: true
    });
    $('#tag_id').select2({
        placeholder: "Select Tag",
        allowClear: true,
         multiple: true
    });

    });
</script>

@endsection
