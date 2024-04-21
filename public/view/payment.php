<?php 
    require "./../../app/user/show_payment.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>الدفع</title>
</head>

<body style="direction: rtl;background-color: #588157;">
    <section class="mt-5">
        <div class="container mx-auto px-48">
            <div class="relative flex flex-col min-w-0 break-words  w-full mb-6 shadow-xl rounded-lg bg-blue-500">
                <div class="flex items-center justify-between mt-5 bg-white rounded-lg py-3 mx-5">
                    <div class="mr-4">
                        <img src="./../image/CIB.png" class="w-28 h-28 border-2 rounded-lg border-blue-500" alt="Image 1">
                    </div>
                    <div class="text-center text-2xl text-blue-700 font-bold mx-3">
                        <h2>مرحبا بك في منصة الدفع بالبطاقة المصرفية CIB-الذهبية</h2>
                    </div>
                    <div class="ml-4">
                        <img src="./../image/logo_sit.jpg" class="w-28 h-28" alt="Image 2">
                    </div>
                </div>
                <div class="bg-white flex justify-between border border-blue-500 mt-5 rounded-b-lg text-lg">
                    <div class="w-1/2  text-end"> 
                        <h3>التاجر</h3>
                        <h3>الموقع الالكتروني</h3>
                        <h3>المبلغ</h3>
                    </div>
                    <div class="w-1/2 text-start"> 
                        <h5 class="mr-5"><b>5d6</b></h5>
                        <h5 class="mr-5"><b>https://www.tawakal.com</b></h5>
                        <h5 class="mr-5"><b><?php echo $Montant['Montant_omra_total'] ?> DZD</b></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container mx-auto px-48">
            <div class="relative flex flex-col min-w-0 break-words tracking-wider sm:text-sm w-full mb-6 shadow-xl rounded-lg bg-blue-500">
                <h1 class="m-2 text-white">معلومات العملاء</h1>         
                <div class="bg-white flex justify-between border border-blue-500 rounded-b-lg text-lg pb-5">
                    <div class="w-1/2  text-end mt-5"> 
                        <h3 class="mb-2">رقم بطاقة الاتمان</h3>
                        <h3 class="mb-2">رمز cvv2</h3>
                        <h3 class="mb-2">تاريخ انتهاء الصلاحية</h3>
                        <h3 class="mb-2">الاسم و اللقب</h3>
                    </div>
                    <div class="w-1/2 text-start mt-5"> 
                        <div>
                            <input type="text" class=" border-2 border-gray-300 bg-white rounded text-base shadow focus:outline-none focus:ring mr-5 mb-2" style="transition: all 0.15s ease 0s; " required/>
                        </div>
                        <div>
                            <input type=" text " class=" border-2 border-gray-300 bg-white rounded text-base shadow focus:outline-none focus:ring mr-5 mb-2" style="transition: all 0.15s ease 0s; " required/>
                        </div>
                        <div>
                            <input type="date" class=" border-2 border-gray-300 bg-white rounded text-base shadow focus:outline-none focus:ring mr-5 mb-2" style="transition: all 0.15s ease 0s; " required />
                        </div>
                        <div>
                            <input type=" text " class=" border-2 border-gray-300 bg-white rounded text-base shadow focus:outline-none focus:ring mr-5" style="transition: all 0.15s ease 0s; " required/>
                        </div>
                        <a href="<?php echo"./receipt.php?id=".$Montant['Num_p']."";?> " type="button" class="w-1/6 mt-4 py-1 px-4 flex items-center text-sm font-medium text-center  border border-blue-400 bg-white text-blue-400 rounded-lg hover:text-white hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-primary-300">تسديد</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>