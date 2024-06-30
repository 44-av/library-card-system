<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-gradient-to-br from-[#9BC524] from-5% via-[#EEC948] via-40% to-[#B46A13] to-90% h-[40px] p-5"></div>
    <div class="flex flex-col items-center justify-center bg-black mx-auto md:h-screen lg:py-0">
        <div class="w-full rounded-lg shadow  md:mt-0 sm:max-w-lg xl:p-0 ">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div class="-mt-60">
                    <h1 class="flex items-center uppercase justify-center text-3xl font-black text-[#FFFFFF]">
                        Library Card Details
                    </h1>
                    <p class="text-[10px]  text-supportFontDark items-center justify-center text-center mt-1">
                        Details
                        below are your Library Card Data Account</p>
                </div>
                <div
                    class="max-w-sm bg-gradient-to-br from-[#9BC524] from-5% via-[#EEC948] via-40% to-[#B46A13] to-90% h-full p-3 border border-gray-200 mx-auto rounded-lg shadow ">
                    <a href="#">
                        <img class="rounded-lg" src="{{ asset('uploads/' . $photo) }}" alt="" />
                    </a>
                    <div class="p-5">
                        <h2 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">
                            {{ $f_name }}&nbsp;{{ $m_name }}&nbsp;{{ $l_name }}
                        </h2>
                        <p class="mb-2 font-normal text-xs">Student Number: {{ $student_id }}</p>
                        <p class="mb-2 font-normal text-xs">Birthdate: {{ $b_date }}</p>
                        <p class="mb-2 font-normal text-xs">Address: {{ $address }}</p>
                        <p class="mb-5 font-normal text-xs">Contact: {{ $contact }}</p>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="inline-flex items-center bg-[#B46A13] px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Close Profile
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
