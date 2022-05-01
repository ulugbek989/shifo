@extends('layouts.master')

@section('section')
    <section class="hero-wrap js-fullheight" style="background-image: url( 'images/03.jpg' ); height: 600px; background-position: 50% 50%;" id="home-section" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true" style="height: 600px;">
                <div class="col-md-6 pt-5 ftco-animate fadeInUp ftco-animated">
                    <div class="mt-5">
                        <span class="subheading">Biz siz uchun qayg'uramiz</span>
                        <h1 class="mb-4">Bizning Shifo  <br>klinikamizga hush kelibsiz</h1>
                        <p class="mb-4">Salom bizning klinika uzoq yillardan buyon xalqqa xizmat ko'rsatib kelmoqda biz uchun bemorlarning sog'lig'i birinchi o'rinda</p>
                        <p><a href="#about-section" class="btn btn-primary py-3 px-4">Biz haqimizda</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('images/a4.jpeg')}})">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5 fadeInUp ftco-animated">
                                <h2 class="mb-4">Bizning <span>Shifo</span> klinikasi</h2>
                                <p>Bizning klinika uzoqvaqtdan beri turli beforlarga xizmat ko'rsatib kelmoqda. Bizning shifokorlar o'z ishini sevishadi ishiga masulyatli. </p>
                                <p><a href="#about-section" class="btn btn-primary py-3 px-4">Bepul konsultatsiya</a> <a href="#contact-section" class="btn btn-secondary py-3 px-4">Biz bilan bog'lanish</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 py-5">
                    <div class="py-lg-5">
                        <div class="row justify-content-center pb-5">
                            <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
                                <h2 class="mb-3">Bizning xizmatlarimiz</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span class="fa fa-ambulance"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Favqulodda xizmatlar</h3>
                                        <p>Bu yerda siz favqulodda xizmatlar haqida malumot olishingiz mumkin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span class="fa fa-docker"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Malakali shifokorlar</h3>
                                        <p>Bu yerda siz bizning malakali shifokorlarimiz haqida malumot olishingiz mumkin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span class="fa fa-stethoscope"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Ochiq havoda tekshirish</h3>
                                        <p>Bu yerda siz turli amaliyotlarimiz haqida malumot olishingiz mumkin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services d-flex">
                                    <div class="icon justify-content-center align-items-center d-flex"><span class="fa fa-server"></span></div>
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">24 soatlik xizmat</h3>
                                        <p>Bu yerda siz bizning 24 soatlik xizmatlarimiz haqida malumot olishingiz mumkin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                        <form action="{{route('contact.send1')}}" method="POST" class="appointment-form ftco-animate fadeInUp ftco-animated">
                            @csrf
                            <h3>Bepul konsultatsiya</h3>
                            <div class="">
                                <div class="form-group">
                                    <div class="icon"><span class="fa fa-text-height"></span></div>
                                    <input type="text" name="name" class="form-control" placeholder="Ismingizni kiriting">
                                </div>
                                <div class="form-group">
                                    <div class="icon"><span class="fa fa-text-height"></span></div>
                                    <input type="text" name="surname" class="form-control" placeholder="Familyangizni kiriting">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-medium"></span></div>
                                            <select name="section" id="" class="form-control">
                                                <option value="Bizning bo'limlar">Bizning bo'limlar</option>
                                                <option value="Neurology">Neurology</option>
                                                <option value="Cardiology">Cardiology</option>
                                                <option value="Dental">Dental</option>
                                                <option value="Ophthalmology">Ophthalmology</option>
                                                <option value="Other Services">Other Services</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="icon"><span class="fa fa-phone"></span></div>
                                    <input type="number" name="phone" class="form-control" placeholder="Telefon nomeringizni kiriting">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" name="day" class="form-control appointment_date" placeholder="Kunninggizni kiriting">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <div class="icon"><span class="fa fa-edit"></span></div>
                                    <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Xabaringizni kiriting"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Jo'natish" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro img" style="background-image: url({{asset('images/a3.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2>Sizning sog'ligingiz bizning ustuvor vazifamiz</h2>
                    <p>BU yerda biz haqimizda malumot olishingiz mumkin</p>
                    <p class="mb-0"><a href="#" class="btn btn-info px-4 py-3">Malumotlar</a></p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="ftco-section" id="doctor-section">
        @livewire('doctor')
    </section>

    <section class="ftco-facts img ftco-counter" style="background-image: url({{asset('images/a7.jpeg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5 heading-section heading-section-white">
                    <span class="subheading">Qiziqarli fakt</span>
                    <h2 class="mb-4">5100 dan ortiq bemorlar bizga ishonishadi</h2>
                    <p class="mb-0"><a href="{{route('register')}}" class="btn btn-secondary px-4 py-3">Ro'yhatdan o'tish</a></p>
                </div>
                <div class="col-md-7">
                    <div class="row pt-4">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="13">13</strong>
                                    <span>Yillik tajriba</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$users->count()}}"></strong>
                                    <span>Baxtli bemorlar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="{{$users->count()}}"></strong>
                                    <span>Doctorlar soni</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="100"></strong>
                                    <span>Hodimlar soni</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light" id="blog-section">

  @livewire('pub')
    </section>

    <section class="ftco-section contact-section" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Biz bilan bog'lanish</h2>
                    <p>Bu yerda biz bilan bog'lanishingiz mumkin</p>
                </div>
            </div>
            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Manzil</h3>
                        <p>Samarqand</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-4">Biznig telefon raqamlar</h3>
                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email manzil</h3>
                        <p><a href="#">info@yoursite.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center bg-light">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <h3 class="mb-4">Web sayt</h3>
                        <p><a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{route('contact.send')}}" class="bg-light p-5 contact-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Ismingiz">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Emailingiz">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" placeholder="Telefon Nomeringizni kiriting">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kasallik" class="form-control" placeholder="Kasalingiz">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Xabaringiz"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Xabarni Jo'natish" class="btn btn-secondary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                <div tabindex="0" aria-label="Map" aria-roledescription="map" role="img" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(#), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, -181, -34);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, -181, -34);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -512px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -512px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -512px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, -181, -34);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(1)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(2)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(3)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(4)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(5)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(6)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(7)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -256px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(8)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(9)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 0px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(10)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 256px; top: -512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="{{asset('assets/vt(11)')}}" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                        <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="{{asset('assets/saved_resource.html')}}"></iframe>
                                <div>

                                </div>
                                <div></div
                                ><div></div>
                                <div></div>
                                <div>
                                    <button draggable="false" title="Включить полноэкранный режим" aria-label="Включить полноэкранный режим" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;">
                                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                    </button></div><div></div><div></div><div></div><div></div><div>
                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;">
                                        <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                                            <div style="width: 40px; height: 40px;">
                                                <button draggable="false" title="Повернуть карту на 90 градусов" aria-label="Повернуть карту на 90 градусов" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;">
                                                </button>
                                                <button draggable="false" title="Изменить угол обзора" aria-label="Изменить угол обзора" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                                                </button></div></div>
                                        <div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;">
                                            <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                <button draggable="false" title="Увеличить" aria-label="Увеличить" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                </button>
                                                <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                <button draggable="false" title="Уменьшить" aria-label="Уменьшить" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                </button></div></div></div></div><div>
                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                        <a target="_blank" rel="noopener" href="#" title="Открыть эту область в Google Картах (в новом окне)" style="position: static; overflow: visible; float: none; display: inline;">
                                            <div style="width: 66px; height: 26px; cursor: pointer;">
                                                <img alt="" src="{{asset('assets/google_white5.png')}}" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                            </div></a></div></div><div></div><div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 127px; bottom: 0px; width: 208px;">
                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Картографические данные</a>
                                                <span style="">Картографические данные © 2020 Google</span>
                                            </div></div></div>
                                    <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a href="#" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Условия использования</a></div></div>
                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px; display: none;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a target="_blank" rel="noopener" title="Сообщить об ошибке на карте или снимке" dir="ltr" href="#" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Сообщить об ошибке на карте</a></div>
                                    </div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Картографические данные © 2020 Google</div></div></div>
                                <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 128px; top: 210px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Картографические данные</div>
                                    <div style="font-size: 13px;">Картографические данные © 2020 Google</div>
                                    <button draggable="false" title="Закрыть" aria-label="Закрыть" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;">
                                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;">
                                    </button></div>
                            </div>
                        </div>
                        <div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                            <div>
                                <img alt="" src="{{asset('assets/google_gray.svg')}}" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;">
                            </div>
                            <div style="line-height: 20px; margin: 15px 0px;">
                                <span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">При загрузке Google&nbsp;Карт на этой странице возникла проблема.</span>
                            </div>
                            <table style="width: 100%;"><tr>
                                    <td style="line-height: 16px; vertical-align: middle;">
                                        <a href="#" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Вы владелец этого сайта?</a></td>
                                    <td style="text-align: right;">
                                        <button class="dismissButton">ОК</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
