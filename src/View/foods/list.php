<?php
$id = $_REQUEST['id'];
?>
<div class="mx-auto w-75">
    <div class="mx-auto card w-50 p-4 mb-5">
        <form method="post" action="index.php?page=food&action=order-book&id=<?php echo $id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Loại Bàn</label>
                <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Loại Bàn ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng Thái</label>
                <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Trạng Thái ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Khách Hàng</label>
                <input type="text" name="customers" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên Khách Hàng">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Số Điện Thoại">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="row">
        <div class="col-3 ">
            <?php include_once "src/View/layout/sidebar.php"; ?>
        </div>
        <div class="col-9">
            <div class="card ">
                <div class="card-header">
                    Danh Sách Thực Đơn
                </div>
                <div class="card-body row">
                    <?php foreach ($foods as $food): ?>
                        <div class="card col-4 " >
                            <img class="card-img-top" src="img/<?php echo $food['image'] ?>">
                            <div class="card-body ">
                                <p><b><?php echo $food['id'] ?></b></p><br>
                                <p>Tên Món :<b><?php echo $food['name'] ?></b></p><br>
                                <p>Giá :<b><?php echo $food['price'] ?></b> VND</p>
                            </div>
                            <p><input  type="checkbox" name="" ></p>
                            <p style="text-align: center"><a href="index.php?page=food&action=food-list&id=<?php echo $food['id'] ?>">
                                    <button  type="button" class="btn btn-success">Chi Tiết Món Ăn</button>
                                </a>
                                <!--                    <a href="index.php?page=food&action=food-delete&id=--><?php //echo $food['id'] ?><!--">-->
                                <!--                        <button type="button" class="btn btn-danger">Xóa</button>-->
                                <!--                    </a>-->
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>



