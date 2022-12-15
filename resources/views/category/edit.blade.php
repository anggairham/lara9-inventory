@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Blank Page</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div>
                            <h2>Edit category</h2>
                        </div>
                        <div>
                            <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
               
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              
                <form action="{{ route('category.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
               
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kelas:</strong>
                                <input class="form-control" name="kelas" placeholder="Kelas" value="{{ $category->kelas }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
               
                </form>
            </div>
        </section>
    </div>

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File --> 
@endpush 