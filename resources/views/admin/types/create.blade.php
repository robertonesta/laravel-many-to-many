@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>New Type</h1>
    @include('partials.validation_errors')
    <form action="{{route('admin.types.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label" class="text-uppercase"></label>
          <input type="text"
            class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="helpname" placeholder="Type a name for this type">
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3 my-3">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-success">Confirm</button>
        </div>
    </form>
</div>
@endsection