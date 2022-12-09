@extends('main.app')
@push('style')
    <style>
    .container{
        
        margin-top: 50px;
       
        }
        span{

            color: red;
        }
    </style>
@endpush

@section('content')
<body>
 

    <div class='container'>
    <form action="{{url('/')}}/department" method="POST">
        @csrf
        <div class="form-goup">
        <label for="name">name</label>
        <input type="text" id="name" class="form-control" name="name" >
        <span>{{$errors->first('name')}}</span>
    </div><br>  
    <div class="form-goup" >
        <label for="status">status</label>
        <input type="text" id="status" class="form-control" name="status">
        <span>{{$errors->first('status')}}</span>
    </div>
    <br>    
    <button type="submit" class="btn btn-primary">submit</button>


    </form>
</div>

    @endsection