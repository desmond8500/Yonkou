<div class="section section-features">
    <div class="container">
        <h4 class="header-text text-center">Les Plateformes</h4>
        <div class="row">
            @foreach ($sites as $site)
                <div class="col-md-3">
                    @component('landing.component.siteCard',['site' => $site])  @endcomponent
                </div>
            @endforeach
        </div>
    </div>
</div>
