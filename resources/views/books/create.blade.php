@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <nav aria-label="breadcrumb primary">
            <ol class="breadcrumb">                
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin/books') }}">Buku</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
            </ol>
         </nav>
         <div class="card">
            <div class="card-header">
               <h2>Tambah Buku</h2>
            </div>
            <div class="card-body">
               {!! Form::open(['url' => route('books.store'),
               'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
               @include('books._form')
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection