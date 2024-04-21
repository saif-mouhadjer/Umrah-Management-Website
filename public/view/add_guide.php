<?php require "./../../app/guide/create.php" ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>اضافة مرشد</title>
</head>

<body style="background-color: #4f8c4e;direction: rtl;">

    <section class="pb-20 mt-20">
        <div class="container mx-auto px-32 ">
            <div class="relative pb-10 flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl rounded-lg " style="background-color: #606C38;">
                <form method="post" action="" class="px-6">
                    <div class="mt-5 flex">
                        <img src="./../image/Guide.png" alt="" class="w-24 h-3w-24 p-1 border-2 border-white rounded-full">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold leading-normal mb-2 text-white">
                            معلومات المرشد
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
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">الاسم</label>
                            <input name="Prénom_g"  type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full" style="transition: all 0.15s ease 0s;" required />
                        </li>
                        <li class="w-full px-20 ">
                            <label class="  text-base font-bold text-white">اللقب</label>
                            <input name="Nom_g" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                        
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">تاريخ الميلاد</label>
                            <input name="Date_naiss_g" type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">مكان الميلاد</label>
                            <input name="Lieu_naiss_g" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-center mt-11 ">
                        <li class="w-1/2 px-20 ">
                            <label class=" text-base font-bold text-white ">رقم الهاتف</label>
                            <input name="Téle_g" type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                    </ul>

                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">كلمة المرور</label>
                            <input name="password" type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">تأكيد كلمة المرور</label>
                            <input name="conf_password" type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                    </ul>
                    
                    <div class="text-center mt-10 border-2 rounded border-white">
                        <h3 class="text-xl font-semibold leading-normal mb-2 text-gray-800 ">
                            <b class="text-red-800 "> ملاحظة :</b>يرجى التأكد من معلوماتك جيد قبل التسجيل وكذلك حفظ كلمة المرور لانك ستحتاجها عند الدخول الى ملفك
                        </h3>
                    </div>
                    <div class="text-center mt-10 ">
                        <button name="create" class="text-green-700 border-green-700 border-2 bg-gray-300 text-lg font-semibold hover:bg-green-700 hover:text-white px-5 py-3 rounded-lg " type="submit">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>