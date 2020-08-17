@extends('layouts.main')
<div class="container">

    <div class="row mt-5">
        <div class="col-12 mt-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $userid->id }}</th>
                        <td>{{$userid->name}}</td>
                        <td>{{$userid->email}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>