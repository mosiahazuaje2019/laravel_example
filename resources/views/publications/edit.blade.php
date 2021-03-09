@extends('layouts.app')

@section('content')
    <form method="POST" action="/publicationsUpdate/{{$publication->id}}">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Publication Edit</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Ingrese un titulo" value="{{$publication->title}}">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="3">{{$publication->content}}</textarea>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Save</button>
                    <a href="/publications" class="btn btn-primary float-right mr-4">Cancel</a>
                </div>
            </div>
        </div>
    </form>
@endsection
