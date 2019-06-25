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
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>
</html>
