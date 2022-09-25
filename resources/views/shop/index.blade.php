@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            {{-- {{dump($produits)}}--}}

            @foreach ($produits as $produit )


            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('produits/' .$produit->photo_principale) }}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </img>

                    <div class="card-body">
                        <p class="card-text">{{$produit->nom}} <br> {{$produit->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>

</div>

</div>


@endsection