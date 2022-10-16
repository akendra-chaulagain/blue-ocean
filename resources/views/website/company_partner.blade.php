@php
if (
    app\Models\Navigation::query()
        ->where('nav_category', 'Home')
        ->where('nav_name', 'LIKE', '%partner%')
        ->where('page_type', 'Group')
        ->latest()
        ->first() != null
) {
    $partners_id = app\Models\Navigation::query()
        ->where('nav_category', 'Home')
        ->where('nav_name', 'LIKE', '%partner%')
        ->where('page_type', 'Group')
        ->latest()
        ->first()->id;
    $partners = app\Models\Navigation::query()
        ->where('parent_page_id', $partners_id)
        ->latest()
        ->get();
} else {
    $partners = null;
}
@endphp

<section id="partner" class="row">
    <div class="container">
        <div class="row partnersSlide">
            <div class="owl-carousel partnerSlider">
				@foreach ($partners as $partners_item)
                <div class="item"><img src="{{ $partners_item->banner_image }}" alt=""></div>
					
				@endforeach
                
              
            </div>
        </div>
    </div>
</section>
