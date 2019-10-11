@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Coupon') }}</div>

                <div class="card-body">

                    <form action="{{ route('coupon.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Coupon Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>
                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}"  autocomplete="code" autofocus>

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                            <div class="col-md-6">
                                <select id="type" name="type" class="form-control @error('type') is-invalid @enderror" >
                                    <option value="F">Fixed</option>
                                    <option value="P">Percentage</option>
                                </select>
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>
                            <div class="col-md-6">
                                <input id="discount" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}"  autocomplete="discount" autofocus>
                                @error('discount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="minAmount" class="col-md-4 col-form-label text-md-right">{{ __('Minimum Amount') }}</label>
                            <div class="col-md-6">
                                <input id="min_amount" type="text" class="form-control @error('min_amount') is-invalid @enderror" name="minAmount" value="{{ old('minAmount') }}"  autocomplete="minAmount" autofocus>
                                @error('minAmount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maxDiscountAmount" class="col-md-4 col-form-label text-md-right">{{ __('Maximum Discount Amount') }}</label>
                            <div class="col-md-6">
                                <input id="max_amount" type="text" class="form-control @error('maxDiscountAmount') is-invalid @enderror" name="maxDiscountAmount" value="{{ old('maxDiscountAmount') }}"  autocomplete="maxDiscountAmount" autofocus>
                                @error('maxDiscountAmount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="startDateTime" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
                            <div class="col-md-6">
                                <input id="startDateTime" type="text" class="form-control @error('startDateTime') is-invalid @enderror" name="startDateTime" value="{{ old('startDateTime') }}" placeholder="Y-m-d" autocomplete="startDateTime" autofocus>
                                @error('startDateTime')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="endDateTime" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
                            <div class="col-md-6">
                                <input id="endDateTime" type="text" class="form-control @error('endDateTime') is-invalid @enderror" name="endDateTime" value="{{ old('endDateTime') }}"  placeholder="Y-m-d" autocomplete="endDateTime" autofocus>
                                @error('endDateTime')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maxTotalUse" class="col-md-4 col-form-label text-md-right">{{ __('Maximum Total Use') }}</label>
                            <div class="col-md-6">
                                <input id="maxTotalUse" type="text" class="form-control @error('maxTotalUse') is-invalid @enderror" name="maxTotalUse" value="{{ old('maxTotalUse') }}"  autocomplete="maxTotalUse" autofocus>
                                @error('maxTotalUse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maxUseCustomer" class="col-md-4 col-form-label text-md-right">{{ __('Maximum Use Per Customer') }}</label>
                            <div class="col-md-6">
                                <input id="maxUseCustomer" type="text" class="form-control @error('maxUseCustomer') is-invalid @enderror" name="maxUseCustomer" value="{{ old('maxUseCustomer') }}"  autocomplete="maxUseCustomer" autofocus>
                                @error('maxUseCustomer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
