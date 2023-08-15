@extends('client_layout.master')
@section('title')
Product
@endsection

@section('content')
<div class="data hidden">
<section class="shop p-0 text-center text-white " >
    <div class="container">
        <div class="row align-items-center" >
            <div class="col">
                <img style="height:295px ;width:254px" src="{{ asset('frontend/css/images/ampouleDatanalyse.png')}}"/>

                <h1 >
                    GOLDSTREET
                    <span style="color:#D9D9D9">Shop </span>
                </h1>
                <p >
                    PROPULSE TES RÉSULTATS EN TRADING FOREX AVEC DES INFOS, DATAS ET RECHERCHES PROFESSIONNELS JOURNALIÈRES
    
                </p>
                <a href="#plans" style="background-color: #B5DDDA" class="btn btn-outline-dark  px-4 py-2">
                 REJOINDRE
                </a>
            </div>
        </div>
    </div>

</section>
<section class="fondamental  text-center text-white ">
    <div class="container  ">
        <div class="d-flex justify-content-center align-items-center">

          <div class="row justify-content-between ">

            @foreach($products as $product )
            <div class="col mb-2">
                <div class="card bg-dark" >
                  <img  src="{{ Voyager::image($product->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title    ">
                          {{$product->name}}
                        </h5>

                        <div class="d-flex justify-content-center align-items-center">
                          <h4 class="card-text" >
                            {{$product->price }}  €
                          </h4>

                        <form action="{{url('/shop',$product->id)}}" method="get">
                          @csrf
                           <button class="btn btn-default" >en savoir plus >></button>
                      </form>
                       </div>
                    </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
</section>
@endsection
