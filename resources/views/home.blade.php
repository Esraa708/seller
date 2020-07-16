<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Current products</h1>
        <div class="row justify-content-center mb-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card article-card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12">
                                <h2>{{ $product->name}}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="card-body body">
                        <p>Brand:-{{$product->brand}}</p>
                        <p>Country:-{{$product->countery}}</p>
                        <p>Price:-{{$product->price}}</p>
                        <p>quantity:-{{$product->quantity}}</p>
                        <p>SKU:-{{$product->sku}}</p>
                        <!-- <p>Description:-{{$product->description}}</p> -->
                        <p>price:-{{$product->price}}</p>
                        <!-- <p>SKU:-{{$product->sku}}</p> -->
                        <!-- @if($product->matrial)
                        <p>Matrial:-{{$product->matrial}}</p>
                        @endif
                        @if($product->weight)
                        <p>weight:-{{$product->weight}}</p>
                        @endif
                        @if($product->dimensions)
                        <p>diminsions:-{{$product->dimensions}}</p>
                        @endif -->
                        <div class="row">
                            <div class="col-4">
                                <a class="btn btn-success" href="{{url('/product',$product->id)}}">show</a>
                            </div>
                            <div class="col-3">
                                <a class="btn btn-primary" href="{{url('/product/'.$product->id.'/edit')}}">edit</a>
                            </div>
                            <div class="col-3">
                                <form action=" {!! action('AddProduct@destroy',$product->id) !!}" method="POST">
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex flex-column align-items-center justifiy-content-center">
            {{ $products->links() }}
        </div>
    </div>


</body>

</html>