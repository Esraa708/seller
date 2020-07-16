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

            <form action=" {!! action('AddProduct@store') !!}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="attrs" id="attributes" value={{ $attributes }} hidden aria-describedby="helpId">
                <div class="row">
                    <div class="col-md-4">



                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" required class="form-control" placeholder="Enter product name" aria-describedby="helpId">
                            @error('name')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="text" name="brand" id="brand" required class="form-control" placeholder="Enter product brand" aria-describedby="helpId">
                            @error('brand')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="basic_color">Basic color</label>
                            <input type="text" name="basic_color" required id="basic_color" class="form-control" placeholder="Enter product color" aria-describedby="helpId">
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
                            <input type="number" name="price" required id="price" class="form-control" placeholder="Enter product price" aria-describedby="helpId">
                            @error('price')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="number" name="sku" required id="sku" class="form-control" placeholder="Enter product sku" aria-describedby="helpId">
                            @error('sku')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantity">quantity</label>
                            <input type="number" name="quantity" required id="quantity" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
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
                            <label for="quantity">weight</label>
                            <input type="number" name="weight" required id="weight" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
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
                            <input type="text" name="matrial" required id="matrial" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                            @error('matrial')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if(isset($indexed['dimensions']))
                        <div class="form-group">
                            <label for="quantity">Diminsions</label>
                            <input type="text" name="dimensions" required id="dimensions" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
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
                            <input type="text" name="countery" required id="countery" class="form-control" placeholder="Enter product country" aria-describedby="helpId">
                            @error('countery')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="images">upload images</label>
                            <input type="file" name="images[]" required multiple id="images">
                            @error('images')
                            <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" required cols="30" class="form-control" rows="5"></textarea>
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