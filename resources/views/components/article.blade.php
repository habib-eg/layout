<article class="article {{ $style ?? 'article-style-c' }}">
    <div class="article-header">
        <div class="article-image" data-background="{{ $image ?? $attributes->get('image') }}"></div>
        @isset($badge)
            <div class="article-badge">
                {{ $badge }}
            </div>
        @endisset
    </div>
    <div class="article-details">
        @isset($category)
            <div class="article-category">
                {{ $category }}
            </div>
        @endisset

        <div class="article-title">
            <h2>
                {{ $title }}
            </h2>
        </div>
        <p>
            {{ $details ?? $slot }}
        </p>
        @isset($readMore)
            <div class="article-cta">
                {{ $readMore }}
            </div>
        @endisset

        {{ $comment ?? '' }}


    </div>
</article>
