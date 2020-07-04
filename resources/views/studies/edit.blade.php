@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edição de estudos</h1>

    <form action="{{ route('studies.update', ['study' => $study->id]) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('studies._partial.form')
    </form>
</div>
@endsection