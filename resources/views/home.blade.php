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
                            <div class="col-8">
                                <h2>{{ $product->name}}</h2>
                                <!-- <h2>$product-</h2> -->
                            </div>
                            <div class="col-1">
                                <a href="{{url('/articles',$article->id)}}"> <span class="d-block mt-1"> <i class="fa fa-eye"></i> </span></a>
                            </div>
                            <div class="col-2">
                                <a href="{{url('/articles/'.$article->id.'/edit')}}"> <span class="d-block mt-1"> <i class="fa fa-edit"></i> </span></a>
                            </div>
                        </div>


                       

                    </div>

                    <div class="card-body body">

                        <p>{{$article->content}}</p>


                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="d-flex flex-column align-items-center justifiy-content-center">
        {{ $products->links() }}
    </div>

</body>

</html>