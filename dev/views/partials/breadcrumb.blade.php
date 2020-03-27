<div class="container pt-4">
    {!! $modx->runSnippet('DLCrumbs',[
    'ownerTPL' => '@CODE:<nav aria-label="breadcrumb">
                        <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                            [+crumbs.wrap+]
                        </ul>
                    </nav>',
    'tpl' => '@CODE:<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="[+url+]" title="[+e.title+]" itemprop="item">
                           [+title+]
                        </a>
                    </li>',
    'tplCurrent' => '@CODE:<li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">[+title+]</li>',
    'showCurrent' => '1'
    ]) !!}
</div>

