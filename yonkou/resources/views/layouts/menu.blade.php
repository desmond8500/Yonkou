
<li class="nav-item {{ Request::is('citations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('citations.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Citations</span>
    </a>
</li>


<li class="nav-item {{ Request::is('clients*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clients.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Clients</span>
    </a>
</li>
