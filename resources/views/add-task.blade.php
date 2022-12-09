@extends('main.app')
@push('style')
<style>
   span{
      color: red;
   }
</style>
@endpush

@section('content')
<div class="form">

    <form action="{{url('/')}}/task" method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
         <label for="assign">Assign To</label>
         <select name="assign" id="assign"  class="form-control">
            @foreach ($data as $item=>$value)
               <option value="{{$value['id']}}">{{$value['name']}}</option>  
            @endforeach
            
           </select>
           <span>
            {{$errors->first('assign')}}
           </span>
           
      </div>
      <div class="form-group"><label for="user">assigned by</label>   
         <input type="text" value="  {{auth()->user()->name}}" id="user" name="user" class="form-control" readonly>
         <span>{{$errors->first('user')}}</span>
      </div>

        <div class="form-group"><label for="skill">skill</label>    
           <select name="skill[]" id="skill" class="form-control" multiple>
            
            @foreach ($new as $item)
           
            <option value="{{$item['skillname']}}">{{$item['skillname']}}</option>
                
            @endforeach
           </select>
         {{-- <input type="text" name="skill" id="skill" class="form-control"> --}}
         <span>{{$errors->first('skill')}}</span>
        </div>
     <div class="form-group">
        <label for="time">Time limit</label>
        <input type="text" id="time" name="limit" class="form-control">
        <span>{{$errors->first('limit')}}</span>
     </div>
     <div class="form-group">
        <label for="date">Date of assignment</label>
        <input type="date" class="form-control" name="date" id='date'>
        <span>{{$errors->first('date')}}</span>
     </div>

     
     <div class="form-group">
        <label for="e-time">Estimated Time</label>
        
        <input type="time" id='e-time' name="time" class="form-control" >
        <span>{{$errors->first('time')}}</span>
  
     </div>

   
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" >
        <span>{{$errors->first('title')}}</span>
  
      </div>

    <div class="form-group">
        <label for="file">File</label>
        <input type="file" class="form-control" id="file" name="file">
        <span>{{$errors->first('file')}}</span>
   
      </div>
    <br>
    <button type="submit" class='btn btn-primary'>
    submit
    </button>
    

    </form>


</div>


  
    
@endsection