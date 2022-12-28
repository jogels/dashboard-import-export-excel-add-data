
<body>
    @include('layouts.header')
    @include('layouts.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg">
                    <div class="row">


                        <!-- Data RTD -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Data RTD 
                                        {{-- <span>| Today</span> --}}
                                    </h5>

                                    <button type="button" class="btn btn-outline-primary" onclick="window.location='/rtd/add'">
                                        ADD DATA
                                    </button><br><br>

                                    <form action="{{route('master.import')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control">
                                    <button type="submit" class="btn btn-outline-primary" class="form-control">
                                        IMPORT DATA
                                    </button>
                                    </form>

                                    <a href="{{route('master.export')}}">
                                    <button type="button" class="btn btn-outline-primary">
                                        EXPORT DATA
                                    </button>
                                    </a>
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">ID VENDOR</th>
                                                <th scope="col">VENDOR NAME</th>
                                                <th scope="col">KODE AREA</th>
                                                <th scope="col">HELP URUT LAMA</th>
                                                <th scope="col">HELP URUT</th>
                                                <th scope="col">NAMA AREA</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col">DIVISI</th>
                                                <th scope="col">METODE</th>
                                                <th scope="col">ID INTV LAMA</th>
                                                <th scope="col">ID INTV</th>
                                                <th scope="col">PASSWORD LOGIN</th>
                                                <th scope="col">NAMA</th>
                                                <th scope="col">JENIS KELAMIN</th>
                                                <th scope="col">TANGGAL BERGABUNG</th>
                                                <th scope="col">ALAMAT SAAT INI</th>
                                                <th scope="col">KOTA</th>
                                                <th scope="col">PROVINSI</th>
                                                <th scope="col">NOMOR HANDPHONE</th>
                                                <th scope="col">NOMOR WA</th>
                                                <th scope="col">EMAIL</th>
                                                <th scope="col">TEMPAT KELAHIRAN</th>
                                                <th scope="col">TANGGAL LAHIR</th>
                                                <th scope="col">KTP</th>
                                                <th scope="col">ALAMAT</th>
                                                <th scope="col">STATUS PERNIKAHAN</th>
                                                <th scope="col">NOMOR REKENING</th>
                                                <th scope="col">NAMA BANK</th>
                                                <th scope="col">NPWP</th>
                                                <th scope="col">PENDIDIKAN TERAKHIR</th>
                                                <th scope="col">NAMA KELUARGA ALTERNATIVE</th>
                                                <th scope="col">NO TELP KELUARGA ALTERNATIVE</th>
                                                <th scope="col">RIWAYAT VAKSIN COVID</th>
                                                <th scope="col">ALASAN BELUM VAKSIN</th>
                                                <th scope="col">JENIS VAKSIN</th>
                                                <th scope="col">TANGGAL VAKSIN 1</th>
                                                <th scope="col">TANGGAL VAKSIN 2</th>
                                                <th scope="col">BENEFICIARY NAME</th>
                                                <th scope="col">STATUS ACTIVE</th>
                                                <th scope="col">TANGGAL BLACKLIST SUSPEND</th>
                                                <th scope="col">TANGGAL SELESAI SUSPEND</th>
                                                <th scope="col">JUDUL TRAINING</th>
                                                <th scope="col">TANGGAL TRAINING</th>
                                                <th scope="col">MENTOR TRAINING</th>
                                                <th scope="col">MENTOR TRAINING 1</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($datartd as $a)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$a->IDVENDOR}}</td>
                                                <td>{{$a->VendorName}}</td>
                                                <td>{{$a->KodeAREA}}</td>
                                                <td>{{$a->Help_Urut_lama}}</td>
                                                <td>{{$a->Help_Urut}}</td>
                                                <td>{{$a->NamaArea}}</td>
                                                <td>{{$a->Status}}</td>
                                                <td>{{$a->Divisi}}</td>
                                                <td>{{$a->Metode}}</td>
                                                <td>{{$a->ID_INTV_LAMA}}</td>
                                                <td>{{$a->ID_INTV}}</td>
                                                <td>{{$a->Password_Login}}</td>
                                                <td>{{$a->Nama}}</td>
                                                <td>{{$a->Jenis_Kelamin}}</td>
                                                <td>{{$a->Tanggal_Bergabung}}</td>
                                                <td>{{$a->Alamat_Saat_Ini}}</td>
                                                <td>{{$a->Kota}}</td>
                                                <td>{{$a->Provinsi}}</td>
                                                <td>{{$a->Nomor_Handphone}}</td>
                                                <td>{{$a->Nomor_WA}}</td>
                                                <td>{{$a->Email}}</td>
                                                <td>{{$a->Tempat_Kelahiran}}</td>
                                                <td>{{$a->Tanggal_Lahir}}</td>
                                                <td>{{$a->KTP}}</td>
                                                <td>{{$a->Alamat}}</td>
                                                <td>{{$a->Status_Pernikahan}}</td>
                                                <td>{{$a->Nomor_Rekening}}</td>
                                                <td>{{$a->Nama_Bank}}</td>
                                                <td>{{$a->NPWP}}</td>
                                                <td>{{$a->Pendidikan_Terakhir}}</td>
                                                <td>{{$a->NamaKeluargaAlternative}}</td>
                                                <td>{{$a->NoTELPKeluargaAlternative}}</td>
                                                <td>{{$a->RiwayatVaksinCovid}}</td>
                                                <td>{{$a->AlasanBelumVaksin}}</td>
                                                <td>{{$a->Jenis_Vaksin}}</td>
                                                <td>{{$a->Tanggal_Vaksin_Ke_1}}</td>
                                                <td>{{$a->Tanggal_Vaksin_Ke_2}}</td>
                                                <td>{{$a->Beneficiary_Name}}</td>
                                                <td>{{$a->Status_Active}}</td>
                                                <td>{{$a->Tanggal_Blacklist_Suspend}}</td>
                                                <td>{{$a->Tanggal_Selesai_Suspend}}</td>
                                                <td>{{$a->Judul_Training}}</td>
                                                <td>{{$a->Tgl_Training}}</td>
                                                <td>{{$a->Mentor_Training}}</td>
                                                <td>{{$a->Mentor_Training1}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary" onclick="window.location='/rtd/add'">
                                                    EDIT DATA
                                                </button>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    @include('layouts.footer')

</body>

</html>