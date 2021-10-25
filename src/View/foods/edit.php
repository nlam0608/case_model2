<?php
$id = $_REQUEST['id'];
?>
<div class="card mx-auto w-75">
    <div class="p-4">
        <form method="post" action="index.php?page=food&action=edit-food&id=<?php echo $id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $food['id']?>" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Món</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $food['name']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá</label>
                <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $food['price']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Thành Phần</label>
                <input type="text" name="ingredient" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $food['ingredient']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Loại</label>
                <input type="text" name="kind_of" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $food['kind_of']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh</label>
                <input type="text" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $food['image']?>">
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
</div>

