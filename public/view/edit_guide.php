<?php
require "./../../app/guide/edit.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>تعديل مرشد</title>
</head>

<body style="background-color: #4f8c4e;direction: rtl;">
    <section class="pb-20 mt-20">
        <div class="container mx-auto px-32 ">
            <div class="relative pb-10 flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl rounded-lg bg-white ">
            <div class="flex justify-center items-center">
                <img src="./../image/admin.png" alt="" class="absolute w-32 h-3w-24 bg-white border-2 border-white rounded-full rounded-b">
            </div>    
            <form method="post" class="px-6 mt-11">
                    <div class="mt-5">
                        <h3 class="mr-5 mt-3 text-4xl font-semibold text-center mb-2 text-black">
                            تعديل بيانات المرشد رقم : <b class="text-red-600"><?php echo $guide['num_g']; ?></b>
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
                            <label class=" text-base font-bold text-black ">الاسم</label>
                            <input value="<?php echo $guide['Prénom_g']; ?>" name="Prénom_g" required type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base  focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">اللقب</label>
                            <input value="<?php echo $guide['Nom_g']; ?>" name="Nom_g" required type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-between mt-11 ">
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black "> مكان الميلاد </label>
                            <input value="<?php echo $guide['Lieu_naiss_g']; ?>" name="Lieu_naiss_g" required type="text" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                        <li class="w-full px-20 ">
                            <label class=" text-base font-bold text-black ">تاريخ الميلاد</label>
                            <input value="<?php echo $guide['Date_naiss_g']; ?>" name="Date_naiss_g" required type="date" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>
                    <ul class="m-auto flex justify-center mt-11 ">
                        <li class="w-1/2 px-20 ">
                            <label class=" text-base font-bold text-black ">رقم الهاتف</label>
                            <input value="<?php echo $guide['Téle_g']; ?>" name="Téle_g" required type="number" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                    </ul>

                    <ul class="m-auto flex justify-between mt-11 ">
                        
                        <li class="w-full px-20 ">
                        <label class=" text-base font-bold text-black "> كلمة المرور </label>
                        <input name="password" required type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
                        </li>
                        <li class="w-full px-20">
                        <label class=" text-base font-bold text-black "> تأكيد كلمة المرور </label>
                        <input name="conf_password" required type="password" class="mt-5 border-2 px-5 py-3 bg-gray-300 rounded text-base focus:outline-none focus:ring w-full " style="transition: all 0.15s ease 0s; " />
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