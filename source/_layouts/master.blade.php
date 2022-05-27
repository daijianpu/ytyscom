<!DOCTYPE html>
<html lang="{{ $page->language ?? 'zh-CN' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
                 <img src="https://img.alicdn.com/imgextra/i3/2710706468/O1CN01gYwxPj1xeOUy1nkr9_!!2710706468.jpg" width=32/><strong>樱庭雅树</strong><br>
                <ul>
                    <li><a href="/">首页</a></li>
                    <li><a href="/posts">博客</a></li>
                    <li><a href="/about">关于</a></li>
                    <li><a href="/contact">联系</a></li>
                </ul>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
            <small>
                &copy; <span data-year></span>樱庭雅树&bull; 
                版权所有，侵权必究。 &bull;
                <a href="/contact">联系</a>
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
