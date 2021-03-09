@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Publications') }}
                        <a href="/publicationsAdd" class="btn btn-primary float-right">Add</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col" colspan="4">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($publications as $publication)
                                <tr>
                                    <td> {{$publication->id}} </td>
                                    <td> {{$publication->title}} </td>
                                    <td> {{$publication->content}} </td>
                                    <td colspan="4">
                                        <a href="/publicationsEdit/{{$publication->id}}">Edit</a>
                                        <a href="/publicationsShow/{{$publication->id}}">Show</a>
                                        <a href="/publicationsDestroy/{{$publication->id}}">Delete</a>
                                        <a href="/comments/add/{{$publication->id}}">Add comments</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
