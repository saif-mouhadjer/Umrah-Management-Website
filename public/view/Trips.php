<?php 
    require "./../../app/trips/index.php";
    require "./../../app/trips/delete.php";
    require "./../../app/trips/search.php"
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ادارة الرحلات</title>
</head>
<body  style="background-color: #4f8c4e;direction: rtl;">
    <nav class="top-0 right-0 left-0 z-20 flex justify-between items-center py-4 px-6 border-b border-gray-300 shadow-md opacity-70 bg-black">
        <div class="flex justify-end items-center">
            <img src="./../image/logo_sit.jpg" alt="شعار الموقع" class="w-10 h-10 ">
            <b class="text-white mr-3">المسؤول</b>
        </div>
        <ul class="m-auto flex justify-between ">
            <li><a href="admin_home.php" class="text-white text-lg font-semibold hover:bg-green-300 bg-opacity-50 px-5 py-3 rounded-lg ">احصائيات</a></li>
            <li><a href="#" class="text-white text-lg font-semibold bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ادارة الرحلات</a></li>
            <li><a href="Guide.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ادارة المرشدين</a></li>
            <li><a href="list_user.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ادارة المعتمرين</a></li>
        </ul>
    </nav>
    <section class=" p-3 sm:p-5 antialiased z-10 mt-2">
        <div class="bg-white  shadow-md sm:rounded-lg ">
            <div class="flex justify-center items-center mt-10 ">
                <img src="./../image/Trips.png" alt="" class="absolute w-32 h-3w-24 bg-white p-1 border-2 border-white rounded-full rounded-b">
            </div>
            <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 mt-16">
                <div class="w-full md:w-1/2">
                    <form method="post" action="" class="flex items-center">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                </svg>
                            </div>
                            <input name="num_search" type="text" placeholder="البحث بواسطة رقم الرحلة" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pr-10 p-2   ">
                        </div>
                        <button  name="search"class="border-2 border-black px-4 py-1 mr-2 rounded-lg text-black bg-white hover:bg-black hover:text-white">بحث</button>
                    </form>
                </div>
                <div class=" w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="./next_trips.php" class="bg-white flex items-center justify-center text-blue-700 border-blue-700 border hover:bg-blue-800 hover:text-white focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2  focus:outline-none ">
                        تعديل الرحلة القادمة
                    </a>
                </div>
                <div class=" w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="./add_trips.php" class="bg-red-400 flex items-center justify-center text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2  focus:outline-none ">
                        <svg class="h-3.5 w-3.5 ml-1.5 " fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        اضافة رحلة جديد 
                    </a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="p-4">رقم الرحلة</th>
                            <th scope="col" class="p-4">تاريخ الانطلاق</th>
                            <th scope="col" class="p-4">تاريخ العودة</th>
                            <th scope="col" class="p-4">عدد المعتمرين</th>
                            <th scope="col" class="p-4">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (mysqli_num_rows($voyage) == 0) {
                            echo "
                            <tr class='border-b hover:bg-gray-100'>
                                <div class='flex p-2 my-10  transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
                                    <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
                                    <div class='w-11/12 text-center text-red-900 text-x font-bold'>
                                    لا توجد رحلات 
                                    </div>
                                </div>
                            </tr>
                                ";
                        }else{
                        
                        while ($row = mysqli_fetch_assoc($voyage)) {  
                            echo'
                        <tr class="border-b hover:bg-gray-100">
                            <th scope="row" class="px-4 py-3  text-gray-900 whitespace-nowrap ">
                                <div class=" mr-3 text-center">'.$row['Num_vol'].'</div>
                            </th>
                            <td class="px-4 text-center text-gray-900">
                            '.$row['Date_vol_d'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['Date_vol_r'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['row_count'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap ">
                                <div class="flex items-center justify-center space-x-4">

                                    <a href="./show_trips.php?id='.$row['Num_vol'].'" type="button"   class="ml-4 py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2 ">
                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                        </svg>
                                        معاينة
                                    </a>
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_delete" value="'.$row['Num_vol'].'">
                                        <button type="submit" name="b_delete" class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 " viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            ارشفة
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>';}}?>                       
                    </tbody>
                </table>
            </div>                
        </div>
            
    </section>
</body>
</html>