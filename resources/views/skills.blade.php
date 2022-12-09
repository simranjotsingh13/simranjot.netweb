@extends('main.app')
@push('style')
    <style>
        span{
            color: red;
        }
    </style>
@endpush
@section('content')
    <div class="container">

        <form action="{{ url('/') }}/skills" method="POST">
            @csrf
            <div class="form -group">
                <label for="skill">Skill name</label>
                <input type="text" class="form-control" id="skill" name="skill">
                <span>{{$errors->first('skill')}}</span>
            </div>
            <div class="form -group">
                <label for="description">description</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                <span>{{$errors->first('description')}}</span>
            </div><br>
             <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>

@endsection