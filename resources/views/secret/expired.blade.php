@extends('layouts.app')

@section('title', __('ui.expired_title'))

@section('content')
    <div class="max-w-lg mx-auto text-center">

        {{-- Icon --}}
        <div class="inline-flex items-center justify-center w-14 h-14 bg-red-100 dark:bg-red-950/40 rounded-full mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-red-500" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
            </svg>
        </div>

        <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100">{{ __('ui.expired_heading') }}</h1>
        <p class="mt-2 text-sm text-slate-500 dark:text-slate-400">{{ __('ui.expired_text') }}</p>

        <a href="{{ route('home') }}"
           class="mt-8 inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium
              rounded-lg px-5 py-2.5 text-sm transition-colors focus:outline-none focus:ring-2
              focus:ring-indigo-500 focus:ring-offset-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            {{ __('ui.share_new') }}
        </a>
    </div>
@endsection

