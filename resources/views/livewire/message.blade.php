
    <div class="content">
        <div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4 col-xl-3 ">
        <div class="card mb-sm-3 mb-md-0 contacts_card">
            <div class="card-header">
                <div class="input-group">
                    <input type="text" placeholder="Search..." name="search" class="form-control search">
                    <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                </div>
            </div>

            <div class="card-body contacts_body">
                <ui class="contacts">
                    @foreach($users as $user1)
{{--                        @if($user->isOnline())--}}
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <a href="{{route('adminMessage',$user1->id)}}" > <img src="/images/{{$user1->avatar}}" class="rounded-circle user_img"></a>
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <a href="{{route('adminMessage',$user1->id)}}" > <span>{{$user1->name}}</span></a>
                                        <p>{{$user1->name}}  is online </p>
                                    </div>
                                </div>
                            </li>
{{--                        @else--}}
{{--                            <li class="img_cont">--}}
{{--                                <div class="d-flex bd-highlight">--}}
{{--                                    <div class="img_cont">--}}
{{--                                        <a href="{{route('adminMessage',$user->id)}}"> <img src="/images/{{$user->avatar}}" class="rounded-circle user_img "></a>--}}
{{--                                        <span class="online_icon offline "></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="user_info ">--}}
{{--                                        <a href="{{route('adminMessage',$user->id)}}"> <span>{{$user->name}}</span></a>--}}
{{--                                        <p>{{$user->name}} is offline</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </li>--}}
{{--                        @endif--}}
                    @endforeach
                </ui>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
    <div class="col-md-8 col-xl-6 ">
        <div class="card">
            <div class="card-header msg_head">
                <div class="d-flex bd-highlight">

                    <div class="img_cont">
                        <img src="/images/{{$user->avatar}}" class="rounded-circle user_img">
                        <span class="online_icon"></span>
                    </div>
                    <div class="user_info">
                        <span>Chat with {{$user->name}}</span>
                        <p>1767 Messages</p>
                    </div>
                    <div class="video_cam">
                        <span><i class="fas fa-video"></i></span>
                        <span><i class="fas fa-phone"></i></span>
                    </div>

                </div>
                <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                <div class="action_menu">
                    <ul>
                        <li><i class="fas fa-user-circle"></i> View profile</li>
                        <li><i class="fas fa-users"></i> Add to close friends</li>
                        <li><i class="fas fa-plus"></i> Add to group</li>
                        <li><i class="fas fa-ban"></i> Block</li>
                    </ul>
                </div>
            </div>

            <div class="card-body msg_card_body">
                @foreach($chats as $chat)
                    @if($user->id==$chat->from_id)
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="/images/{{$user->avatar}}" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                {{$chat->text}}
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                    @elseif($user->id==$chat->to_id)
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                {{$chat->text}}
                                <span class="msg_time_send">  8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="/images/{{Auth::user()->avatar}}" class="rounded-circle user_img_msg">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="card-footer">

                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                        </div>
                        <textarea wire:model="ctn" class="form-control type_msg" placeholder="Type your message..."></textarea>
                        <div class="input-group-append">
                            <button wire:click="save({{$user->id}})" class="input-group-text send_btn" > <span class="input-group-text send_btn" ><i class="fas fa-location-arrow"></i></span></button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>
</div>
    </div>


