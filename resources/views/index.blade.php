<?php
/**
 * @var $errors ViewErrorBag
 * @var $users UserModel[]
 */

use App\Models\UserModel;
use Illuminate\Support\ViewErrorBag;

?>
@extends('layouts.main')
<div class="container">
    <h1>Все пользователи</h1>

    <div class="row mt-5">
        <div class="col-12 mt-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Link</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="/user/{{$user->id}}">Link</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
