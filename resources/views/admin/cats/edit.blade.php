        @extends('admin.layouts.master')
        @section('title')
        edit catgory
        @endsection

        @section('page_name')
        all
        @endsection

        @section('main_page')
        category
        @endsection


        @section('content')
        <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Category</h3>
        </div>


        <form method="POST" action="{{route('cats.update',$cat->id)}}">
            @csrf
            @method('put')
        <div class="card-body">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value={{$cat->name}} class="form-control" id="name" placeholder="Enter Category Name">
        </div>
        <div class="col-sm-6">

        <div class="form-group clearfix">
        <label for="name">Status</label>
        <div class="icheck-danger d-inline mx-3">
        <input type="radio" name="active" value="1" id="radioDanger1" {{($cat->active==1)?"checked":""}}>
        <label for="radioDanger1">
            Active
        </label>
        </div>
        <div class="icheck-danger d-inline">
        <input type="radio" name="active" value="0" id="radioDanger2" {{($cat->active==0)?"checked":""}}>
        <label for="radioDanger2">
            Not Active
        </label>
        </div>

        </div>
        </div>

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        @endsection()
