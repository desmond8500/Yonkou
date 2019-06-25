<!doctype html>
<html lang="fr">
    @include('landing.layout.head')
    <body class="landing-page landing-page2">
        @include('landing.layout.nav')
        <div class="wrapper">
            @include('landing.section.section1')
            @include('landing.section.section2')
            @include('landing.section.section3')

            @include('landing.layout.footer')
        </div>
    </body>
    @include('landing.layout.scripts')
</html>
