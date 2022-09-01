@extends('app')


@section('content')
<div id="app" class="row" >
    <div class="col-xs-12">
    <br><br>
        <h1 class="page-header">Customers</h1>
    </div>
    <div class="col-sm-8">
        <br>
        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">New Customer</a><br><br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers">
                    <th scope="row">@{{ customer.id }}</th>
                    <td>@{{ customer.name }}</td>
                    <td>@{{ customer.address}}</td>
                    <td>@{{ customer.phone_number }}</td>
                    <td width="10px" ><a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editCustomer(customer)">Edit</a> </td>
                    <td width="10px" ><a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteCustomer(customer.id)">Delete</a></td>
                </tr>
            </tbody>
        </table>
        @include('create')
        @include('edit')
    </div>
</div>
@endsection