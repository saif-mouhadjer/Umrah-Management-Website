<?php require "./../../app/guide/show.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>عرض مرشد</title>
</head>
<body  style="background-color: #4f8c4e;direction: rtl;">
    <section class=" p-3 sm:p-16 antialiased z-10 mt-10">
        <div class="shadow-md sm:rounded-lg " style="background-color: #606C38;">
            <div class="flex justify-center items-center mt-10 ">
                <img src="./../image/Guide_info.png" alt="" class="absolute w-32 h-3w-24 " >
            </div>
            <div class="text-center text-3xl font-bold text-yellow-400 mt-20">
                <h2>المرشد رقم : <b><?php echo $guide["num_g"] ;?></b></h2>
            </div>
            <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4">
            <div class="relative pb-10 flex flex-wrap min-w-0 break-words  w-full mb-6 ">
                            <ul class="m-auto  mt-11 ">
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">الاسم : <b class="text-white"><?php echo $guide["Prénom_g"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">اللقب : <b class="text-white"><?php echo $guide["Nom_g"] ;?></b></label>
                                </li> 
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">رقم الهاتف : <b class="text-white"><?php echo $guide["Téle_g"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">تاريخ الميلاد : <b class="text-white"><?php echo $guide["Date_naiss_g"] ;?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">مكان الميلاد : <b class="text-white"><?php echo $guide["Lieu_naiss_g"] ;?></b></label>
                                </li>
                            </ul>
                            <ul class="m-auto  mt-11 ">
                            <?php 
                                if(isset($msg)){
                                    echo "
                                    <div class='flex p-2  mt-16 m-5 transform  w-full   bg-red-300 rounded-lg border-2 border-red-900' >
                                        <div class='w-2/12'><img src='./../image/Danger.png' alt='' class='w-20'></div>
                                        <div class='w-10/12 text-center text-red-900 text-x font-bold'>
                                        ".$msg."
                                        </div>
                                    </div>
                                        ";
                                }else{
                            ?>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">تاريخ الانطلاق : <b class="text-white"><?php echo $voyage['Date_vol_d']; ?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-lg font-bold text-white " style="color: #0AF4FC ;">تاريخ الوصول : <b class="text-white"><?php echo $voyage['Date_vol_r']; ?></b></label>
                                </li> 
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">وقت الانطلاق : <b class="text-white"><?php echo $voyage['Time_vol_d']; ?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">وقت الوصول : <b class="text-white"><?php echo $voyage['Time_vol_r']; ?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">مطار الاقلاع : <b class="text-white"><?php echo $voyage['Decollage_d']; ?></b></label>
                                </li>
                                <li class="w-full px-10 mb-4">
                                    <label class=" text-xl font-bold text-white " style="color: #0AF4FC ;">مطار الوصول : <b class="text-white"><?php echo $voyage['Decollage_r']; ?></b></label>
                                </li>

                                <?php }?>
                            </ul>
                    </div>
            </div>         
        </div>
            
    </section>
</body>
</html>