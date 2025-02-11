@extends('pages.layouts.app')
@section('content')
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Detail Transaksi</h5>
        </div>
        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
            <li
                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                <a href="#!" class="text-slate-400 dark:text-zink-200">Detail Transaksi</a>
            </li>
            <li class="text-slate-700 dark:text-zink-100">
                Detail Transaksi
            </li>
        </ul>
    </div>
    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-9">
            <div class="container">
                <div class="order-11 col-span-12 2xl:order-1 card 2xl:col-span-12">
                    <div class="card-body">
                        <div class="grid items-center grid-cols-1 gap-3 mb-5 xl:grid-cols-12">
                            <div class="xl:col-span-3">
                                <h6 class="text-15">Table Transaksi</h6>
                            </div><!--end col-->
                            <div class="xl:col-span-3 xl:col-start-10">
                                <div class="flex justify-end">
                                    <a href="/transaction/finance/logs/create"
                                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        Tambah
                                    </a>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="-mx-5 overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead
                                    class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                                    <tr>
                                        {{--  <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 w-10">
                                            <div class="flex items-center h-full">
                                                <input id="productsCheckAll"
                                                    class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                                    type="checkbox">
                                            </div>
                                        </th>  --}}
                                        <th>No</th>
                                        <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            Jenis</th>
                                        <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            Metode</th>
                                        <th <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            Tanggal transaksi</th>
                                        <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            Kategori</th>
                                        <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            Nominal</th>
                                        <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            Keterangan</th>
                                        <th
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($financeLogs as $financeLog)
                                        <tr>
                                            {{--  <td
                                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                                <div class="flex items-center h-full">
                                                    <input id="productsCheck1"
                                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                                        type="checkbox">
                                                </div>
                                            </td>  --}}
                                            <td>
                                                {{ $loop->iteration }}.
                                            </td>
                                            <td
                                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">

                                                @if ($financeLog->type == 'income')
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">
                                                        Pemasukan
                                                    </span>
                                                @elseif ($financeLog->type == 'expense')
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">
                                                        Pengeluaran
                                                    </span>
                                                @else
                                                    Data tidak ditemukan
                                                @endif
                                            </td>
                                            <td
                                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">

                                                @if ($financeLog->payment_method == 'cash')
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500 dark:bg-yellow-500/20 dark:border-transparent">
                                                        Tunai
                                                    </span>
                                                @elseif ($financeLog->payment_method == 'non_cash')
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-sky-100 border-transparent text-sky-500 dark:bg-sky-500/20 dark:border-transparent">
                                                        Non Tunai
                                                    </span>
                                                @endif
                                            </td>
                                            <td
                                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                                {{ \Carbon\Carbon::parse($financeLog->transaction_date)->format('d M Y') }}
                                            </td>
                                            <td
                                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                                {{ $financeLog->category->name }}
                                            </td>
                                            <td
                                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                                {{ 'Rp ' . number_format($financeLog->nominal, 0, ',', '.') }}
                                            </td>
                                            <td
                                                class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                                {{ Str::limit($financeLog->description, 5, '...') }}
                                            </td>
                                            <td
                                                class="px-3.5 py-2.5 flex gap-2 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                                <a href="{{ route('finance.log.edit', $financeLog->id) }}"
                                                    class="text-white text-xs px-2 py-1 btn bg-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-yellow-400/20"
                                                    data-tooltip="default" data-tooltip-follow-cursor="true"
                                                    data-tooltip-content="edit">
                                                    edit
                                                </a>


                                                <button type="button" id="sa-warning" data-id="{{ $financeLog->id }}"
                                                    class="text-white text-xs px-2 py-1 btn bg-red-500 border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20"
                                                    data-tooltip="default" data-tooltip-follow-cursor="true"
                                                    data-tooltip-content="hapus">
                                                    hapus
                                                </button>

                                                <a href="{{ route('finance.log.update', $financeLog->id) }}"
                                                    class="text-white text-xs px-2 py-1 btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:border-sky-600 active:ring active:ring-sky-100 dark:ring-sky-400/20"
                                                    data-tooltip="default" data-tooltip-follow-cursor="true"
                                                    data-tooltip-content="detail">
                                                    detail
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="flex flex-col items-center mt-5 md:flex-row">
                            <div class="mb-4 grow md:mb-0">
                                <p class="text-slate-500 dark:text-zink-200">Showing <b>10</b> of <b>19</b> Results</p>
                            </div>
                            <ul class="flex flex-wrap items-center gap-2 shrink-0">
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-500 dark:[&amp;.active]:text-custom-500 [&amp;.active]:bg-custom-50 dark:[&amp;.active]:bg-custom-500/10 [&amp;.active]:border-custom-50 dark:[&amp;.active]:border-custom-500/10 [&amp;.active]:hover:text-custom-700 dark:[&amp;.active]:hover:text-custom-700 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-left"
                                            class="lucide lucide-chevron-left mr-1 size-4 rtl:rotate-180">
                                            <path d="m15 18-6-6 6-6"></path>
                                        </svg> Prev</a>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-500 dark:[&amp;.active]:text-custom-500 [&amp;.active]:bg-custom-50 dark:[&amp;.active]:bg-custom-500/10 [&amp;.active]:border-custom-50 dark:[&amp;.active]:border-custom-500/10 [&amp;.active]:hover:text-custom-700 dark:[&amp;.active]:hover:text-custom-700 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">1</a>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-500 dark:[&amp;.active]:text-custom-500 [&amp;.active]:bg-custom-50 dark:[&amp;.active]:bg-custom-500/10 [&amp;.active]:border-custom-50 dark:[&amp;.active]:border-custom-500/10 [&amp;.active]:hover:text-custom-700 dark:[&amp;.active]:hover:text-custom-700 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto active">2</a>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-500 dark:[&amp;.active]:text-custom-500 [&amp;.active]:bg-custom-50 dark:[&amp;.active]:bg-custom-500/10 [&amp;.active]:border-custom-50 dark:[&amp;.active]:border-custom-500/10 [&amp;.active]:hover:text-custom-700 dark:[&amp;.active]:hover:text-custom-700 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">3</a>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-500 dark:[&amp;.active]:text-custom-500 [&amp;.active]:bg-custom-50 dark:[&amp;.active]:bg-custom-500/10 [&amp;.active]:border-custom-50 dark:[&amp;.active]:border-custom-500/10 [&amp;.active]:hover:text-custom-700 dark:[&amp;.active]:hover:text-custom-700 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto">Next
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-right"
                                            class="lucide lucide-chevron-right ml-1 size-4 rtl:rotate-180">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">



                <div class="card-body">

                    <a href="{{ route('dashboard') }}"
                        class="text-white w-full mb-2 btn bg-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-yellow-400/20">
                        All
                    </a>
                    <button data-modal-target="topModal" type="button"
                        class="text-white w-full btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                        Filter
                    </button>
                    <div id="topModal" modal-top
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show">
                        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Filter</h5>
                                <button data-modal-close="topModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <form action="{{ route('finance.log.index') }}" method="GET">
                                    <!-- Filter Options -->
                                    <div id='external-events'>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <!-- Filter Tahun -->
                                            <div class="mb-2">
                                                <label for="year" class="text-base font-medium">Filter
                                                    Tahun:</label>
                                                <select name="year" id="year"
                                                    class="border rounded px-3 py-2 w-full cursor-pointer">
                                                    <option value="">Pilih Tahun</option>
                                                    @foreach (range(date('Y'), date('Y') - 10) as $year)
                                                        <option value="{{ $year }}"
                                                            {{ request('year') == $year ? 'selected' : '' }}>
                                                            {{ $year }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Filter Bulan -->
                                            <div class="mb-2">
                                                <label for="month" class="text-base font-medium">Filter
                                                    Bulan:</label>
                                                <select name="month" id="month"
                                                    class="border rounded px-3 py-2 w-full cursor-pointer">
                                                    <option value="">Pilih Bulan</option>
                                                    @foreach (range(1, 12) as $month)
                                                        <option value="{{ $month }}"
                                                            {{ request('month') == $month ? 'selected' : '' }}>
                                                            {{ \Carbon\Carbon::create()->month($month)->translatedFormat('F') }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Tanggal Mulai dan Akhir -->
                                            <div class="mb-4">
                                                <label for="start_of_week" class="text-base font-medium">Tanggal
                                                    Mulai:</label>
                                                <input type="date" name="start_of_week" id="start_of_week"
                                                    class="border rounded px-3 py-2 w-full cursor-pointer"
                                                    value="{{ request('start_of_week') }}">
                                                <label class="mt-2 mb-4 text-base font-medium">Tanggal:</label>
                                                <input type="date" id="date" name="date"
                                                    value="{{ request('date') }}" class="w-full mb-2 form-input">
                                            </div>

                                            <!-- Minggu -->
                                            <div class="mb-4">
                                                <label for="end_of_week" class="text-base font-medium mt-2">Tanggal
                                                    Akhir:</label>
                                                <input type="date" name="end_of_week" id="end_of_week"
                                                    class="border rounded px-3 py-2 w-full cursor-pointer"
                                                    value="{{ request('end_of_week') }}">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <!-- Tipe Transaksi -->
                                            <div class="mb-2">
                                                <label class="text-base font-medium">Tipe Transaksi</label>
                                                <div class="flex items-center gap-2">
                                                    <input id="income" name="type[]" value="income" type="checkbox"
                                                        class="cursor-pointer"
                                                        {{ in_array('income', old('type', (array) request('type'))) ? 'checked' : '' }}>
                                                    <label for="income">Pemasukan</label>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <input id="expense" name="type[]" value="expense" type="checkbox"
                                                        class="cursor-pointer"
                                                        {{ in_array('expense', old('type', (array) request('type'))) ? 'checked' : '' }}>
                                                    <label for="expense">Pengeluaran</label>
                                                </div>
                                            </div>

                                            <!-- Metode Transaksi -->
                                            <div class="mb-2">
                                                <label class="text-base font-medium">Metode Transaksi</label>
                                                <div class="flex items-center gap-2">
                                                    <input id="cash" name="method[]" value="cash" type="checkbox"
                                                        class="cursor-pointer"
                                                        {{ in_array('cash', old('method', (array) request('method'))) ? 'checked' : '' }}>
                                                    <label for="cash">Tunai</label>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <input id="non_cash" name="method[]" value="non_cash"
                                                        type="checkbox" class="cursor-pointer"
                                                        {{ in_array('non_cash', old('method', (array) request('method'))) ? 'checked' : '' }}>
                                                    <label for="non_cash">Non Tunai</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-2 mt-2">
                                            <label class="text-base font-medium mt-2 mb-2">Kategori</label>
                                            <div class="grid grid-cols-1 mt-2 md:grid-cols-4 lg:grid-cols-2 gap-2">
                                                @foreach ($categories as $category)
                                                    <div class="flex items-center gap-2">
                                                        <input id="category_{{ $category->id }}" name="category[]"
                                                            value="{{ $category->id }}" type="checkbox"
                                                            class="cursor-pointer"
                                                            {{ in_array($category->id, old('category', (array) request('category'))) ? 'checked' : '' }}>
                                                        <label
                                                            for="category_{{ $category->id }}">{{ $category->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>

                                        <div class="fkex justify-end mt-4">
                                            <button type="submit"
                                                class="text-white w-full btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                                Filter
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                </div>


            </div>
        </div><!--end col-->
    </div><!--end grid-->

    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!--sweet alert init js-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("#sa-warning").forEach(button => {
                button.addEventListener("click", function() {
                    let id = this.getAttribute("data-id");
                    console.log(id);
                    let deleteUrl = "/transaction/finance/logs/" + id +
                        "/delete"; // Ensure this is the correct route

                    Swal.fire({
                        title: "Apakah kamu yakin?",
                        text: "Datamu akan selamanya hilang!",
                        icon: "warning",
                        showCancelButton: true,
                        customClass: {
                            confirmButton: 'text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600',
                            cancelButton: 'text-white bg-red-500 border-red-500 btn hover:bg-red-600',
                        },
                        confirmButtonText: "Ya, Tetap hapus!",
                        buttonsStyling: false,
                        showCloseButton: true
                    }).then((result) => {
                        if (result.value) {
                            fetch(deleteUrl, {
                                    method: 'DELETE',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector(
                                            'meta[name="csrf-token"]').getAttribute(
                                            'content')
                                    }
                                }).then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire({
                                            title: 'Terhapus!',
                                            text: data.success,
                                            icon: 'success',
                                            customClass: {
                                                confirmButton: 'text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20',
                                            },
                                            buttonsStyling: false
                                        }).then(() => {
                                            window.location.reload();
                                        });
                                    } else {
                                        Swal.fire({
                                            title: 'Gagal!',
                                            text: data.error,
                                            icon: 'error',
                                            customClass: {
                                                confirmButton: 'text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20',
                                            },
                                            buttonsStyling: false
                                        });
                                    }
                                }).catch(error => {
                                    Swal.fire({
                                        title: 'Terjadi kesalahan!',
                                        text: 'Tidak dapat menghapus data.',
                                        icon: 'error',
                                        customClass: {
                                            confirmButton: 'text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20',
                                        },
                                        buttonsStyling: false
                                    });
                                });
                        }
                    });
                });
            });
        });
    </script>
@endsection
