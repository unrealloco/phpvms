@extends('admin.app')
@section('title', "Edit \"$award->title\" Award")
@section('content')
  <div class="card border-blue-bottom">
    <div class="content">
      {{ Form::model($award, ['route' => ['admin.awards.update', $award->id], 'method' => 'patch']) }}
      @include('admin.awards.fields')
      {{ Form::close() }}
    </div>
  </div>
@endsection
@include('admin.awards.scripts')
