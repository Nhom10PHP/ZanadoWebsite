<?PHP include('header.php')?>
<form  id="ifm-website">
    <?php
    $query = "SELECT TenThongTin, NoiDung FROM thongtin";
    $result = mysqli_query($conn, $query);
    $array_thongtin = array();
    while ( $value = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $array_thongtin[$value['TenThongTin']] = $value['NoiDung']; 
    }
    ?>

<table class="table table-bordered">
    <tbody>
        <tr>
            <td colspan="2" class="text-center title">THÔNG TIN SHOP</td>
        </tr>

<!--  -->
<tr class="wrap-description">
    <td>
        <label class="text-label">Mô tả: </label>
    </td>
    <td>    
        <table class="table wrap-value">
            <tbody>
                <tr>
                    <td>
                        <div class="text-value">
                            <?php if ( array_key_exists("mota", $array_thongtin) ) {
                                echo trim($array_thongtin['mota']);
                            } ?>
                        </div>   
                    </td>
                </tr>
            </tbody>
        </table> 
    </td>
</tr>

<!--  -->
<tr class="wrap-phone">
    <td>
        <label class="text-label">Số điện thoại: </label>
    </td>
    <td>
        <table class="table wrap-value">
            <tbody>
                <tr>
                    <td>
                        <div class="text-value">
                            <?php if ( array_key_exists('phone', $array_thongtin) ) {
                                echo trim($array_thongtin['phone']);
                            } ?>
                        </div>   
                    </td>
                </tr>
            </tbody>
        </table> 
    </td>
</tr>

<!--  -->
<tr class="wrap-email">
    <td>
        <label class="text-label">Email: </label>
    </td>
    <td>
        <table class="table wrap-value">
            <tbody>
                <tr>
                    <td>
                        <div class="text-value">
                            <?php if ( array_key_exists('email', $array_thongtin) ) {
                            echo trim($array_thongtin['email']);
                            } ?>
                        </div>   
                    </td>

                </tr>
            </tbody>
        </table> 
    </td>
</tr>
<!--  -->
<tr class="wrap-adress">
    <td>
        <label class="text-label">Địa chỉ: </label>
    </td>
    <td>
        <table class="table wrap-value">
            <tbody>
                <tr>
                    <td>
                        <div class="text-value">
                            <?php if ( array_key_exists('diachi', $array_thongtin) ) {
                                echo trim($array_thongtin['diachi']);
                            } ?>
                        </div>   
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>

</tbody>

</table>
</form>
<a href="suathongtin.php">Chỉnh sửa</a>