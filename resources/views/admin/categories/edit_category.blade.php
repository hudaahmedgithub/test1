@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> Ctegories<a href="#" class="current"></a>Edit Categories</div>
    <h1>Categories</h1>
    
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
    
    <div class="row-fluid">

        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Edit Category</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/edit-category/'.$categoryDetails->id)}}" name="edit_category" id="edit_category" novalidate="novalidate">{{ csrf_field() }}
               
                
           <!--   <div class="control-group">
                  <label class="control-label">ID</label>
                  <div class="controls">
                    <input type="integer" name="id" id="id" value="{{ $categoryDetails->id }}"/>
                  </div>
                </div>
                  
         --> <div class="control-group">
                  <label class="control-label">Category Name</label>
                  <div class="controls">
                    <input type="text" name="name" id="name" value="{{ $categoryDetails->name }}" /> 
                </div></div>
                  <div class="control-group">
                  <label class="control-label">Category Level</label>
                  <div class="controls">
                    <select name="parent_id" style="width:220px;">
                        <option value="0">Main Category</option>
                        @foreach($levels as $val)
                        <option value="{{ $val->id }}"  
                                @if($val->id == $categoryDetails->parent_id) selected @endif>{{ $val->name }}</option>
                        @endforeach
                      </select>
                      
                      </div></div>
                  
                      <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" id="description">{{ $categoryDetails->description }}</textarea>
                  </div>
                </div>
                
                 
                    <div class="control-group">
                  <label class="control-label">URL</label>
                  <div class="controls">
                    <input type="text" name="url" id="url" value="{{ $categoryDetails->url }}"  />
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Edit Category" class="btn btn-success"/>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
    
      
    <!-- @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_error')!!}</strong>
            </div>
            
            @endif
            
             @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_success')!!}</strong>
            </div>
            
            @endif
-->