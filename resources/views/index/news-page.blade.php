<x-outer-template>

    <div class="card2-outer">
        @foreach ($jsonData as $item)
            <div class="card2">
                <p class="heading2">{{ $item['label'] }}</p>
                <p class="para2">{{ $item['tagline'] }}</p>
                <div class="overlay2"></div>
                <a href="{{ $item['link'] }}" target="_blank" class="card-btn2">Click</a>
            </div>
        @endforeach
    </div>
    
</x-outer-template>
