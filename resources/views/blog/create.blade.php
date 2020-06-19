<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
   

   <div class="container">
     	@if(Session::has('success'))
			<div class="alert alert-success" role="alert">
			    {{Session::get('success')}}
			</div>
	     @endif
     	<form action="{{asset(route('blog.create'))}}" method="POST" enctype="multipart/form-data">
     		@csrf
     	  <div class="form-group">
			    <label for="exampleInputEmail1">Path</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="path" placeholder="write-your-path-name-like-this (max 40 characters)">
			    <small>{{$errors->first('path')}}</small>
		  </div>
     	  <div class="form-group">
			    <label for="exampleInputEmail1">Meta Title</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="title" placeholder="max 60 characters">
			    <small>{{$errors->first('title')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Meta Description</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="metadescription" placeholder="max 160 characters">
			    <small>{{$errors->first('metadescription')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Target Keywords</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="keywords" placeholder="example: keyword1, keyword2, keyword3..... maximum upto 10 words">
			    <small>{{$errors->first('keywords')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Blog Heading</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="heading" placeholder="blog title">
			    <small>{{$errors->first('heading')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Blog Description</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="description" placeholder="max 200 characters">
			    <small>{{$errors->first('description')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">Heading Image</label>
			    <input type="file" class="form-control form-control-sm" id="exampleInputEmail1" name="image">
			    <small>{{$errors->first('image')}}</small>
		  </div>
		  <div class="form-group">
			    <label for="exampleInputEmail1">image Description</label>
			    <input class="form-control form-control-sm" id="exampleInputEmail1" name="imgalt" placeholder="describe the image">
			    <small>{{$errors->first('imgalt')}}</small>
		  </div>
		  <label for="exampleInputEmail1">Content</label>
		  <textarea id="summernote" name="content"></textarea> 
		  <button type="submit" class="btn btn-primary">Submit</button>
	 </form>
     </div>

<script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 100
      });
</script>

