 //*<thead>
      <tr><td>More</td><th>Name</th><td>Description</td><td>Image</td><td>Days</td><td>Amount</td></tr>
    </thead>
    <tbody>
      <?php
      include "../../dbconnect.php";
      $sql="select * from course";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
   
      ?>
      <tr><td><a href='viewpackageplaces.php?id=<?php echo $row["id"]; ?>'>
        View Places
      </a></td><td><?php echo $row["name"]; ?></td><td><?php echo $row["description"]; ?></td><td><?php echo $row["days"]; ?></td><td>
        <?php echo $row["fee"]; ?>
      </td></tr>
      <?php
      }
      ?>
    </tbody>
  </table>*//





   <table>
          <tr><td>Package Name</td><td><select name="package">
            <?php
            include "../../dbconnect.php";
             $sql="select  *  from trainer";
             $result=mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($result))
             {
              echo "<option value='$row[id]'>$row[name]</option>";
             }
              ?>

          </select></td></tr>
             <tr><td>Places</td><td><select name="places">
            <?php
    
             $sql="select  *  from place";
             $result=mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($result))
             {
              echo "<option value='$row[id]'>$row[name]</option>";
             }
              ?>

          </select></td></tr>
         
         
           <tr><td><input type="submit" class="btn btn-primary btn-round" value="Insert Places " name="submit" ></td></tr>
          </table>