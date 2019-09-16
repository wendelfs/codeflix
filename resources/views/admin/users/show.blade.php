<<<<<<< HEAD
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Visualizar usuário</h3>
            <?php
            $iconEdit = Icon::create('pencil');
            $iconRemove = Icon::create('trash');
            ?>
            {!! Button::primary($iconEdit)->asLinkTo(route('admin.users.edit',['user'=>$user->id])) !!}
            {!!
                Button::danger($iconRemove)
                ->asLinkTo(route('admin.users.destroy',['user'=>$user->id]))
                ->addAttributes(['onclick'=>"event.preventDefault();document.getElementById(\"form-delete\").submit();"])
            !!}
            <?php $formDelete = FormBuilder::plain([
                'id' => 'form-delete',
                'method' => 'DELETE',
                'style' => 'display:none',
                'route'=>['admin.users.destroy','user'=>$user->id]
            ]);?>
            {!! form($formDelete) !!}
            <br/><br/>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$user->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th scope="row">E-mail</th>
                    <td>{{$user->email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
=======
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Visualizar usuário</h3>
            <?php
            $iconEdit = Icon::create('pencil');
            $iconRemove = Icon::create('trash');
            ?>
            {!! Button::primary($iconEdit)->asLinkTo(route('admin.users.edit',['user'=>$user->id])) !!}
            {!!
                Button::danger($iconRemove)
                ->asLinkTo(route('admin.users.destroy',['user'=>$user->id]))
                ->addAttributes(['onclick'=>"event.preventDefault();document.getElementById(\"form-delete\").submit();"])
            !!}
            <?php $formDelete = FormBuilder::plain([
                'id' => 'form-delete',
                'method' => 'DELETE',
                'style' => 'display:none',
                'route'=>['admin.users.destroy','user'=>$user->id]
            ]);?>
            {!! form($formDelete) !!}
            <br/><br/>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$user->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th scope="row">E-mail</th>
                    <td>{{$user->email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
