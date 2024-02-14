  @props(['items'])
  @foreach ($items as $item)
      <a href="/services/{{ $item->name }}"
          class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem"
          tabindex="-1">{{ $item->name }} </a>
  @endforeach
