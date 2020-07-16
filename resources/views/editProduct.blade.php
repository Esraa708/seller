
<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <script>
        <?php
        $indexed = array();
        foreach ($attributes as $object) {
            $indexed[$object->name] = $object;
        }

        ?>
    </script>

</head>

<body>
    <div class="container">
        <div class="row d-flex flex-column justify-content-center">

            <form action=" {!! action('AddProduct@update', $product->id) !!}" method="POST">
                @method('PUT')
                @csrf
                <input type="hidden" name="attrs" id="attributes" value="{{ $attributes }}" />
                <div class="row">
                    <div class="col-md-4">



                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value={{ $product->name }} required class="form-control" placeholder="Enter product name" aria-describedby="helpId">
                            @error('name')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="text" name="brand" id="brand" value={{ $product->brand }} required class="form-control" placeholder="Enter product brand" aria-describedby="helpId">
                            @error('brand')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="basic_color">Basic color</label>
                            <input type="text" name="basic_color" required id="basic_color" value={{ $product->basic_color }} class="form-control" placeholder="Enter product color" aria-describedby="helpId">
                            @error('basic_color')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" required id="price" class="form-control" value={{ $product->price }} placeholder="Enter product price" aria-describedby="helpId">
                            @error('price')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="number" name="sku" required id="sku" class="form-control" value={{$product->sku}} placeholder="Enter product sku" aria-describedby="helpId">
                            @error('sku')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantity">quantity</label>
                            <input type="number" name="quantity" required id="quantity" value={{$product->quantity }} class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                            @error('quantity')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">


                        @if(isset($indexed['weight']))
                        <div class="form-group">
                            <label for="weight">weight</label>
                            <input type="number" name="weight" required id="weight" class="form-control" value={{ $indexed['weight']->pivot->value }} placeholder="Enter product weight" aria-describedby="helpId">
                            @error('weight')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if(isset($indexed['matrial']))
                        <div class="form-group">
                            <label for="quantity">matrial</label>
                            <input type="text" name="matrial" value={{ $indexed['matrial']->pivot->value }} required id="matrial" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                            @error('matrial')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if(isset($indexed['dimensions']))
                        <div class="form-group">
                            <label for="dimensions">Diminsions</label>
                            <input type="text" name="dimensions" required id="dimensions" value={{ $indexed['dimensions']->pivot->value }} class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                            @error('dimensions')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="countery">countery</label>
                            <input type="text" name="countery" id="countery" required class="form-control" placeholder="Enter product country" value={{ $product->countery }} />
                            @error('countery')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" value={{ $product->description }} required cols="30" class="form-control" rows="10">
                        {{ $product->description }}
                        </textarea>
                        @error('description')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-2">


                    <button type="submit" class="btn btn-primary form-control">Add product</button>
                </div>
            </form>



        </div>
    </div>


</body>

</html>