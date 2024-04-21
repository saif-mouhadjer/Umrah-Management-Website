<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>احصائيات</title>
</head>

<body style="background-color: #4f8c4e;direction: rtl;">
    <nav class="  top-0 right-0 left-0 z-20 flex justify-between items-center py-4 px-6 border-b border-gray-300 shadow-md opacity-70 bg-black">
        <div class="flex justify-end items-center">
            <img src="./../image/logo_sit.jpg" alt="شعار الموقع" class="w-10 h-10 ">
            <b class="text-white mr-3">المسؤول</b>
        </div>
        <ul class="m-auto flex justify-between ">
        <li><a href="#" class="text-white text-lg font-semibold bg-green-300 bg-opacity-50 px-5 py-3 rounded-lg ">احصائيات</a></li>
            <li><a href="Trips.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ادارة الرحلات</a></li>
            <li><a href="Guide.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ادارة المرشدين</a></li>
            <li><a href="list_user.php" class="text-white text-lg font-semibold hover:bg-green-300 hover:bg-opacity-50 px-5 py-3 rounded-lg ">ادارة المعتمرين</a></li>
        </ul>
    </nav>
    <section class="pb-20 ">
        <div class="w-5/6 shadow-2xl shadow-black mx-auto mt-4">

            <div class="font-bold text-xl w-full text-white text-center bg-green-900 rounded-t py-2">المعتمرين</div>
            <div class="w-full h-fit grid grid-cols-1 sm:grid-cols-3 gap-4  p-4 md:p-8 bg-green-400">
                <div class="bg-white w-full h-fit  sm:grid-cols-2   ">
                    <div class="w-full mx-auto shadow-md shadow-black flex flex-col">
                        <div class="rounded-t w-full bg-green-900 font-bold text-yellow-300 text-center  py-2">الحاليين</div>
                        <div class="p-4 w-full bg-gray3 text-center text-black">
                            <b class="text-3xl">3</b>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full h-fit  sm:grid-cols-2   ">
                    <div class="w-full mx-auto shadow-md shadow-black flex flex-col">
                        <div class="rounded-t w-full bg-green-900 font-bold text-yellow-300 text-center  py-2">الجدد</div>
                        <div class="p-4 w-full bg-gray3 text-center text-black">
                            <b class="text-3xl">2</b>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full h-fit  sm:grid-cols-2   ">
                    <div class="w-full mx-auto shadow-md shadow-black flex flex-col">
                        <div class="rounded-t w-full bg-green-900 font-bold text-yellow-300 text-center  py-2">السابقين</div>
                        <div class="p-4 w-full bg-gray3 text-center text-black">
                            <b class="text-3xl">5</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-5/6 shadow-2xl shadow-black mx-auto mt-20">

            <div class="font-bold text-xl w-full text-white text-center bg-green-900 rounded-t py-2">الرحلات</div>
            <div class="w-full h-fit grid grid-cols-1 sm:grid-cols-3 gap-4  p-4 md:p-8 bg-green-400">
                <div class="bg-white w-full h-fit  sm:grid-cols-2   ">
                    <div class="w-full mx-auto shadow-md shadow-black flex flex-col">
                        <div class="rounded-t w-full bg-green-900 font-bold text-yellow-300 text-center  py-2">المرشدين</div>
                        <div class="p-4 w-full bg-gray3 text-center text-black">
                            <b class="text-3xl">4</b>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full h-fit  sm:grid-cols-2   ">
                    <div class="w-full mx-auto shadow-md shadow-black flex flex-col">
                        <div class="rounded-t w-full bg-green-900 font-bold text-yellow-300 text-center  py-2">الفنادق</div>
                        <div class="p-4 w-full bg-gray3 text-center text-black">
                            <b class="text-3xl">2</b>
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full h-fit  sm:grid-cols-2   ">
                    <div class="w-full mx-auto shadow-md shadow-black flex flex-col">
                        <div class="rounded-t w-full bg-green-900 font-bold text-yellow-300 text-center  py-2">عدد الرحلات</div>
                        <div class="p-4 w-full bg-gray3 text-center text-black">
                            <b class="text-3xl">4</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>