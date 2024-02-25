<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tasks</title>
<style>
/* تنسيق الشريط العلوي */
.navbar {
  background-color: #007bff;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
}

.navbar a {
  color: #ffffff;
  text-decoration: none;
  font-size: 18px;
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

/* تنسيق الزر على الجانب الأيمن */
.logout-btn {
  float: right;
}

/* تنسيق عنصر اليسار */
.tasks {
  float: left;
}

/* تحديد تنسيق عنصر اليسار عند التحويل إلى شاشات صغيرة */
@media screen and (max-width: 600px) {
  .navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  .logout-btn {
    float: none;
    display: block;
    text-align: right;
  }
}
</style>
</head>
<body>

<?php
require'../users/users.php';
$users= getUsers();




?>
<div class="navbar">
  <a href="manage_task.php" class="tasks">TASKS</a>
  <a href="../logout/logout.php" class="logout-btn">Log out</a>
</div>
<h1>Dashbord</h1>

<style>
    .container {
        text-align: center; /* لتوسيط المحتوى */
    }
    .user {
        display: inline-block; /* لجعل العنصر مستطيلًا */
        margin: 20px; /* تباعد بين العناصر */
        border: 1px solid black; /* إضافة حدود */
        padding: 10px; /* تباعد داخلي */
        width: 200px; /* تحديد عرض العنصر */
    }
    .task {
        margin-top: 10px; /* تباعد بين المربعات */
        width: 100px; /* تحديد عرض المربع */
        height: 50px; /* تحديد ارتفاع المربع */
        border: 1px solid black; /* إضافة حدود */
        display: inline-block; /* لجعل المربعات جنبًا إلى جنب */
        text-align: center; /* لتوسيط النص */
        line-height: 50px; /* لتوسيط النص رأسيًا */
    }
</style>

<div class="container">
    <?php foreach($users as $user): ?>
        <div class="user">
            <div><?php echo $user['users_uid']; ?></div>
            <div class="task">Added Task <?php echo $user['added_task']; ?></div>
            <div class="task">Deleted Task <?php echo $user['deleted_task']; ?></div>
            <div class="task">Done Task <?php echo $user['done_task']; ?></div>
            <div class="task">Not Done <?php echo $user['not_done_task']; ?></div>
        </div>
    <?php endforeach; ?>
</div>










<!-- <div class="container">
    
<table class="table">
<?php foreach($users as $user):?>
      <thead>
        
        <tr>
            <th><?php echo $user['user_name']?></th>
            
        </tr>
      
    </thead> 
    <tbody>
        
        <tr>
            
            <td><?php echo 'number'. $user['added_task']?></td>
            <td><?php echo 'number'. $user['deletet_task']?></td>
            <td><?php echo 'number'.$user['done_task']?></td>
            <td><?php echo 'number'.$user['not_done_yet']?></td>
            
        </tr>
        
    </tbody>
    <?php endforeach ;?>
</table>
</div> -->



</body>
</html>
