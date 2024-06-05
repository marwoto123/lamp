@extends('layouts.main')
@section('container')
 
    <div class="card recent-sales overflow-auto">

        <section class="section contact">

            <div class="row gy-4">
                <div class="col-xl-6">
                    <div class="card p-4">
                        <form action="/pegawai_store" method="post" class="php-email-form">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="nama" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="text" class="form-control" name="nik" placeholder=" nik"
                                        required="">
                                </div>

                                {{-- <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div> --}}
                                <select name="jenis_kelamin" id="">
                                    <option value="">pilih jenis kelamin</option>
                                    <option value="L">laki laki</option>
                                    <option value="P">perempuan</option>
                                </select>


                                <div class="col-md-12">
                                    <textarea class="form-control" name="alamat" rows="6" placeholder="alamat" required="" style="height: 191px;"></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button name="submit" type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section>



    </div>
@endsection
