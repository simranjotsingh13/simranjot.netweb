@extends('main.app')


@section('content')

<div class="form">
{{-- @dd(asset('upload/U2SdmGXTUJy46yVQ1fqx1umgghzozaToNrirBD2V.png')) --}}
<table class="table table-striped">
    <thead>
      <tr>
     
        <th scope="col">Id</th>
        <th scope="col">Assigned By</th>
        <th scope="col">Skill Usable</th>
        <th scope="col">Time limit</th>
        <th scope="col">Date of assignment</th>
        <th scope="col">Estimated Time</th>
        <th scope="col">Task Name</th>
        <th scope="col">File</th>
        
        



      </tr>
    </thead>
    <tbody>
    
     
        @foreach ($user as $item)
        <tr>
      
            <td>{{$item['id']}}</td>
            <td>{{$item['assignedby']}}</td>
            <td>{{$item['skill']}}</td>
            <td>{{$item['limit']}}</td>
            <td>{{$item['date']}}</td>
            <td>{{$item['estimatedtime']}}</td>
            <td>{{$item['title']}}</td>
           
            <td><img src="{{asset('/upload')."/".$item['file']}} " height='150px' ></td>
            
            

        </tr>
        @endforeach
      </tr>
     
    </tbody>
  </table>





</div>


  
    
@endsection