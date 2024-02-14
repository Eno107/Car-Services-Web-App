@extends(auth()->check() ? '_layouts.master' : 'components.layout')


@section('body')

    <div class="mx-3 pt-5 flex flex-col gap-2">

        <div class="flex flex-col gap-1 bg-gray-800 text-white rounded-lg prob-show">

            <div class="mx-8 my-3 ">

                <div class="mb-2 flex flex-row gap-2">
                    @if (isset($problem->make))
                        <div class="text-xs sm:text-sm md:text-sm lg:text-base xl:text-lg">
                            <i><span class="username">Make:</span> {{ $problem->make->name }}</i>
                        </div>
                    @endif

                    <div class="text-xs sm:text-sm md:text-sm lg:text-base xl:text-lg">
                        <i><span class="username">Category:</span> {{ $problem->category->name }}</i>
                    </div>


                </div>


                <div class="mb-2">
                    <div class="text-sm sm:text-base md:text-base lg:text-lg xl:text-xl username">
                        <i>{{ $problem->title }}</i>
                    </div>
                </div>

                <div class="mb-2">
                    <div class="text-xs sm:text-sm md:text-sm lg:text-base xl:text-lg">
                        {{ $problem->body }}
                    </div>
                </div>


                @auth
                    @if (Auth::user()->id === $problem->user_id)
                        <div class="flex justify-end mb-2">
                            <form method="POST" action="/problem/delete/{{ $problem->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" x-cloak :class="saveEdit ? 'hidden' : 'block'"
                                    class="bg-red-700 hover:bg-red-800 text-white font-bold py-1 px-2 rounded text-xs main-button">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                @endauth


                <div class="text-xs username flex flex-row justify-between mb-2">
                    @if (isset($problem->user_id))
                        <p>Problem Submitted By <span class="underline"><a
                                    href="#">{{ $problem->user->name }}</a></span></p>
                    @else
                        <p>Problem Submitted By A Guest</p>
                    @endif

                    <p>{{ $problem->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>

        <div class="dividing-messages  text-sm md:text-base lg:text-lg xl:text-xl text-gray-900"> Comments
            <hr class="text-yellow-600 bg-yellow-600 border-transparent">
        </div>

        <div>
            <form method="POST" action="/problems/{{ $problem->slug }}">
                @csrf

                <div class="border border-yellow-600 rounded-lg w-full">
                    <div class="mx-8 my-3 flex flex-col gap-1 ">

                        <div class="text-xs  flex flex-col justify-between mb-2 ">
                            <textarea name="body" id="body" rows="1" placeholder="Write A Comment...." style="resize: none;"
                                class="w-full md:p-2 p-1 text-xs sm:text-sm md:text-sm lg:text-base xl:text-base border border-gray-800 border-t-0 border-l-0 border-r-0"></textarea>
                            @error('body')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="text-xs flex flex-row justify-end">
                            <button type="submit" id="problem-submit-button" disabled=true
                                class="bg-gray-200 text-white font-bold py-2 px-4 rounded text-xs sm:text-sm md:text-base lg:text-sm xl:text-sm main-button">
                                Comment
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div>
            <div class="flex flex-col gap-2 items-start">

                @if (isset($comments) && count($comments) > 0)
                    @foreach ($comments as $comment)
                        <div class="bg-gray-600 text-white rounded-lg prob-show" x-data="{ saveEdit: false }" x-cloak
                            :class="saveEdit ? 'w-full' : ''">
                            <div class="mx-8 my-3 flex flex-col gap-1 ">
                                <p class="problem-comments-content text-xs sm:text-sm md:text-sm lg:text-base xl:text-base"
                                    x-cloak :class="saveEdit ? 'hidden' : 'block'">
                                    {{ $comment->body }}
                                </p>

                                <form method="POST" action="/comments/update/{{ $comment->id }}">
                                    @csrf
                                    @method('PATCH')
                                    <textarea name="body"
                                        class="autoExpandTextarea text-xs sm:text-sm md:text-sm lg:text-base xl:text-base bg-transparent resize-none mb-2 overflow-hidden w-full"
                                        x-cloak :class="saveEdit ? 'block border pl-1' : 'hidden'" rows="3">{{ $comment->body }}</textarea>



                                    @auth
                                        @if (Auth::user()->id === $comment->user_id)
                                            <div class="text-xs username flex flex-row justify-end mb-2 gap-2">

                                                <button type="button" x-cloak :class="saveEdit ? 'hidden' : 'block'"
                                                    @click="saveEdit = true"
                                                    class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-1 px-2 rounded text-xs main-button">
                                                    Edit
                                                </button>

                                                <button type="submit" x-cloak :class="saveEdit ? 'block' : 'hidden'"
                                                    class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-1 px-2 rounded text-xs main-button">
                                                    Save Edit
                                                </button>

                                                <button type="reset" x-cloak :class="saveEdit ? 'block' : 'hidden'"
                                                    @click="saveEdit = false"
                                                    class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-1 px-2 rounded text-xs main-button">
                                                    Cancel
                                                </button>
                                    </form>
                                    <form method="POST" action="/comments/delete/{{ $comment->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" x-cloak :class="saveEdit ? 'hidden' : 'block'"
                                            class="bg-red-700 hover:bg-red-800 text-white font-bold py-1 px-2 rounded text-xs main-button">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                        @endif
                    @endauth

                    <div class="text-xs username flex flex-row justify-between mb-2 gap-2">
                        <p class="pr-2">Comment By @if (isset($comment->user_id))
                                <span class="underline"><a href="#">{{ $comment->user->name }}</a></span>
                            @else
                                A Guest
                            @endif
                        </p>
                        <p>{{ $comment->created_at->diffForHumans() }}</p>
                    </div>


            </div>
        </div>
        @endforeach
    @else
        <div class="flex flex-col justify-center items-center w-full">
            <img src="/images/no-comments.png" alt="" draggable="false" style="user-select: select none;">

            <div>
                <p class="text-sm sm:text-base md:text-base lg:text-base xl:text-lg">
                    No comments yet :(
                </p>
            </div>
        </div>
        @endif
    </div>

    <div class="dividing-message mt-2">
        <hr class="text-yellow-600 bg-yellow-600 border-transparent">
    </div>
    </div>
    </div>


    <script>
        const textarea = document.getElementById('body');
        const submitButton = document.getElementById('problem-submit-button');

        textarea.addEventListener('input', () => {
            const textareaValue = textarea.value.trim();
            if (textareaValue.length >= 1) {
                submitButton.classList.add('bg-gray-700');
                submitButton.classList.add('hover:bg-gray-800');
                submitButton.disabled = false;
            } else {
                submitButton.classList.remove('bg-gray-700');
                submitButton.classList.remove('hover:bg-gray-800');
                submitButton.disabled = true;
            }
        });

        const textareas = document.querySelectorAll('.autoExpandTextarea');

        const handleTextareaEvent = function() {
            const scrollHeight = this.scrollHeight;
            this.style.height = 'auto';
            this.style.height = scrollHeight + 'px';
        };


        const events = ['input']

        textareas.forEach(textarea => {
            events.forEach(event => {
                textarea.addEventListener(event, handleTextareaEvent);
            });
        });
    </script>
@endsection
