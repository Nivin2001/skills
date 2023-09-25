    @extends('admin.layouts.master')
    @section('title')
        new category
    @endsection

    @section('page_name')
        Add category
    @endsection

    @section('main_page')
        category
    @endsection



    @section('content')

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


        <a href="{{ route('cats.create') }}" class="btn-btn-outline-info"> Create</a>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 1000px;">

                            <div class="input-group-append">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0" style="height: 400px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Created_at</th>
                                <th colspan="2" class="text-center">Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @forelse($cats as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->name }}</td>
                                    <td>
                                        @if ($cat->active == 1)
                                            {{ 'active' }}
                                        @else
                                            {{ 'not active' }}
                                        @endif
                                    </td>

                                    <td>{{ $cat->created_at }}</td>
                                    <td>
                                        <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-outline-info"> update

                                        </a>

                                    </td>
                                    <td>

                                    <td>
                                        <form method="POST" action="{{ route('cats.destroy', $cat->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">Delete </button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No catgory Added </td>
                                </tr>
                            @endforelse()
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        </div>
    @endsection
