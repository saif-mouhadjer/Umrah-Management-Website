<?php require "./../../app/trips/show.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>عرض رحلة</title>
</head>
<body  style="background-color: #4f8c4e;direction: rtl;">
    <section class=" p-3 sm:p-16 antialiased z-10 mt-10">
        <div class="shadow-md sm:rounded-lg " style="background-color: #606C38;">
            <div class="flex justify-center items-center mt-10 ">
                <img src="./../image/Trips_info.png" alt="" class="absolute w-32 h-3w-24 ">
            </div>
            <div class="text-center text-3xl font-bold text-yellow-400 mt-20">
                <h2>معلومات التفصيلية للرحلة رقم : <b><?php echo $voyage["Num_vol"] ;?></b></h2>
            </div>
            <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 mt-5">
            <div class="relative pb-10 flex flex-wrap min-w-0 break-words  w-full  ">
                            <ul class="m-auto  mt-11 ">
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">تاريخ الانطلاق : <b class="text-white"><?php echo $voyage["Date_vol_d"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">تاريخ العودة : <b class="text-white"><?php echo $voyage["Date_vol_r"] ;?></b></label>
                                </li> 
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">شركة الطيران : <b class="text-white"><?php echo $voyage["Nom_lentrepise"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">المرشد : <b class="text-white"><?php echo $guide["Nom_g"] ." ".$guide["Prénom_g"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 ">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">السعر : <b class="text-white"><?php echo $voyage["Montant_omra"] ;?></b></label>
                                </li>
                            </ul>
                            <ul class="m-auto  mt-11 ">
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">وقت الانطلاق : <b class="text-white"><?php echo $voyage["Time_vol_d"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">وقت الوصول : <b class="text-white"><?php echo $voyage["Time_vol_r"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">مطار الاقلاع : <b class="text-white">مطار <?php echo $voyage["Decollage_d"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">مطار الوصول : <b class="text-white">مطار <?php echo $voyage["Decollage_r"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">رقم شركة الطيران : <b class="text-white">1</b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">عدد المعتمرين : <b class="text-white"><?php echo $voyage["row_count"] ;?></b></label>
                                </li>
                                
                            </ul>

                           
                    </div> 
            </div> 
            <div class="text-center mb-5">
                <a href="Travelers_statement.php?id=<?php echo $voyage["Num_vol"] ;?>" class="bg-green-400 text-white text-lg active:bg-green-500  font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-5" type="submit" style="transition: all 0.15s ease 0s;">بيان المسافرين</a>
            </div>
        </div>
            
    </section>
</body>
</html>