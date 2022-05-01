<div>
    <div class="container-fluid px-5">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section">
                <h2 class="mb-4">Bizning doctorlar</h2>
                            <p>Buyerdan bizning doctorlar haqida malumot olishlaringiz mumkin</p>
            </div>
        </div>
        <div class="row">
            @foreach($pubs as $user)
            @if($user->author==true or $user->admin==true)
                <div class="col-md-6 col-lg-3">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('storage/'. $user->avatar)}})"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3 class="mb-2">{{$user->name}}</h3>
                            <span class="position mb-2">Neurologist</span>
                            <div class="faded">
                                <p>
                                    Men ishbilarmonman, ammo bundan tashqari, juda sodda odamman.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>

                                </ul>
                                <p><a href="#" class="btn btn-primary">Batafsil</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                @endforeach
                <div class="col-md-12 text-center"> <button wire:click="load()" class="btn btn-dark btn-lg shadow-sm">Kuproq yukalash...</button></div>
        </div>
    </div>
</div>
