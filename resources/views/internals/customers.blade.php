@extends('layout')
@section('content')

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <h4>Add New Cutomer</h4>
    <form method="post" action="customers">
        <input type="text" name="name" value="name" />
        <button type="submit">Save Customer</button>
        @csrf
    </form>

    <h1>Customers table.</h1>
    <ul>
        <?php

            foreach($customers as $customer)
            {
                echo '<li>'.$customer->name.'</li>';
            }

        ?>
    </ul>
@endsection

