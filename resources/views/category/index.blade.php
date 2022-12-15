@extends('layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laravel 9 CRUD School Application</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create New student</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($category as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->category_name }}</td> 
            <td>
                <form action="{{ route('category.destroy',$data->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('category.show',$data->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('category.edit',$data->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $category->links() !!}
    </div>
      
@endsection