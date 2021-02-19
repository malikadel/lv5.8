@extends('layout')
@section('content')

    <h4>Add New Cutomer</h4>
    <form>
        <input type="text" name="name" value="name" />
        <button type="submit">Save Customer</button>
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

