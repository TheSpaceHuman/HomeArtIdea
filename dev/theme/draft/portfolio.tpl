<section class="container">
  <div class="row">
    <div class="gallery-items">
      [[sgLister?
      &parents=`[*id*]`
      &tpl=`@CODE:
      <a class="gallery-item" href="[+sg_image+]" data-fancybox="gallery" data-caption="[+e.sg_title+]">
        <img src="[+sg_image+]" alt="[+e.sg_title+]"/>
      </a>
      `
      ]]
    </div>
  </div>
</section>

<a class="gallery-item" href="[+sg_image+]" data-fancybox="gallery" data-caption="[+e.sg_title+]">
  <img src="[+sg_image+]" alt="[+e.sg_title+]"/>
</a>
[[sgLister?
&thumbSnippet=`phpthumb`
&thumbOptions=`w=150&h=150&zc=1`
&tpl=`@CODE:
<a href="[+sg_image+]">
  <img src="[+thumb.sg_image+]" class="img-thumbnail" alt="[+e.sg_title+]" title="[+e.sg_description+]">
</a>`
]]

{*STATICS*}
{*
<section class="container">
  <div class="row">
    <div class="gallery-items"><a class="gallery-item" href="theme/assets/rediz/img/about/block3_1.jpg" data-fancybox="gallery" data-caption="IMG-1"> <img src="theme/assets/rediz/img/about/block3_1.jpg" alt="" /> </a> <a class="gallery-item" href="theme/assets/rediz/img/about/block3_2.jpg" data-fancybox="gallery" data-caption="IMG-2"> <img src="theme/assets/rediz/img/about/block3_2.jpg" alt="" /> </a> <a class="gallery-item" href="theme/assets/rediz/img/about/block3_3.jpg" data-fancybox="gallery" data-caption="IMG-3"> <img src="theme/assets/rediz/img/about/block3_3.jpg" alt="" /> </a> <a class="gallery-item" href="theme/assets/rediz/img/about/block3_4.jpg" data-fancybox="gallery" data-caption="IMG-4"> <img src="theme/assets/rediz/img/about/block3_4.jpg" alt="" /> </a> <a class="gallery-item" href="theme/assets/rediz/img/about/block3_5.jpg" data-fancybox="gallery" data-caption="IMG-5"> <img src="theme/assets/rediz/img/about/block3_5.jpg" alt="" /> </a> <a class="gallery-item" href="theme/assets/rediz/img/about/block3_6.jpg" data-fancybox="gallery" data-caption="IMG-6"> <img src="theme/assets/rediz/img/about/block3_6.jpg" alt="" /> </a></div>
  </div>
</section>
*}
