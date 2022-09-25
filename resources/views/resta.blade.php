@extends('app')
@section('title', "Resta")
@section('content')
<form action="{{route('resta')}}" method="POST">
    
    @csrf
        @if (session('success'))
            <h6 class="alert alert-success">{{session('success')}}</h6>
        @endif
        @error('numero1')
            <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror
        @error('numero2')
            <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror
    
        <div class="badge bg-dark text-wrap my-auto mx-auto fs-3" style="width: 100%;">
        Restas
        </div>
        <div class="input-group input-group-sm mb-3 my-5">
        <span class="input-group-text bg-danger" id="inputGroup-sizing-sm">Numero 1</span>
        <input type="number" name="numero1" class="form-control" />
        </div>
        
    
        <div class="input-group input-group-sm mb-3">
        <span class="input-group-text bg-danger" id="inputGroup-sizing-sm">Numero 2</span>
        <input type="number" name="numero2" class="form-control" />
        <button type="submit" class="btn btn-dark">Resta</button>
        </div>

    @endsection
</form>