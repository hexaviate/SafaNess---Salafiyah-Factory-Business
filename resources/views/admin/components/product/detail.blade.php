@extends('admin.admin')
@section('content')



<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">eCommerce</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products Details</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a class="btn btn-danger" href="{{ route('product.index')}}">Back</a>
            {{-- <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                {{-- <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                --}}
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    @foreach ($data as $item )
    <div class="row g-0">
        <div class="col-md-4 border-end">
            <img src="{{ asset('images/'.$item->product_img)}}" class="img-fluid" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">

                <h4 class="card-title">{{ $item->name}}</h4>
                {{-- <div class="d-flex gap-3 py-3">
                    <div class="cursor-pointer">
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-secondary'></i>
                    </div>
                    <div>142 reviews</div>
                    <div class="text-success"><i class='bx bxs-cart-alt align-middle'></i> 134 orders</div>
                </div> --}}
                <div class="mb-3">
                    <span class="price h4">Rp.{{$item->price}}</span>
                </div>
                <dl class="row">
                    <dt class="col-sm-3">Category</dt>
                    <dd class="col-sm-9">{{$item->sub_category->name}}</dd>

                    <dt class="col-sm-3">Stock</dt>
                    <dd class="col-sm-9">{{$item->stock}}</dd>

                    <dt class="col-sm-3">Slug</dt>
                    <dd class="col-sm-9">{{$item->slug}}</dd>
                </dl>

                <hr>
                <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                    <div class="col">
                        <label class="form-label">Quantity</label>
                        <div class="input-group input-spinner">
                            <button class="btn btn-white" type="button" id="button-plus"> + </button>
                            <input type="text" class="form-control" value="1">
                            <button class="btn btn-white" type="button" id="button-minus"> − </button>
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label">Select Color</label>
                        <div class="color-indigators d-flex align-items-center gap-2">
                            <div class="color-indigator-item bg-primary"></div>
                            <div class="color-indigator-item bg-danger"></div>
                            <div class="color-indigator-item bg-success"></div>
                            <div class="color-indigator-item bg-warning"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="btn btn-primary">Buy Now</a>
                    <a href="#" class="btn btn-outline-primary"><span class="text">Add to cart</span> <i
                            class='bx bxs-cart-alt'></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="card-body">
        <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                        </div>
                        <div class="tab-title"> Product Description </div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content pt-3">
            <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

@endsection
