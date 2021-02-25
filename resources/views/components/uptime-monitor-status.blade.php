@props([
'status' => 'success'
])

@if ($status == 'up')
    <svg viewBox="0 0 20 20"
         class="w-5 text-center"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M2.93 17.07A10 10 0 1 0 17.07 2.93 10 10 0 0 0 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM4 10l2-2 3 3 5-5 2 2-7 7-5-5z"
            fill="#30b978"
            fill-rule="evenodd"/>
    </svg>
@else
    <svg viewBox="0 0 20 20"
         class="w-5 text-center"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M11.41 10l2.83-2.83-1.41-1.41L10 8.59 7.17 5.76 5.76 7.17 8.59 10l-2.83 2.83 1.41 1.41L10 11.41l2.83 2.83 1.41-1.41L11.41 10zm-8.48 7.07A10 10 0 1 0 17.07 2.93 10 10 0 0 0 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66z"
            fill="#e64a4a" fill-rule="evenodd"/>
    </svg>
@endif


