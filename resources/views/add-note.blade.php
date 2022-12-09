@extends('main.app')
@push('style')
<style>
 .container{
    width: 700px;
    margin-top: 20px;
 }
 button{
    float: right;
  
 }
 span{
  color:red;
 }

</style>
@endpush
@section('content')


    <div class="container">
        <form action="{{url('/')}}/note" method="post">
            @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
          <span>{{$errors->first('title')}}</span>
        </div> 
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" id="description" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
          <span>{{$errors->first('description')}}</span>
           
          </div>  
          <div class="form-group">
            <label for="select">Option</label>
        <select name="skill" id="select" class="form-control">


           @foreach ($data as $item=>$value)
             <option value="{{$value['skillname']}}">{{$value['skillname']}}</option>   
           @endforeach
        </select>
          <span>{{$errors->first('skill')}}</span>
            
        </div>      
        <br>
        <div class="form-group" hidden>
          <label for="user">user id</label>

          <input type="text" name='user' id="user" value="{{auth()->user()->id}}" class="form-control" >
          <span>{{$errors->first('user')}}</span>
        
        </div>
        <br>
        <button type="submit" class="form-control btn btn-primary">submit</button>
        </form>

    </div>
@endsection