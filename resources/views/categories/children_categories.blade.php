<li>{{ $children_categories->name }}</li>
@if ($children_categories->categories)
<ul>
    @foreach ($children_categories->categories as $children_categories)
    @include('categories.children_categories', ['children_categories' => $children_categories])
    @endforeach
</ul>
@endif
