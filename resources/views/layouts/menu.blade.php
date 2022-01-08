






<li class="nav-item">
    <a href="{{ route('ages.index') }}"
       class="nav-link {{ Request::is('ages*') ? 'active' : '' }}">
        <p>Ages</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('socielNetworks.index') }}"
       class="nav-link {{ Request::is('socielNetworks*') ? 'active' : '' }}">
        <p>Sociel Networks</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('quizzes.index') }}"
       class="nav-link {{ Request::is('quizzes*') ? 'active' : '' }}">
        <p>Quizzes</p>
    </a>
</li>


