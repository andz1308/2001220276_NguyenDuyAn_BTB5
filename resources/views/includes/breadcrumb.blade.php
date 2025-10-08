<nav style="margin-bottom:10px;">
    <a href="{{ route('articles.index') }}">Home</a>
    @if (request()->routeIs('articles.create'))
        > <span>Tạo bài viết</span>
    @elseif (request()->routeIs('articles.show'))
        > <span>Chi tiết bài viết</span>
    @endif
</nav>
