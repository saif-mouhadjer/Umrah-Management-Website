<?php 
    require "./../../app/user/payment.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>وصل الاستلام</title>
    <style>
        @media print {
            .noPrint{
                display: none !important;
            }
        }
    </style>
</head>

<body style="direction: rtl">

        <div class="container mx-auto">
            <div class="relative flex flex-col min-w-0 break-words  w-full ">
                <div class="flex items-center justify-between mt-5 bg-white rounded-lg py-3 mx-5">
                    <div class="mr-4">
                        <img src="./../image/CIB2.png" class="w-36 h-28 " alt="Image 1">
                    </div>
                    <div class="text-center text-2xl text-black font-bold mx-3 bg-gray-200 p-4">
                        <h2>ايصال دفع الفاتورة</h2>
                    </div>
                    <div class="ml-4">
                        <img src="./../image/logo_sit.jpg" class="w-36 h-36" alt="Image 2">
                    </div>
                </div>
                <div class="text-center mt-10 text-2xl text-blue-600 font-bold mx-3  ">
                    <h2 class="inline-block p-2 bg-blue-200">Votre paiement a été effectué</h2>
                </div>
                <div class="m-5">
                    <h3> اسم المعتمر: <b><?php echo $Prénom_p['Prénom_p'];?></b></h3>
                    <h3> رقم المعتمر: <b><?php echo $id;?></b></h3>
                </div>
                
                
                <div class="relative  shadow-md sm:rounded-lg m-5">
                    <table class="w-full text-sm  text-blue-100 ">
                        <thead class="text-xs text-black  bg-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    رقم الايصال 
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    رقم الرحلة
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    مبلغ الفاتورة
                                </th>                             
                                <th scope="col" class="px-6 py-3">
                                    تاريخ الدفع
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white text-black text-center">
                                <td class="py-3  whitespace-nowrap">
                                    <?php echo $residence['id']; ?>
                                </td>
                                <td class="py-3">
                                    <?php echo $residence['Num_vol']; ?>
                                </td>
                                <td class="py-3">
                                    <?php echo $residence['Montant_omra_total']; ?> DZD
                                </td>
                                <td class="py-3">
                                    <?php echo $residence['date_ch']; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="noPrint flex items-center justify-center space-x-4 mt-10">
                    <button type="button" onclick="printPage()"  class="ml-20 py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                    <svg class="w-4 h-4 mx-auto mb-1 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z"/>
                        <path d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z"/>
                    </svg>
                        طباعة
                    </button>
                    <a href="./show_user.php?id=<?php echo $id?>" type="button"  class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                        انتقل الى ملفي
                    </a>
                </div>
            </div>
        </div>
    <script>
        function printPage() {
            window.print(); 
        }
    </script>
</body>

</html>