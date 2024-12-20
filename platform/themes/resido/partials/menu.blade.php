<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
        <li
            class="@if ($row->has_child) menu-item-has-children @endif @if ($row->css_class) {{ $row->css_class }} @endif @if ($row->active) current-menu-item @endif">
            <a href="{{ url($row->url) }}" @if ($row->target !== '_self') target="{{ $row->target }}" @endif>
                {!! $row->icon_html !!}
                <span class="menu-title">{{ $row->title }}</span>
            </a>

            @if ($row->has_child)
                {!! Menu::generateMenu([
                    'menu' => $menu,
                    'menu_nodes' => $row->child,
                    'view' => 'menu',
                    'options' => [
                        'class' => 'nav-dropdown nav-submenu',
                    ],
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>
