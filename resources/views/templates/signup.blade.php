@extends('templates\master')

@section('konten')
    
    <!-- ==========================
        BREADCRUMB - START 
    =========================== -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>C-Bodas</h2>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="homepage.html">Halaman Utama</a></li>
                        <li class="active">Daftar</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
        BREADCRUMB - END 
    =========================== -->
    
    <div class="login-form-wrapper no-border">
                        
        <h3>Daftar</h3>
            <div class="row">
                <div class=".col-xs-6 .col-sm-3">
                <a href="signuppembeli" button type="submit" class="btn btn-primary btn-lg btn-block">Daftar Sebagai Pembeli</button></a>
                </div>
            </div>
            <div class="row">
                <<div class=".col-xs-6 .col-sm-3"> 
                <a href="signuppenjual" button type="submit" class="btn btn-primary btn-lg btn-block">Daftar Sebagai Penjual</button></a>
                </div>
            </div>    
    </div>
 @stop