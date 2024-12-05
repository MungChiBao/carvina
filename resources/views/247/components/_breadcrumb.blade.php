<div class="breadcrumb bg-fill">
    <div class="container">
        <div class="title"><h1>

            @if(isset($title))
                {{$title}}
            @endif
        </h1></div>
        <nav class="breadcrumb-list">Trang chủ</a> <span class="divider">/</span>
            @if(isset($title))
                {{$title}}
            @endif
        </nav>
    </div>
</div>