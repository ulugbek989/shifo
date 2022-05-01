<div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-10 heading-section text-center ">
                <h2 class="mb-4">Kasalxona yangiliklari va postlar</h2>
                <p>Admin va Doctorlarning postlarini ko'rishingiz mumkin</p>
            </div>
        </div>
        <div class="row d-flex">

            @forelse($pubs as $post)
            <div class="col-md-4 ">
                <div class="blog-entry">
                    <a href="#" class="block-20" >
                        <img class="" src="{{asset('storage/'.$post->img)}}">
                    </a>
                    <div class="text d-block">

                        <div class="meta mb-3">
                            <div><a href="#">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</a></div>
                            <div><a href="#">{{$post->title}}</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> {{$post->comment->count()}}</a></div>
                        </div>
                        <h3 class="heading"><a href="#">{{$post->title}}</a></h3>
                        <p>{{$post->content}}</p>

                        <p><a href="{{ route('id', $post->id) }}" class="btn btn-danger ">
                                Postni ochish
                            </a></p>

                    </div>

                </div>
            </div>


            @empty
            <tr>
                <td colspan="2">No Posts.</td>
            </tr>
            @endforelse
        </div>
        <div class="col-md-12 text-center"> <button wire:click="loadMore()" class="btn btn-dark btn-lg shadow-sm">Ko'proq yuklash...</button></div>
    </div>
</div>