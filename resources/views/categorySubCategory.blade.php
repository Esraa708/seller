<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('partials.head')
</head>

<body>
    <div class="container">
        <form action=" {!! action('CategorySubCategory@create') !!}" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select class="form-control" name="category_id" id="category" onchange="bringSubcategory(event)">
                            @foreach ($categories as $category)
                            <option value={{$category->id }}>{{$category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subCategory">Subcategories </label>
                        <select class="form-control" name="subcategory_id" id="subCategory">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary form-control">Enter</button>

                </div>
            </div>
        </form>
    </div>
    <script>
        // cats=[];
        function bringSubcategory(e) {
            console.log(e.target.value);

            $('#subCategory').html('');
            $.ajax({
                method: 'get',
                url: `selectSubcategory/${e.target.value}`,
                dataType: 'json',

                success: function(data) {
                    console.log(data.subCategories)
                    data.subCategories.forEach(ele => {

                        $('#subCategory').append(`<option value="${ele.id}"> 
                                       ${ele.sub_category_name} 
                                  </option>`)
                    })

                },
                error: function() {
                    alert('Error loading data.');
                }
            });
        }
    </script>
</body>

</html>