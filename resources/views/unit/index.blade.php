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
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>

                <div class="card-tools"> 
                <a class="btn btn-sm btn-success" href="{{ route('unit.create') }}"> Create New {{ $title }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="5%">No</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($unit as $data)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $data->unit_name }}</td>
                                <td>
                                    <form action="{{ route('unit.destroy', $data->id) }}" method="POST">

                                        <a class="btn btn-xs btn-info"
                                            href="{{ route('unit.show', $data->id) }}">Show</a>

                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('unit.edit', $data->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-xs btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="row text-center">
                    {!! $unit->links() !!}
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
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
