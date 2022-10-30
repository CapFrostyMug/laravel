<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('home')? 'active' : '' }}" href="{{ route('home') }}" style="margin-right: 15px">Главная</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('news-categories')? 'active' : '' }}" href="{{ route('news-categories') }}" style="margin-right: 15px">Новости</a>
</li>
@if (!is_null(\Illuminate\Support\Facades\Auth::user()) && \Illuminate\Support\Facades\Auth::user()->is_admin)
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.index')?' active':'' }}" href="{{ route('admin.index') }}">Админка</a>
</li>
@endif
