<aside class="menu-sidebar js-menusb" id="sidebar">
    <div class="btn-close"  id="js-close-btn">
        <span class="ti-close"></span>
    </div>
    <div class="menu-sidebar__content">

        <nav class="menu-sidebar-nav-menu">
            {!! $modx->runSnippet('DLMenu', [
                'parents' => '0',
                'outerTpl' => '@CODE:<ul class="menu nav-menu" id="nav-menu-sidebar">[+wrap+]</ul>',
                'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]">[+title+]</a></li>',
                'parentRowTpl' => '@CODE:<li[+classes+]> <a href="#" data-toggle="collapse" data-target="#[+iteration+]" aria-expanded="true" aria-controls="[+iteration+]">[+title+]</a>[+wrap+]</li>',
                'parentRowHereTpl' => '@CODE:<li[+classes+]> <a href="#" data-toggle="collapse" data-target="#[+iteration+]" aria-expanded="true" aria-controls="[+iteration+]">[+title+]</a>[+wrap+]</li>',
                'parentRowActiveTpl' => '@CODE:<li[+classes+]> <a href="#" data-toggle="collapse" data-target="#[+iteration+]" aria-expanded="true" aria-controls="[+iteration+]">[+title+]</a>[+wrap+]</li>',
                'innerTpl' => '@CODE:<ul class="sub-menu collapse" id="[+iteration+]" data-parent="#nav-menu-sidebar">[+wrap+]</ul>',
                'innerRowTpl' => '@CODE:<li class="menu-item"><a href="[+url+]">[+title+]</a></li>',
                'maxDepth' => '2',
                'showParent' => '1',
                'hereClass' => 'current',
                'rowClass' => 'menu-item',
                'parentClass' => 'menu-item-has-children',
                'firstClass' => '',
                'lastClass' => '',
                'levelClass ' => '',
                'oddClass' => '',
                'evenClass' => '',
            ]) !!}
        </nav>

        <div class="mobile-menu__phone mb-5">
            <a href="tel:{{ $modx->getConfig('client_phone') }}"><i class="zmdi zmdi-phone"></i> @evoParser('[[phone_format? &phone=[(client_phone)] ]]')</a>
        </div>


        <ul class="list-social list-social--big">
            <li class="list-social__item">
                <a class="ic-fb" target="_blank" href="{{ $modx->getConfig('client_facebook') }}">
                    <i class="zmdi zmdi-facebook"></i>
                </a>
            </li>
            <li class="list-social__item">
                <a class="ic-insta" target="_blank" href="{{ $modx->getConfig('client_instagram') }}">
                    <i class="zmdi zmdi-instagram"></i>
                </a>
            </li>
            <li class="list-social__item">
                <a class="ic-ytb" target="_blank" href="{{ $modx->getConfig('client_youtube') }}">
                    <i class="zmdi zmdi-youtube-play"></i>
                </a>
            </li>

        </ul>
    </div>
    <div class="menu-sidebar__footer">
        <div class="copyright">
            <p>{{ $modx->getConfig('client_copyright') }}</p>
        </div>
    </div>
</aside>

