@extends('public.template')

@section('meta')
<title>{{ 'نتایج جستجو:‌ ' . $_REQUEST['query'] . " " . $settings['title_delimiter']->value . " " . $settings['website_name']->value }}</title>
    <meta name="description" content="{{ 'نتایج جستجو:‌ ' . $_REQUEST['query'] }}">
    <meta name="robots" content="index, follow">
@endsection

@section('content')
<ul class="uk-breadcrumb uk-margin-medium-right">
    <li><a href="{{ route('Home') }}">خانه</a></li>
    <li class="uk-disabled"><a>نتایج جستجو</a></li>
        <li class="uk-disabled"><a>{{ $_REQUEST['query'] }}</a></li>
</ul>
<div class="uk-padding-small" uk-grid>
    <div class="uk-article uk-width-1-1@m">
        <article class="article uk-padding">
            <h1 class="uk-text-lead">{{ 'نتایج جسنجو: ' . $_REQUEST['query'] }}</h1>
            <hr>
            @if(count($articles))
                <div class="uk-child-width-1-2@m" uk-grid="masonry: true" uk-grid>
                    @foreach ($articles as $article)
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-border-rounded">
                            <div class="uk-card-media-top">
                                <a href="{{ route('Article > Single', $article->slug) }}"><img src="/storage/uploads/articles/images/{{ $article->cover }}" alt="" class="uk-border-rounded" style="width: 100%; height: 180px;"></a>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-card-badge uk-label">{{ $article->views }} بازدید</div>
                                <h2 class="uk-card-title uk-text-lead"><a href="{{ route('Article > Single', $article->slug) }}" class="uk-link-heading">{{ $article->title }}</a></h2>
                                <p class="uk-text-meta uk-margin-remove-top"><time datetime="{{ $article->created_at }}">{{ $article->created_at }}</time></p>
                                <p>{{ html_entity_decode(strip_tags(substr($article->meta_description, 0, 100))) . '...' }}</p>
                            </div>
                            <a class="uk-button uk-button-primary" style="width: 100%; border-radius: 0px 0px 5px 5px;" href="{{ route('Article > Single', $article->slug) }}">بازدید</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="uk-alert-warning" uk-alert>
                    <p>جستجوی شما نتیجه‌ای نداشت.</p>
                </div>
            @endif
            
            {{ $articles->links("pagination::uikit") }}
        </article>
    </div>
</div>
@endsection
