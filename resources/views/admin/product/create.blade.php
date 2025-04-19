<x-app-layout>
    <section class="wsus__product mt_145 pb_100">
        <div class="container">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <h4 class="pt-3 pb-3 text-primary">Dashboard</h4>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Create Product</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Image</label>
                            <x-text-input type="file" name="image" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Images</label>
                            <x-text-input type="file" name="images[]" class="form-control" multiple />
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Name</label>
                            <x-text-input type="text" name="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Price</label>
                            <x-text-input type="text" name="price" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Colors</label>
                            <x-select-input name="colors[]" multiple>
                                <option value="">Select</option>
                                <option value="black">Black</option>
                                <option value="white">White</option>
                                <option value="gray">gray</option>
                                <option value="red">Red</option>
                            </x-select-input>
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Short Descrirption</label>
                            <x-text-input type="text" name="short_description" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Qty</label>
                            <x-text-input type="text" name="qty" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Sku</label>
                            <x-text-input type="text" name="sku" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="" class="mt-2 mb-2">Description</label>
                            <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="scripts">
        <script>
            tinymce.init({
                selector: 'textarea#editor',
                height: 500,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        </script>
    </x-slot>
</x-app-layout>
