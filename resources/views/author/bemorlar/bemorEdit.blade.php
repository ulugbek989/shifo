@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Edit
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('bemor.update',$bemor->id)}}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="normal-input" style="color: #3addc2" class="form-control-label">{{$bemor->name}} {{$bemor->familya}} {{$bemor->sharif}}</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="normal-input" style="color: #3addc2" class="form-control-label">{{$bemor->yosh}}</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="normal-input" style="color: #3addc2" class="form-control-label">{{$bemor->jins}}</label>
                                    </div>

                                </div>
                                <hr>


                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">harorat</label>
                                            <textarea  name="harorat" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">shikoyat</label>
                                            <textarea  name="shikoyat" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-8">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="placeholder-input" style="color: #3addc2" class="form-control-label">kurik</label>
                                            <textarea name="kurik" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-8">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="placeholder-input" style="color: #3addc2" class="form-control-label">tashxis</label>
                                            <textarea name="tashxis" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-8">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="placeholder-input" style="color: #3addc2" class="form-control-label">tavsiya</label>
                                            <textarea name="tavsiya" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Surunkali kasalliklari</label>
                                            <textarea  name="Surunkali_kasalliklari" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Analiz natijalari (Skaner variantini yuklash)</label>
                                            <input  type="file" name="Analiz_natijalari" id="normal-input" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Davolash usuli</label>
                                            <textarea  name="Davolash_usuli" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Qabul qilgan dori vositalari (dozasi bilan)</label>
                                            <textarea  name="Qabul_qilgan_dori_vositalari" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Holatining o’zgarishi</label>
                                            <textarea  name="Holatining_o’zgarishi" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Bemorning holati</label>
                                            <textarea  name="Bemorning_holati" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div> <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Davolashning tugash sanasi</label>
                                            <textarea  name="Davolashning_tugash_sanasi" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div> <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Bemor davolangan shifoxona nomini kiritish yoki ro’yxatdan tanlash</label>
                                            <textarea  name="Bemor_davolangan" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Davolovchi shifokorlar</label>
                                            <textarea  name="Davolovchi_shifokorlar" id="normal-input" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-success" style="color: #d0e2e2" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
