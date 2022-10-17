<section id="latestPosts" class="row">
    <div class="container">
        <div class="row sectionTitles">
            <h2 class="sectionTitle">News and Events</h2>
            <div class="sectionSubTitle">latest post</div>
        </div>
        <div class="row">
            @foreach ($notice_data as $notice_data_item)
                <div class="col-sm-4 blog latest-blog">
                    <div class="row m0 blogInner">
                        <div class="row m0 blogDateTime">
                            <i class="fa fa-calendar"></i> {{ $notice_data_item->page_title }}
                        </div>
                        <div class="row m0 featureImg">



                            @if ($notice_data_item->banner_image)
                                <a href="#">

                                    <img src="{{ $notice_data_item->banner_image }}" alt="Faceted Search Has Landed"
                                        class="img-responsive">
                                </a>
                            @else
                                <a href="#">

                                    <img src="/website/images/blog1.jpg" alt="Project 1" class="projectImg">
                                </a>
                            @endif




                        </div>
                        <div class="row m0 postExcerpts">
                            <div class="row m0 postExcerptInner">
                                <a href="#" class="postTitle row m0">
                                    <h4>{{ $notice_data_item->caption }}</h4>
                                </a>
                                <p>{!! $notice_data_item->short_content !!}</p>
                                <a href="/read-more/{{ $notice_data_item->nav_name }}" class="readMore">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
<!--Latest Blog-->
