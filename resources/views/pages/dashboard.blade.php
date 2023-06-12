@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div>
    @include('layouts.templates.side-menu')
    <main class="main-content border-radius-lg ">
        @include('layouts.templates.navbar')
        <div class="container-fluid px-2 px-md-4">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum esse, maiores eligendi atque pariatur ea aperiam doloremque voluptate odit nesciunt a neque, totam minima provident cupiditate voluptatem tempora rerum? Ratione.
        </div>     
    </main>

</div>
@push('script')
    <script src="{{ mix('js/component-scripts/app.js') }}"></script>
@endpush
@section('footer')
    <!-- footer includes here -->
@stop 
@endsection