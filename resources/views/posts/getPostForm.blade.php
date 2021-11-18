@extends('layouts.main')
@section('content')
<h1>Create Post Information</h1>
<form action="/posts/{{($postEdit)? 'update/'.$postEdit->id:'addPost'}}" method='post' enctype="multipart/form-data">
  @csrf
  <fieldset class="row mb-3 w-75">
    <legend class="col-form-label col-sm-2 pt-0">Article</legend>
    <div class="col-sm-10">
      <div class="form-check ms-3">
        <select class="form-select form-select-sm" name="postCategory_id" required="required" aria-label=".form-select-sm example">
          <option selected>Choose a Article</option>
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->article}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <label for="Thumbnail" class="col-sm-2 col-form-label">Thumbnail</label>
    <div class="col-sm-10">
      <input class="imgload form-control my-1" id="file" type="file" name="thumbnail"/>
      <img class="imgshow" src="#" align="left" style="width:50px" /> 
    </div>
  </div> 
  <div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" required="required">
    </div>
  </div> 
  <div class="row mb-3">
    <label for="Contents" class="col-sm-2 col-form-label">Contents</label>
    <div class="col-sm-10">
        <textarea name="content" class="form-control" id="editor2"></textarea>
        <button type="submit" class="btn btn-primary my-3">Create a Post</button>
    </div>
  </div> 

</form>
<div class="row">
  <div class="col">
    <h1>ket qua my ajax</h1>
    <a class="myAjax" href="javascript:void(0)">Ajax check</a>
    <a class="myAjaxget" href="/posts/getproduct">Ajax check</a>
  </div>
</div>
@endsection
@section('footer_scripts')
<script type="text/javascript">
    $(window).on('load', function (){
      ClassicEditor
        .create( document.querySelector( '#editor2' ), {
          ckfinder: {
            uploadUrl: '/posts/uploadImages?command=QuickUpload&type=Files&responseType=json'
          },
          toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
        } )
        .catch( error => {
          console.error( error );
        } );
    });
</script>
@endsection