@extends('_layouts.master')

@section('title', '联系')

@section('content')
    <h1>联系</h1>

    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">姓名</label><br>
            <input type="text" name="sender" id="sender" required>
        </div>

        <div>
            <label for="email">邮箱</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">内容</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

        <input type="submit" name="submit" value="发送">
    </form>
@endsection
