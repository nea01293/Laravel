@forelse($asdf_array as $item)
    <p>The item is {{ $item }}</p>
@empty
    <p>There is no item !</p>
@endforelse
