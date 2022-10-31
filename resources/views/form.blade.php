@extends('layouts.master')
@section('title',"Vezetéknév")
  
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <form method="POST">
                @csrf
                
            </form>
        </div>
    </div>
</div>


    

@endsection