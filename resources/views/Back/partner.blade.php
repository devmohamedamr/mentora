@extends('Back.index')
@section('content')
    @if(Session::has('update'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> </h4>
            {{Session::get('update')}}
        </div>
    @endif

    <form action="partner" method="post" enctype="multipart/form-data">

        <div class="form-inline">
            <div class="form-group">
                <input type="file" name="files" id="js-upload-files">
            </div>
            <input type="submit" name="add" value="upload" class="btn btn-sm btn-primary">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>

    </form>

@stop



