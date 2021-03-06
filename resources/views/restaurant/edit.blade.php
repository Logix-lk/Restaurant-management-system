@extends('layouts.admin')
<!-- Error Alert -->
@section('content')
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
    <!-- Form -->
    {!! Form::open(['action' => ['InventoryController@update', $item -> id],'method' => 'POST']) !!}
    <div class="container">
        <div class="row">
         <div class="col-md-12">
                <h1>Edit Product</h1>
         </div>
        </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row event-form-wrap">
                            <div class="divider"></div>
                        <div class="col-md-6 left-side">
                                <div class="form-group">
                                    {{Form::label('pName','Enter Product Name')}}
                                    {{Form::text('pName', $item->Product_Name,['class' => 'form-control', 'required'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('bName','Enter Brand Name')}}
                                    {{Form::text('bName', $item->Brand_Name,['class' => 'form-control', 'required'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('qty','Enter Quantity')}}
                                    {{Form::number('qty', $item->Quantity,['class' => 'form-control', 'required'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('cat','Category')}}
                                    {{Form::select('cat',['Bakery' => 'Bakery', 'Soft-Drink' => 'Soft-Drink', 'Desert' => 'Desert'], $item->Category)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('oDate','Ordered Date')}}
                                    {{Form::date('oDate', $item->Ordered_Date, array('class' => 'form-control', 'required' => '')) }}
                                </div>
                                <div class="form-group">
                                    {{Form::label('aDate','Arrived Date')}}
                                    {{Form::date('aDate',$item->Arrived_Date, array('class' => 'form-control', 'required' => '')) }}
                                </div>
                                <div class="form-group">
                                    {{Form::label('mDate','Manufactured Date')}}
                                    {{Form::date('mDate', $item->Manufactured_Date, array('class' => 'form-control', 'required' => '')) }}
                                </div>
                                <div class="form-group">
                                    {{Form::label('eDate','Expire Date')}}
                                    {{Form::date('eDate', $item->Expire_Date, array('class' => 'form-control', 'required' => '')) }}
                                </div>
                                 {{Form::hidden('_method','PUT')}}
                                 {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                               </div>
                            </div>
                    </div>
                </div>
               </div>
    </div>
    {!! Form::close() !!}
@endsection
