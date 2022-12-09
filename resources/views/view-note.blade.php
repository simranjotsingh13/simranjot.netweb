
@extends('main.app')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
     
        <th scope="col">Id</th>
        <th scope="col"> Title</th>
        <th scope="col">description</th>
        <th scope="col">Skill</th>
        <th scope="col">user id</th>
        

      </tr>
    </thead>
    <tbody>

     
        @foreach ($user as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['title']}}</td>
            <td>{{$item['description']}}</td>
            <td>{{$item['skill']}}</td>
            <td>{{$item['userid']}}</td>
           
        </tr>
      
        @endforeach
    
     
    </tbody>
  </table>

    
@endsection

    
