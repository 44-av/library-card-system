<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <section class="bg-gradient-to-br from-[#9BC524] from-5% via-[#EEC948] via-40% to-[#B46A13] to-90% h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-lg xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div>
                        <h1 class="flex items-center justify-center text-2xl font-bold text-[#B46A13]">
                            LOGIN TO LCS ACCOUNT
                        </h1>
                        <p class="text-[10px] text-supportFontDark items-center justify-center text-center mt-1">Please
                            fill out all fields and view your portal.</p>
                    </div>
                    @if (session('error'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-[#9BC524]" role="alert">
                            <span class="font-bold"> {{ session('error') }}</span>
                        </div>
                    @endif
                    <form class="space-y-4 md:space-y-6" action="{{ url('/') }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-full px-1 mb-2">
                                <input type="text" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 focus:outline-none text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    placeholder="Student Number" pattern="\d*" title="Only numbers are allowed"
                                    required="">
                                @error('email')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full px-1 mb-2">
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 border border-gray-300  focus:outline-none text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    placeholder="Password" required="">
                                @error('password')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-[#B46A13] hover:bg-primary-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login</button>
                        <p class="text-[10px] justify-center text-center items-center font-light text-supportFontDark ">
                            Don't have an account yet? <a href="/register"
                                class="font-medium text-primary-600 hover:underline ">Register here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
