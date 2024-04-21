<?php 
    require "./../../app/login_admin.php";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>تسجيل الدخول</title>
    </head>

    <body class="group" style="direction: rtl;background-color: #606C38;">
        <?php 
if(isset($msg)){
    if($msg){
        echo "
        <div class='flex p-2  mt-16 transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
        <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
        <div class='w-11/12 text-center text-red-900 text-x font-bold'>
            المعلومات التي ادخلتها غير صحيحة تأكد منها وحاول مجددا
        </div>
    </div>
        ";
    }
}
?>
        <section class="relative block z-10">
            <div class="container mx-auto my-32">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                            <div class="flex justify-center items-center">
                                <video autoplay loop muted class="w-20 h-20 -mt-10 rounded-full">
                              <source src="./../image/lock.mp4" type="video/mp4">
                            </video>
                            </div>
                            <form method="post" action="" class="flex-auto p-5  ">
                                <h4 class="text-2xl font-semibold text-center">تسجيل الدخول كمسؤول</h4>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-gray-700 text-base font-bold mb-2" for="full-name">اسم المستخدم</label>
                                    <input name="username" type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-base shadow focus:outline-none focus:ring w-full" style="transition: all 0.15s ease 0s;" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-base font-bold mb-2" for="email">كلمة المرور</label>
                                    <input name="password" type="password" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-base shadow focus:outline-none focus:ring w-full" style="transition: all 0.15s ease 0s;" />
                                </div>

                                <div class="text-center mt-6">
                                    <button name="login" type="submit" class="bg-green-800 text-white active:bg-green-500 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="submit" style="transition: all 0.15s ease 0s;">تسجيل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </body>

    </html>