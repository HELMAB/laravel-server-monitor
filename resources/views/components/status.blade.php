@props([
'status' => 'success'
])

@if ($status == 'success')
    <svg viewBox="0 0 20 20"
         class="w-5"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M2.93 17.07A10 10 0 1 0 17.07 2.93 10 10 0 0 0 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM4 10l2-2 3 3 5-5 2 2-7 7-5-5z"
            fill="#30b978"
            fill-rule="evenodd"/>
    </svg>
@elseif($status == 'not yet checked')
    <svg viewBox="0 0 90 90"
         class="w-5"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M45 0C20.1 0 0 20.1 0 45s20.1 45 45 45 45-20.1 45-45S69.9 0 45 0zM45 74.5c-3.6 0-6.5-2.9-6.5-6.5s2.9-6.5 6.5-6.5 6.5 2.9 6.5 6.5S48.6 74.5 45 74.5zM52.1 23.9l-2.5 29.6c0 2.5-2.1 4.6-4.6 4.6 -2.5 0-4.6-2.1-4.6-4.6l-2.5-29.6c-0.1-0.4-0.1-0.7-0.1-1.1 0-4 3.2-7.2 7.2-7.2 4 0 7.2 3.2 7.2 7.2C52.2 23.1 52.2 23.5 52.1 23.9z"
            fill="#e64a4a" fill-rule="evenodd"/>
    </svg>
@elseif ($status == 'failed')
    <svg viewBox="0 0 20 20"
         class="w-5"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M11.41 10l2.83-2.83-1.41-1.41L10 8.59 7.17 5.76 5.76 7.17 8.59 10l-2.83 2.83 1.41 1.41L10 11.41l2.83 2.83 1.41-1.41L11.41 10zm-8.48 7.07A10 10 0 1 0 17.07 2.93 10 10 0 0 0 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66z"
            fill="#e64a4a" fill-rule="evenodd"/>
    </svg>
@else
    <svg viewBox="0 0 50 50"
         class="w-5"
         xmlns="http://www.w3.org/2000/svg">
        <circle style="fill:#48A0DC;" cx="25" cy="25" r="25"/>
        <line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
              x1="25"
              y1="37"
              x2="25"
              y2="39"/>
        <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
              d="M18,16 c0-3.899,3.188-7.054,7.1-6.999c3.717,0.052,6.848,3.182,6.9,6.9c0.035,2.511-1.252,4.723-3.21,5.986
            C26.355,23.457,25,26.261,25,29.158V32"/>
    </svg>
@endif


