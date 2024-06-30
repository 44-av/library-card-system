<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        #image-preview {
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            border-top: 1px solid #ccc;
            height: 100%
        }
    </style>
    <script>
        function previewFile() {
            const preview = document.getElementById('image-preview');
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.onloadend = function() {
                preview.style.backgroundImage = `url(${reader.result})`;
                preview.classList.remove('hidden');
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.style.backgroundImage = null;
                preview.classList.add('hidden');
            }
        }
    </script>
</head>

<body>
    <section class="bg-gradient-to-br from-[#9BC524] from-5% via-[#EEC948] via-40% to-[#B46A13] to-90% h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-lg xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div>
                        <h1 class="flex items-center justify-center text-2xl font-bold text-[#B46A13]">
                            REGISTER LCS ACCOUNT
                        </h1>
                        <p class="text-[10px] text-supportFontDark items-center justify-center text-center mt-1">Please
                            fill out all fields and agree to the terms and condition.</p>
                    </div>
                    @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-[#9BC524]" role="alert">
                            <span class="font-bold"> {{ session('success') }}</span>
                        </div>
                    @endif

                    <form class="space-y-4 md:space-y-6" action="{{ url('register') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="flex
                        items-center justify-center w-full">
                            <label for="photo"
                                class="flex flex-col items-center hover:bg-[#dbdbdb] justify-center w-full h-[300px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">

                                <input id="photo" type="file" name="photo" class="hidden h-full"
                                    accept="image/png, image/jpeg, image/jpg" onchange="previewFile()" />
                                <div id="image-preview"
                                    class="hidden w-full h-[300px] bg-cover bg-center border-t border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-5 h-5 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 font-semibold">Click to upload</p>
                                        <p class="text-xs text-gray-500">PNG or JPG (2x2 picture)</p>
                                    </div>
                                </div>
                            </label>

                        </div>
                        @error('photo')
                            <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                        @enderror
                        <div class="flex flex-wrap">
                            <div class="w-full px-1 mb-2">
                                <input type="text" name="snumber" value="{{ old('snumber') }}" id="number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                    placeholder="Student Number" pattern="\d*" title="Only numbers are allowed"
                                    required="">
                                @error('snumber')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/3 px-1 mb-2">
                                <input type="text" name="lname" value="{{ old('lname') }}" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                    placeholder="Lastname" required="">
                                @error('lname')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="w-full md:w-1/3 px-1 mb-2">
                                <input type="text" name="fname" value="{{ old('fname') }}" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                    placeholder="Firstname" required="">
                                @error('fname')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="w-full md:w-1/3 px-1 mb-2">
                                <input type="text" name="mname" value="{{ old('mname') }}" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                    placeholder="Middlename" required="">
                                @error('mname')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="w-full md:w-1/3 px-1 mb-2">
                                <input type="text" name="bdate" value="{{ old('bdate') }}" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                    placeholder="Birthdate" required="">
                                @error('bdate')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="w-full md:w-1/3 px-1 mb-4">
                                <input type="text" name="address" value="{{ old('address') }}" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                    placeholder="Address" required="">
                                @error('address')
                                    <span class="text-[#B46A13] text-[10px]">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="w-full md:w-1/3 px-1 mb-4">
                                <input type="text" name="contact" value="{{ old('contact') }}" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                    placeholder="Contact Number" required="">
                                @error('contact')
                                    <span class="text-[#80000] text-[10px]">{{ $message }}</span>
                                @enderror

                            </div>

                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50" required="">

                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500">I accept the <a
                                        class="font-medium text-primary-600 hover:underline" href="#">Terms and
                                        Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-[#B46A13] hover:bg-primary-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Create
                            an account</button>
                        <p
                            class="text-[10px] justify-center text-center items-center font-light text-supportFontDark ">
                            Already have an account? <a href="/"
                                class="font-medium text-primary-600 hover:underline ">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
