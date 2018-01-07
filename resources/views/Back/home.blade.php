@extends('Back.index')

@section('content')
@if(Session::has('update'))
<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> </h4>
                {{Session::get('update')}}
              </div>
@endif


 <form action="home" method="post">

  <div class="box-body">
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" value="{{$data->title}}" name="title" id="exampleInputEmail1" placeholder="Enter title">
    </div>

      <div class="form-group">
        <label for="slogan">slogan</label>
        <input type="text" class="form-control" value="{{$data->slogan}}" name="slogan" id="exampleInputEmail1" placeholder="Enter slogan">
      </div>



     <div class="form-group">
         <label for="mission">mission</label>
         <input type="text" class="form-control" value="{{$data->mission}}" name="mission" id="exampleInputEmail1" placeholder="Enter mission">
     </div>

      <div class="form-group">
          <label for="vision">vision</label>
          <input type="text" class="form-control" value="{{$data->vision}}" name="vision" id="exampleInputEmail1" placeholder="Enter vision">
      </div>
      <div class="form-group">
          <label for="qus">qus</label>
          <input type="text" class="form-control" value="{{$data->qus}}" name="qus" id="exampleInputEmail1" placeholder="Enter qus">
      </div>

     </div>
                      {{ csrf_field() }}

                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">update</button>
                  </div>

 </form>
@stop