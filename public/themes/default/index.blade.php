@extends('layouts.default')

@section('title', $meta['title'] . ' - ' . $settings['site_title'])

@section('content')
    <section class="hero position-relative overflow-hidden p-3 p-md-5 text-center">
        <div id="particles-js"></div>
        <div class="col-lg-6 mx-auto my-5 py-5">
            <h1 class="display-4 mb-4">A flat-file CMS that makes building websites stupidly easy.</h1>
            <p class="h4 mb-4">Powered by PHP, Markdown and Blade templates.</p>
            <a class="btn btn-lg btn-outline-light" href="/docs/getting-started">Get Started</a>
        </div>
    </section>

    <section class="features py-5">
        <div class="container">
            <div class="my-5 text-center">
                <h2 class="display-4 mb-3">Build amazing sites. Quickly!</h2>
                <p class="lead">Tiny is designed to make it as easy as possible for developers to create awesome websites.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-5">
                    <div class="row">
                        <div class="feature-icon col-sm-5">
                            @php
                            include(CIRCULATE_BASE_PATH . '/public/themes/default/svg/monitor-loading-progress.svg');
                            @endphp
                        </div>
                        <div class="feature-content col-sm-7">
                            <h3 class="mt-4">Build Sites Quickly</h3>
                            <p>Tiny works out-of-the-box. No setup required. Allowing you to get started building your site in no time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="row">
                        <div class="feature-icon col-sm-5">
                            @php
                            include(CIRCULATE_BASE_PATH . '/public/themes/default/svg/monitor-window.svg');
                            @endphp
                        </div>
                        <div class="feature-content col-sm-7">
                            <h3 class="mt-4">Simple Content Management</h3>
                            <p>Using Markdown files to define site structure and content has many advantages. No database required. Everything in source control.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-5">
                    <div class="row">
                        <div class="feature-icon col-sm-5">
                            @php
                            include(CIRCULATE_BASE_PATH . '/public/themes/default/svg/color-palette.svg');
                            @endphp
                        </div>
                        <div class="feature-content col-sm-7">
                            <h3 class="mt-4">Easy Theme Customization</h3>
                            <p>Blade templates are easy to learn, flexbile and allow powerful customizations. Developed as part of the Laravel framework.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="row">
                        <div class="feature-icon col-sm-5">
                            @php
                            include(CIRCULATE_BASE_PATH . '/public/themes/default/svg/programmer-male.svg');
                            @endphp
                        </div>
                        <div class="feature-content col-sm-7">
                            <h3 class="mt-4">Blazing Fast Speed</h3>
                            <p>Tiny is built using modern PHP which, combined with a lack of a database, makes it super fast and easy to deploy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-5">
                    <div class="row">
                        <div class="feature-icon col-sm-5">
                            @php
                            include(CIRCULATE_BASE_PATH . '/public/themes/default/svg/real-estate-house.svg');
                            @endphp
                        </div>
                        <div class="feature-content col-sm-7">
                            <h3 class="mt-4">Make It Your Own</h3>
                            <p>Tiny's architecture is so simple (just a couple of PHP files) that the customization potential is literally endless.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-5">
                    <div class="row">
                        <div class="feature-icon col-sm-5">
                            @php
                            include(CIRCULATE_BASE_PATH . '/public/themes/default/svg/write-paper-ink.svg');
                            @endphp
                        </div>
                        <div class="feature-content col-sm-7">
                            <h3 class="mt-4">Open Source</h3>
                            <p>Tiny is fully open source, meaning it is accessible, free and open to fixes and contributions from the community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="under-the-hood py-5">
        <div class="container">
            <div class="my-5 text-center">
                <h2 class="display-4 mb-3">What's under the hood?</h2>
                <p class="lead">Tiny is powered by popular and easy to use technologies.</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-4 mb-5">
                    <p class="display-1"><i class="fab fa-php"></i></p>
                    <h3>PHP</h3>
                </div>
                <div class="col-sm-4 mb-5">
                    <p class="display-1"><i class="fab fa-medium-m"></i></p>
                    <h3>Markdown</h3>
                </div>
                <div class="col-sm-4 mb-5">
                    <p class="display-1"><i class="fab fa-laravel"></i></p>
                    <h3>Blade</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="cta position-relative overflow-hidden p-3 p-md-5 text-center">
        <div class="col-lg-6 mx-auto my-5 py-5">
            <h4 class="h1 mb-4">Build your next site with Tiny</h4>
            <p class="h4 mb-4">It only takes a couple of minutes to get up and running with Tiny.</p>
            <a class="btn btn-lg btn-outline-light" href="/docs/getting-started">Get Started</a>

            <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">I&#39;ve tested Tiny, a flat-file CMS, over the weekend and I really liked it. Definitely going to use it for one of my side projects: <a href="https://t.co/XXySdpL9T8">https://t.co/XXySdpL9T8</a> /cc <a href="https://twitter.com/gilbitron?ref_src=twsrc%5Etfw">@gilbitron</a> <a href="https://twitter.com/hashtag/PHP?src=hash&amp;ref_src=twsrc%5Etfw">#PHP</a> <a href="https://twitter.com/hashtag/Markdown?src=hash&amp;ref_src=twsrc%5Etfw">#Markdown</a> <a href="https://twitter.com/hashtag/Blade?src=hash&amp;ref_src=twsrc%5Etfw">#Blade</a></p>&mdash; Sven (@hofmannsven) <a href="https://twitter.com/hofmannsven/status/973115078189907968?ref_src=twsrc%5Etfw">March 12, 2018</a></blockquote>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="/themes/default/js/particles.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection