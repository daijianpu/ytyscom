@extends('_layouts.master')

@section('title', '联系')

@section('content')
    <h1>联系</h1>
<form action="https://formcarry.com/s/v9yUD0L9szr" method="POST">
	<label for="email">填写你的邮箱</label>
	<input type="email" name="email" id="email">
	<button type="submit">等我回复你</button>
</form>
@endsection
