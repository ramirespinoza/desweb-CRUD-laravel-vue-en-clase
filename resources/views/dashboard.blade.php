@extends('app')


@section('content')
<div id="app" class="row" >
    <div class="col-xs-12">
        <h1 class="page-header">Customers</h1>
    </div>
    <div class="col-sm-7">
        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">New Customer</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
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
                    <td width="10px" ><a href="#" class="btn btn-warnign btn-sm" v-on:click.prevent="editCustomer(customer)">Edit</a> </td>
                    <td width="10px" ><a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteCustomer(customer.id)">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td width="10px" ><a href="#" class="btn btn-warnign btn-sm">Edit</a> </td>
                    <td width="10px" ><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td width="10px" ><a href="#" class="btn btn-warnign btn-sm">Edit</a> </td>
                    <td width="10px" ><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            </tbody>
        </table>
        @include('create')
        @include('edit')
    </div>
    <div class="col-sm-5">
        <pre>
            @{{ $data }}
        </pre>
    </div>
</div>
@endsection