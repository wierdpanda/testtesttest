<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eagleowl Computers</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-orange ">
    {{-- <img src="{{asset('img/EOlogo.png')}}" > --}}
    {{-- class=" min-h-[100px] max-w-[500px] --}}


    {{-- yellow banner div top + logo --}}
    <div class="w-full bg-yellow-200 min-h-[150px]  ">
        <img
             src="{{ asset('img/EOlogo.png') }} "
             class=" mx-auto my-12 max-w-96"
             alt="No image found">
    </div>
    {{-- navbar --}}
    

    {{-- images + slot +  --}}
    <div class="flex bg-blue-700 border border-yellow-200 justify-evenly ">
        {{-- images left  +hides smaller screens--}}
        <div class="w-full hidden sm:block">
            {{-- image left top --}}
            <img class="w-full"
                 src="{{ asset('img/roboOwlThin.jpg') }} "

                 alt="No image found">

            {{-- image left bottem --}}
            <img class="w-full"
                 src="{{ asset('img/roboOwlThin.jpg') }} "

                 alt="No image found">
        </div>

        {{-- slot --}}
        <div class=" bg-cyan-500 w-full ">
            <x-navbar />
            {{ $slot }}
        </div>

        {{-- images right --}}
        <div class=" w-full bg-blue-700 hidden sm:block" >
            {{-- image right top --}}
            <img class="w-full"
                 src="{{ asset('img/roboOwlThin.jpg') }} "

                 alt="No image found">
            {{-- image right bottem --}}
            <img class="w-full"
                 src="{{ asset('img/roboOwlThin.jpg') }} "

                 alt="No image found">
        </div>



    </div>
    {{-- yellow banner div bottem --}}
    <div class="w-full bg-yellow-200 min-h-[150px] h-full ">

        <h3 class="text-sky-800">
            Contact us:
        </h3>
        <p class="text-sky-800">
            0839713032
        </p>
    </div>


</body>

</html>
