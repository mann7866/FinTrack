@extends('pages.layouts.app')
@section('content')
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Transaksi</h5>
        </div>
        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
            <li
                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400">
                <a href="#!" class="text-slate-400">Transaksi</a>
            </li>
            <li class="text-slate-700">
                Transaksi
            </li>
        </ul>
    </div>
    <div class="grid grid-cols-1 xl:grid-col-1">
        <div class="card">
            <div class="card-body">
                <div class="mb-4 group font-semibold">
                    <h5>Edit transaksi</h5>
                </div>

                @if ($errors->any())
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 border border-red-400 rounded-lg"
                        role="alert">
                        <strong>Terjadi kesalahan!</strong> Silakan periksa kembali inputan Anda.
                        <ul class="mt-2 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/finance-logs/{{ $financeLog->id }}/update" method="post">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 mb-4">
                        <div class="content-center">
                            <label for="nominal" class="flex gap-0 inline-block mb-2 text-base font-medium">
                                <span class="text-red-500">*</span>
                                <span class="text-gray-500">Masukkan total transaksi</span>
                            </label>
                            <input type="number" name="nominal" id="nominal"
                                class="form-input border-slate-200 @error('nominal') border-red-500 @enderror"
                                value="{{ old('nominal', $financeLog->nominal) }}" placeholder="Masukkan nominal">
                            @error('nominal')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 xl:grid-col-1 gap-2">
                        <div class="content-center">
                            <label for="transaction_date" class="flex gap-0 inline-block mb-2 text-base font-medium">
                                <span class="text-red-500">*</span>
                                <span class="text-gray-500">Masukkan tanggal transaksi</span>
                            </label>
                            <input type="date" name="transaction_date" id="transaction_date"
                                class="form-input border-slate-200 @error('transaction_date') border-red-500 @enderror"
                                value="{{ old('transaction_date', $financeLog->transaction_date) }}">
                            @error('transaction_date')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="content-center">
                            <label for="type" class="flex gap-0 inline-block mb-2 text-base font-medium">
                                <span class="text-red-500">*</span>
                                <span class="text-gray-500">Pilih tipe transaksi</span>
                            </label>
                            <select name="type" id="type"
                                class="form-input border-slate-200 @error('type') border-red-500 @enderror">
                                <option value="">Pilih tipe</option>
                                <option value="income" {{ old('type', $financeLog->type) == 'income' ? 'selected' : '' }}>Pemasukan</option>
                                <option value="expense" {{ old('type', $financeLog->type) == 'expense' ? 'selected' : '' }}>Pengeluaran</option>
                            </select>
                            @error('type')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="content-center">
                            <label for="payment_method" class="flex gap-0 inline-block mb-2 text-base font-medium">
                                <span class="text-red-500">*</span>
                                <span class="text-gray-500">Pilih metode transaksi</span>
                            </label>
                            <select name="payment_method" id="payment_method"
                                class="form-input border-slate-200 @error('payment_method') border-red-500 @enderror">
                                <option value="">Pilih metode</option>
                                <option value="cash" {{ old('payment_method', $financeLog->payment_method) == 'cash' ? 'selected' : '' }}>Tunai</option>
                                <option value="non_cash" {{ old('payment_method', $financeLog->payment_method) == 'non_cash' ? 'selected' : '' }}>Non Tunai</option>
                            </select>
                            @error('payment_method')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="content-center">
                            <label for="category_id" class="flex gap-0 inline-block mb-2 text-base font-medium">
                                <span class="text-red-500">*</span>
                                <span class="text-gray-500">Pilih kategori transaksi</span>
                            </label>
                            <select name="category_id" id="category_id"
                                class="form-input border-slate-200 @error('category_id') border-red-500 @enderror">
                                <option value="">Pilih kategori</option>
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $financeLog->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                            @error('category_id')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mt-4">
                        <div class="content-center">
                            <label for="description" class="flex gap-0 inline-block mb-2 text-base font-medium">
                                <span class="text-red-500">*</span>
                                <span class="text-gray-500">Masukkan deskripsi transaksi</span>
                            </label>
                            <textarea name="description" id="description"
                                class="form-input border-slate-200 @error('description') border-red-500 @enderror" rows="3">{{ old('description', $financeLog->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex content-center justify-end mt-2 gap-2">
                        <a href="{{ route('finance.log.index') }}"
                            class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600">
                            Kembali
                        </a>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
