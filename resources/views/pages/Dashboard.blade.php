@extends('pages/layouts/app')
@section('content')
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Dashboard</h5>
        </div>
        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
            <li
                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboard</a>
            </li>
            <li class="text-slate-700 dark:text-zink-100">
                Dashboard
            </li>
        </ul>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 xl:grid-cols-12 gap-x-5">
        <div class="lg:col-span-12 xl:col-span-3 xl:row-span-2">

            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mx-auto rounded-full size-20 bg-slate-100 dark:bg-zink-600">
                            <img src="assets/images/user-3.jpg" alt="" class="h-20 rounded-full">
                        </div>
                        <h6 class="mt-3 mb-1 text-16"><a href="#!">Willie Torres</a></h6>
                    </div>
                    <div class="mt-5 overflow-x-auto">
                        <table class="w-full mb-0">
                            <tbody>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200">
                                        No Telp</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold">
                                        087436532</td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200">
                                        No Rekening</td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold">
                                        087436532</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="lg:col-span-4 xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center text-green-500 bg-green-100 rounded-md size-12 text-15 dark:bg-green-500/20 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-credit-card">
                            <rect width="20" height="14" x="2" y="5" rx="2" />
                            <line x1="2" x2="22" y1="10" y2="10" />
                        </svg>
                    </div>
                    <div class="grow">
                        <h5 class="mb-1 text-16">
                            Rp.
                            <span class="counter-value" data-target="{{ $totalBalance }}">0</span>
                        </h5>
                        <p class="text-slate-500 dark:text-zink-200">Total Saldo</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="lg:col-span-4 xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center rounded-md size-12 text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-dollar-sign">
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <div class="grow">
                        <h5 class="mb-1 text-16">
                            Rp.
                            <span class="counter-value" data-target="{{ $totalIncomeMonth }}">0</span>
                        </h5>
                        <p class="text-slate-500 dark:text-zink-200">Total Pemasukan</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="lg:col-span-4 xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center text-red-500 bg-red-100 rounded-md size-12 text-15 dark:bg-red-500/20 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-dollar-sign">
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <div class="grow">
                        <h5 class="mb-1 text-16">
                            Rp.
                            <span class="counter-value" data-target="{{ $totalExpenseMonth }}">0</span>
                        </h5>
                        <p class="text-slate-500 dark:text-zink-200">Total Pengeluaran</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-9 lg:col-span-12">
            <div class="card">
                <div class="card-body">
                    <div class="flex group mb-4 justify-between items-center">

                        <div class="flex justify-start gap-2 text-right lg:col-span-2 xl:col-span-4 xl:col-start-10">
                            Detail Transaksi Selama 1 bulan
                        </div>

                        <div class="flex justify-end gap-2 text-right lg:col-span-2 xl:col-span-4 xl:col-start-10">
                            <div class="relative">
                                <input type="text"
                                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Search for ..." autocomplete="off">
                                <i data-lucide="search"
                                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                            </div>

                            <a href="{{ route('finance.log.create') }}" type="button"
                                class="text-sky-500 bg-white border-sky-500 border-dashed btn hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                Buat transaksi
                            </a>
                        </div>
                    </div><!--end grid-->
                    <div class="overflow-x-auto">
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
                                    <th>
                                        No
                                    </th>
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
                            <p class="text-slate-500 dark:text-zink-200">
                                Menampilkan <b>{{ $financeLogs->firstItem() }}</b> hingga
                                <b>{{ $financeLogs->lastItem() }}</b> dari <b>{{ $financeLogs->total() }}</b> Hasil
                            </p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2 shrink-0">
                            <!-- Previous Page Button -->
                            <li>
                                <a href="{{ $financeLogs->previousPageUrl() }}"
                                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500">
                                    <i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Sebelumnya
                                </a>
                            </li>

                            <!-- Pagination Links -->
                            @foreach ($financeLogs->getUrlRange(1, $financeLogs->lastPage()) as $page => $url)
                                <li>
                                    <a href="{{ $url }}"
                                        class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 {{ $page == $financeLogs->currentPage() ? 'active' : '' }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endforeach

                            <!-- Next Page Button -->
                            <li>
                                <a href="{{ $financeLogs->nextPageUrl() }}"
                                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500">
                                    Berikutnya <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div><!--end col-->
    </div><!--end grid-->
@endsection
