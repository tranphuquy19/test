@extends('master')
@section('content')
<h2>All test</h2>
<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
    
	<li data-option-value="*" class="active"><a href="#">Show All</a></li>
	@foreach ($tableCategories as $item)
	<li data-option-value=".{{$item['id_categories']}}"><a href="#">{{$item['categories']}}</a></li>
	@endforeach
</ul>

<hr>

<div class="row">
    <div class="sort-destination-loader sort-destination-loader-showing">
        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            @foreach ($tableTest as $item)
			<li class="col-md-1-5 isotope-item {{$item['id_categories']}}">
				<div class="portfolio-item">
					<a href="portfolio-single-small-slider.html">
						<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
			<span class="thumb-info-wrapper">
			<img src="/{{$item['image_test']}}" class="img-responsive" alt="">
			<span class="thumb-info-title">
			<span class="thumb-info-inner font-size-xs line-height-xs pt-xs">{{$item['title_test']}}</span>
						<span class="thumb-info-type">{{$item['categories']}}</span>
						</span>
						</span>
						</span>
					</a>
				</div>
			</li>
			@endforeach
        </ul>
    </div>
</div>
@endsection