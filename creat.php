
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>استرجاع البيانات</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-12">
                <div class="card-header">
                <h4>استرجاع البيانات عن طريق ادخال التسلسل </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-12">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>التسلسل</th>
                                    <th>الاجازه</th>
                                    <th>اسم_المالك</th>
                                    <th>اسم_البائع</th>
                                    <th>السكن_البائع</th>
                                    <th>هويه_التعريف</th>
                                    <th>رقم_الهاتف</th>
                                    <th>اسم_المختار</th>
                                    <th>اسم_المشتري</th>
                                    <th>السكن_المشتري</th>
                                    <th>هويه_التعريف_المشتري</th>
                                    <th>رقم_الهاتف_المشتري</th>
                                    <th>اسم_المختار_المتشري</th>
                                    <th>ادخل_الرقم</th>
                                    <th>نوع_السياره</th>
                                    <th>الموديل</th>
                                    <th>اللون</th>
                                    <th>رقم_السنويه</th>
                                    <th>رقم_الشاصي</th>
                                    <th>ببدل_قدره</th>
                                    <th>مبلغ_قدره</th>
                                    <th>الباقي_قدره</th>
                                    <th>توقيع_وبصمه_البائع</th>
                                    <th>توقيع_وبصمه_المشتري</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                            
                                 $servername = "localhost";
                                 $username = "root";
                                 $password = "";
                                 $dbname = "mang";
                                 
                                 
                                 $conn = new mysqli($servername,$username,$password,$dbname);
                                 if($conn->connect_error){
                                     die("connection failes" . $conn->connect_error);
                                 
                                 }

                  if(isset($_GET['search']))
                                    {
                     $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM dg_mang WHERE CONCAT(التسلسل) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                                        {
                         foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['التسلسل']; ?></td>
                                                    <td><?= $items['الاجازه']; ?></td>
                                                    <td><?= $items['اسم_المالك']; ?></td>
                                                    <td><?= $items['اسم_البائع']; ?></td>
                                                    <td><?= $items['السكن_البائع']; ?></td>
                                                    <td><?= $items['هويه_التعريف']; ?></td>
                                                    <td><?= $items['رقم_الهاتف']; ?></td>
                                                    <td><?= $items['اسم_المختار']; ?></td>
                                                    <td><?= $items['اسم_المشتري']; ?></td>
                                                    <td><?= $items['السكن_المشتري']; ?></td>
                                                    <td><?= $items['هويه_التعريف_المشتري']; ?></td>
                                                    <td><?= $items['رقم_الهاتف_المشتري']; ?></td>
                                                    <td><?= $items['اسم_المختار_المشتري']; ?></td>
                                                    <td><?= $items['ادخل_الرقم']; ?></td>
                                                    <td><?= $items['نوع_السياره']; ?></td>
                                                    <td><?= $items['الموديل']; ?></td>
                                                    <td><?= $items['اللون']; ?></td>
                                                    <td><?= $items['رقم_السنويه']; ?></td>
                                                    <td><?= $items['رقم_الشاصي']; ?></td>
                                                    <td><?= $items['ببدل_قدره']; ?></td>
                                                    <td><?= $items['مبلغ_قدره']; ?></td>
                                                    <td><?= $items['الباقي_قدره']; ?></td>
                                                    <td><?= $items['توقيع_وبصمه_البائع']; ?></td>
                                                    <td><?= $items['توقيع_وبصمه_المشتري']; ?></td>
                                              
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php


                                            }
                                             }
                                       ?>
                            </tbody>
                          </table>
                         </div>
                     </div>
                 </div>
              </div>
             </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>