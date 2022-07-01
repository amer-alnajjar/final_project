<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BLOGS') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                {{-- //////////////////blog --}}
                <form action="postinsert" method="POST">
                    @csrf
                    <div class="mb-3 d-flex justify-content-around">
                        <input type="text" name="caption" class="form-control mt-3 ml-4 rounded" style="width: 700px; "
                            id="formGroupExampleInput" placeholder="Write Your Blog">
                        <button type="submit" class="btn  mt-3 ml-4 rounded border-primary"
                            name="Submit">POST</button>
                    </div>
                </form>
            </div>

            {{-- //////////////////////////////// post --}}

            @foreach ($posts as $post)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-5 p-2">

                    @foreach ($data as $user)
                        @if ($post->user_id = $user->id)
                            <div class=" flex justify-content-between">
                                <h2 class="m-2">{{ $user->name }}</h2>
                                <a href="{{ Route('posts.destroy', $post->id) }}" class="btn btn-danger">DELETE</a>
                            </div>
                        @endif
                    @endforeach

                    <p class="ml-4 mt-3">{{ $post->caption }}</p>

                    <form action="commentinsert" method="POST" class="mt-3">
                        @csrf
                        <div class="mb-3 d-flex justify-content-around">
                            <input type="text" name="comment" class="form-control mt-3 ml-4 rounded"
                                id="formGroupExampleInput" placeholder="Write Your comment">
                            <button type="submit" class="btn  mt-3 ml-4 rounded border-primary"
                                name="Submit">Comment</button>
                        </div>
                    </form>

                    @foreach ($comments as $comment)
                        @if ($comment->post_id == $post->id)
                            <div class=" m-3 bg-light p-1 rounded ">
                                <h3 class="m-2">{{ Auth::user()->name }}</h3>
                                <p class="ml-4 ">{{ $comment->comment_text }}</p>
                            </div>
                        @endif
                    @endforeach

                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
