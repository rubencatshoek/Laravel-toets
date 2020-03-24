@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <h4><a href="{{ route('owl.create') }}" class="button is-success">Create</a></h4>
            <div class="columns">
                <div class="column is-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Teacher name</th>
                            <th scope="col">Owl name</th>
                            <th scope="col">Resit</th>
                            <th scope="col">Version number</th>
                            <th scope="col">Comments</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->owl->name }}</td>
                                <td>{{ $teacher->owl->is_resit }}</td>
                                <td>{{ $teacher->owl->version_nr }}</td>
                                <td>{{ $teacher->owl->comments }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
