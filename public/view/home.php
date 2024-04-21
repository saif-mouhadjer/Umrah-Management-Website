<?php 
    require "./../../app/trips/home.php";
     ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>الصفحة الرئيسية</title>
</head>

<body style="direction: rtl;">
    <nav class=" absolute top-0 right-0 left-0 z-20 flex justify-between items-center py-4 px-6  bg-none border-b border-gray-300 shadow-md">
        <div class="flex justify-end items-center">
            <img src="./../image/logo_sit.jpg" alt="شعار الموقع" class="w-10 h-10 ">
            <b class="text-white mr-3">توكل</b>
        </div>
        <ul class="m-auto flex justify-between ">
            <li><a href="arkan.html" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">الاركان</a></li>
            <li><a href="request.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">طلب التسجيل</a></li>
            <li><a href="login.PHP" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ملفي</a></li>
        </ul>
    </nav>

    <div class="relative pt-16 pb-32 flex content-center items-center justify-center">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="min-height: 75vh;background-image: url('./../image/bg_houm.jpg');">

            <span class="w-full h-full absolute opacity-70 bg-black "></span>
            <div class="container relative mx-auto h-full flex flex-col justify-center items-center text-center">
                <div class="pr-12 max-w-xl">
                    <h1 class="text-yellow-400 font-semibold text-4xl italic">عمرتك تبدأ معنا </h1>
                    <p class="mt-4 text-xl text-white ">«عَنْ أَبِي هُرَيْرَةَ، عن النَّبِي - صلى الله عليه وسلم - قَالَ: لاَ تُشَد الرحَالُ إِلا إِلَى ثَلاَثَةِ مَسَاجِدَ: مَسْجِدِي هذَا، وَمَسْجِدِ الْحَرَامِ وَمَسْجِدِ الأَقْصَى»
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-20 mt-60" style="background-color: #588157;">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center transition duration-300 transform hover:scale-110">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-full" style="background-color: #606C38;">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <img src="./../image/security.png" alt="">
                            </div>
                            <h6 class="text-2xl text-white font-semibold">الامان</h6>
                            <p class="mt-2 mb-4 text-white">
                                تأكد من امن راحتك وسلامتك معنا، نحن نولي أهمية قصوى لحماية بياناتك وتأمين تجربتك بأعلى معايير الأمان
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center transition duration-300 transform hover:scale-110">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8 shadow-lg rounded-full" style="background-color: #606C38;">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <img src="./../image/comfort.png" alt="">
                            </div>
                            <h6 class="text-2xl text-white font-semibold">الراحة</h6>
                            <p class="mt-2 mb-4 text-white  ">
                                استمتع برحلتك بكل يسر وسهولة، نحن هنا لتوفير الراحة والاسترخاء من خلال تنظيم كل جانب من جوانب رحلتك بدقة واهتمام
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center transition duration-300 transform hover:scale-110">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8 shadow-lg rounded-full " style="background-color: #606C38;">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <img src="./../image/Guidance.png" alt="">
                            </div>
                            <h6 class="text-2xl text-white font-semibold">الخدمات</h6>
                            <p class="mt-2 mb-4 text-white">
                                تمتع بتجربة العمرة الفاخرة مع مجموعة واسعة من الخدمات المتميزة التي تلبي جميع احتياجاتك كالتوجيه و الارشاد
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <h3 class="text-3xl mb-2 font-semibold leading-normal text-yellow-400">
                        من نحن :
                    </h3>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-white">
                        <b>توكل</b> يضع الثقة والراحة في قلب تجربتك للعمرة. نحن نلتزم بتوفير خدمات متميزة تسهل لكم تنظيم رحلتكم بأمان وسهولة. من خلال تقديم حلول مبتكرة وخدمة عملاء استثنائية، نسعى لجعل كل لحظة من رحلتكم توبة و استغفار

                    </p>
                </div>
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto transition duration-700 transform hover:scale-110">
                    <div class="relative flex flex-col min-w-0 break-words bg-green-700 w-full mb-6 shadow-lg rounded-lg ">
                        <img alt="" src="./../image/mak.png" class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-green-700 fill-current"
                    ></polygon>
                  </svg>
                            <h4 class="text-xl font-bold text-white">
                                حديث نبوي
                            </h4>
                            <p class="text-md  mt-2 text-white">
                                عَنْ أَبِي هُرَيْرَةَ رضي الله عنه: أَنَّ رَسُولَ اللَّهِ ﷺ قَالَ: الْعُمْرَةُ إِلَى الْعُمْرَةِ كَفَّارَةٌ لِمَا بَيْنَهُمَا، وَالْحَجُّ الْمَبْرُورُ لَيْسَ لَهُ جَزَاءٌ إِلَّا الْجَنَّةَ. مُتَّفَقٌ عَلَيْهِ.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-20 " style="background-color: #3A5A40;">

        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4 transition duration-700  hover:scale-110">
                    <img alt="" class="max-w-full rounded-lg shadow-lg" src="./../image/airplane.jpg" />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <h3 class="text-3xl font-semibold text-yellow-400">الموسم القادم</h3>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex justify-start  items-center">
                                    <div>
                                        <div class="text-white p-3  inline-flex w-12 h-12 shadow-lg rounded-full bg-green-700">
                                            <img src="./../image/start.png" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-white mr-3">
                                            الانطلاق يوم :<b> <?php echo $voyage["Date_vol_d"] ?></b>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex justify-start  items-center">
                                    <div>
                                        <div class="text-white p-3  inline-flex w-12 h-12 shadow-lg rounded-full bg-fuchsia-600">
                                            <img src="./../image/time.png" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-white mr-3">
                                            مدة الرحلة:<b> <?php echo $diffInDays ?> يوم</b>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex justify-start  items-center">
                                    <div>
                                        <div class="text-white p-3  inline-flex w-12 h-12 shadow-lg rounded-full bg-cyan-500">
                                            <img src="./../image/price.png" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-white mr-3">
                                            ثمن الرحلة بدون مميزات:<b> <?php echo $voyage["Montant_omra"] ?></b>دج
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>