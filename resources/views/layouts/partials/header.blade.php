<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Tailwind via CDN (Play) - suitable for prototype/demo -->
<script src="https://cdn.tailwindcss.com"></script>
<style>
    /* Small extra utilities not in Tailwind CDN for this demo */
    :root {
        --sidebar-width: 260px;
    }

    /* Checkbox toggle hack: when #nav-toggle is checked, show sidebar on small screens */
    #nav-toggle {
        display: none;
    }

    @media (max-width: 768px) {

        /* Hide sidebar by default on small screens */
        .sidebar {
            transform: translateX(-100%);
        }

        /* When toggle checked, slide in */
        #nav-toggle:checked~.layout .sidebar {
            transform: translateX(0);
        }

        /* Dim overlay when open */
        #nav-toggle:checked~.layout .overlay {
            display: block;
        }
    }

    .sidebar {
        width: var(--sidebar-width);
        transition: transform .25s ease;
    }

    .overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 20;
    }

    /* Make content transition when sidebar persistent on large screens */
    @media (min-width: 769px) {
        .main {
            margin-left: var(--sidebar-width);
        }
    }

    /* Utility to clamp long titles */
    .truncate-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* input Number */
    /* Untuk Chrome, Safari, Edge, dan Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Untuk Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
@vite(['resources/css/app.css', 'resources/js/app.js'])
