@extends('pages.layouts.app')
@section('content')
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Kategori</h5>
        </div>
        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
            <li
                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400">
                <a href="#!" class="text-slate-400">Kategori</a>
            </li>
            <li class="text-slate-700">
                Kategori
            </li>
        </ul>
    </div>

    {{--  Table kategori  --}}
    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-1">
        <div class="card">
            <div class="card-body">
                <div class="group flex justify-between items-center">
                    <h6 class="text-15">Table Kategori</h6>
                    <a href=""
                        class="px-2 py-1 text-sm text-sky-500 bg-white border border-transparent btn hover:text-sky-100 hover:bg-white-600 hover:border-white-600 focus:outline-none focus:ring-0 focus:border-transparent active:outline-none active:ring-0 active:border-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-plus">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M8 12h8" />
                            <path d="M12 8v8" />
                        </svg>
                        Tambah
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="ltr:text-left rtl:text-right ">
                            <tr class="">
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">no
                                </th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Kategori</th>
                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200">
                                    Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr class="odd:bg-slate-50 even:bg-white">
                                <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $loop->iteration }}</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">{{ $category->name }}</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200">
                                    <button type="button"
                                        class="px-2 py-1 text-sm text-white bg-yellow-500 border-yellow-500 btn hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100">
                                        Edit
                                    </button>
                                    <button type="button"
                                        class="px-2 py-1 text-sm text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--end card-->
@endsection
