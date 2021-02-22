<!--

    Stand Out Parts.

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    .....................
    <div>{{ $errors->first('name') }}</div>

 -->
@extends('layout')
@section('title')
    Customers Interface...
@endsection
@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <h4>Add New Cutomer</h4>
            <form method="post" class="pb-5" action="customers">
                <div class="form-group pb-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="" class="form-control" />
                    <div>
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="" class="form-control" />
                    <div>
                        {{ $errors->first('email') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">In Active</option>
                    </select>
                    <div>
                        {{ $errors->first('status') }}
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Save Customer</button>
                @csrf
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h1>Active Customers</h1>
            <ul>
                <?php
                    foreach($activecustomers as $customer)
                    {
                        echo '<li>'.$customer->name.'</li>';
                    }
                ?>
            </ul>
        </div>
        <div class="col-6">
            <h1>Inactive Customers</h1>
            <ul>
                <?php
                    foreach($inactivecustomers as $customer)
                    {
                        echo '<li>'.$customer->name.'</li>';
                    }
                ?>
            </ul>
        </div>
    </div>
@endsection

