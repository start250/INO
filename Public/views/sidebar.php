<div class="container" style=" margin-left: 30px; margin-top:40px">


  <div class="block">
    <div class="row">
      <div class="imgCat ">
        <a href="/INOGIT/Category/Academic">
          <img class="img-left" src="/INOGIT/Resources/Categoryimgs/sm-academic.jpg" alt="...">
        </a>
        <a href="/INOGIT/Category/Academic">
          <span class="">Amasomo</span>
        </a>

      </div>
    </div>
  </div>

  <div class="block">
    <div class="row">
      <div class="imgCat ">
        <a href="/INOGIT/Category/Business">
          <img class="img-left" src="/INOGIT/Resources/Categoryimgs/sm-business.jpg" alt="...">
        </a>
        <a href="/INOGIT/Category/Business">
          <span class="">Ubucuruzi</span>
        </a>
      </div>
    </div>
  </div>

  <div class="block">
    <div class="row">
      <div class="imgCat ">
        <a href="/INOGIT/Category/Road">
          <img class="img-left" src="/INOGIT/Resources/Categoryimgs/sm-road.jpg" alt="...">
        </a>
        <a href="/INOGIT/Category/Road">
          <span class="">Amategeko y'Umuhanda</span>
        </a>
      </div>
    </div>
  </div>
  <div class="block">
    <div class="row">
      <div class="imgCat ">
        <a href="/INOGIT/Category/Health">
          <img class="img-left" src="/INOGIT/Resources/Categoryimgs/sm-health.jpg" alt="...">
        </a>
        <a href="/INOGIT/Category/Health">
          <span class="">Ubuzima</span>
        </a>
      </div>
    </div>
  </div>

  <div class="block">
    <div class="row">
      <div class="imgCat ">
        <a href="/INOGIT/Category/English">
          <img class="img-left" src="/INOGIT/Resources/Categoryimgs/sm-english.jpg" alt="...">
        </a>
        <a href="/INOGIT/Category/English">
          <span class="">Kwiga Icyongereza</span>
        </a>

      </div>
    </div>
  </div>

  <div class="block">
    <div class="row">
      <div class="imgCat ">
        <a href="/INOGIT/Category/Quiz">
          <img class="img-left" src="/INOGIT/Resources/Categoryimgs/sm-quiz.jpg" alt="...">
        </a>
        <a href="/INOGIT/Category/Quiz">
          <span class="">Bazwa!(Quiz)</span>
        </a>
      </div>
    </div>
  </div>

</div>
<style>
  .imgCat img {
    border-radius: 50%;
    margin-right: 10px;
  }

  .imgCat .img-left {
    float: left;
  }

  .imgCat .img-right {
    margin-top: 10px;
    float: right;
  }

</style>


<!-- Popular Posts-->
<?php 
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/DBfiles/connectDB.php'); 

$sql = "SELECT * FROM Posts";
  
    $result = $conn->query($sql);
    ?>
    <br><br>
    <div class="container">
    <h3>Recent posts...</h3>
    <?php
      while($row = $result->fetch_assoc()) {
         
        ?>

<div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="/INOGIT/Post?post=<?=$row['id']?>"><?=$row['title']?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="/INOGIT/Post?post=<?=$row['id']?>" class="thumbnail">
            <img  style="
 object-fit: cover;
 width:100%;
  height:200px" src="/INOGIT/Resources/Storage/Featuredimgs/<?=$row['featured_image']?>" alt="">
        </a>
      </div>
      <div class="span6">      
        <p>
        <?=$row['excerpt']?>
         </p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-user"></i> by <a href="#"><?=$row['author']?></a> 
         Section : <a href="#"><span class=""><?=$row['section']?></span></a> 
        </p>
      </div>
    </div>
  </div>
</div>
<hr>


        <?php } ?>
      </div>