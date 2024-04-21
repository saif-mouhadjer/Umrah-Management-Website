<?php 
    require "./../../app/user/create.php";
    ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>تسجيل</title>
</head>

<body style="direction: rtl;">
    <div class="w-full h-full  fixed">
        <img src="./../image/bg_houm.jpg" alt="">
    </div>
    <nav class=" absolute top-0 right-0 left-0 z-20 flex justify-between items-center py-4 px-6 border-b border-gray-300 shadow-md opacity-70 bg-black">
        <div class="flex justify-end items-center">
            <img src="./../image/logo.png" alt="شعار الموقع" class="w-10 h-10 ">
            <b class="text-white mr-3">توكل</b>
        </div>
        <ul class="m-auto flex justify-between ">
            <li><a href="home.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">الصفحة الرئيسة</a></li>
            <li><a href="arkan.html" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">الاركان</a></li>
            <li><a href="login.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ملفي</a></li>
        </ul>
    </nav>
   

    <div class="relative pt-16 pb-32"></div>
    <section class="pb-20 mt-64">
    
        <div class="container mx-auto px-32 ">
            <div class="relative pb-10 flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl rounded-lg -mt-64" style="background-color: #606C38;">
            <form action="" method="Post" class="px-6">
                    <div class="mt-5 flex">
                        <img src="./../image/user_logo.png" alt="" class="w-24 h-3w-24 p-1 border-2 border-white rounded-full">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold leading-normal mb-2 text-white">
                            معلومات المعتمر
                        </h3>
                    </div>
                    <?php 
                        if(isset($msg)){
                            echo "
                            <div class='flex p-2  mt-16 transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
                                <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
                                <div class='w-11/12 text-center text-red-900 text-x font-bold'>
                                ".$msg."
                                </div>
                            </div>
                                ";
                        }
                    ?>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li>
                            <label class=" text-base font-bold text-white ">الاسم</label>
                            <input name="Prénom_p" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full" style="transition: all 0.15s ease 0s;" required/>
                        </li>
                        <li>
                            <label class="  text-base font-bold text-white">اللقب</label>
                            <input name="Nom_p" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                        <li>
                            <label class=" text-base font-bold text-white ">الجنس</label>
                            <select name="Sexe_p" class="mt-5 ml-20 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; "required>
                                <option class="border-b border-gray w-full " value="ذكر ">ذكر</option>
                                <option class="border-b border-gray " value="انثى ">انثى</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li>
                            <label class=" text-base font-bold text-white ">تاريخ الميلاد</label>
                            <input name="Date_naiss_p" type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                        <li>
                            <label class=" text-base font-bold text-white ">مكان الميلاد</label>
                            <input name="Lieu_naiss_p" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                        <li>
                            <label class=" text-base font-bold text-white ">العنوان</label>
                            <input name="adresse_p" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; "required />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">رقم الهاتف</label>
                            <input name="Téle_p" type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">رقم جواز السفر</label>
                            <input name="Num_pas_p" type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                    </ul>

                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">كلمة المرور</label>
                            <input name="password" type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">تأكيد كلمة المرور</label>
                            <input name="conf_password" type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                    </ul>
                    <div class="mt-11 border-2 rounded-lg border-white"></div>

                    <div class="mt-5 flex">
                        <img src="./../image/features.png" alt="" class="w-20 h-24 p-1 ">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold leading-normal mb-2 text-white">
                            اختر مميزات العمرة
                        </h3>
                    </div>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li>
                        <label class=" text-base font-bold text-white ">البعد عن الحرم</label>
                            <select name="distance_ch" class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s;"required>
                                <option class="border-b border-gray w-full " value="500">اقل من 500 متر</option>
                                <option class="border-b border-gray " value="1000">اقل من 1000 متر</option>
                                <option class="border-b border-gray " value="1500">اكثر من 1000 متر</option>
                            </select>
                        </li>
                        <li>
                        <label class=" text-base font-bold text-white ">نوعية الغرفة</label>
                            <select name="type_ch" class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; "required>
                                <option class="border-b border-gray w-full " value="احادية">احادية</option>
                                <option class="border-b border-gray " value="ثنائية">ثنائية</option>
                                <option class="border-b border-gray " value="جماعية">جماعية</option>
                            </select>
                        </li>
                        <li>
                            <label class=" text-base font-bold text-white ">طبيعة الاطعام</label>
                            <select name="natu_fod" class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; "required>
                                <option class="border-b border-gray w-full " value="كامل">كامل (فطور الصباح + غذاء + العشاء)</option>
                                <option class="border-b border-gray " value="نصف كامل">نصف كامل (فطور الصباح + العشاء)</option>
                                <option class="border-b border-gray w-full " value="لايوجد">لايوجد</option>
                            </select>
                        </li>
                    </ul>                    
                    <div class="text-center mt-10 border-2 rounded border-white">
                        <h3 class="text-xl font-semibold leading-normal mb-2 text-gray-800 ">
                            <b class="text-red-800 "> ملاحظة :</b>يرجى التأكد من معلوماتك جيد قبل التسجيل وكذلك حفظ كلمة المرور لانك ستحتاجها عند الدخول الى ملفك
                        </h3>
                    </div>
                    <div class="text-center mt-10 ">
                        <button type="submit" name="create" class="text-green-700 border-green-700 border-2 bg-gray-300 text-lg font-semibold hover:bg-green-700 hover:text-white px-5 py-3 rounded-lg ">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>