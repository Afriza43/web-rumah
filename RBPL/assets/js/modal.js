.modal {
      display: none; /* Sembunyikan modal secara default */
      position: fixed; /* Letakkan modal di atas halaman */
      z-index: 1; /* Tampilkan modal di atas elemen lain */
      padding-top: 50px; /* Tambahkan ruang atas */
      left: 0;
      top: 0;
      width: 100%; /* Lebar modal mengisi seluruh halaman */
      height: 100%; /* Tinggi modal mengisi seluruh halaman */
      overflow: auto; /* Tambahkan scroll jika konten melebihi tinggi modal */
      background-color: rgb(0,0,0); /* Warna latar belakang gelap */
      background-color: rgba(0,0,0,0.9); /* Tambahkan transparansi pada warna latar belakang */
    }

    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Animasi untuk tampilan modal */
    .modal-content, #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)}
      to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
      from {transform:scale(0)}
      to {transform:scale(1)}
    }

    /* Tombol penutup pada modal */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }