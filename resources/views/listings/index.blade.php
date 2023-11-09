<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
        @endforeach
        @if(count($listings) == 0)
        <p>No listings found</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</x-layout>