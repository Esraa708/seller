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
            <div class="offset-md-4 col-md-4">
                <form action=" {!! action('AddProduct@store') !!}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="attrs" id="attributes" value={{ $attributes }} hidden aria-describedby="helpId">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name" aria-describedby="helpId">
                        @error('name')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" id="brand" class="form-control" placeholder="Enter product brand" aria-describedby="helpId">
                        @error('brand')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="basic_color">Basic color</label>
                        <input type="text" name="basic_color" id="basic_color" class="form-control" placeholder="Enter product color" aria-describedby="helpId">
                        @error('basic_color')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="country">Countery</label>
                        <input type="text" name="country" id="country" class="form-control" placeholder="Enter product country" aria-describedby="helpId">
                        @error('country')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Enter product price" aria-describedby="helpId">
                        @error('price')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="number" name="sku" id="sku" class="form-control" placeholder="Enter product sku" aria-describedby="helpId">
                        @error('sku')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="quantity">quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                        @error('quantity')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    @if(isset($indexed['weight']))
                    <div class="form-group">
                        <label for="quantity">weight</label>
                        <input type="number" name="weight" id="weight" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                        @error('weight')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    @endif
                    @if(isset($indexed['matrial']))
                    <div class="form-group">
                        <label for="quantity">matrial</label>
                        <input type="text" name="matrial" id="matrial" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                        @error('matrial')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    @endif
                    @if(isset($indexed['dimensions']))
                    <div class="form-group">
                        <label for="quantity">Diminsions</label>
                        <input type="text" name="dimensions" id="dimensions" class="form-control" placeholder="Enter product quantity" aria-describedby="helpId">
                        @error('dimensions')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="countery">countery</label>
                        <input type="text" name="countery" id="countery" class="form-control" placeholder="Enter product country" aria-describedby="helpId">
                        @error('countery')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="images">upload images</label>
                        <input type="file" name="images[]" multiple id="images">
                        @error('images')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" class="form-control" rows="10"></textarea>
                        @error('description')
                        <small id="helpId" class="alert-danger form-control mt-1">{{ $message }}</small>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-primary form-control">Add product</button>
                </form>


            </div>
        </div>
    </div>


</body>

</html>