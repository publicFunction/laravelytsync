<div id="topside">
    <div class="pages">
        <div class="menu-mainmenu-container">
            <ul id="menu-mainmenu" class="menu">
                @foreach(PublicFunctionWeb\Helpers\Helper::generateMainMenu() as $menu)

                @endforeach
                <li class="menu-item current-menu-item">
                    <a href="{{URL::route('home')}}">Home</a>
                </li>
                <li class="menu-item">
                    <a href="{{URL::route('livestream.home')}}">Live Streaming</a>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="{{URL::route('youtube.playlists')}}">You Tube</a>
                    <ul class="sub-menu">
                    @foreach(\PublicFunctionWeb\Helpers\Helper::generatePlaylistMenu() as $item)
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