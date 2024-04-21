<?php require "./../../app/trips/statement.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>بيان المسافرين</title>
    <style>
        @media print {
            .noPrint{
                display: none !important;
            }
            .info{
                margin-right:0 !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
                font-size: 14px !important;
            }
            .cont{
                padding: 0 !important;
            }
            .noPrint{
                display: none !important;
            }
        }
    </style>
</head>
<body  style="background-color: #4f8c4e;direction: rtl;">
    <section class="cont p-7  antialiased z-10 mt-16">
        <div class="bg-white  shadow-md sm:rounded-lg ">
            <div class=" noPrint flex justify-center items-center mt-10 ">
                <img src="./../image/Trips_info.png" alt="" class="absolute w-32 h-3w-24 p-1">
            </div>
            <div class="text-center text-3xl font-bold text-yellow-400 mt-20">
                <h2> بيان المسافرين </h2>
            </div>
            <div class="info grid grid-cols-3 gap-4 px-56 mt-10 mr-20">
                <div class="p-4">الخطوط الجوية الجزائرية</div>
                <div class="p-4">الرحلة رقم : <b><?php echo $voyage['Num_vol'] ?></b></div>
                <div class="p-4">المرشد : <b><?php echo $guide['Prénom_g'] ?></b></div>
                <div class="p-4">تاريخ الانطلاق : <b><?php echo $voyage['Date_vol_d'] ?></b></div>
                <div class="p-4">تاريخ العودة : <b><?php echo $voyage['Date_vol_r'] ?></b></div>
                <div class="p-4">وقت الانطلاق : <b><?php echo $voyage['Time_vol_d'] ?></b></div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="p-4">رقم المعتمر</th>
                            <th scope="col" class="p-4">اسم المعتمر</th>
                            <th scope="col" class="p-4">عنوان المعتمر</th>
                            <th scope="col" class="p-4">رقم الهاتف</th>
                            <th scope="col" class="p-4">رقم جواز السفر</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (mysqli_num_rows($mouhtamir) == 0) {
                            echo "
                            <tr class='border-b hover:bg-gray-100'>
                                <div class='flex p-2  my-10 transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
                                    <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
                                    <div class='w-11/12 text-center text-red-900 text-x font-bold'>
                                    لا يوجد معتمرين
                                    </div>
                                </div>
                            </tr>
                                ";
                        }else{
                        
                        while ($row = mysqli_fetch_assoc($mouhtamir)) {  
                            echo '
                        <tr class="border-b hover:bg-gray-100">
                            <th scope="row" class="px-4 py-3  text-gray-900 whitespace-nowrap ">
                                <div class=" mr-3 text-center">'.$row['Num_p'].'</div>
                            </th>
                            <td class="px-4 text-center text-gray-900">
                            '.$row['Prénom_p'].'    
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['adresse_p'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['Téle_p'].'
                            </td>
                            <td class="px-4 py-3 text-gray-900 text-center whitespace-nowrap">'.$row['Num_pas_p'].'</td>
                        </tr>';}}?>                             
                    </tbody>
                </table>
            </div>
            <div class="noPrint flex items-center justify-center space-x-4 mt-10  ">
                    <button type="button" onclick="printPage()"  class="mb-10 py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                    <svg class="w-4 h-4 mx-auto mb-1 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z"/>
                        <path d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z"/>
                    </svg>
                        طباعة
                    </button>
                </div>                
        </div>
            
    </section>
    <script>
        function printPage() {
            window.print(); 
        }
    </script>
</body>
</html>