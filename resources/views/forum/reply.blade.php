<x-outer-template>
    <x-forum-outer>
        @if (session('message'))
            <div class="floating-alert">
                <div class="alert alert-success" id="flash-message" role="alert">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        <div class="outer-card">
            <div class="card">
                <div class="chat-header">Reply Section</div>
                <ul class="message-list">
                    <!-- Display the main post -->
                    <li>
                        <div class="message">
                            <div class="message-username"><i class='bx bxs-user-rectangle'></i>
                                {{ $post->user->name }}</div>
                            <div class="inner-design">

                                <small><i class='bx bxs-captions'></i> {{ $post->title }}</small>
                                <div class="message-time"><i class='bx bxs-message-add'></i>{{ $post->body }}</div>

                            </div>
                            @if ($post->replies->count() > 0)
                                <button onclick="toggleReplies('replies-{{ $post->id }}')" class="reply-toggle">
                                    <i class='bx bx-down-arrow-alt'></i>
                                </button>
                            @endif
                        </div>

                        @foreach ($post->replies as $reply)
                            <ul id="replies-{{ $post->id }}" class="replies-list" style="display: none;">
                                @foreach ($post->replies as $reply)
                                    <li class="reply-li">
                                        <div class="message-reply">
                                            <div class="message-username">
                                                <i class='bx bxs-user-rectangle'></i> {{ $reply->user->name }}
                                            </div>
                                            <div class="inner-design-reply">
                                                <div class="message-time-reply">
                                                    <i class='bx bx-reply'></i> {{ $reply->body }}
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach

                    </li>

                </ul>

                <form action="/posts/{{ $post->id }}/reply" method="POST">
                    @csrf
                    <div class="chat-input">
                        @auth
                            @if (auth()->user()->type == 'admin')
                                No posting allowed
                            @else
                                <textarea class="message-input" name="body" placeholder="Write a reply..." required cols="40" rows="10"></textarea>
                                <button class="send-button message-input" type="submit">Reply</button>
                            @endif
                        @endauth
                    </div>
                </form>
            </div>
        </div>
    </x-forum-outer>
</x-outer-template>
