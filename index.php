<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mang";


$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failes" . $conn->connect_error);

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $الاجازه = $_POST["الاجازه"];
    $التسلسل = $_POST["التسلسل"];
    $اسم_المالك = $_POST["اسم_المالك"];
 
 
    $اسم_البائع = $_POST["اسم_البائع"];
    $السكن_البائع = $_POST["السكن_البائع"];
    $هويه_التعريف = $_POST["هويه_التعريف"];
    $رقم_الهاتف = $_POST["رقم_الهاتف"];
     $اسم_المختار= $_POST["اسم_المختار"];

   
    $اسم_المشتري= $_POST["اسم_المشتري"];
    $السكن_المشتري= $_POST["السكن_المشتري"];
    $هويه_التعريف_المشتري = $_POST["هويه_التعريف_المشتري"];
    $رقم_الهاتف_المشتري = $_POST["رقم_الهاتف_المشتري"];
    $اسم_المختار_المتشري= $_POST["اسم_المختار_المتشري"];
  

      
    $ادخل_الرقم= $_POST["ادخل_الرقم"];
    $رقم_الشاصي= $_POST["رقم_الشاصي"];
    $رقم_السنويه = $_POST["رقم_السنويه"];
    $اللون = $_POST["اللون"];
    $الموديل= $_POST["الموديل"];
    $نوع_السياره= $_POST["نوع_السياره"];
    $الباقي_قدره= $_POST["الباقي_قدره"];
    $مبلغ_قدره= $_POST["مبلغ_قدره"];
    $ببدل_قدره= $_POST["ببدل_قدره"];
    $توقيع_وبصمه_المشتري= $_POST["توقيع_وبصمه_المشتري"];
    $توقيع_وبصمه_البائع= $_POST["توقيع_وبصمه_البائع"];

    // إعداد الاستعلام لإدخال البيانات
    $sql = "INSERT INTO  dg_mang  (توقيع_وبصمه_البائع,توقيع_وبصمه_المشتري,ببدل_قدره,مبلغ_قدره,الباقي_قدره,نوع_السياره,الموديل,اللون,رقم_السنويه,رقم_الشاصي,ادخل_الرقم,اسم_المختار_المشتري,رقم_الهاتف_المشتري,هويه_التعريف_المشتري,السكن_المشتري,اسم_المشتري,اسم_المختار,رقم_الهاتف,هويه_التعريف,السكن_البائع,اسم_البائع,اسم_المالك,الاجازه,التسلسل)
            VALUES ('$توقيع_وبصمه_البائع','$توقيع_وبصمه_المشتري','$ببدل_قدره','$مبلغ_قدره','$الباقي_قدره','$نوع_السياره','$الموديل','$اللون','$رقم_السنويه','$رقم_الشاصي','$ادخل_الرقم','$اسم_المختار_المتشري','$رقم_الهاتف_المشتري','$هويه_التعريف_المشتري','$السكن_المشتري','$اسم_المشتري','$اسم_المختار','$رقم_الهاتف','$هويه_التعريف','$السكن_البائع','$اسم_البائع','$اسم_المالك','$الاجازه','$التسلسل')";

    // تنفيذ الاستعلام
    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('  تم حفظ البيانات ');</script>";
        
    } else {
        echo "حدث خطأ أثناء حفظ البيانات: " . $conn->error;
    }
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>


  





<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتب السعبري</title>
    <style>
           body {
            font-family: Arial, sans-serif;
            text-align: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 400px; /* يمكنك تغيير حجم الصورة حسب الحاجة */
            height: 80px;
           margin-left: 30%;
            
        }
        @media(min-width:200px){
            .header img{
                display: flex;
                text-align:center;
                width: 300px;
            }
        }
        .inputs {
            display: flex;
            justify-content: center;
            margin-top: 10px;
          
        }
        .inputs input {
            margin: 0 0px; /* تباعد بين الحقول */
            padding: 0px;
            font-size: 12px;
            font-weight: 900;
            
            
           
            
        }
        .inputs label{
            margin-top: 20px;
            
        }
        hr {
            margin-top: 5px;
            border: 1px solid #070707;
        }
        h1 , h2 , h3 , h4 {
            margin-right: 190px;
            padding: 0;
            font-size: 10px;
        }
        h1{
            color: red;
            font-size: 16px;
            
        }
        @media (min-width:480px) {
            h1,h2,h3,h4 {
                display:block;
               
                padding: 5px;
                margin: 0;
            }
        }
      
        p {
            margin-top: 5px;
        margin-left: 750px;
        font-size: 20px;
        }
      
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 10px 0;
            margin-left: 100px;
        }
        th, td {
            padding: 0px;
            text-align: center; /* محاذاة النص إلى الوسط */
            border: 1px solid black;
        }
        input[type="text"] {
            width: 50%; /* عرض الحقل */
            padding: 5px;
            border: none;
            font-size: 12;
            font-weight: 900;
        }
        .sss h2 {
            margin-left: 630px;
            font-size: 12px;
        }
        @media (min-width:480px) {
            .sss h2 {
                display:block;
               
                padding: 5px;
                
            }}
        .sss h3{
            margin-left: 450px;
            font-size: 14px;
          
        }
        @media (min-width:480px) {
            .sss h3 {
                display:block;
              
                padding: 5px;
              
            }}
        .sol h4 {
     text-align: right;
       
      

        }
        @media (min-width:480px) {
            .sol h4 {
                display:block;
               
                padding: 10px;
                margin: 0;
            }}
        .sol h3 {
    text-align: right;
   
        }
        @media (min-width:480px) {
            .sol h3 {
                display:block;
               
                padding: 10px;
                margin: 0;
            }}
        .rr td {
            margin-top: 20px;
            height: 80px;
            
        }
   
   @media print{
  a{
    display: none;
  }
   }
   @media print{
  button{
    display: none;
  }
   }

    </style>
</head>
<body>
<form action="" method="POST">
    <div class="header">
        <img src="car2.png" alt="صورة يسار"> <!-- استبدل left-image.jpg برابط الصورة الفعلي -->
        <div>
            <h1>مكتب السعبري</h1>
            <h2>لاستيراد وتسجيل السيارات</h2>
            <h3>عقود مرورية-مكاتبات</h3>
            <h4>باداره يحيى السعبري</h4>
        </div>
  
    </div>

    <div class="inputs">
       
       
       
       
        <input type="text" id="timeInput" readonly placeholder="الوقت" >
        <label for=""> :الوقت</label>
        <input type="text" id="dateInput" readonly placeholder="التاريخ" >
        <label for=""> :التاريخ</label>
        <input type="text" name="اسم_المالك" placeholder="">
        <label for=""> :اسم المالك</label>
        <input type="text" name="التسلسل" placeholder="">
        <label for=""> :التسلسل</label>
        <input type="text" name="الاجازه" placeholder="" required>
        <label for=""> :رقم الاجازه</label>
    </div>

    <hr>
    <div>
        
    <p>معلومات البائع</p>
 


    <table>
        <tr>
            <th>اسم المختار</th>
            <th>رقم الهاتف</th>
            <th>هوية التعريف</th>
            <th>السكن</th>
            <th>اسم البائع</th>
        </tr>
        <tr>
            <td>
                <input type="text" name="اسم_المختار" placeholder="">
            </td>
            <td>
                <input type="text" name="رقم_الهاتف" placeholder="">
            </td>
            <td>
                <input type="text" name="هويه_التعريف" placeholder="" >
            </td>
            <td>
                <input type="text" name="السكن_البائع" placeholder="">
            </td>
            <td>
                <input type="text" name="اسم_البائع" placeholder="">
            </td>
        </tr>
    </table>


    </div>
    <div class="mass">
        
        <p>معلومات المشتري</p>

        <table>
            <tr>
                <th>اسم المختار</th>
            <th>رقم الهاتف</th>
            <th>هوية التعريف</th>
            <th>السكن</th>
            <th>اسم المشتري</th>
            </tr>
            <tr>
                <td>
                    <input type="text"name="اسم_المختار_المتشري" placeholder="">
                </td>
                <td>
                    <input type="text"name="رقم_الهاتف_المشتري" placeholder="">
                </td>
                <td>
                    <input type="text"name="هويه_التعريف_المشتري" placeholder="" >
                </td>
                <td>
                    <input type="text"  name="السكن_المشتري" placeholder="">
                </td>
                <td>
                    <input type="text" name="اسم_المشتري" placeholder="">
                </td>
            </tr>
        </table>
    
    
        </div>
        <div class="sss">
          




















            <h2>عقد هذا الاتفاق بين الطرفين كما يلي</h2>
             <h3> <input type="text" name="ادخل_الرقم" placeholder="ادخل الرقم" style="width: 100px;">
                :باع الطرف الاول الطرف الثاني السياره المرقمه</h3>
            
            <table>
                <tr>
                    <th>رقم الشاصي</th>
                <th>رقم السنويه</th>
                <th>اللون</th>
                <th>الموديل</th>
                <th>نوع السياره</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="رقم_الشاصي" placeholder=" ">
                    </td>
                    <td>
                        <input type="text" name="رقم_السنويه" placeholder=" ">
                    </td>
                    <td>
                        <input type="text" name="اللون" placeholder=" ">
                    </td>
                    <td>
                        <input type="text"name="الموديل" placeholder=" ">
                    </td>
                    <td>
                        <input type="text"name="نوع_السياره" placeholder=" " >
                    </td>
                </tr>
                <tr>
                
                <th colspan="2">والباقي قدره</th>
                <th colspan="2">وقد قبض مبلغ قدره</th>
                <th colspan="2">ببدل قدره</th>
                </tr>
                <tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="الباقي_قدره"  placeholder="">
                        </td>
                        <td colspan="2">
                            <input type="text" name="مبلغ_قدره"  placeholder="">
                        </td>
                        <td colspan="2">
                            <input type="text" name="ببدل_قدره"   placeholder="">
                        </td>
                    </tr>
            </table>
        
        
            </div>
            <div class="sol">
                <h3>الملاحظات : البائع مسؤول عن الاوراق الاصوليه والطلب والسرقه</h3>
                <h4> اولا-يتعهد  البائع بتحويل السياره في دوائر المرور عقد مباشر بالتحويل وكذلك يكون البائع مسؤولا عن دفع الغرامات ان وجدت     </h4>
                <h4>ثانيا-على المشتري فحص السياره قبل الشراء وان المكتب غير مسؤول بتاتا بعد توقيع العقد</h4>
                <h4>  ثالثا-ان دور المكتب ينحصر بالتوقيع بين البائع والمشتري بقصد موافقه الطرف الاول على قبول البيع وموافقه الطرف الثاني على قبول الشراء</h4>
                <h4> رابعا- اذا (نكل) احد الطرفان فيدفع (الناكل) للطرف الثاني تخفيظات قدرها(20%) عشرون بالمئه من قيمه السياره</h4>
                <h4> خامسا- استلم الطرف الثاني (المشتري) السياره المذكوره اعلاه وهو مسؤول بتاتا بعد التوقيع على هذا العقد</h4>
                <h4> سادسا- الطرفان متعارفان ومتفقان خارج المكتب ودور المكتب ينحصر بتدوين الاتفاق الحاصل بينهم</h4>
                <h4>سابعا- المكاتب غير مسؤوله عن ابراز المستمسكات المزوره للطرفين ان وجد وذلك لان الطرفان متعارفان ومتفقان خارج المكتب</h4>
                <h4> ملاحظه: الدلاليه غير قابله للاسترجاع - المكتب وسيط وليس كفيل-كل عقد غير مختوم بختم المكتب يعتبر باطل</h4>
            </div>
               <table class="tt">
                <tr>
                
                    <th colspan="2">اداره المكتب</th>
                    <th colspan="2">توقيع وبصمه المشتري</th>
                    <th colspan="2">توقيع وبصمه البائع</th>
                    </tr>
                
                        <tr>
                            <td colspan="2">
                                يحيى السعبري
                            </td>
                            <td colspan="2">
                                <input type="text" name="توقيع_وبصمه_المشتري" placeholder="" >
                            </td>
                            <td colspan="2">
                                <input type="text" name="توقيع_وبصمه_البائع"  placeholder="">
                            </td>
                         <tr class="rr">
                            <td colspan="2" >

                            </td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                         </tr>
                        </tr>
                       
                </table>

                  <form action="" method="POST">
                <div style="display: grid; grid-template-columns: 1fr 1fr;">
  <button style="font-size:16px; width:100px; margin-left: 450px; border:none; background-color:white; ">حفظ البيانات</button>
  
  <a href="creat.php" style="font-size:16px; width:200px; margin-right: 200px; text-decoration:none;">بحث</a>
  
  
</div>
    </form>
                <br>
                
   
  <script>





function updateDateTime() {
      const now = new Date();

      // Date formatting
      const day = now.getDate().toString().padStart(2, '0');
      const month = (now.getMonth() + 1).toString().padStart(2, '0'); 
      const seconds=now.getSeconds();
      const year = now.getFullYear();
      document.getElementById('dateInput').value = `${year}-${month}-${day}`;

      // Time formatting
      let hours = now.getHours();
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12 || 12; 
      document.getElementById('timeInput').value = `${hours}:${minutes}:${seconds} ${ampm}`;
    }

    updateDateTime(); // Initial update
    setInterval(updateDateTime, 1000); // Update every second

   
    // document.getElementById("open").onclik = function(){
     //   window.location.href="creat.php";
     //};



  </script>






</body>
</html>

    

