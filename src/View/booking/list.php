<div class="w-75 mx-auto">
    <div class="card w-100">
        <div class="card-header">
            Danh Sách Bàn
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Số bàn</th>
                <th>Loại bàn</th>
                <th>Trạng thái</th>
                <th>Tên khách hang</th>
                <th>Số điện thoại</th>
                <th colspan="2"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bookings as $booking): ?>
                <tr>
                    <td><?php echo $booking['id'] ?></td>
                    <td><?php echo $booking['type'] ?></td>
                    <td><?php echo $booking['status'] ?></td>
                    <td><?php echo $booking['customers'] ?></td>
                    <td><?php echo $booking['phone'] ?></td>
                    <td><a href="index.php?page=food&action=list&id=<?php echo $booking['id'] ?>">
                            <button class="btn btn-info">Đặt bàn</button>
                            <button class="btn btn-danger ml-5">Làm mới</button>
                        </a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>



