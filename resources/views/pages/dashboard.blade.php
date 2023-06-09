@extends('layouts.master')
@section('title', 'Dashboard')
@section('side-menu')
    @include('layouts.templates.side-menu')
@stop 
@section('content')
    @include('layouts.templates.navbar')
    <main class="main-content border-radius-lg ">
        <div class="container-fluid px-2 px-md-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum sed officiis, sapiente veritatis nemo mollitia exercitationem, aliquam soluta distinctio quas assumenda non deserunt eaque quos, unde nostrum voluptatibus voluptates recusandae.
        </div>     
    </main>

	@push('script')
        <!-- js files includes here -->
    @endpush
@section('footer')
    <!-- footer includes here -->
@stop 
@endsection