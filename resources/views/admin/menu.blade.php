<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('home')? 'active' : '' }}" href="{{ route('home') }}">Главная Сайт</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.index')? 'active' : '' }}" href="{{ route('admin.index') }}">Главная Админка</a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.create')? 'active' : '' }}" href="{{ route('admin.create') }}">Создать новость</a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.editor')? 'active' : '' }}" href="{{ route('admin.editor-list') }}">Редактор новостей</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">Редактор профилей</a>
</li>

<!--<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.test1')? 'active' : '' }}" href="{{ route('admin.download.image') }}">Скачать изображение</a>
</li>-->

<!--<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.test2')? 'active' : '' }}" href="{{ route('admin.download.news') }}">Скачать текст</a>
</li>-->
