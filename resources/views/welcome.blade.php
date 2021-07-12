@extends('layouts.app')
@section('content')
    <div class="custom-shape-divider-top-1626026182">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
             preserveAspectRatio="none">
            <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
        </svg>
    </div>
    <contenuto v-if="section === 'home'">

    </contenuto>
    <info v-if="section === 'info'">

    </info>
    <about v-if="section === 'about'">

    </about>

    <portfolio v-if="section === 'portfolio'">

    </portfolio>
@endsection
