@extends('layouts.app')
@section('content')
<div class="container" style="background: red">
    <section>
        <div class="container py-5">
            <header class="text-center mb-5 text-white">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <h3>cashier subscription</h3>
                        <h1>price</h1>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <section>
        <div class="row">
            @foreach ($plans as $plan )

            <div class="col-sm-4">
                <div class="card text-center mb-3">
                    <h6>{{$plan->name}}</h6>
                    <h5>${{ $plan->price}}/month</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, nemo nesciunt facilis harum numquam officia alias quos corporis! Expedita voluptate soluta culpa libero eligendi impedit tempore porro! At, dolores sapiente.</p>
                    <a href="{{ route('plan.show',$plan->slug)}}" class="btn btn-success">buy-now</a>
                </div>
            </div>
            @endforeach

        </div>
    </section>
</div>
@endsection
