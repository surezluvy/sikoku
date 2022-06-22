{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BERISI INVOICE DISURUH UNTUK BAYAR, dan tombol kembali</h1>
    <a href="{{ url('/dashboard/paket-soal') }}">Kembali</a>
    <form action="{{ route('dashboard-prosesBayarPaket') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
        <input type="hidden" name="paket_soal_id" value="{{ $id }}">
        <button type="submit" value="Bayar">Bayar</button>
    </form>
</body>
</html> --}}
@extends('template.admin')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">
            
            <div class="row invoice layout-top-spacing layout-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    
                    <div class="doc-container">

                        <div class="row">

                            <div class="col-xl-9">

                                <div class="invoice-container">
                                    <div class="invoice-inbox">
                                        
                                        <div id="ct" class="">
                                            
                                            <div class="invoice-00001">
                                                <div class="content-section">

                                                    <div class="inv--head-section inv--detail-section">
                                                    
                                                        <div class="row">

                                                            <div class="col-sm-6 col-12 mr-auto">
                                                                <div class="d-flex">
                                                                    <img src="{{ asset('admin/assets/modif/Vector.svg') }}" alt="" title="" style="margin-right: 10px">
                                                                    <img src="{{ asset('admin/assets/modif/SIKOKU.svg') }}" alt="" title="">
                                                                    <h3 class="in-heading align-self-center">Sikoku inc.</h3>
                                                                </div>
                                                                <p class="inv-street-addr mt-3">XYZ Delta Street</p>
                                                                <p class="inv-email-address">info@company.com</p>
                                                                <p class="inv-email-address">(120) 456 789</p>
                                                            </div>
                                                            
                                                            <div class="col-sm-6 text-sm-end">
                                                                <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4"><span class="inv-title">Invoice : </span> <span class="inv-number">#0001</span></p>
                                                                <p class="inv-created-date mt-sm-5 mt-3"><span class="inv-title">Invoice Date : </span> <span class="inv-date">{{ now('asia/jakarta')->format('d M Y') }}</span></p>
                                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">{{ now('asia/jakarta')->format('d M Y') }}</span></p>
                                                            </div>                                                                
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="inv--detail-section inv--customer-detail-section">

                                                        <div class="row">

                                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                <p class="inv-to">Invoice To</p>
                                                            </div>

                                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 text-sm-end mt-sm-0 mt-5">
                                                                <h6 class=" inv-title">Invoice From</h6>
                                                            </div>
                                                            
                                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                                <p class="inv-customer-name">{{ ucfirst(auth()->user()->name) }}</p>
                                                                <p class="inv-street-addr">405 Mulberry Rd., NC, 28649</p>
                                                                <p class="inv-email-address">{{ auth()->user()->email }}</p>
                                                                <p class="inv-email-address">(128) 666 070</p>
                                                            </div>
                                                            
                                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1 text-sm-end">
                                                                <p class="inv-customer-name">Sikoku</p>
                                                                <p class="inv-street-addr">2161 Ferrell Street, MN, 56545 </p>
                                                                <p class="inv-email-address">sikoku@gmail.com</p>
                                                                <p class="inv-email-address">(218) 356 9954</p>
                                                            </div>

                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    @php
                                                        $harga = 0;
                                                        if($paketSoal->harga != null){
                                                            $harga = $paketSoal->harga;
                                                        }
                                                    @endphp

                                                    <div class="inv--product-table-section">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">Nama Paket</th>
                                                                        <th class="text-end" scope="col">Qty</th>
                                                                        <th class="text-end" scope="col">Harga</th>
                                                                        <th class="text-end" scope="col">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                        $no = 1;
                                                                    @endphp
                                                                    <tr>
                                                                        <td>{{ $no++ }}</td>
                                                                        <td>{{ $paketSoal->nama_paket }}</td>
                                                                        <td class="text-end">1</td>
                                                                        <td class="text-end">
                                                                            Rp. {{ $harga }}
                                                                        </td>
                                                                        <td class="text-end">
                                                                            Rp. {{ $harga }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="inv--total-amounts">
                                                    
                                                        <div class="row mt-4">
                                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                            </div>
                                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                                <div class="text-sm-end">
                                                                    <div class="row"> 
                                                                        <div class="col-sm-8 col-7">
                                                                            <p class="">Sub Total :</p>
                                                                        </div>
                                                                        <div class="col-sm-4 col-5">
                                                                            <p class="">
                                                                                Rp. {{ $harga }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-sm-8 col-7">
                                                                            <p class="">Tax 10% :</p>
                                                                        </div>
                                                                        <div class="col-sm-4 col-5">
                                                                            <p class="">
                                                                                Rp. {{ $harga }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-sm-8 col-7">
                                                                            <p class=" discount-rate">Discount 5% :</p>
                                                                        </div>
                                                                        <div class="col-sm-4 col-5">
                                                                            <p class="">
                                                                                Rp. {{ $harga }}
                                                                        </div>
                                                                        <div class="col-sm-8 col-7 grand-total-title mt-3">
                                                                            <h4 class="">Grand Total : </h4>
                                                                        </div>
                                                                        <div class="col-sm-4 col-5 grand-total-amount mt-3">
                                                                            <h4 class="">
                                                                                Rp. {{ $harga }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="inv--note">

                                                        <div class="row mt-4">
                                                            <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                                <p>Note: Thank you for doing Business with us.</p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div> 
                                            
                                        </div>


                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-3">

                                <div class="invoice-actions-btn">

                                    <div class="invoice-action-btn">

                                        <div class="row">
                                            <div class="col-xl-12 col-md-3 col-sm-6">
                                                <form action="{{ route('dashboard-prosesBayarPaket') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                                                    <input type="hidden" name="paket_soal_id" value="{{ $id }}">
                                                    <button type="submit" value="Bayar" class="btn btn-primary btn-send mb-4" style="width: 100%">Bayar</button>
                                                </form>
                                            </div>
                                            <div class="col-xl-12 col-md-3 col-sm-6">
                                                <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                                            </div>
                                            <div class="col-xl-12 col-md-3 col-sm-6">
                                                <a href="javascript:void(0);" class="btn btn-success btn-download">Download</a>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>
                        
                    </div>

                </div>
            </div>

        </div>

    </div>

    @include('template.include.footer')
</div>
@endsection