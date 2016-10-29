@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" v-for="plan in plans">
        <plan></plan>
    </div>
</div>

@endsection
