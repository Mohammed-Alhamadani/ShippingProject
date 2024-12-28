@extends('layouts.admin')
@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $user->full_name }}</h5>
        <p class="card-text">{{ $user->email }}</p>
        <p class="card-text">{{ $user->role }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

@endsection
