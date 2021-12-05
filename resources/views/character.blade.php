<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="h-16 w-auto text-gray-700 sm:h-20">
                <g clip-path="url(#clip0)" fill="#000">
                    <path
                        d="M22.0852 0.160518C16.4024 0.906765 11.4609 3.26988 7.50769 7.14463C4.09614 10.4836 1.80593 14.5114 0.656075 19.1994C0.161922 21.2181 -0.00913038 22.768 0.000372558 25.0354C0.0098755 29.1493 0.817625 32.5362 2.6707 36.2674C4.52377 39.9795 7.45068 43.2993 11.0238 45.7103C15.7943 48.9249 21.8476 50.4748 27.3118 49.8721C33.5838 49.1736 38.5918 46.8105 42.8111 42.534C48.5129 36.7458 50.9076 29.2642 49.6912 20.9215C48.988 16.0231 46.1846 10.6271 42.545 7.13506C39.105 3.84392 34.9712 1.60518 30.4478 0.591045C27.8535 0.0170091 24.518 -0.164769 22.0852 0.160518ZM28.0816 3.31772C34.9332 4.32228 40.9865 8.75193 44.1225 15.0568C45.0728 16.9702 45.757 19.1324 46.0991 21.2563C46.3367 22.7297 46.3367 26.681 46.0991 28.0491C45.4624 31.6655 44.17 34.7271 42.0034 37.6642C41.6422 38.1617 40.7015 39.2141 39.9222 39.9986L38.5063 41.4146L38.5633 42.1513L38.6203 42.8784L38.3447 41.826C38.0216 40.5727 37.7365 39.8743 37.3184 39.3194C37.1474 39.0897 37.0048 38.8506 37.0048 38.7836C37.0143 38.7262 37.2519 38.4966 37.5465 38.2861C38.0786 37.9034 38.8104 37.1284 39.2095 36.5161C39.352 36.3152 39.5516 36.1526 39.7512 36.0952C40.2263 35.9612 40.768 35.3968 40.8915 34.9088C41.0246 34.44 40.977 34.22 40.6539 33.7321L40.4164 33.3876L40.6254 32.4405C40.8345 31.5029 40.8345 31.4838 40.6729 30.0104C40.5874 29.1972 40.5209 28.4127 40.5209 28.2787C40.5209 27.9439 39.7892 26.4705 39.2095 25.6573C38.2402 24.2796 37.8791 23.9543 36.4726 23.2655C34.8381 22.4523 34.2395 22.3183 32.5859 22.3853C31.1415 22.4427 29.9251 22.7201 28.8133 23.2559C27.6919 23.7917 26.4185 25.0641 25.1927 26.8915C24.7745 27.5038 24.746 27.5803 24.746 28.1735C24.746 28.6327 24.651 29.0824 24.4039 29.8573C23.9858 31.168 24.0048 31.4742 24.6035 32.4979C24.8411 32.8997 25.0311 33.2824 25.0311 33.3302C25.0311 33.3876 24.9076 33.5694 24.746 33.7416C24.2424 34.287 24.2519 35.1289 24.7745 35.6934C25.0691 36.0091 25.7913 36.3057 25.9719 36.1813C26.0194 36.1526 25.9814 35.9134 25.8769 35.6551C25.5918 34.8993 25.6678 34.8706 26.0194 35.6073C26.7131 37.0806 27.6539 38.0278 29.1649 38.774C30.3052 39.3289 31.284 39.5777 32.681 39.6446C33.3082 39.6733 33.7358 39.7307 33.6313 39.769C33.0611 39.9699 30.4383 39.5968 29.2314 39.1376L28.6042 38.8984L28.4427 39.1184C28.0911 39.5777 27.3973 41.0989 27.2263 41.7781C27.1313 42.1704 26.9982 42.9645 26.9317 43.5385C26.7416 45.3276 26.6656 45.4902 26.4661 44.4378C26.1335 42.6966 23.9003 34.4496 23.6247 33.9521C23.5867 33.8756 22.988 33.6747 22.2943 33.5025C21.6006 33.3207 20.8403 33.1102 20.6027 33.0145C20.3747 32.9284 20.1561 32.8806 20.1276 32.9093C20.0991 32.938 20.2606 33.2154 20.4887 33.5216C20.7168 33.8277 21.0399 34.2965 21.2109 34.5549C21.6576 35.2724 22.6934 37.5111 22.9975 38.4009C23.3301 39.3481 23.3016 39.415 22.3038 40.2665C21.9237 40.5918 21.6101 40.9267 21.6101 41.0128C21.6101 41.0893 22.0472 41.5677 22.5794 42.0652C23.5011 42.9358 23.5392 42.9932 23.4631 43.2611L23.3776 43.5481L23.3396 43.2515C23.3206 43.0219 23.0925 42.7636 22.3228 42.0269C21.7716 41.5198 21.325 41.0415 21.325 40.9649C21.325 40.898 21.6671 40.544 22.0757 40.1804C23.121 39.2811 23.1305 39.2237 22.7029 38.1234C21.9807 36.277 20.4317 33.4259 19.8615 32.8901C19.681 32.7179 19.6144 32.5553 19.6144 32.297C19.6144 31.9047 19.7 31.809 20.1846 31.6464C20.6788 31.4838 21.1634 31.1106 21.496 30.6418C21.7621 30.2687 21.8761 30.2017 22.6079 29.9721C23.0545 29.8286 23.4156 29.6755 23.4156 29.6373C23.4156 29.5894 23.2446 29.3407 23.0355 29.0919C22.6269 28.5944 22.5508 28.2405 22.8264 28.1544C22.912 28.1257 23.2446 28.0778 23.5582 28.0395C23.8718 28.0108 24.1568 27.963 24.1949 27.9343C24.2329 27.9152 24.1378 27.5516 23.9858 27.1307C23.8242 26.7097 23.7007 26.3079 23.7007 26.2505C23.7007 26.1835 23.9478 26.0591 24.2519 25.9539C24.9266 25.7338 26.0764 25.1598 26.0764 25.045C26.0764 24.9972 25.7248 24.7675 25.3067 24.5379C24.4799 24.0978 23.6437 23.4281 23.7672 23.3133C23.8052 23.275 24.1473 23.1411 24.5084 23.0263C25.4207 22.7201 26.39 22.2705 27.1503 21.7825C27.5019 21.5625 27.787 21.3616 27.768 21.352C27.7299 21.3233 25.1547 20.2135 24.9076 20.1274C24.7935 20.0796 24.765 20.0222 24.8125 19.9361C24.8506 19.8595 25.4778 19.2472 26.2 18.5775C26.9127 17.8982 27.5019 17.3146 27.5019 17.2764C27.5019 17.1998 26.9127 17.0946 25.1737 16.8458C24.5465 16.7502 23.9953 16.6545 23.9573 16.6162C23.9098 16.578 24.3469 15.736 24.9266 14.7506C25.8674 13.1337 26.0479 12.7893 25.9529 12.7893C25.9339 12.7893 25.1546 13.0668 24.2234 13.4112C22.8644 13.9087 22.4938 14.0044 22.3988 13.9087C22.1897 13.6982 21.9902 12.1196 21.9902 10.7036V9.33553L21.2204 9.74692C20.3177 10.2349 19.1108 11.182 18.5501 11.8422C18.341 12.1005 18.1225 12.311 18.0845 12.311C18.0369 12.311 17.6758 11.8709 17.2672 11.3255C16.564 10.3879 15.3761 9.05808 15.2431 9.05808C15.2051 9.05808 15.129 9.47904 15.072 9.9861C14.901 11.4212 14.3973 13.172 14.1502 13.172C14.0837 13.172 13.6276 12.9807 13.1429 12.751C12.3637 12.3875 11.1758 12.0239 10.7387 12.0239C10.6247 12.0239 10.6817 12.1961 10.9573 12.7606C11.3754 13.6121 11.7555 14.942 11.708 15.4012L11.6795 15.7073L10.8242 15.7743C8.33445 15.9657 7.16559 16.0805 7.16559 16.1283C7.16559 16.1666 7.58372 16.6162 8.09688 17.1424C9.05667 18.1183 9.75989 19.1611 9.71237 19.5247C9.69337 19.6586 9.20872 20.0604 8.21091 20.7589C7.40316 21.3233 6.72845 21.8304 6.70945 21.8782C6.69044 21.9261 6.79497 21.993 6.94702 22.0313C7.96383 22.2513 8.40097 22.3949 8.76208 22.6053C9.25623 22.9019 9.76939 23.342 10.026 23.7056L10.216 23.9735L9.1517 25.0354C8.25842 25.9347 8.10638 26.1165 8.22041 26.2218C8.29644 26.2887 8.86661 26.5088 9.49381 26.7001C10.121 26.8915 10.6722 27.0924 10.7197 27.1402C10.7672 27.1881 10.6912 27.676 10.5106 28.3457C10.3491 28.9676 10.2445 29.5129 10.273 29.5607C10.3206 29.6468 11.8885 29.5703 12.1451 29.4746C12.3827 29.3885 12.4777 29.6181 12.5443 30.374C12.5823 30.8141 12.6393 31.1872 12.6773 31.2063C12.7533 31.2541 13.8176 30.7949 13.8176 30.7184C13.8176 30.6897 13.6941 30.4888 13.5421 30.2687C12.9054 29.3311 12.4682 28.1544 12.1261 26.4227C11.8981 25.3224 11.7935 24.27 11.9076 24.27C11.9456 24.27 12.0121 24.5762 12.0501 24.9493C12.2402 27.0828 13.219 29.7904 14.1122 30.6897C14.3403 30.9193 14.8345 31.2446 15.3096 31.4646L16.1079 31.8377L16.0793 32.1917L16.0508 32.5457L13.9412 33.2537L11.8315 33.9617L11.6415 34.5453C11.5369 34.8706 11.0998 36.3535 10.6817 37.8556C9.90243 40.5822 9.66486 41.2711 9.7789 40.4579C9.82641 40.056 9.8074 40.0178 9.32275 39.482C6.29132 36.1909 4.41924 32.3352 3.68751 27.8578C3.41193 26.2218 3.44044 22.7201 3.73503 21.1128C4.56178 16.5971 6.38635 12.9137 9.37027 9.76606C14.2358 4.64757 21.0494 2.29402 28.0816 3.31772ZM15.2241 34.2391C14.5399 35.6647 13.3235 39.0802 13.428 39.262C13.4755 39.3481 13.8842 39.7403 14.3403 40.1421C14.8059 40.544 15.1956 40.9171 15.2146 40.9841C15.2431 41.051 15.1005 41.2615 14.901 41.4624C14.6919 41.6825 14.6159 41.7303 14.7109 41.5868C15.0815 41.0032 15.11 41.0797 14.1502 40.19C13.504 39.5872 13.2475 39.2907 13.2475 39.128C13.2475 38.6305 15.129 33.8373 15.3286 33.8373C15.3761 33.8373 15.3286 34.0191 15.2241 34.2391Z"/>
                </g>
            </svg>
            <H1> Rick & Morty</H1>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

            <div class="grid grid-cols-1 md:grid-cols-2">
                @if (Route::currentRouteName() == 'show')
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"> Character</div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <h1>{{ $character->name ?? '' }}</h1>
                                <h2>Status: {{ $character->status ?? '' }}</h2>
                                <h2>Species: {{ $character->species ?? '' }}</h2>
                            <!--h3>Type: {{ $character->type ?? '' }}</h3-->
                                <h3>Gender: {{ $character->gender ?? '' }}</h3>
                                <h3><!--a href="{{ $character->origin->url ?? '' }}" target="_blank"-->
                                    Origin: {{ $character->origin->name ?? '' }}<!--/a--></h3>
                                <h3>Location: {{$character->location->name ?? ''}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"> Picture:</div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <img src="{{ $character->image ?? '' }}">
                            </div>
                        </div>

                    </div>
                @else
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="?page={{$index->prev}}" class="underline text-gray-900 dark:text-white"> << Prev << </a> ||
                                Page {{$index->current}} of
                                <a href="?page={{$index->pages}}" class="underline text-gray-900 dark:text-white">{{$index->pages}}</a> ||
                                <a href="?{{$index->next}}" class="underline text-gray-900 dark:text-white"> >>  Next >> </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                @foreach ($index->results as $results)
                                    <b> <a href='/character/{{$results->id}}'> {{ $results->name }}</a></b>,
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
{{--                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">--}}
{{--                                <path--}}
{{--                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>--}}
{{--                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>--}}
{{--                            </svg>--}}
                            <div class="ml-4 text-lg leading-7 font-semibold"></div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <img src="{{ $index->results[0]->image ?? '' }}">
                            </div>
                        </div>

                    </div>
            @endif
            <!--div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
<div class="flex items-center">
<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
<div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
</div>

<div class="ml-12">
<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
</div>
</div>
</div-->
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <a href="https://rickandmortyapi.com/" class="ml-1 underline">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </a>
                    <a href="https://rickandmortyapi.com/" class="ml-1 underline">
                        Rick & Morty
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
</body>
</html>
