<?php

?>
@extends('admin.master')
@section('content')
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Thêm mới sản phẩm</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                    {!! Form::open(['route' => 'postProducts']) !!}
                                        <div class="container">
                                             <div class="form-group">
                                                <h3 class="text-primary">Thêm tên sản phẩm</h3>
                                                 <div class="form-conrols">
                                                     {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                <h3 class="text-primary">Số lượng </h3>
                                                 <div class="form-conrols">
                                                     {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                <h3 class="text-primary">Đơn giá</h3>
                                                 <div class="form-conrols">
                                                     {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                <h3 class="text-primary">Tên nhà cung cấp</h3>
                                                 <div class="form-conrols">
                                                     {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                 
                                         </div>
                                        <div class="container">
                                            {!! Form::submit('Thêm loại sản phảm', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div> 
</div>
@endsection
