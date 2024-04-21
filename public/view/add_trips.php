<?php
require "./../../app/trips/create.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>اضافة رحلة</title>
</head>

<body style="background-color: #4f8c4e;direction: rtl;">


    <section class="pb-20 mt-20">
        <div class="container mx-auto px-32 ">
            <div class="relative pb-10 flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl rounded-lg " style="background-color: #606C38;">
                <form method="post" class="px-6">
                    <div class="mt-5 flex">
                        <img src="./../image/Trips.png" alt="" class="w-24 h-3w-24 p-1 border-2 border-white rounded-full">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold leading-normal mb-2 text-white">
                            معلومات الرحلة
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
                            <label class=" text-base font-bold text-white ">تاريخ الانطلاق</label>
                            <input name="Date_vol_d" required type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">تاريخ العودة</label>
                            <input name="Date_vol_r" required type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">وقت الانطلاق</label>
                            <input name="Time_vol_d" required type="time" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-white ">وقت الوصول</label>
                            <input name="Time_vol_r" required type="time" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                        <label class=" text-base font-bold text-white ">مطار الانطلاق</label>
                            <select name="Decollage_d" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                                <option class="border-b border-gray w-full " value="هواري بومدين">الجزائر - مطار هواري بومدين</option>
                                <option class="border-b border-gray w-full " value="أحمد بن بلة">وهران - أحمد بن بلة</option>
                                <option class="border-b border-gray w-full " value="محمد بوضياف"> قسنطينة - محمد بوضياف</option>
                                <option class="border-b border-gray w-full " value="كريم بلقاسم">حاسي مسعود - كريم بلقاسم</option>
                                <option class="border-b border-gray w-full " value="رابح بيطاط">عنابة - رابح بيطاط</option>
                                <option class="border-b border-gray w-full " value="عبان رمضان">بجاية - صومام - عبان رمضان</option>
                                <option class="border-b border-gray w-full " value="مصالي الحاج">تلمسان - زناتة - مصالي الحاج</option>
                                <option class="border-b border-gray w-full " value="زرزايتين">عين أميناس - زرزايتين</option>
                                <option class="border-b border-gray w-full " value="حاج باي أخاموك">تمنراست أقنار - حاج باي أخاموك</option>
                                <option class="border-b border-gray w-full " value="عين البيضاء">ورقلة - عين البيضاء</option>
                                <option class="border-b border-gray w-full " value="محمد خيضر">بسكرة - محمد خيضر</option>
                                <option class="border-b border-gray w-full " value="توات الشيخ سيدي محمد بن لكبير">أدرار - توات الشيخ سيدي محمد بن لكبير</option>
                                <option class="border-b border-gray w-full " value="8 ماي">سطيف - 8 ماي </option>
                                <option class="border-b border-gray w-full " value="مصطفى بن بولعيد">باتنة - مصطفى بن بولعيد</option>
                                <option class="border-b border-gray w-full " value="نوميرات مفدي زكريا">غرداية - نوميرات مفدي زكريا</option>
                                <option class="border-b border-gray w-full " value="قمار">الوادي - قمار</option>
                                <option class="border-b border-gray w-full " value="الشيخ العربي التبسي">تبسة - الشيخ العربي التبسي</option>
                                <option class="border-b border-gray w-full " value="أبو بكر بلقايد">الشلف - أبو بكر بلقايد</option>

                            </select>
                        </li>
                        <li class="w-full px-20 ">
                        <label class=" text-base font-bold text-white ">مطار الوصول</label>
                            <select name="Decollage_r" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                                <option class="border-b border-gray w-full " value="الملك عبد العزيز">الملك عبد العزيز - جدة</option>
                                <option class="border-b border-gray " value="الأمير محمد بن عبد العزيز">الأمير محمد بن عبد العزيز - المدينة المنورة</option>
                            </select>
                        </li>
                    </ul>

                    <ul class="m-auto flex justify-between mt-11 ">
                        
                        <li class="w-full px-20 ">
                        <label class=" text-base font-bold text-white ">شركة الطيران</label>
                            <select name="Nom_lentrepise" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                                <option class="border-b border-gray w-full " value="الخطوط الجوية الجزائرية">الخطوط الجوية الجزائرية</option>
                            </select>
                        </li>
                        <li class="w-full px-20">
                        <label class=" text-base font-bold text-white ">المرشد</label>
                            <select name="num_g" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                                <?php while ($row = mysqli_fetch_assoc($guide)) {     
                                echo "<option class='border-b border-gray w-full' value='" . $row['num_g'] . "'>" . $row['Prénom_g'] . "</option>";
                                } ?>
                            </select>
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-center mt-11 ">
                        <li class="w-1/2 px-20 ">
                            <label class=" text-base font-bold text-white ">السعر</label>
                            <input name="Montant_omra" required type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base shadow focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <div class="text-center mt-10 ">
                        <button name="create" class="text-green-700 border-green-700 border-2 bg-gray-300 text-lg font-semibold hover:bg-green-700 hover:text-white px-5 py-3 rounded-lg ">اضافة</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>