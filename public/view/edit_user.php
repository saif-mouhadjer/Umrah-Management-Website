<?php
require "./../../app/user/edit.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>تعديل معتمر</title>
</head>

<body style="background-color: #4f8c4e;direction: rtl;">
    <section class="pb-20 mt-20">
        <div class="container mx-auto px-32 ">
            <div class="relative pb-10 flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl rounded-lg bg-white ">
            <div class="flex justify-center items-center">
                <img src="./../image/admin.png" alt="" class="absolute w-32 h-3w-24 bg-white border-2 border-white rounded-full rounded-b">
            </div>    
            <form action="" method="Post" class="px-6 mt-11">
            <div class="mt-5">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold text-center mb-2 text-black">
                            تعديل بيانات المعتمر رقم : <b class="text-red-600"><?php echo $user['Num_p']; ?></b>
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
                            <label class=" text-base font-bold text-black ">الاسم</label>
                            <input name="Prénom_p" value="<?php echo $user['Prénom_p'] ?>" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full" style="transition: all 0.15s ease 0s;" required />
                        </li>
                        <li>
                            <label class="  text-base font-bold text-black">اللقب</label>
                            <input name="Nom_p" value="<?php echo $user['Nom_p'] ?>" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                        <li>
                            <label class=" text-base font-bold text-black ">الجنس</label>
                            <select name="Sexe_p" class="mt-5 ml-20 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required >
                                <option class="border-b border-gray w-full " value="ذكر ">ذكر</option>
                                <option class="border-b border-gray " value="انثى ">انثى</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li>
                            <label class=" text-base font-bold text-black ">تاريخ الميلاد</label>
                            <input name="Date_naiss_p" value="<?php echo $user['Date_naiss_p'] ?>" type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                        <li>
                            <label class=" text-base font-bold text-black ">مكان الميلاد</label>
                            <input name="Lieu_naiss_p" value="<?php echo $user['Lieu_naiss_p'] ?>" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                        <li>
                            <label class=" text-base font-bold text-black ">العنوان</label>
                            <input name="adresse_p" value="<?php echo $user['adresse_p'] ?>" type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">رقم الهاتف</label>
                            <input name="Téle_p" value="<?php echo $user['Téle_p'] ?>" type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">رقم جواز السفر</label>
                            <input name="Num_pas_p" value="<?php echo $user['Num_pas_p'] ?>" type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required />
                        </li>
                    </ul>

                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">كلمة المرور</label>
                            <input name="password" type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">تأكيد كلمة المرور</label>
                            <input name="conf_password" type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required/>
                        </li>
                    </ul>
                    <div class="mt-11 border-2 rounded-lg border-blactext-black"></div>

                    <div class="mt-5 flex">
                        <img src="./../image/features.png" alt="" class="w-20 h-24 p-1 ">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold leading-normal mb-2 text-black">
                            اختر مميزات العمرة
                        </h3>
                    </div>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li>
                        <label class=" text-base font-bold text-black ">البعد عن الحرم</label>
                            <select name="distance_ch" class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s;" required >
                                <option class="border-b border-gray w-full " value="500">اقل من 500 متر</option>
                                <option class="border-b border-gray " value="1000">اقل من 1000 متر</option>
                                <option class="border-b border-gray " value="1500">اكثر من 1000 متر</option>
                            </select>
                        </li>
                        <li>
                        <label class=" text-base font-bold text-black ">نوعية الغرفة</label>
                            <select name="type_ch" class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; "required >
                                <option class="border-b border-gray w-full " value="احادية">احادية</option>
                                <option class="border-b border-gray " value="ثنائية">ثنائية</option>
                                <option class="border-b border-gray " value="جماعية">جماعية</option>
                            </select>
                        </li>
                        <li>
                            <label class=" text-base font-bold text-black ">طبيعة الاطعام</label>
                            <select name="natu_fod" class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " required >
                                <option class="border-b border-gray w-full " value="كامل">كامل (فطور الصباح + غذاء + العشاء)</option>
                                <option class="border-b border-gray " value="نصف كامل">نصف كامل (فطور الصباح + العشاء)</option>
                                <option class="border-b border-gray w-full " value="لايوجد">لايوجد</option>
                            </select>
                        </li>
                    </ul>                    
                    <div class="text-center mt-10 border-2 rounded border-blactext-black">
                        <h3 class="text-xl font-semibold leading-normal mb-2 text-gray-800 ">
                            <b class="text-red-800 "> ملاحظة :</b>يرجى التأكد من معلوماتك جيد قبل التسجيل وكذلك حفظ كلمة المرور لانك ستحتاجها عند الدخول الى ملفك
                        </h3>
                    </div>
                    <div class="text-center mt-10 ">
                        <button type="submit" name="edit" class="text-green-700 border-green-700 border-2 bg-gray-300 text-lg font-semibold hover:bg-green-700 hover:text-white px-5 py-3 rounded-lg ">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>