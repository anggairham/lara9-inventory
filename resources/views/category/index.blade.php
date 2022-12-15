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
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Simple</h4>
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('category.create') }}"> Create New student</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped tabl-emd">
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($category as $data)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $data->category_name }}</td>
                                        <td>
                                            <form action="{{ route('category.destroy', $data->id) }}" method="POST">

                                                <a class="btn btn-xs btn-info"
                                                    href="{{ route('category.show', $data->id) }}">Show</a>

                                                <a class="btn btn-xs btn-primary"
                                                    href="{{ route('category.edit', $data->id) }}">Edit</a>

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
                            {!! $category->links() !!}
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
