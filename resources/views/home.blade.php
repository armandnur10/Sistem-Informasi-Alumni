@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <section>
                <div class="row" style="display: flex; justify-content: space-between; align-items: center">
                    <div class="col-md-6">
                            <h1>SMK Harapan Bangsa Depok</h1>
                            <br>
                            <p>SMK Harapan Bangsa didirikan dibawah naungan Yayasan Reste Nur Insani yang merupakan institusi pendidikan formal mempunyai visi misi dan strategi baru dalam proses pembelajaran.</p>
                            <br>
                            <p>Sebagai institusi pendidikan berusaha menyelaraskan kualitas pendidikan dengan kebutuhan dunia kerja dalam pembentukan sumber daya manusia yang unggul.</p>
                    </div>        
                    <div class="col-md-6">
                        <img src="{{asset("image/photo/gambarsekolah.png")}}" class="img-fluid" alt="image">
                    </div>
                </div>
            </section>
            <section>
                <div class="card" style="background-color: gray">
                    <div class="row card-body" style="display: flex; justify-content: space-between; align-items: center">
                        <div class="col-md-6">
                            <div class="card-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3135310324237!2d106.83419587338047!3d-6.353442262153437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb428c638947%3A0x3be0fb2677668621!2sSekolah%20Menengah%20Kejuruan%20Harapan%20Bangsa!5e0!3m2!1sen!2sid!4v1683769752133!5m2!1sen!2sid" width="500" height="400" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6" style="color: white;"> 
                            <h1>Lokasi Sekolah</h1>
                            <br>
                            <p>Alamat SMK Harapan Bangsa berada di Jl. Akses UI No.89, RW.1, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451</p>
                        </div>
                    </div>    
                </div>
            </section>
            <section>
                 <div class="text-center" style="padding-top: 60px;">
                    <h1>Bekerja Sama</h1>
                    <img src="{{asset("image/photo/LogoBekerjasama.png")}}" class="img-fluid" alt="image" style="padding-top: 30px;">
                 </div>
            </section>
            <footer style="padding-top: 30px;">
                <div class="card text-center" style="background-color: gray; color:white;">
                    <p>©2022. SMK HARAPAN BANGSA. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</div>
@endsection
