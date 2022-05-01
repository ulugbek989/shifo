
    <div class="col-md-8">

        @if(session()->has('message'))
            <div class="p-3 bg-success rounded shadow-sm">
                {{session('message')}}

            </div>
        @endif
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormN">
            Add Post
        </button>
            {{$action}}
            {{$selectItem}}
        <div class="modal fade" id="modalFormN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Save Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('post-form')
                    </div>
                </div>
            </div>
        </div>
            <div class="modal fade" id="modalFormM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Save Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @livewire('post-form')
                        </div>
                    </div>
                </div>
            </div>

        @foreach($posts as $comment)
            <div class="rounded border shadow p-3 my-3">
                <div class="flex justify-content-start my-2">
                    <p class="font-weight-bold text-lg-left">{{$comment->user->name}}</p>
                    <p class="mx-3 py-2 text-xl-left  text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}</p>
                </div>
                <p class="text-gray-800">
                    {{$comment->title}}
                </p>
                <button class="btn btn-sm btn-danger"
                        onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                        wire:click="delete({{$comment->id}})">

                    &times;</button>
                <button class="btn btn-sm btn-warning"
                        wire:click="update({{$comment->id}})">


                    <span class="fa fa-edit"></span></button>
                <button class="btn btn-sm btn-info"
                        wire:click="update({{$comment->id}})">


                    <span class="fa fa-info"></span></button>
            </div>
        @endforeach
        <div>{{$posts->links()}}</div>

    </div>

