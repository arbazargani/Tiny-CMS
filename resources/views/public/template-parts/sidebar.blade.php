<div class="uk-background-default uk-border-rounded">

    <!-- socket - search -->
    <div class="sidebar-element">
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title uk-text-meta">جستجو</h3>
            <hr class="uk-divider-small">
            <form  class="uk-grid-small" action="/" uk-grid>
                <div class="uk-width-2-3">
                    <input class="uk-input" type="text" name="query" id="query">
                </div>
                <div class="uk-width-1-3">
                    <button class="uk-button uk-button-primary" type="submit"><span uk-icon="search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <!-- socket - search -->

    <!-- socket - latest/popular -->
    <div class="sidebar-element">
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title uk-text-meta">بخوانید</h3>
            <hr class="uk-divider-small">

            <!-- tabs -->
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="">پیشنهادی</a></li>
                <li class="uk-active"><a href="">پربازدید</a></li>
                <li><a href="">جدیدترین</a></li>
            </ul>
            <!-- tabs -->

            <!-- contents -->
            <ul class="uk-switcher">
                <li>
                    @if(count($notPopularArticles) > 0)
                    <ul class="uk-list uk-list-bullet">
                    @foreach($notPopularArticles as $item)
                        <li><a class="uk-text-meta" href="{{ route('Article > Single', $item->slug) }}">{{ $item->title }}</a></li>
                    @endforeach
                    </ul>
                    @else
                    <span class="uk-text-meta uk-text-warning">مقاله‌ای در سیستم موجود نیست.</span>
                    @endif
                </li>

                <li>
                    @if(count($popularArticles) > 0)
                    <ul class="uk-list uk-list-bullet">
                    @foreach($popularArticles as $item)
                        <li><a class="uk-text-meta" href="{{ route('Article > Single', $item->slug) }}">{{ $item->title }}</a></li>
                    @endforeach
                    </ul>
                    @else
                    <span class="uk-text-meta uk-text-warning">مقاله‌ای در سیستم موجود نیست.</span>
                    @endif
                </li>

                <li>
                    @if(count($latestArticles) > 0)
                    <ul class="uk-list uk-list-bullet">
                    @foreach($latestArticles as $item)
                        <li><a class="uk-text-meta" href="{{ route('Article > Single', $item->slug) }}">{{ $item->title }}</a></li>
                    @endforeach
                    </ul>
                    @else
                    <span class="uk-text-meta uk-text-warning">مقاله‌ای در سیستم موجود نیست.</span>
                    @endif
                </li>
            </ul>
            <!-- contents -->
        </div>
    </div>
    <!-- socket - latest/popular -->

    <!-- socket - categories -->
    <div class="sidebar-element">
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title uk-text-meta">دسته‌بندی مطالب</h3>
            <hr class="uk-divider-small">
            @if(count($categories) > 0)
            <ul class="uk-list">
            @foreach($categories as $item)
                @if($item->id != 1)
                <li><a href="{{ route('Category > Archive', $item->slug) }}">{{ $item->name }}</a></li>
                @endif
            @endforeach
            </ul>
            @else
            <span class="uk-text-meta uk-text-warning">دسته‌بندی در سیستم موجود نیست.</span>
            @endif
        </div>
    </div>
    <!-- socket - categories -->

    <!-- socket - mail -->
    <div class="sidebar-element">
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title uk-text-meta">خبرنامه</h3>
            <hr class="uk-divider-small">
            <img class="uk-border-rounded" src="/assets/image/newsletter-marketing-email.jpg" alt="خبرنامه ایمیلی">
            <hr>
            <input class="uk-input" type="text" name="" id="" placeholder="you@mail.com">
            <button class="uk-button uk-margin-small-top uk-float-left uk-button-text"><span uk-icon="arrow-right"></span> عضویت در خبرنامه</button>
        </div>
    </div>
    <!-- socket - mail -->

</div>
