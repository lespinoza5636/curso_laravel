@extends('layouts.landing')

@section('title')
    Services
@endsection

@section('content')
    <h1>Services</h1>
    <div class="cards">
        @component('_components.card')
        @slot('title')
            Service 1
        @endslot    
        @slot('content')
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat magni tempora numquam beatae harum aperiam ipsum, sit voluptas temporibus asperiores eum commodi hic. Incidunt minima, possimus quis sequi in saepe.
        @endslot
    @endcomponent
    @component('_components.card')
        @slot('title')
            Service 2
        @endslot    
        @slot('content')
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure sed tempora omnis inventore facilis ipsa, voluptas magnam doloremque recusandae at magni consequuntur, repellendus praesentium culpa dignissimos adipisci numquam incidunt odio?
        @endslot
    @endcomponent
    </div>
    
@endsection