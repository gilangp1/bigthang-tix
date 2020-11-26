<nav class="nav flex-column">
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    @foreach ($list as $row)
        <a class="nav-link {{ $isActive($row['label']) ? 'active' : '' }}" 
           href=" {{ route($row['route']) }}">
           <i class="icon-menu {{ $row['icon'] }}"></i>
           {{ $row['label'] }}
        </a>
    @endforeach
</nav>