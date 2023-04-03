@extends('layout.tampilan')
@section('content')

<div class="wrapper">
    <!----------untuk home-->
    <section id="home"> 
        <img src="https://tse4.mm.bing.net/th?id=OIP.wAETWl0QxdgvSy6jxyAtJgHaHG&pid=Api&P=0"/>
        <div class="kolom">
            <p clas="deskripsi">Desa Wisata Hariara pohan,Kec. Harian </p>
            <h2>Jampalan na Lomak</h2>
            <p>Hariara Pohan merupakan desa wisata yang terletak di tepi Danau Toba, tepatnya di Kecamatan Harian, Kabupaten Samosir, Provinsi Sumatera Utara. Daya tarik utama desa ini adalah Bukit Holbung Samosir dengan pemandangan alam berupa lanskap kaldera Toba yang indah.</p>
            <p><a href="wisata.html" class="tbl-green">More Info</a></p>
        </div>
    </section>
    <!-------untuk kuliner--> 
    <section id="kuliner">
        <div class="kolom">
            <p class="deskripsi">You Have to Try</p>
            <h2>Kuliner Desa Hariara Pohan </h2>
            <p>Di Desa Hariara Pohan, wisatawan dapat mencicipi kuliner masakan khas Suku Batak Toba seperti Ayam Napi Nadar, Ikan Nila Arsik, Sambal Andaliman, Saksang,   minuman Tuak, Dekke Na Niura, Sambal Rias dan masih banyak lagi </p>
            <p><a href="more.html" class="tbl-green2">More Info</a></p>
        </div>
        <img src="https://tse1.mm.bing.net/th?id=OIP.x-hRbdqeq0mo1QkyQMAEtQEmDU&pid=Api&P=0"/>
    </section>
    <!-------untuk ekonomi-->
    <section id="ekonomi">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">Mata Pencaharian</p>
                <h2>Ekonomi</h2>
                <p>Desa Hariara Pohan merupakan desa Agraris yang mana masyarakat memiliki mata pencaharian utama yakni Bertani dan berkebun seperti padi, kacang, jagung, dan juga kopi  </p>
            </div>

            <div class="list-pencaharian">
                <div class="jenis">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.Ojqs4Q723bRtICO3MeMbpAHaD4&pid=Api&P=0"/>
                    <p>Bertani Padi</p>
                </div>
                <div class="jenis">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.22L4WMCL1bJti--u5zOrXgHaE7&pid=Api&P=0"/>
                    <p>Bertani Jagung</p>
                </div>
                <div class="jenis">
                    <img src="https://static.republika.co.id/uploads/images/inpicture_slide/pekerja-memanen-kopi-varietas-robusta-di-desa-_150309074854-690.jpg"/>
                    <p>Bertani Kopi</p>
                </div>
            </div>

        </div>
    </section>
    <!--------untuk destinasi-->
    <section id="destinasi">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">wisata yang harus kamu kunjungi</p>
                <h2>Destinatiaon</h2>
                <p>Desa Wisata Hariarapohan  merupakan desa dengan sejuta keindahan alam serta budaya salah satunya  objek wisata budaya Batu Munung di Lumban Simarmata dan wisata Bukit Holbung</p>
            </div>

            <div class="list-wisata">
                <div class="nama-wisata">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.L2zSfjOj1SUZ1XBp_ehB4QHaEO&pid=Api&P=0"/>
                    <p>Bukit Holbung</p>
                </div>
                <div class="nama-wisata">
                     <img src="https://tse1.mm.bing.net/th?id=OIP.bO-Og-1dR-KpL8mnn--rDgAAAA&pid=Api&P=0"/>
                     <p>Sarkofagus Batu Munung</p>
                </div>
                <div class="nama-wisata">
                     <img src="https://tse2.mm.bing.net/th?id=OIP.KRGgpn6yr3P1A1Z9RpUGggHaE8&pid=Api&P=0"/>
                     <p>Rumah Bolon</p>
                </div>
            </div>
        </div>
    </section>
</div>

@stop