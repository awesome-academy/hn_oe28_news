<div class="tag_widget category-holder">
    <div class="title-holder2"><h3>Tags</h3></div>

    @foreach ($latestTags as $tag)
        <a href="{{ route('tag.detail', ['name' => $tag->name]) }}">{{ $tag->name }}</a>
    @endforeach
</div>
