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
    <footer>
        <div class="lg:flex sm:pl-[50px] md:pl-[75px] lg:pl-[100px] bg-[#0E2614]">
            <div class="pr-[30px]">
                <a href="#" class="text-white"><span class="text-[32px] font-bold">M</span>otelkusuka</a>
                <p class="text-white w-[500px] pt-10 text-[12px] sm:text-[12px] md:text-[14px] lg:text-[16px]">Lörem ipsum od ohet dilogi. Bell trabel, samuligt, ohöbel utom diska. Jinesade bel när feras redorade i belogi. FAR paratyp i muvåning, och pesask vyfisat. Viktiga poddradio har un mad och inde. </p>
                <ul class="flex gap-5 py-7">
                    <li><img src="./facebook logo.png" alt=""></li>
                    <li><img src="./Twitter logo.png" alt=""></li>
                    <li><img src="./linkedin logo.png" alt=""></li>
                    <li><img src="./instagram logo.png" alt=""></li>
                </ul>
            </div>
            <div class="grid grid-cols-3 text-white">
                <div>
                    <h1 class="py-[20px] font-bold text-[18px]">Home</h1>
                    <ul class="justify-between gap-3 text-[12px]">
                        <li class="pt-5">Search</li>
                        <li class="pt-5">Booking</li>
                        <li class="pt-5">Price</li>
                        <li class="pt-5">Contact</li>
                    </ul>
                </div>
                <div>
                    <h1 class="py-[20px] font-bold text-[18px]">About Us</h1>
                    <ul class="justify-between gap-3 text-[12px]">
                        <li class="pt-5">Community</li>
                        <li class="pt-5">Partner</li>
                        <li class="pt-5">History</li>
                    </ul>
                </div>
                <div >
                    <h1 class="py-[20px] font-bold text-[18px]">Contact</h1>
                    <ul class="justify-between gap-3 text-[12px]">
                        <li class="flex pt-5">
                            <a href="#" class="w-[20px] h-[25px]"><img src="./PhoneLogo.png" alt=""></a>
                            <a href="#" class="px-2">(406) 555-0120</a>
                        </li>
                        <li class="flex pt-5">
                            <a href="#" class="w-[20px] h-[25px]"><img src="./EmailLogo.png" alt=""></a> 
                            <a href="#" class="px-2">motelkusuka@gmail.com</a>
                        </li>
                        <li class="flex pt-5">
                            <a href="#" class="w-[20px] h-[25px]"><img src="./locationLogo.png" alt=""></a>
                            <a href="#" class="px-2">2972 Westheimer Rd. Santa Ana, Illinois 85486 </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>