@extends('pages.layouts.app')
@section('content')
    <div class="card card-body content-center p-4">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex gap-4">
                <p> Jenis Transaksi :</p>
                <span
                    class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500">
                    Pemasukan
                </span>
            </div>
            <div class="flex gap-4">
                <p> Metode Transaksi :</p>
                <span
                    class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">
                    Tunai
                </span>
            </div>
            <div class="flex gap-4">
                <p> Tanggal Transaksi :</p>
                <span
                    class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">
                    Tunai
                </span>
            </div>
            <div class="flex gap-4">
                <p> Kategori :</p>
                <span
                    class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">
                    Tunai
                </span>
            </div>
            <div class="flex gap-4">
                <p> Kategori :</p>
                <span
                    class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500">
                    Nominal :
                </span>
            </div>
        </div>
    </div>
@endsection
