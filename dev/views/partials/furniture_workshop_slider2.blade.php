<h3 class="title--3-slider-col-3"></h3>
<div class="slick-col-3">
        {!! $modx->runSnippet('sgLister', [
           'imageField' => 'sg_image',
           'parents' => '30',
           'tpl' => '@CODE:<div class="slick-col-3__image-wrapper"><a data-fancybox="gallery" href="[+sg_image+]"><img src="[+sg_image+]" alt="[+sg_title+]" title="[+sg_description+]"></a></div>',
        ]) !!}
</div>