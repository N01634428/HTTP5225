@extends('admin');
@section('content');
<h1>All studnets</h1>
@foreach($student as $student){
    {{$student}}
}
@endsection