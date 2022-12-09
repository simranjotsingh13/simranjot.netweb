@extends('main.app')
@push('style')
<style>
 span{
    color:red;
 }

 </style>
@endpush
@section('content')

    <div class="container">
        <form action="{{ url('/') }}/user" method="POST">
            @csrf
            <div class="form-group">
                <label for="user">username</label>
                <input type="text" class="form-control" id="user" name="user">
          <span>{{$errors->first('user')}}</span>
            </div>
            <br>
            <div class="form-group">
                <label for="code">code</label>
                <input type="text" class="form-control" id="code" name='code'><br>
          <span>{{$errors->first('code')}}</span>
           
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name='email'><br>
             <span>{{$errors->first('email')}}</span>
            
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" name="password"><br>
          <span>{{$errors->first('password')}}</span>
            
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" class="form-control" id="phone" name="phone"><br>
          <span>{{$errors->first('phone')}}</span>
           
            </div>
            <div class="form-group">
                <label for="joining">joining date</label>
                <input type="date" class="form-control" id="joining" name="joining"><br>
          <span>{{$errors->first('joining')}}</span>
           
            </div>
            <div class="form-group">
                <label for="department">department
                </label>
                <select name="select" class="form-control" id="department">
                    @foreach ($data as $item => $key)
                        <option value="{{ $key }}">{{ $key }}</option>
                    @endforeach
                </select>

                <span>{{$errors->first('department')}}</span>

            </div>
            <div class="form-group">
                <label for="skill">skills</label>
                <select name="skill[]" id="skill" class="form-control" multiple>
                    @foreach ($new as $item => $key)
                    <option value="{{ $key['skillname'] }}">{{ $key['skillname'] }}</option>
                @endforeach

                </select>
          <span>{{$errors->first('skill')}}</span>
            
            </div>
            <div class="form-group">
                <label for="status">privillage</label>
                <select name="status" class="form-control" id="status">

                    <option value="0">Not-admin</option>
                    <option value="1">Is-admin</option>
                </select>
          <span>{{$errors->first('status')}}</span>
           
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>

    </div>
@endsection
