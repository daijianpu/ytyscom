@extends('_layouts.master')

@section('title', '联系')

@section('content')
    <h1>联系</h1>
    <form action="https://formcarry.com/s/v9yUD0L9szr" method="POST" accept-charset="UTF-8" >  
<input type="email" name="email">
<input type="text" name="firstName">
<input type="text" name="lastName">
<input type="text" name="anotherInput">
<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=Tn9-e3t6end3Dj8-YC0hIw" style="text-decoration:none;">给我写信</a>
    <h2>链接:</h2>

    <ul>
        <li><a href="/twitter" target="_blank">给我发邮件</a></li>
        <li><a href="/github" target="_blank">加我微信</a></li>
    </ul>
@endsection
