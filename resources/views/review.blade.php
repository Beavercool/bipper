@extends('layout')

@section('title')Reviews@endsection

@section('main_content')
<form method="post" action="/review/check">
    <input type="email" name="email" id="email" placeholder="Type email" class="form-control"><br>
    <input type="email" name="subject" id="subject" placeholder="Type review" class="form-control"><br>
    <textarea name="message" id="message" class="form-control" placeholder="Type message"></textarea><br>
    <button type="submit" class="btn btn-success"></button>
</form>
@endsection