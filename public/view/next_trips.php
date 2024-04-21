<?php
require "./../../app/trips/edit.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>تعديل رحلة</title>
</head>

<body style="background-color: #4f8c4e;direction: rtl;">
    <section class="pb-20 mt-20">
        <div class="container mx-auto px-32 ">
            <div class="relative pb-10 flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl rounded-lg bg-white ">
            <div class="flex justify-center items-center">
                <img src="./../image/edit_next.png" alt="" class="absolute w-32 h-3w-24 bg-white p-1 border-2 border-white rounded-full rounded-b">
            </div>    
            <form method="post" class="px-6 mt-11">
                    <div class="mt-5">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold text-center mb-2 text-black">
                            تعديل بيانات الرحلة القادمة
                        </h3>
                        <h3 class="mr-5 mt-3 text-4xl font-semibold text-center mb-2 text-red-600">
                            الرحلة رقم : <b><?php echo $voyage['Num_vol']; ?></b>
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
                            <label class=" text-base font-bold text-black ">تاريخ الانطلاق</label>
                            <input value="<?php echo $voyage['Date_vol_d']; ?>" name="Date_vol_d" required type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base  focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">تاريخ العودة</label>
                            <input value="<?php echo $voyage['Date_vol_r']; ?>" name="Date_vol_r" required type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">وقت الانطلاق</label>
                            <input value="<?php echo $voyage['Time_vol_d']; ?>" name="Time_vol_d" required type="time" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">وقت الوصول</label>
                            <input value="<?php echo $voyage['Time_vol_r']; ?>" name="Time_vol_r" required type="time" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                        <label class=" text-base font-bold text-black ">مطار الانطلاق</label>
                            <select name="Decollage_d" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                                <option class="border-b border-gray w-full " value="<?php echo $voyage['Decollage_d']; ?>" selected><?php echo $voyage['Decollage_d']; ?></option>
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
                        <label class=" text-base font-bold text-black ">مطار الوصول</label>
                            <select name="Decollage_r" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                            <option class="border-b border-gray w-full " value="<?php echo $voyage['Decollage_r']; ?>" selected><?php echo $voyage['Decollage_r']; ?></option>    
                            <option class="border-b border-gray w-full " value="الملك عبد العزيز">الملك عبد العزيز - جدة</option>
                            <option class="border-b border-gray " value="الأمير محمد بن عبد العزيز">الأمير محمد بن عبد العزيز - المدينة المنورة</option>
                            </select>
                        </li>
                    </ul>

                    <ul class="m-auto flex justify-between mt-11 ">
                        
                        <li class="w-full px-20 ">
                        <label class=" text-base font-bold text-black ">شركة الطيران</label>
                            <select name="Nom_lentrepise" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                                <option class="border-b border-gray w-full " value="الخطوط الجوية الجزائرية">الخطوط الجوية الجزائرية</option>
                            </select>
                        </li>
                        <li class="w-full px-20">
                        <label class=" text-base font-bold text-black ">المرشد</label>
                            <select name="num_g" required class="mt-5 border-2 px-5 py-3.5 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; ">
                            <option class="border-b border-gray w-full " value="<?php echo $thisguide['num_g']; ?>" selected><?php echo $thisguide['Prénom_g']; ?></option>
                                <?php while ($row = mysqli_fetch_assoc($guide)) {     
                                echo "<option class='border-b border-gray w-full' value='" . $row['num_g'] . "'>" . $row['Prénom_g'] . "</option>";
                                } ?>
                            </select>
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-center mt-11 ">
                        <li class="w-1/2 px-20 ">
                            <label class=" text-base font-bold text-black ">السعر</label>
                            <input value="<?php echo $voyage['Montant_omra']; ?>" name="Montant_omra" required type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <div class="text-center mt-10 ">
                        <button name="edit" class="text-green-700 border-green-700 border-2 bg-gray-300 text-lg font-semibold hover:bg-green-700 hover:text-black px-5 py-3 rounded-lg ">تعديل</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>