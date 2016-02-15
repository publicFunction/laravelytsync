<nav>
    @foreach(\PublicFunction\Helpers\Helper::generatePlaylistMenu() as $item)
        <div class="playlist item">
            <img src="{{$item->getThumbnailUrl('medium')}}" alt="{{$item->title}}" />
            <a href="{{URL::route('playlist.videos', $item->playlist_id)}}" class="color-code" title="{{$item->title}}">
                <span class="title">{{$item->title}}</span>
                <span class="read bg-code">
                    <span class="count">{{\PublicFunction\Helpers\Helper::countVideosInPlaylist($item->id)}}</span>
                    <span class="text">videos</span>
                </span>
            </a>
        </div>
    @endforeach
</nav>