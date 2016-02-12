<div id="topside">
    <div class="pages">
        <div class="menu-mainmenu-container">
            <ul id="menu-mainmenu" class="menu">
                @foreach(PublicFunction\Helpers\Helper::generateMainMenu() as $menu)

                @endforeach
                <li class="menu-item current-menu-item">
                    <a href="{{URL::route('home')}}">Home</a>
                </li>
                <li class="menu-item">
                    <a href="http://publicfunction.co.uk/live-streaming/">Live Streaming</a>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="http://publicfunction.co.uk/category/you-tube/">You Tube</a>
                    <ul class="sub-menu">
                    @foreach(\PublicFunction\Helpers\Helper::generatePlaylistMenu() as $item)
                            <li class="menu-item">
                                <a href="{{URL::route('playlist.videos', $item->playlist_id)}}">{{$item->title}}</a>
                            </li>
                    @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>