<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">{{ __('Dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">{{ __('Log in') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg width="156" height="32" viewBox="0 0 624 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M193.581 1.08887C201.853 1.08887 209.211 1.81396 215.656 3.26416C222.155 4.71436 227.634 6.72852 232.092 9.30664C236.604 11.8848 240.041 15 242.404 18.6523C244.768 22.251 245.949 26.2256 245.949 30.5762V42.3389C245.949 46.958 245.036 50.6909 243.21 53.5376C241.438 56.3843 238.967 58.667 235.798 60.3857C238.43 61.1377 240.847 62.1045 243.049 63.2861C245.305 64.4678 247.211 65.918 248.769 67.6367C250.38 69.3018 251.616 71.2622 252.475 73.5181C253.388 75.7202 253.845 78.2715 253.845 81.1719V96.9629C253.845 101.313 252.26 105.315 249.091 108.967C245.922 112.566 241.599 115.681 236.12 118.313C230.642 120.945 224.25 122.986 216.945 124.436C209.641 125.886 201.853 126.611 193.581 126.611C188.962 126.611 184.235 126.423 179.401 126.047C174.567 125.725 169.868 125.269 165.302 124.678C160.791 124.087 156.547 123.416 152.573 122.664C148.598 121.912 145.188 121.133 142.341 120.327V7.21191C145.188 6.40625 148.598 5.6543 152.573 4.95605C156.547 4.2041 160.791 3.55957 165.302 3.02246C169.868 2.43164 174.567 1.9751 179.401 1.65283C184.235 1.27686 188.962 1.08887 193.581 1.08887ZM192.937 71.5039C190.036 71.5039 187.136 71.5308 184.235 71.5845C181.335 71.5845 178.515 71.665 175.776 71.8262C173.09 71.9336 170.512 72.1216 168.042 72.3901C165.571 72.6587 163.342 73.0078 161.354 73.4375V104.053C162.429 104.429 163.798 104.858 165.463 105.342C167.182 105.825 169.331 106.282 171.909 106.711C174.487 107.141 177.575 107.517 181.174 107.839C184.772 108.108 189.016 108.242 193.903 108.242C199.919 108.242 205.317 107.759 210.097 106.792C214.931 105.825 218.986 104.536 222.263 102.925C225.593 101.313 228.144 99.4604 229.917 97.3657C231.689 95.2173 232.575 92.9883 232.575 90.6787V83.75C232.575 81.2256 231.447 79.1577 229.191 77.5464C226.936 75.9351 223.955 74.6997 220.249 73.8403C216.542 72.9272 212.299 72.3096 207.519 71.9873C202.792 71.665 197.932 71.5039 192.937 71.5039ZM161.354 51.5234C164.685 52.168 168.471 52.5977 172.714 52.8125C177.011 53.0273 181.872 53.1348 187.297 53.1348C191.97 53.1348 196.616 52.9736 201.235 52.6514C205.854 52.2754 210.017 51.6846 213.723 50.8789C217.429 50.0195 220.437 48.8916 222.746 47.4951C225.056 46.0449 226.237 44.2188 226.291 42.0166V36.8604C226.291 34.5508 225.727 32.3486 224.599 30.2539C223.525 28.1055 221.699 26.2256 219.121 24.6143C216.596 23.0029 213.266 21.7139 209.13 20.7471C204.995 19.7803 199.919 19.2969 193.903 19.2969C189.016 19.2969 184.772 19.458 181.174 19.7803C177.575 20.0488 174.487 20.3979 171.909 20.8276C169.331 21.2573 167.182 21.7139 165.463 22.1973C163.798 22.6807 162.429 23.1104 161.354 23.4863V51.5234Z" fill="#3A79C6"/>
                    <path d="M60.2539 0.283203C65.625 0.283203 70.835 0.605469 75.8838 1.25C80.9326 1.89453 85.6592 2.83447 90.0635 4.06982C94.4678 5.25146 98.4961 6.70166 102.148 8.42041C105.801 10.0854 108.916 11.9922 111.494 14.1406C114.072 16.2891 116.086 18.6523 117.537 21.2305C118.987 23.7549 119.712 26.4404 119.712 29.2871V98.4131C119.712 101.26 118.987 103.972 117.537 106.55C116.086 109.075 114.072 111.411 111.494 113.56C108.916 115.708 105.801 117.642 102.148 119.36C98.4961 121.025 94.4678 122.476 90.0635 123.711C85.6592 124.893 80.9326 125.806 75.8838 126.45C70.835 127.095 65.625 127.417 60.2539 127.417C54.8828 127.417 49.6729 127.095 44.624 126.45C39.6289 125.806 34.9292 124.893 30.5249 123.711C26.1743 122.476 22.1729 121.025 18.5205 119.36C14.8682 117.642 11.7261 115.708 9.09424 113.56C6.51611 111.411 4.50195 109.075 3.05176 106.55C1.65527 103.972 0.957031 101.26 0.957031 98.4131V29.2871C0.957031 26.4404 1.65527 23.7549 3.05176 21.2305C4.50195 18.6523 6.51611 16.2891 9.09424 14.1406C11.7261 11.9922 14.8682 10.0854 18.5205 8.42041C22.1729 6.70166 26.1743 5.25146 30.5249 4.06982C34.9292 2.83447 39.6289 1.89453 44.624 1.25C49.6729 0.605469 54.8828 0.283203 60.2539 0.283203ZM98.6035 35.4102C98.6035 33.1006 97.7173 30.9253 95.9448 28.8843C94.1724 26.7896 91.6211 24.9634 88.291 23.4058C85.0146 21.7944 81.0132 20.5322 76.2866 19.6191C71.5601 18.6523 66.2158 18.1689 60.2539 18.1689C54.5068 18.1689 49.2969 18.6255 44.624 19.5386C39.9512 20.3979 35.9229 21.6064 32.5391 23.1641C29.209 24.7217 26.6309 26.5479 24.8047 28.6426C22.9785 30.7373 22.0654 32.9932 22.0654 35.4102V92.29C22.0654 94.6533 22.9785 96.8823 24.8047 98.9771C26.6309 101.072 29.209 102.898 32.5391 104.456C35.9229 106.013 39.9512 107.249 44.624 108.162C49.2969 109.075 54.5068 109.531 60.2539 109.531C66.2158 109.531 71.5601 109.075 76.2866 108.162C81.0132 107.195 85.0146 105.906 88.291 104.294C91.6211 102.683 94.1724 100.857 95.9448 98.8159C97.7173 96.7212 98.6035 94.5459 98.6035 92.29V35.4102Z" fill="#78C2ED"/>
                    <path d="M129.477 2.37793C137.802 2.37793 146.583 2.67334 155.822 3.26416C165.06 3.85498 174.755 5.00977 184.906 6.72852V72.1484H94.3496V104.536C97.8945 105.02 101.815 105.449 106.112 105.825C110.409 106.201 115.082 106.47 120.131 106.631C121.742 106.738 123.327 106.792 124.884 106.792C126.442 106.792 128.026 106.792 129.638 106.792C131.249 106.792 132.86 106.792 134.472 106.792C136.083 106.792 137.694 106.738 139.306 106.631C144.408 106.47 149.054 106.201 153.244 105.825C157.487 105.449 161.381 105.02 164.926 104.536V89.2285H184.906V120.649C174.755 122.368 165.087 123.523 155.902 124.114C146.718 124.705 138.07 125 129.96 125C121.635 125 112.826 124.705 103.534 124.114C94.2422 123.523 84.5742 122.368 74.5303 120.649V52.3291H164.926V23.0029C162.67 22.627 160.092 22.3047 157.191 22.0361C154.291 21.7139 151.256 21.4453 148.087 21.2305C144.972 21.0156 141.803 20.8545 138.581 20.7471C135.412 20.6396 132.431 20.5859 129.638 20.5859C124.696 20.5859 120.399 20.6665 116.747 20.8276C113.148 20.9888 109.979 21.2036 107.24 21.4722C104.501 21.687 102.111 21.9556 100.07 22.2778C98.0288 22.5464 96.1221 22.7881 94.3496 23.0029V35.249H74.5303V6.72852C84.5742 5.00977 94.2153 3.85498 103.454 3.26416C112.692 2.67334 121.366 2.37793 129.477 2.37793Z" fill="white"/>
                    <path d="M296.788 102.18C296.788 91.5267 292.98 86.2 285.364 86.2C277.748 86.2 273.94 91.5267 273.94 102.18C273.94 112.833 277.748 118.16 285.364 118.16C292.98 118.16 296.788 112.833 296.788 102.18ZM302.364 120.948C298.193 125.436 292.527 127.68 285.364 127.68C278.201 127.68 272.535 125.436 268.364 120.948C264.193 116.415 262.108 110.159 262.108 102.18C262.108 94.2013 264.193 87.968 268.364 83.48C272.535 78.9467 278.201 76.68 285.364 76.68C292.527 76.68 298.193 78.9467 302.364 83.48C306.535 87.968 308.62 94.2013 308.62 102.18C308.62 110.159 306.535 116.415 302.364 120.948Z" fill="black"/>
                    <path d="M327.258 86.472V101.296C327.258 101.613 327.462 101.817 327.87 101.908C329.412 102.089 330.636 102.18 331.542 102.18C334.806 102.18 337.322 101.432 339.09 99.936C340.904 98.3947 341.81 96.264 341.81 93.544C341.81 88.1493 338.388 85.452 331.542 85.452C330.409 85.452 329.162 85.5653 327.802 85.792C327.44 85.8827 327.258 86.1093 327.258 86.472ZM319.778 127C318.736 127 317.829 126.615 317.058 125.844C316.288 125.073 315.902 124.167 315.902 123.124V81.576C315.902 80.488 316.265 79.5133 316.99 78.652C317.716 77.7907 318.622 77.3147 319.71 77.224C323.564 76.8613 327.281 76.68 330.862 76.68C345.369 76.68 352.622 82.0747 352.622 92.864C352.622 98.712 350.922 103.155 347.522 106.192C344.168 109.184 339.226 110.68 332.698 110.68C330.976 110.68 329.366 110.612 327.87 110.476C327.462 110.476 327.258 110.657 327.258 111.02V123.124C327.258 124.167 326.873 125.073 326.102 125.844C325.332 126.615 324.425 127 323.382 127H319.778Z" fill="black"/>
                    <path d="M363.339 127C362.297 127 361.39 126.615 360.619 125.844C359.894 125.073 359.531 124.167 359.531 123.124V81.236C359.531 80.1933 359.894 79.2867 360.619 78.516C361.39 77.7453 362.297 77.36 363.339 77.36H387.411C388.454 77.36 389.338 77.7453 390.063 78.516C390.834 79.2867 391.219 80.1933 391.219 81.236V82.8C391.219 83.8427 390.834 84.7493 390.063 85.52C389.338 86.2907 388.454 86.676 387.411 86.676H371.635C371.273 86.676 371.091 86.8573 371.091 87.22V96.196C371.091 96.604 371.273 96.808 371.635 96.808H386.051C387.094 96.808 387.978 97.1933 388.703 97.964C389.474 98.7347 389.859 99.6413 389.859 100.684V101.704C389.859 102.747 389.474 103.653 388.703 104.424C387.978 105.195 387.094 105.58 386.051 105.58H371.635C371.273 105.58 371.091 105.761 371.091 106.124V117.14C371.091 117.503 371.273 117.684 371.635 117.684H387.411C388.454 117.684 389.338 118.069 390.063 118.84C390.834 119.611 391.219 120.517 391.219 121.56V123.124C391.219 124.167 390.834 125.073 390.063 125.844C389.338 126.615 388.454 127 387.411 127H363.339Z" fill="black"/>
                    <path d="M404.778 127C403.736 127 402.829 126.615 402.058 125.844C401.288 125.073 400.902 124.167 400.902 123.124V81.236C400.902 80.1933 401.288 79.2867 402.058 78.516C402.829 77.7453 403.736 77.36 404.778 77.36H408.11C410.694 77.36 412.576 78.4933 413.754 80.76L428.034 107.756C428.034 107.801 428.057 107.824 428.102 107.824C428.148 107.824 428.17 107.801 428.17 107.756V81.236C428.17 80.1933 428.556 79.2867 429.326 78.516C430.097 77.7453 431.004 77.36 432.046 77.36H435.378C436.421 77.36 437.328 77.7453 438.098 78.516C438.869 79.2867 439.254 80.1933 439.254 81.236V123.124C439.254 124.167 438.869 125.073 438.098 125.844C437.328 126.615 436.421 127 435.378 127H432.046C429.462 127 427.581 125.867 426.402 123.6L412.122 96.604C412.122 96.5587 412.1 96.536 412.054 96.536C412.009 96.536 411.986 96.5587 411.986 96.604V123.124C411.986 124.167 411.601 125.073 410.83 125.844C410.06 126.615 409.153 127 408.11 127H404.778Z" fill="black"/>
                    <path d="M460.934 105.92V117.888C460.934 118.296 461.138 118.545 461.546 118.636C462.498 118.817 463.654 118.908 465.014 118.908C468.233 118.908 470.59 118.319 472.086 117.14C473.582 115.916 474.33 114.057 474.33 111.564C474.33 107.393 470.93 105.308 464.13 105.308H461.478C461.115 105.308 460.934 105.512 460.934 105.92ZM460.934 86.472V96.468C460.934 96.8307 461.115 97.012 461.478 97.012H463.178C469.797 97.012 473.106 95.04 473.106 91.096C473.106 87.3333 470.341 85.452 464.81 85.452C463.495 85.452 462.385 85.5427 461.478 85.724C461.115 85.8147 460.934 86.064 460.934 86.472ZM453.386 127.136C452.298 127.045 451.391 126.569 450.666 125.708C449.941 124.847 449.578 123.872 449.578 122.784V81.576C449.578 80.4427 449.941 79.468 450.666 78.652C451.437 77.7907 452.366 77.3147 453.454 77.224C456.99 76.8613 460.458 76.68 463.858 76.68C477.005 76.68 483.578 80.9187 483.578 89.396C483.578 92.252 482.649 94.6773 480.79 96.672C478.977 98.6667 476.529 99.936 473.446 100.48C473.401 100.48 473.378 100.525 473.378 100.616C473.378 100.661 473.423 100.684 473.514 100.684C477.095 101.183 479.929 102.543 482.014 104.764C484.145 106.985 485.21 109.637 485.21 112.72C485.21 117.752 483.533 121.515 480.178 124.008C476.869 126.456 471.655 127.68 464.538 127.68C460.957 127.68 457.239 127.499 453.386 127.136Z" fill="black"/>
                    <path d="M509.825 87.424L504.861 106.94C504.815 107.076 504.838 107.212 504.929 107.348C505.065 107.439 505.201 107.484 505.337 107.484H514.449C514.585 107.484 514.698 107.439 514.789 107.348C514.925 107.212 514.97 107.076 514.925 106.94L509.961 87.424C509.961 87.3787 509.938 87.356 509.893 87.356C509.847 87.356 509.825 87.3787 509.825 87.424ZM491.669 127C490.717 127 489.946 126.615 489.357 125.844C488.813 125.073 488.699 124.235 489.017 123.328L502.753 81.032C503.115 79.944 503.75 79.06 504.657 78.38C505.609 77.7 506.651 77.36 507.785 77.36H512.273C513.451 77.36 514.517 77.7 515.469 78.38C516.421 79.06 517.055 79.944 517.373 81.032L531.041 123.328C531.358 124.235 531.222 125.073 530.633 125.844C530.089 126.615 529.341 127 528.389 127H523.833C522.699 127 521.679 126.66 520.773 125.98C519.866 125.255 519.277 124.348 519.005 123.26L517.373 116.8C517.327 116.437 517.101 116.256 516.693 116.256H503.093C502.73 116.256 502.503 116.437 502.413 116.8L500.781 123.26C500.509 124.348 499.919 125.255 499.013 125.98C498.106 126.66 497.086 127 495.953 127H491.669Z" fill="black"/>
                    <path d="M541.177 127C540.134 127 539.227 126.615 538.457 125.844C537.686 125.073 537.301 124.167 537.301 123.124V81.236C537.301 80.1933 537.686 79.2867 538.457 78.516C539.227 77.7453 540.134 77.36 541.177 77.36H544.509C547.093 77.36 548.974 78.4933 550.153 80.76L564.433 107.756C564.433 107.801 564.455 107.824 564.501 107.824C564.546 107.824 564.569 107.801 564.569 107.756V81.236C564.569 80.1933 564.954 79.2867 565.725 78.516C566.495 77.7453 567.402 77.36 568.445 77.36H571.777C572.819 77.36 573.726 77.7453 574.497 78.516C575.267 79.2867 575.653 80.1933 575.653 81.236V123.124C575.653 124.167 575.267 125.073 574.497 125.844C573.726 126.615 572.819 127 571.777 127H568.445C565.861 127 563.979 125.867 562.801 123.6L548.521 96.604C548.521 96.5587 548.498 96.536 548.453 96.536C548.407 96.536 548.385 96.5587 548.385 96.604V123.124C548.385 124.167 547.999 125.073 547.229 125.844C546.458 126.615 545.551 127 544.509 127H541.177Z" fill="black"/>
                    <path d="M589.853 127C588.81 127 587.903 126.615 587.133 125.844C586.362 125.073 585.977 124.167 585.977 123.124V81.236C585.977 80.1933 586.362 79.2867 587.133 78.516C587.903 77.7453 588.81 77.36 589.853 77.36H593.729C594.771 77.36 595.655 77.7453 596.381 78.516C597.151 79.2867 597.537 80.1933 597.537 81.236V98.576C597.537 98.6213 597.559 98.644 597.605 98.644C597.695 98.644 597.741 98.6213 597.741 98.576L609.301 80.624C610.661 78.448 612.633 77.36 615.217 77.36H620.929C621.745 77.36 622.334 77.7227 622.697 78.448C623.059 79.1733 623.014 79.876 622.561 80.556L608.757 100.684C608.53 101.001 608.53 101.319 608.757 101.636L623.309 123.804C623.762 124.484 623.785 125.187 623.377 125.912C623.014 126.637 622.425 127 621.609 127H615.897C613.313 127 611.363 125.912 610.049 123.736L597.741 103.744C597.741 103.699 597.695 103.676 597.605 103.676C597.559 103.676 597.537 103.699 597.537 103.744V123.124C597.537 124.167 597.151 125.073 596.381 125.844C595.655 126.615 594.771 127 593.729 127H589.853Z" fill="black"/>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">{{ __('Documentation')  }}</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    OB2 es una plataforma para el desarrollo de módulos de planificación, gestión y control de cuentas, formularios, carpetas.
                                    En este enlace podrá encontrar documentación sobre el desarrollo de módulos.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">{{ __('Demos') }}</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    OB2 ofrece video tutoriales sobre el uso y desarrollo. Revise, vea por usted mismo, y aprenda habilidades de desarrollo basado en procesos.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/caleeli" class="ml-1 underline">
                                Sponsor
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
