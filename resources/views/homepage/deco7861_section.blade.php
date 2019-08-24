<section class="page-section1" id="page-section1">
 <div class = "row">
 
     <!-- center?? -->
<div class="col-xl-1"></div>
 <!-- Area Chart -->
<div class="card shadow col-xl-10">
    <div class="card-header d-flex flex-row">
    <div class ="row">
    <div class="p-2 m-0 font-weight-bold text-primary">
    Network Graph
   	</div>
   	
   	<form action="{{ route('upload') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
   	
		<input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
   	 
   	 	<div class ="row">
       	  <!-- File Uploading Area -->
       	 	<div class="form-group col-md-4"> 
           	 <input type="file" name="file_content" class="form-control-file"> 
           	 </div>
           	 <!-- Name Mark Area -->
           	 <div class="form-group col-md-3">
           	 <input id="name" name="name" type="text" placeholder = "Your Name" class="form-control form-control-sm">
           	 </div>
           	 <div class="form-group col-md-3">
           	 <input id="filename" name="file_name" type="text" placeholder = "File Name" class="form-control form-control-sm">
           	 </div> 	 
           	 <!-- Submit Area -->
           	 <div class = "col-md-2">
               <button type="submit" class="btn btn-primary">upload</button>
               </div>
          </div>
               
   	 </form>
   	 
    </div>   
    </div>
<!--         	<canvas id="bar_chart_canvas"></canvas> -->
    <div class="container" id = "deco7861">
    </div>
    <!-- center?? -->
    <div class="col-xl-1"></div>
</div>
</div>
<h1>{{$json_storages->file_content}}</h1>



<div class="container history-log">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Platewaste
        </h1>
      </div>

      <div class="card-body">
        @if($json_storages_page->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th>File ID</th> <th>Uploader Name</th> <th>Diagram Name</th>

              </tr>
            </thead>
            <tbody>
              @foreach($json_storages_page as $json_file)
              <tr>

                <td>{{$json_file->id}}</td> <td>{{$json_file->name}}</td> <td>{{$json_file->file_name}}</td> 
                </tr>
              @endforeach
            </tbody>
          </table>
          {!! $json_storages_page->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>
</section>