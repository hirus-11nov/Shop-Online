@extends('user.layouts.master')

@section('title','Order Detail')

@section('main-content')
<div class="card">
  <h5 class="card-header">Sửa Hoá Đơn</h5>
  <div class="card-body">
    <form action="{{route('order.update',$order->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="status">Trạng thái :</label>
        <select name="status" id="" class="form-control">
          <option value="">--Chọn trạng thái--</option>
          <option value="new" {{(($order->status=='new')? 'selected' : '')}}>Mới</option>
          <option value="process" {{(($order->status=='process')? 'selected' : '')}}>Đang xử lý</option>
          <option value="delivered" {{(($order->status=='delivered')? 'selected' : '')}}>Đã hoàn thành</option>
          <option value="cancel" {{(($order->status=='cancel')? 'selected' : '')}}>Đã huỷ</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
@endpush