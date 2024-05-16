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
                <div class="chat-header">Discussion Forum</div>
                <div class="chat-window">
                    <ul class="message-list">
                        @foreach ($posts as $post)
                            <li>

                                <div class="message">
                                    <div class="message-username"><i class='bx bxs-user-rectangle'></i>
                                        {{ $post->user->name }}</div>
                                    <div class="inner-design">

                                        <small><i class='bx bxs-captions'></i> {{ $post->title }}</small>
                                        <div class="message-time"><i class='bx bxs-message-add'></i>{{ $post->body }}
                                        </div>

                                    </div>
                                    @auth
                                        <div class="reply-show">

                                            <a class="reply-link" href="/posts/{{ $post->id }}/reply"><i
                                                    class='bx bx-reply reply-link'></i>Reply</a>

                                            @if ($post->replies->count() > 0)
                                                
                                                @auth
                                                    
                                                    <button onclick="toggleReplies('replies-{{ $post->id }}')"
                                                        class="reply-toggle">
                                                        <i class='bx bx-down-arrow-alt'></i>
                                                    </button>

                                                @endauth
                                            @endif
                                        </div>

                                    @endauth

                                    @guest

                                        <div class="reply-show">

                                            <a href="{{ route('auth.login-page') }}">
                                                <i class='bx bx-reply reply-link'></i>Reply
                                            </a>

                                            @if ($post->replies->count() > 0)
                                                                                                                                   
                                                    <button onclick="toggleReplies('replies-{{ $post->id }}')"
                                                        class="reply-toggle">
                                                        <i class='bx bx-down-arrow-alt'></i>
                                                    </button>
                                                    
                                            @endif

                                        </div>

                                    @endguest

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
                        @endforeach

                    </ul>
                </div>
                <form action="{{ route('forum.posts-store') }}" method="POST">
                    @csrf
                    <div class="chat-input">

                        @guest
                            <a href="{{ route('auth.login-page') }}">
                                <div class="chat-header">Please login to post</div>
                            </a>
                        @endguest

                        @auth

                            @if (auth()->user()->type == 'admin')
                                No posting allowed
                            @else
                                <input type="text" class="message-input" placeholder="Title" name="title"
                                    required="">
                                <input type="text" class="message-input" placeholder="Thread" name="body"
                                    required="">
                                <button class="send-button message-input" type="submit">Post</button>
                            @endif

                        @endauth


                    </div>
                </form>
            </div>
        </div>
    </x-forum-outer>
</x-outer-template>
