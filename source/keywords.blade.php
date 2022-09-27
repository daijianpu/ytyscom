@extends('_layouts.master')

@section('title', '分类')

@section('content')
    <h1>分类</h1>
    <hr style="border-color: silver"/>
 <ul>
  <li><a href="/tags/%E6%84%9F%E6%82%9F" >感悟</a></li>
 
  <li><a href="/tags/%E6%95%99%E8%82%B2" >教育</a></li>

  <li><a href="/tags/%E5%B0%8F%E8%AF%B4" >小说</a></li>

  <li><a href="/tags/%E6%8A%80%E6%9C%AF" >技术</a></li>
 
  <li><a href="/tags/%E5%9B%BD%E9%99%85" >国际</a></li>

  <li><a href="/tags/%E7%BB%8F%E5%95%86" >经商</a></li> 

  <li><a href="/posts/" >全部</a></li>

    </ul>
@endsection
