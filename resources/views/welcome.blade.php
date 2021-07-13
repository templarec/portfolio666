@extends('layouts.app')
@section('content')

    <contenuto v-if="section === 'home'">

    </contenuto>
    <info v-if="section === 'info'">

    </info>
    <about v-if="section === 'about'">

    </about>

    <portfolio v-if="section === 'portfolio'">

    </portfolio>
@endsection
