<div>
    @extends('livewire.admin.admin-master-dashboard-component');
    <div class="container container-section">
        <div class="row">
            <div class="card">
                <h4 class="py-3">Book Items Page(Categories).</h4>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <a href="{{ route('admin.addcategory') }}" class="btn btn-success m-2"><span><i class="las la-plus-circle"></i></span> Add Category</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <a href="{{ route('admin.editcategory', ['category_slug' => $category->slug]) }}"
                                            class="btn btn-primary"><i class="las la-edit"></i></a>
                                        <a href="" class="btn btn-danger"
                                            wire:click.prevent="deleteCategory({{ $category->id }})"><i
                                                class="lar la-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="container" style="margin-left:-4rem;">
                        <div class="row">
                            <div class="col">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">{{ $products->links('layouts.pagination') }}</li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="card">
                    <h4 class="py-3">Book Items Page(Books).</h4>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <a href="{{ route('admin.addproduct') }}" class="btn btn-success m-2"><span><i class="las la-plus-circle"></i></span> Add Books</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Product Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{asset('frontend/img/Books/products/'.$product->image)}}" width="70px" height="70px" alt="image"></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->slug }}</td>
                                        <td>{{ $product->short_description }}</td>
                                        <td>{{ $product->category_id }}</td>
                                        <td>
                                            <a href="{{ route('admin.editproduct', ['product_slug' => $product->slug]) }}"
                                                class="btn btn-primary m-1"><i class="las la-edit"></i></a>
                                            <a href="" class="btn btn-danger m-1"
                                                wire:click.prevent="deleteproduct({{ $product->id }})"><i
                                                    class="lar la-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="container" style="margin-left:-4rem;">
                            <div class="row">
                                <div class="col">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">{{ $products->links('layouts.pagination') }}
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
