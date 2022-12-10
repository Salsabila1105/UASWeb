<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=head, initial-scale=1.0">
    <title>BookingHotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              fontFamily: {
                'Startfont': ['"Poppins"', 'sans-serif'],
              }
            }
          }
        }
      </script>
</head>
    <body class="mx-0 font-Startfont">
        <header class="flex bg-gradient-to-r from-[#F5FFFE] to-[#EDFFEF]">
            <div class="sm:pl-[50px] md:pl-[75px] lg:pl-[100px] sm:pr-[10px] md:pr-[30px] lg:pr-[50px] w-[1440px] h-[780px] ">
                <div class="lg:flex gap-[80px] py-5">
                    <a href="#" class="text-[#383838]"><span class="text-[32px] font-bold text-[#42A66A]">M</span>otelkusuka</a>
                    <ul class="flex sm:gap-2 md:gap-3 lg:gap-5 py-5">
                        <li><a href="#" class="hover:text-[#42A66A]">Home</a></li>
                        <li><a href="#" class="hover:text-#42A66A]">Booking</a></li>
                        <li><a href="#" class="hover:text-[#42A66A]">Fasilities</a></li>
                        <li><a href="#" class="hover:text-[#42A66A]">About Us</a></li>
                        <li><a href="#" class="hover:text-[#42A66A]">Contact</a></li>
                    </ul>
                </div>
                <div class="sm:mt-[20px] md:mt-[30px] lg:mt-[70px]">
                    <p class="sm:text-[12px] md:text-[14px] lg:text-[16px]">Mountains | Plans | Beaches</p>
                    <h1 class="sm:text-[32px] md:text-[42px] lg:text-[60px] font-bold text-[#42A66A] py-5">Find <span href="#" class="font-normal text-[#080E15]">Your Perfect</span> Place <span href="#" class="font-normal text-[#080E15]">to your</span> Family</h1>
                    <p class="pb-10 text-[#969696] sm:text-[12px] md:text-[14px] lg:text-[16px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, sint odit? Sint fugit in possimus eveniet earum, repellat et tempora, porro iste obcaecati a dolores facere eum ut cum aliquam?</p>
                    <a href="#" class="border py-3 px-7 bg-[#42A66A] rounded-full text-white hover:bg-[#27633f]">Register</a>
                </div>
            </div>
            <div>
                <div class="w-[580px] h-[780px]">
                    <a href="#" class="relative"><img src="./Rectangle 2.png" alt=""></a>
                </div>
                <div class="absolute flex flex-wrap md:flex-wrap-reverse top-5 sm:left-[500px] md:left-[750px] lg:left-[1000px] justify-between gap-7">
                    <button>
                        <a href="#" class="text-[#42A66A] underline">Log In</a>
                    </button>
                    <a href="#" class="border py-3 px-7 bg-[#42A66A] rounded-full text-white hover:bg-[#27633f]">Register</a>
                </div>
            </div>
        </header>
    </body>
</html>