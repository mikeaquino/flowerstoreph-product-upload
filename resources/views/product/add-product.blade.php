@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="/add" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="product_name" value="{{ old('product_name') }}">

                            @if ($errors->has('product_name'))
                                <p class="text-danger">{{ $errors->first('product_name') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">

                            @if ($errors->has('description'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}">

                            @if ($errors->has('quantity'))
                                <p class="text-danger">{{ $errors->first('quantity') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}">

                            @if ($errors->has('price'))
                                <p class="text-danger">{{ $errors->first('price') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo" value="{{ old('photo') }}" style="display: none">
                            <button id="upload" type="button">Upload Image</button>

                            @if ($errors->has('photo'))
                                <p class="text-danger">{{ $errors->first('photo') }}</p>
                            @endif
                        </div>
                        <div class="preview mb-2"></div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('#upload').click(function(){
                $('#photo').click();
            })

            $('#photo').change(function(){
                var file = this.files[0];
                var fileType = file['type'];
                var validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];

                if ($.inArray(fileType, validImageTypes) > 0) {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[0]);
                    }
                }
            })

            function imageIsLoaded(e) {
                var x = 'foo';
                var picture = '<img src="' + e.target.result + '" style="width:200px;height:200px;" class="' + x + 'thImage">'
                $(".preview").empty().append(picture);
            }
        })
    </script>
@endsection