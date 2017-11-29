@extends('master')
@section('content')
    <div class="container">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Tekst</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cruds as $post)
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['title']}}</td>
                <td>{{$post['post']}}</td>
                <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Aanpassen</a></td>
                <td>
                    <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Verwijder</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection