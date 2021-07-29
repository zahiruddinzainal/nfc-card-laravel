<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Business Card</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    <meta name="viewport" content="width=device-width, user-scalable=no" />
</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Update Business Card</title>
    </head>

    <body class>
        <div class="lg:flex">
            <div class="lg:w-1/2 xl:max-w-screen-sm">
                <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                    <div class="cursor-pointer flex items-center">
                        <div>
                            <svg class="w-10 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                                viewBox="0 0 225 225" style="enable-background:new 0 0 225 225;" xml:space="preserve">
                                <style type="text/css">
                                .st0 {
                                    fill: none;
                                    stroke: currentColor;
                                    stroke-width: 20;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 3;
                                }
                                </style>
                                <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                                    <g>
                                        <path id="Layer0_0_1_STROKES" class="st0"
                                            d="M173.8,151.5l13.6-13.6 M35.4,89.9l29.1-29 M89.4,34.9v1 M137.4,187.9l-0.6-0.4     M36.6,138.7l0.2-0.2 M56.1,169.1l27.7-27.6 M63.8,111.5l74.3-74.4 M87.1,188.1L187.6,87.6 M110.8,114.5l57.8-57.8" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="text-2xl text-indigo-800 tracking-wide ml-2 font-semibold">nfc-card</div>
                    </div>
                </div>
                <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                    <h2 class="text-center text-4xl text-indigo-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Update Card <span>    <a style="font-size: 20px;"class="btn" href="./" target="_blank"><u>See profile</u></a></span></h2>
                
                    <div class="mt-12">
                        <form method="post" action="{{ url('update') }}" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Username</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="username" placeholder="eg: mustafa98" value="{{$data->username}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Name</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="name" placeholder="eg: Mustafa" value="{{$data->name}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Company</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="company" placeholder="eg: Cimb Bank" value="{{$data->company}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Job Title</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="title" placeholder="eg: Finance Consultant" value="{{$data->title}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Address</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="address" placeholder="eg: Johor" value="{{$data->address}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Email</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="email" placeholder="eg: example@email.com" value="{{$data->email}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Phone Number</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="phone" placeholder="eg: +6012345678" value="{{$data->phone}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Website</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="web" placeholder="eg: example.com" value="{{$data->web}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Facebook</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="facebook" placeholder="eg: facebook.com/name" value="{{$data->facebook}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Twitter</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="twitter" placeholder="eg: twitter.com/name" value="{{$data->twitter}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Instagram</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="insta" placeholder="eg; instagram.com/name" value="{{$data->insta}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Youtube</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="youtube" placeholder="eg; youtube.com/name" value="{{$data->youtube}}">
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Shopee</div>
                                <input
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="text" name="shopee" placeholder="eg; shopee.com/name" value="{{$data->shopee}}">
                            </div>

                            <div class="mt-10">
                                <button class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                                shadow-lg">
                                    Update
                                </button>
                            </div>
                        </form>
                        <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                            <a class="cursor-pointer text-indigo-600 hover:text-indigo-800"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

    </html>

</body>

</html>