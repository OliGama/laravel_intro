@extends('layouts.app');
@section('content')
    <form method="POST" action="/users">
        @csrf
        <label>Nome</label>
        <input type="text" name="name">
        <br>
        <label>E-mail</label>
        <input type="text" name="email">
        <br>
        <button type="submit">Cadastrar</button>
    </form>
@endsection
