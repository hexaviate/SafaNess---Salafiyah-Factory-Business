@extends('admin.admin')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">eCommerce</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                    href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            <div class="position-relative">
                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                    class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
            </div>
            <div class="ms-auto"><a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i
                        class="bx bxs-plus-square"></i>Add New Order</a></div>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Buyer Name</th>
                        <th>Status</th>
                        <th>Information</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>View Details</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)

                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div>
                                    <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0 font-14">{{$loop->iteration}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>{{$item->buyer->name}}</td>
                        <td>
                            @if ($item->status == 'success')
                            <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i
                                    class='bx bxs-circle me-1'></i>Success</div>
                            @elseif ($item->status == 'pending')
                            <div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i
                                    class='bx bxs-circle me-1'></i>Pending</div>
                            @elseif ($item->status == 'failed')
                            <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i
                                    class='bx bxs-circle me-1'></i>Pending</div>
                            @endif
                        </td>
                        <td>{{$item->information}}</td>
                        <td>Rp.{{$item->payment_total}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><a type="button" href="{{ route('transaction.show', $item->id)}}" class="btn btn-primary btn-sm radius-30 px-4">View Details</a>
                        </td>
                        <td>
                            <div class="d-flex order-actions">
                                <a href="{{ route('transaction.edit', $item->id)}}" class=""><i class='bx bxs-edit'></i></a>
                                <a href="{{ route('transaction.destroy', $item->id)}}" class="ms-3"><i class='bx bxs-trash'></i></a>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
