@extends('layouts.app')

@section('content')
    <form method="POST" action="/commentsStore">
        @csrf
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>New Comments to Publication {{ $id }}</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="content" class="form-label">Comment</label>
                        <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="publication_id" value="{{ $id }}">
                        <input type="hidden" name="status" value="1">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Save</button>
                    <a href="/publications" class="btn btn-primary float-right mr-4">Cancel</a>
                </div>
            </div>
        </div>
    </form>

@endsection
