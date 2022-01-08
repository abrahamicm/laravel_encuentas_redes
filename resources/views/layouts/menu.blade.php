<li class="nav-item">
    <a href="{{ route('averageTimes.index') }}"
       class="nav-link {{ Request::is('averageTimes*') ? 'active' : '' }}">
        <p>Average Times</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('ages.index') }}"
       class="nav-link {{ Request::is('ages*') ? 'active' : '' }}">
        <p>Ages</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('socialNetworks.index') }}"
       class="nav-link {{ Request::is('socialNetworks*') ? 'active' : '' }}">
        <p>Social Networks</p>
    </a>
</li>




