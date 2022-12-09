
@extends('main.app')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
     
        <th scope="col">Id</th>
        <th scope="col">Skill Name</th>
        <th scope="col">Description</th>
   

      </tr>
    </thead>
    <tbody>
        {{-- {{$user}} --}}
    
     
        @foreach ($user as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['skillname']}}</td>
            <td>{{$item['description']}}</td>
            
        </tr>
      
        @endforeach
    
     
    </tbody>
  </table>

    
@endsection
