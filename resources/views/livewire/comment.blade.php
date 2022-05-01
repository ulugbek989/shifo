<div>
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    <div class="blog-page">

                        <img alt="img" width="600" align="center" src="{{asset('storage/'. $post->img)}}">

                    </div>
                    <div class="blog-page">
                        <p>{!! $post->title !!}</p>

                    </div>

                    <div class="post-tags">
                        <ul>

                            <li><a href="#">{{$post->user->name}}</a></li>
                            <li><a href="#">Interpritation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row justify-content-center">
        <!-- Post A Comment -->
        <div class="col-md-12 text-center">
            <div class="post-a-comments mb-100">
                <h4>Post va Comment</h4>
                @if(Auth::check())

                    <input  class="w-full rounded border shadow p-2 mr-8 my-8"
                            placeholder="Commentni kiritish"   wire:model="title">
                    @if($errors->has('title')) <p>{{$errors->first('title')}}</p>@endif
                    <br>
                    <button wire:click="save()"  class="btn btn-success">Save</button>

                @else
                    <h6>Login -->>  <a href="{{route('login')}}"><i class="fa fa-sign-in">  Log</i></a></h6>
                    <h6>Register -->>  <a href="{{route('register')}}"><i class="fa fa-registered">  Registratsiya</i></a></h6>
                @endif



            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <!-- Comments -->
        <div class="col-12 col-lg-6">
            <div class="comments-area">
                <h4>Commentlar {{$post->comment->count()}}</h4>

                <div>

                    @foreach($post->comment as $comment)

                        <ul class="comments-list">
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Single Comment -->
                                <div class="single-comment-wrap mb-30">
                                    <div class="d-flex justify-content-between mb-30">
                                        <!-- Comment Admin -->
                                        <div class="comment-admin d-flex">
                                            <div class="thumb">
                                                <img width="50" style="margin-right: 10px" src="{{$comment->user->avatar}}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6>{{$comment->user->name}}</h6>

                                                <span> {{$comment->created_at->diffForHumans()}}
                                                    </span>
                                            </div>
                                        </div>
                                        <!-- Reply -->
                                        <div class="reply">
                                            <button disabled="disabled" class="btn btn-primary">Reply</button>
                                        </div>
                                    </div>
                                    <p>{{$comment->content}}</p>

                                </div>
                            </li>
                        </ul>

                    @endforeach

                    {{--                                                                        <div class="col-12">--}}
                    {{--                                                                            <div class="load-more text-center mt-50">--}}
                    {{--                                                                                <button wire:click="loadMores()" class="btn btn-primary">Load More</button>--}}
                    {{--                                                                            </div>--}}
                    {{--                                                                        </div>--}}
                </div>


            </div>
        </div>

    </div>

</div>

</div>
