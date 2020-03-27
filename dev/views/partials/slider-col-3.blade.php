<h3 class="title--3-slider-col-3">{{ $title }}</h3>
<div class="slick-col-3">
    {!! $modx->runSnippet('sgLister', [
       'parents' => $documentObject['id'],
       'tpl' => '@CODE:<div class="slick-col-3__image-wrapper"><a data-fancybox="gallery" data-caption="[+sg_title+]"  href="[+sg_image+]"><img src="[+sg_image+]" alt="[+sg_description+]" title="[+sg_title+]"></a></div>',
    ]) !!}
</div>
