<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Detail Kontrol Kehamilan</title>

      




    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice-list.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern bordered-layout  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="bordered-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul> 
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span><span class="user-status">Kader</span></div><span class="avatar"><img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="{{ route('logout-kader') }}"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="#"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.  org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text" style="color: ">Posdayandu</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
       <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="menu-item"><a class="d-flex align-items-center" href="{{ route('dashboard-kader') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning badge-pill ml-auto mr-1"></span></a> 
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">APLIKASI </span><i data-feather="more-horizontal"></i>
                </li>
                
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Pesan</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="Shop">Toko</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Produk</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Preview">Penjualan</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Edit">Atur Toko</span></a>
                        </li>  
                    </ul>
                </li>


                
                <li class=" navigation-header"><span data-i18n="User Interface">ADMINISTRASI</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('kader-daftar_pengguna') }}"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Daftar">Daftar Pengguna</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('kader-agenda') }}"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Agenda">Agenda</span></a>
                </li>
                <li class="active"><a class="d-flex align-items-center" href="{{ route('kader-entri') }}"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Entri Data">Entri Data</span></a>
                </li>
               
                
                
                
                <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">AKUN</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('kader-profil') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Profil">Profil</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-wizard.html"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="Form Wizard">Pengaturan Akun</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-validation.html"><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Bantuan</span></a>
                </li>
            </ul>
        </div>
    </div>                  
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <!-- begin tabel -->
                    <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @foreach($kontrolhamil as $kontrol)
                                <h2 class="card-title">{{$kontrol->ibu_hamil->nama_ibu}}</h2>
                                @endforeach
                            </div>
                            <div class="card-body">
                            
                             <a href="{{ route('kader-entriibu') }}"><button class="btn btn-danger">Kembali</button></a><br><br>
                             <div class="table-responsive">
                                  <table class="table table-striped">
                                    <label>Identitas Ibu Hamil</label>
                                    <thead>
                                    <tr>
                                            <th>Nama Ibu</th>
                                            <th>Hpht</th>
                                            <th>Hpt</th>
                                            <th>Linkar Lengan</th>
                                            <th>Kek</th>
                                            <th>Tinggi Badan</th>
                                            <th>Golongan Darah</th>
                                            <th>Kontrasepsi</th>
                                            <th>Riwayat Penyakit</th>
                                            <th>RIwayat Alergi</th>
                                            <th>Jumlah Persalinan</th>
                                            <th>Jumlah Keguguran</th>
                                            <th>Jumlah Anak Hidup</th>
                                            <th>Jumlah Anak Mati</th>
                                            <th>Jarak Kehamilan</th>
                                            <th>Status Imunisasi Terakhir</th>
                                            <th>Penolong Persalinan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                            $no = 1;
                                        @endphp
                                       @foreach($identitas_ibu as $identitas)
                                    <tr>
                                        
                                        <td>{{$identitas->nama_ibu}}</td>                                      
                                        <td>{{$identitas->hpht}}</td>                                        
                                        <td>{{$identitas->htp}}</td>                                      
                                        <td>{{$identitas->lingkar_lengan}}</td>                                        
                                        <td>{{$identitas->kek}}</td>                                       
                                        <td>{{$identitas->tinggi_badan}}</td>                                       
                                        <td>{{$identitas->gol_darah}}</td>                                       
                                        <td>{{$identitas->kontrasepsi}}</td>                                        
                                        <td>{{$identitas->riwayat_penyakit}}</td>                                        
                                        <td>{{$identitas->riwayat_alergi}}</td>                                        
                                        <td>{{$identitas->jumlah_persalinan}}</td>
                                        <td>{{$identitas->jumlah_keguguran}}</td>                                       
                                        <td>{{$identitas->jumlah_anak_hidup}}</td>                                        
                                        <td>{{$identitas->jumlah_lahir_mati}}</td>                                        
                                        <td>{{$identitas->jarak_kehamilan}}</td>                                        
                                        <td>{{$identitas->status_imunisasi_terakhir}}</td>
                                        <td>{{$identitas->penolong_persalinan}}</td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table><br><br>
                                </div>
                            <div class="table-responsive"><br>
                              


                                <table class="table table-striped">
                                    <label>Kontrol Kehamilan</label>
                                    <thead>
                                        <tr>    
                                            <th class="text-center">Tanggal</th> 
                                            <th class="text-center">Keluhan</th>
                                            <th class="text-center">Tekanan Darah</th> 
                                            <th class="text-center">Berat Badan</th>
                                            <th class="text-center">Umur Kehamilan</th> 
                                            <th class="text-center">Tinggi Fundus</th> 
                                            <th class="text-center">Letak Janin</th> 
                                            <th class="text-center">Denyut Jantung Janin /menit</th>
                                            <th class="text-center">Kaki Bengkak</th> 
                                            <th class="text-center">Hasil Pemriksaan Lab</th>
                                            <th class="text-center">Tindakan (Pemberian TT, Fe, terapi rujukan, umpan balik)</th> 
                                            <th class="text-center">Nasihat yang disampaikan</th>
                                            <th class="text-center">Keterangan</th> 
                                            <th class="text-center">Kapan Harus Kembali</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                       @foreach($kontrolhamil as $kontrol)
                                        <tr>
                                           <td class="text-center">{{$kontrol->tanggal}}</td>
                                           <td class="text-center">{{$kontrol->keluhan}}</td>
                                           <td class="text-center">{{$kontrol->tekanan_darah}}</td>
                                           <td class="text-center">{{$kontrol->berat_badan}}</td>
                                           <td class="text-center">{{$kontrol->umur_kehamilan}}</td>
                                           <td class="text-center">{{$kontrol->tinggi_fundus}}</td>
                                           <td class="text-center">{{$kontrol->letak_janin}}</td>
                                           <td class="text-center">{{$kontrol->denyut_jantung_janin}}</td>
                                           <td class="text-center">{{$kontrol->kaki_bengkak}}</td>
                                           <td class="text-center">{{$kontrol->hasil_lab}}</td>
                                           <td class="text-center">{{$kontrol->tindakan}}</td>
                                           <td class="text-center">{{$kontrol->nasihat}}</td>
                                           <td class="text-center">{{$kontrol->keterangan}}</td>
                                           <td class="text-center">{{$kontrol->waktu_kembali}}</td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="app-assets/js/scripts/pages/app-invoice-list.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>