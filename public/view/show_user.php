<?php 
    require "./../../app/user/show.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>عرض مستخدم</title>
</head>
<body style="background-color: #4f8c4e;direction: rtl;">
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
            <div class="col-span-4 sm:col-span-4">
                <div class="shadow rounded-lg p-6" style="background-color: #606C38;">
                    <div class="flex flex-col items-center">
                        <h1 class="text-2xl font-bold text-yellow-400"><?php echo $user['Prénom_p'] .' '.$user['Nom_p'] ?></h1>
                        <p class="mt-2 text-lg" style="color: #0AF4FC ;">رقم المعتمر : <b class="text-white"><?php echo $user['Num_p']?></b></p>
                    </div>
                    <hr class="my-6 border-t border-gray-300">
                    <div class="flex flex-col">
                        <span class="mb-2 text-lg" style="color: #0AF4FC ;">رقم جواز السفر : <b class="text-white"><?php echo $user['Num_pas_p']?></b></span>
                        <span class="mb-2 text-lg" style="color: #0AF4FC ;">رقم الهاتف : <b class="text-white"><?php echo $user['Téle_p']?></b></span>
                        <span class="mb-2 text-lg" style="color: #0AF4FC ;">عنوان المعتمر : <b class="text-white"><?php echo $user['adresse_p']?></b></span>
                        <span class="mb-2 text-lg" style="color: #0AF4FC ;">الجنس : <b class="text-white"><?php echo $user['Sexe_p']?></b></span>
                        <span class="mb-2 text-lg" style="color: #0AF4FC ;">تاريخ الميلاد : <b class="text-white"><?php echo $user['Date_naiss_p']?></b></span>
                        <span class="mb-2 text-lg" style="color: #0AF4FC ;">مكان الميلاد : <b class="text-white"><?php echo $user['Lieu_naiss_p']?></b></span>
                    </div>
                </div>
            </div>
            <div class="col-span-4 sm:col-span-8">
                <div class="shadow rounded-lg p-6" style="background-color: #3A5A40;">
                    <h2 class="text-2xl font-bold text-center text-yellow-400">معلومات الرحلة</h2>
                    <hr class="my-6 border-t border-gray-300">
                    <div class="relative pb-10 flex flex-wrap min-w-0 break-words  w-full mb-6 ">
                            <ul class="m-auto  mt-11 ">
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">تاريخ الانطلاق : <b class="text-white"><?php echo $voyage['Date_vol_d']?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">تاريخ العودة : <b class="text-white"><?php echo $voyage['Date_vol_r']?></b></label>
                                </li> 
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">شركة الطيران : <b class="text-white"><?php echo $voyage['Nom_lentrepise']?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">المرشد : <b class="text-white"><?php echo $num_g?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">السعر : <b class="text-white"><?php echo $residence['Montant_omra_total']?></b></label>
                                </li>
                            </ul>
                            <ul class="m-auto  mt-11 ">
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">وقت الانطلاق : <b class="text-white"><?php echo $voyage['Time_vol_d']?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">وقت الوصول : <b class="text-white"><?php echo $voyage['Time_vol_r']?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">البعد عن الحرم : <b class="text-white"><?php echo $residence['distance_ch']?> متر</b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">نوعية الغرفة : <b class="text-white"><?php echo $residence['type_ch']?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">الاطعام : <b class="text-white"><?php echo $residence['natu_fod']?></b></label>
                                </li>
                            </ul>
                    </div>
                    <h2 class="text-2xl font-bold mb-4 text-center text-yellow-400">معلومات التأشيرة</h2>
                    <hr class="my-6 border-t border-gray-300">
                    <?php 
                                if(isset($msg)){
                                    echo "
                                    <div class='flex p-2  mt-16 m-5 transform  w-full   bg-red-300 rounded-lg border-2 border-red-900' >
                                        <div class='w-2/12'><img src='./../image/Danger.png' alt='' class='w-20'></div>
                                        <div class='w-10/12 text-center text-red-900 text-xl font-bold'>
                                        ".$msg."
                                        </div>
                                    </div>
                                        ";
                                }else{
                            ?>
                    <div class="relative pb-10 flex flex-wrap min-w-0 break-words  w-full mb-6 ">
                            <ul class="m-auto  mt-11 ">
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">رقم التأشيرة : <b class="text-white">6512636</b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">نوع التأشيرة : <b class="text-white">عمرة</b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">مصدر التأشيرة : <b class="text-white">الجزائر</b></label>
                                </li> 
                            </ul>
                            <ul class="m-auto  mt-11 ">
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">تاريخ التأشيرة : <b class="text-white">16/1/2024</b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">تاريخ الانتهاء : <b class="text-white">15/2/2024</b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;"> مكتب العمرة: <b class="text-white">وكالة رزاق هبلة</b></label>
                                </li>
                                
                            </ul>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>