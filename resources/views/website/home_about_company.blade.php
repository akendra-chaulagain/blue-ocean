@php
$normal_gallary_notice = App\Models\Navigation::find(2445);
@endphp

<section id="about-sec" class="row">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="about-text">
                    <h3>{{ $about->caption }}</h3>
                    <p>{!! $about->short_content !!}</p>
                    <a href="/about/{{ $normal_gallary_notice->nav_name }}" class="btn btn-default">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
