@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Here</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="dashboard/posts">
    @csrf
        <div class="mb-3">
            <label for="acara" class="form-label">Email address</label>
            <input type="text" class="form-control" id="acara" name="acara">
        </div>
        <div class="mb-3">
            <label for="acara" class="form-label">Email address</label>
            <input type="text" class="form-control" id="acara" name="acara">
        </div>
        <div class="mb-3">
            <label for="acara" class="form-label">Email address</label>
            <input type="text" class="form-control" id="acara" name="acara">
        </div>
        <div class="mb-3">
            <label for="acara" class="form-label">Email address</label>
            <input type="text" class="form-control" id="acara" name="acara">
        </div>
        <div class="mb-3">
            <label for="acara" class="form-label">Email address</label>
            <input type="text" class="form-control" id="acara" name="acara">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection