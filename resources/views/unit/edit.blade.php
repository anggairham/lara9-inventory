@extends('layouts.app')

@section('title', $title)

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
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
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit unit</h3>
                <div class="card-tools">
                    <a class="btn btn-sm btn-primary" href="{{ route('unit.index') }}"> Back</a>
                </div>

            </div>
            <form action="{{ route('unit.update', $unit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <strong>Category Name</strong>
                        <input type="text" name="unit_name" value="{{ $unit->unit_name }}" class="form-control">
                    </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
