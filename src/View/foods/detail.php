
<div class="container ">
    <img class="card-img-top col-8 " src="img/<?php echo $food['image'] ?>">
        <div class="card  col-4" style="width:300px ; float: left; margin: 5px ">
            <div class="card-body ">
                <p>Tên Món : <b><?php echo $food['name'] ?> </b></p><br>
                <p>Giá :<b> <?php echo $food['price'] ?></b> VND</p><br>
                <p>Thành Phần :<b> <?php echo $food['ingredient'] ?></b></p><br>
                <p>Loại :<b> <?php echo $food['kind_of'] ?></b></p>
            </div>
            <p><a href="index.php?page=food&action=list">
                    <button type="button" class="btn btn-success">Danh sách món</button>
                </a>
            </p>
        </div>

</div>
