<x-app-layout>
    <section class="wsus__product mt_145 pb_100">
        <div class="container">
            <h4 class="pt-3 pb-3 text-primary">Dashboard</h4>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>All Products</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Create New</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ asset($product->image) }}" style="width: 5rem !important;"
                                            class="mt-2 mb-2"></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
