@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Coupons') }}</div>

                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Code</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $coupon)
                            <tr>
                                <td>{{$coupon->name}}</td>
                                <td>{{$coupon->type}}</td>
                                <td>{{$coupon->code}}</td>
                                <td>{{$coupon->discount}}</td>
                                <td>{{$coupon->startDateTime}}</td>
                                <td>{{$coupon->endDateTime}}</td>
                                <td><a href="{{route('coupon.edit',$coupon->id)}}" class="btn btn-primary active" role="button" aria-pressed="true">Edit</a>
                                   <a href="#" class="btn btn-danger active" role="button" aria-pressed="true">Delete</a></td>

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
