<div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="#"><?=$row['title']?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
        </a>
      </div>
      <div class="span6">      
        <p>
        <?=$row['excerpt']?>
         </p>
        <p><a class="btn btn-primary" href="/INOGIT/Post/?post=<?=$row['id']?>">Read more</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-user"></i> by <a href="#"><?=$row['author']?></a> 
          | <i class="icon-calendar"></i> <?=$row['created_at']?>
          | <i class="icon-comment"></i> <a href="#"><?=$row['comments']?> Comments</a>
          | <i class="icon-share"></i> <a href="#"><?=$row['shares']?> Shares</a>
          | <i class="icon-tags"></i> Section : <a href="#"><span class=""><?=$row['section']?></span></a> 
        </p>
      </div>
    </div>
  </div>
</div>
<hr>