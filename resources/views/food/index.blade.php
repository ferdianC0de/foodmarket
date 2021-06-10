@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('message')
            <div class="card">
                <div class="card-header">Foods</div>
                <div class="card-body">

                    <h3>Your foods are here!</h3>
                    
                    <table class="table">
                        <thead>
                            <td>No.</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Stocks</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            @foreach ($foods as $food)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$food->food_name}}</td>
                                <td>{{$food->price}}</td>
                                <td>{{$food->stock}}</td>
                                <td>
                                    <a href="{{Route('edit-food')}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="{{Route('delete-food', ['id' => $food->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div>
                        <a style="float: right; margin-top: 10%;" href="{{Route('input-food')}}" class="btn btn-success">
                            <i class="fas fa-plus"></i> &nbsp;
                            Add Food
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
