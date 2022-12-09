@extends('main.app')
@section('content')
    {{-- {{$user}} --}}
    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">Id</th>
                <th scope="col"> Name</th>
                <th scope="col">code</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">phone</th>
                <th scope="col">department</th>
                <th scope="col">skills</th>
                <th scope="col">status</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['code'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['password'] }}</td>
                    <td>{{ $item['phone'] }}</td>
                    {{-- <td>{{ $item['joining'] }}</td> --}}

                    <td>{{ $item['department'] }}</td>
                    <td>{{ $item['skills'] }}</td>
                    <td>{{ $item['is_admin'] }}</td>
                </tr>
                {{-- {{ json_decode( implode(" ",$item['skills']))}} --}}
               {{-- {{(var_dump($item['skills']))}}  --}}
            @endforeach


        </tbody>
    </table>
@endsection
