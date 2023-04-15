@extends('dashboard.master')
@section('title')
    Purchase Order List
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Purchase</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="{{route('purchase.order')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">purchase</li>
        </ol>

        <div class="card mb-4">
            <div class="card-body table-responsive">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>PURCHASE</th>
                        <th>VENDOR</th>
                        <th>CATEGORY</th>
                        <th>PURCHASE DATE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>PURCHASE</th>
                        <th>VENDOR</th>
                        <th>CATEGORY</th>
                        <th>PURCHASE DATE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @php $i =1 @endphp
                    @foreach($orders as $order)
                    <tr>
                        <td><b>{{$i++}}</b></td>
                        <td>{{$order->item_name}}</td>
                        <td>{{$order->vendor_name}}</td>
                        <td>{{$order->category_name}}</td>
                        <td>{{$order->purchase_date}}</td>
                        <td>{{$order->status==1?'Approved':'Pending'}}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{route('edit.order',['id'=>$order->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{route('delete.order')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$order->id}}">
                                    <button data-bs-toggle="tooltip" data-bs-placement="top" title="delete" type="submit" style="background: none; border: none" onclick="return confirm('are you sure to delete?')"><i class="ms-3 fa-solid fa-trash-can text-danger"></i></button>
                                </form>
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
