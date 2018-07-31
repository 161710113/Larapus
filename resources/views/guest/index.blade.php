@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb primary">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buku</li>
            </ol>
        </nav>
         <div class="panel panel-default">             
            <div class="panel-heading">
               <h2 class="panel-title">Daftar Buku</h2>
            </div>
            <div class="panel-body">
               {!! $html->table(['class'=>'table-striped']) !!}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection