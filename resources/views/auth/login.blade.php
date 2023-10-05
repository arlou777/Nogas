<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Sources/n.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigatu</title>
	<meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
     <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
        html,body{
            display: grid;
            height: 100%;
            place-items: center;
        }

         .body-bg {
            background-color:#06497b;
            background-image: linear-gradient(315deg, #faf6eb 0%, #06497b 74%);
        } 

        .center{
            display:flex;
            align-items: center
            justify-content: center;
            text-align:center;
        }

        .outer{
            position: relative;
            margin: 0 50px;
            justify-content: center;
            background: linear-gradient(#14ffe9,#ffeb3b,#ff00e0);
        }
        .button{
            height: 750px;
            width: 550px;
            border-radius:50px; 
        }
        .outer .button{
            position: absolute;
            top: 50%;
            z-index: 9;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .outer button{
        background: #111;
        color: #f2f2f2;
        outline: none;
        border:none;
        cursor: pointer;
        }
        .outer span{
            height:100%;
            width: 100%;
            background: inherit;
        }
         .button span{
            border-radius: 50px;
        }

        .outer:hover .button:nth-child(1)
        {
            filter: blur(7px);
        }
        .outer:hover .button:nth-child(2)
        {
            filter: blur(14px);
        }
        .outer:hover {
            animation: rotate 1.5s linear infinite;
        }

        @keyframes rotate{
            0%{
                filter:hue-rotate(0deg)
            }
           100%{
                filter:hue-rotate(360deg)
            }
        }


        .bubbles img{
  width: 50px;
  animation: bubble 7s linear infinite
}

.bubbles {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: absolute;
    bottom: -70px;
}

@keyframes bubble{
  0%{
    transform: translateY(0);
    opacity: 0;
  }
  50%{
    
    opacity: 1;
  }
  70%{
    
    opacity: 1;
  }
  100%{
    transform: translateY(-80vh);
    opacity: 0;
  }
}

.bubbles img:nth-child(1){
    animation-delay:2s;
    width: 15px;
  }
  .bubbles img:nth-child(2){
    animation-delay:1s;
  }

  .bubbles img:nth-child(3){
    animation-delay:3s;
    width: 20px;
  }

  .bubbles img:nth-child(4){
    animation-delay:4.5s;
    width: 25px;
  }
  .bubbles img:nth-child(5){
    animation-delay:3s;
  }
  .bubbles img:nth-child(6){
    animation-delay:1.5s;
    width: 10px;
  }

  .bubbles img:nth-child(7){
    animation-delay:2s;
    width: 15px;
  }
  .bubbles img:nth-child(8){
    animation-delay:1s;
  }

  .bubbles img:nth-child(9){
    animation-delay:3s;
    width: 20px;
  }

  .bubbles img:nth-child(10){
    animation-delay:4.5s;
    width: 25px;
  }
  .bubbles img:nth-child(11){
    animation-delay:3s;
  }
  .bubbles img:nth-child(12){
    animation-delay:1.5s;
    width: 15px;
  }
    </style> 


</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">

        </a>
    </header>
    <div class="">
        <div class="">
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl ">
        <section>

            <center><img src="{{ asset('/Sources') }}/n.png" width="130" alt=""></center>
            <img src="{{ asset('/Sources') }}/navi.png"  alt="">
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>
        <section class="mt-10 ">
             <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
            <form class="flex flex-col " method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />    
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __(' Register Here') }}
                            </a>
                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                    
                </div>
            
            </form>
        </section>
    </main>
   
</div>
</div>
<div class="bubbles">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
    <img src="Sources/bubble.png" alt="">
  </div>
</body>
</html>