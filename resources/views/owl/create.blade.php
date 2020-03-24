@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">
                    <form method="post">
                    @csrf
                    <label for="name">Name</label><br>
                    <input id="name" class="control" type="text" name="name"><br>

                    <label for="is_resit">Resit</label><br>
                    <select id="is_resit" class="control" name="is_resit">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select><br>

                    <label for="version_nr">Version nr</label><br>
                    <input id="version_nr" class="control" type="number" name="version_nr"><br>

                    <label for="comments">Comments</label><br>
                    <input id="comments" class="control" type="text" name="comments"><br><br>

                    <button type="submit" class="button is-success">Submit</button>
                    <a href="{{ route('owl.index') }}" class="button is-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
