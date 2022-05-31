@extends('_layouts.master')

@section('title', '联系')

@section('content')
    <h1>联系</h1>
 <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">Name</label><br>
            <input type="text" name="sender" id="sender" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

        <input type="submit" name="submit" value="Send">
    </form>

 

<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=Tn9-e3t6end3Dj8-YC0hIw" style="text-decoration:none;">给我写信</a>
    <h2>链接:</h2>

    <ul>
        <li><a href="/twitter" target="_blank">给我发邮件</a></li>
        <li><a href="/github" target="_blank">加我微信</a></li>
    </ul>
@endsection
