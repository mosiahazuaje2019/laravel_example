@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Publication Detail</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese un titulo" value="{{$publication[0]['title']}}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="3">{{$publication[0]['content']}}</textarea>
                </div>
                <div class="container-fluid">
                    <h3>Comments</h3>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>Comment</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($publication as $p)
                            @foreach($p->comments as $comment)
                                <tr>
                                    <td>{{ $comment->content }}</td>
                                    <td>{{ $comment->status }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="/publications" class="btn btn-primary float-right mr-4">Back</a>
            </div>
        </div>
    </div>

@endsection
