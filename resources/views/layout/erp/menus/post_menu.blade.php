<li class="slide">
    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
            <polyline points="13 2 13 9 20 9"></polyline>
        </svg>
        <span class="side-menu__label">Post</span><i class="angle fe fe-chevron-right"></i></a>
    <ul class="slide-menu">
        <li class="side-menu-label1">
            <a href="javascript:void(0)">Post</a>
        </li>
        <li class="sub-slide">
            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="{{url('/posts/create')}}"><span class="sub-side-menu__label">Create Post</span></i></a>

        </li>
        <li class="sub-slide">
            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="{{url('/posts')}}"><span class="sub-side-menu__label">Manage Post</span></i></a>
        </li>
    </ul>
</li>