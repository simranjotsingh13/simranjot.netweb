@extends('main.app')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
     
        <th scope="col">Id</th>
        <th scope="col">Department Name</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    
     
        @foreach ($dep as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>
             {!!$item['status']==1  ?"active":"inactive";!!}
                {{-- <button class="btn btn-success">active</button>
                 " <button class='btn btn-success'>active<button>":"<button class='btn btn-danger'>inactive<button --}}
         
             {{-- {{$item['status']}}==0
              <button class="btn btn-danger">inactive</button> --}}
              </td>
        </tr>
        @endforeach
      </tr>
     
    </tbody>
  </table>

    
@endsection