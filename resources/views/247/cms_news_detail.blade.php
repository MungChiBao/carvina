@extends($theme . '.shop_layout', ['title' => $news_currently->title, 
'header' => ['description' => $news_currently->description, 'description' => $news_currently->description, 
'keyword' => $keyword, 'og_image' => asset('documents/website/' . $news_currently->image)]])

@push('style')
    <link href="{{ asset('css/guest/news/news-detail.css') }}" rel="stylesheet" type="text/css" />
    <style>
        ul {
            margin-left: 1rem;
        }
    </style>
@endpush
@section('content')
<style>
    @media only screen and (max-width: 768px) {
        #main {
            padding-top: 105px !important;
        }
    }

</style>


    <main id="main" style="padding-top:155px">

        <div id="content" class="blog-wrapper blog-single page-wrapper">

            <div class="row row-large ">

                @include($theme. ".components.sidebar_left")
                
           
                <!-- .post-sidebar -->

                <div class="large-9 col medium-col-first">



                    <article id="post-208" class="post-208 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                        <div class="article-inner " style="padding:20px">
                            <header class="entry-header">
                                <div class="entry-header-text entry-header-text-top text-left">
                                    <h6 class="entry-category is-xsmall">
                                        <a href="{{ url('tin-tuc.html') }}" rel="category tag">Xe và đời sống</a></h6>

                                    <h1 class="entry-title">{{ $news_currently->title }}</h1>
                                    <div class="entry-divider is-divider small"></div>

                                    <div class="entry-meta uppercase is-xsmall">
                                        <span class="posted-on">Ngày đăng <a href="index.htm" rel="bookmark"><time class="entry-date published updated" datetime="2018-06-16T00:43:11+00:00">{{ date_format($news_currently->updated_at, 'd/m/Y') }}</time></a></span><span class="byline"> bởi <span class="meta-author vcard"><a class="url fn n" href="../author/admin/index.htm">Admin</a></span></span>
                                    </div>
                                    <!-- .entry-meta -->
                                </div>
                                <!-- .entry-header -->

                            </header>
                            <!-- post-header -->
                            <div class="entry-content single-page">

                                {!! $news_currently->content !!}


                            </div>
                            <!-- .entry-content2 -->

                            <!-- .entry-meta -->


                        </div>
                        <!-- .article-inner -->
                    </article>
                    <!-- #-208 -->
                    <h2 style="color: red">Bài viết tương tự</h2>
                    <div class="row large-columns-4 medium-columns-2 small-columns-2">
                      
                        @if (count($blogs_other) > 0)
                            @foreach ($blogs_other as $item)
                                <div class="col post-item">
                                    <div class="col-inner">
                                        <a href="{{ url($item->slug . '.html') }}"
                                            class="plain">
                                            <div
                                                class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-overlay-add image-cover"
                                                        style="padding-top:65%;">
                                                        <img width="434" height="286"
                                                            src="{{ asset('documents/website/' . $item->image) }}"
                                                            data-src="{{ asset('documents/website/' . $item->image) }}"
                                                            class="lazy-load attachment-original size-original wp-post-image"
                                                            alt="" srcset=""
                                                            data-srcset="{{ asset('documents/website/' . $item->image) }} 434w, {{ asset('documents/website/' . $item->image) }} 300w"
                                                            sizes="(max-width: 434px) 100vw, 434px">
                                                        <div class="overlay"
                                                            style="background-color: rgba(201, 0, 0, 0.23)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .box-image -->
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large ">{{ $item->title }}
                                                        </h5>
                                                        <div class="is-divider"></div>
                                                        <!-- <p class="from_the_blog_excerpt ">
                                                            {{ $item->description }}
                                                        </p> -->



                                                    </div>
                                                    <!-- .box-text-inner -->
                                                </div>
                                                <!-- .box-text -->
                                            </div>
                                            <!-- .box -->
                                        </a>
                                        <!-- .link -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                            @endforeach
                        @else
                        @endif

                        <!-- .col -->
                    </div>


                    {{-- <div id="comments" class="comments-area">




                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.htm#respond" style="display:none;">Hủy</a></small></h3>
                            <form action="http://oto1.giaodienwebmau.com/wp-comments-post.php" method="post" id="commentform"
                                class="comment-form" novalidate="">
                                <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                                <p class="comment-form-comment"><label for="comment">Bình luận</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                                <p class="comment-form-author"><label for="author">Tên <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required='required'></p>
                                <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required'></p>
                                <p class="comment-form-url"><label for="url">Trang web</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Phản hồi"> <input type='hidden' name='comment_post_ID' value='208' id='comment_post_ID'>
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0'>
                                </p>
                            </form>
                        </div>
                        <!-- #respond -->

                    </div> --}}
                    <!-- #comments -->
                </div>
                <!-- .large-9 -->

            </div>
            <!-- .row -->

        </div>
        <!-- #content .page-wrapper -->


    </main>
@endsection
@push('scripts')
    <script>
        $("#news-nav_item").toggleClass("active");
    </script>
@endpush
