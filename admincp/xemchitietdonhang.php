<?PHP 
  include('header.php');
  $code_ship = $_GET['MaDH'];
  $query = "SELECT * FROM donhang 
            INNER JOIN sanpham ON donhang.MaSP = sanpham.MaSP 
            INNER JOIN huyen ON donhang.MaHuyen = huyen.MaHuyen
            INNER JOIN tinhthanh ON tinhthanh.MaTinhThanh = huyen.MaTinhThanh
            WHERE donhang.MaDonHang = '$code_ship'";
  $result = mysqli_query($conn, $query);
  $res= "SELECT * FROM donhang WHERE donhang.MaDonHang = '$code_ship'";
  $kqs= mysqli_query($conn, $res);
  $rows = mysqli_fetch_assoc($kqs);
  $querytt = "SELECT TenThongTin, NoiDung FROM thongtin";
  $resulttt = mysqli_query($conn, $querytt);
  $array_thongtin = array();
  while ( $value = mysqli_fetch_array($resulttt, MYSQLI_ASSOC)) {
    $array_thongtin[$value['TenThongTin']] = $value['NoiDung']; 
  }
?>

<div class="row wrap-print" style="position: relative;">
  <style type="text/css" media="print">
     <?php include('style-detail_bill.php'); ?>   
  </style>
  <div class="wrap-bill">
    <div class="col-xs-12">
      <div class="row header">
        <div class="col-xs-6 logo">
          <img src="../asset/images/logoss.jpg" width="160px" height="80px">
       </div>
       <div class="col-xs-6 ifm-shop text-right">

        <div class="diachi">Địa chỉ: <?php 
          if (array_key_exists("diachi", $array_thongtin)) { 
            echo trim($array_thongtin['diachi']); 
          } ?>
        </div>

        <div class="phone">Điện thoại: <?php 
          if (array_key_exists("phone", $array_thongtin)) { 
            echo trim($array_thongtin['phone']); 
          } ?>
        </div>

        <div class="email">Email: <?php 
          if (array_key_exists("email", $array_thongtin)) { 
            echo trim($array_thongtin['email']); 
          } ?>
        </div>

  </div>
</div>
<!-- End thong tin shop  -->

<?php $stt=1;
  while($row = mysqli_fetch_assoc($result)) {
?>
<div class="fm-custommer">
  <div class="title text-center">HÓA ĐƠN BÁN HÀNG </div>
  <div style ="float:right;margin-top:30px;margin-bottom:20px"><span class="code_bil">Mã hóa đơn: <?php echo $code_ship; ?></span> /  <span class="code_bil">Ngày Đặt : <?php echo $row['NgayDat']; ?></span></div>
   
  <div class="name col-xs-12">
    <span class="wrap-title">Tên khách hàng:</span><span class="value"><?php echo $row['HoTen'] ?></span>
    <hr style="margin-left: 130px;">
  </div>
  <div class="adress-custommmer col-xs-7"> 
    <span class="wrap-title">Địa chỉ :</span><span class="value"><?php echo $row['DiaChi']; ?>, </span><span class="value"><?php echo $row['TenHuyen']; ?>, </span><span class="value"><?php echo $row['TenTinhThanh']; ?></span>
    <hr style="margin-left: 67px;">
  </div>
  <div class="phone-custommer col-xs-5">
   <span class="wrap-title">Điện thoại:</span><span class="value"><?php echo $row['SoDienThoai']; ?></span>
   <hr style="margin-left: 90px;">
  </div>
</div>
<table class="table table-bordered ifm-product"> 
  <thead> 
    <tr> 
      <th>STT</th>
      <!-- <th>Mã hàng</th> -->
      <th>Tên hàng</th>
      <th>Size</th>
      <th>Số lượng</th>
      <th>Đơn giá</th>
      <th>Thành tiền</th> 
    </tr>
  </thead>
  <tbody>
      <tr> 
        <th scope="row"><?php echo $stt++; ?></th>
        <!-- <td><?php echo $rows['MaSP']; ?></td> -->
        <td><?php echo $row['TenSanPham']; ?></td>
        <td><?php echo $row['KichThuoc']; ?></td>
        <td><?php echo $rows['SoLuong']; ?></td>
        <td><?php echo number_format($row['Gia'], 0, ',', '.'); ?></td>
        <td><?php echo number_format($rows['SoLuong']*$row['Gia'], 0, ',', '.') . ' VND'; ?></td>
      </tr>
      <tr> 
        <th scope="row">&nbsp;</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <tr>
          <tr>
            <td colspan="6">
              Tổng Cộng: <?php $sum_money = 0; ?>
                <?php    
                  $sum_money += $row['Gia']*$rows['SoLuong'];
                  echo number_format( $sum_money , 0, ',', '.') . ' VND';
                ?>
            </td>
          </tr>
        <tr>
        <td colspan="6">
          Bằng chữ: <?php  echo ''.convert_number_to_words($sum_money).''; ?>
        </td>
      </tr>
  </tbody>
</table>
<?php } ?>
</div>
    <?php date_default_timezone_set("Asia/HO_CHI_MINH"); ?>     
</div> 
</div>
<div class="print"><i class="glyphicon glyphicon-print"></i></div> 
<?php 
function convert_number_to_words($number) {
    $hyphen      = ' ';
    $conjunction = '  ';
    $separator   = ' ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
      0                   => 'Không',
      1                   => 'Một',
      2                   => 'Hai',
      3                   => 'Ba',
      4                   => 'Bốn',
      5                   => 'Năm',
      6                   => 'Sáu',
      7                   => 'Bảy',
      8                   => 'Tám',
      9                   => 'Chín',
      10                  => 'Mười',
      11                  => 'Mười một',
      12                  => 'Mười hai',
      13                  => 'Mười ba',
      14                  => 'Mười bốn',
      15                  => 'Mười năm',
      16                  => 'Mười sáu',
      17                  => 'Mười bảy',
      18                  => 'Mười tám',
      19                  => 'Mười chín',
      20                  => 'Hai mươi',
      30                  => 'Ba mươi',
      40                  => 'Bốn mươi',
      50                  => 'Năm mươi',
      60                  => 'Sáu mươi',
      70                  => 'Bảy mươi',
      80                  => 'Tám mươi',
      90                  => 'Chín mươi',
      100                 => 'trăm',
      1000                => 'ngàn',
      1000000             => 'triệu',
      1000000000          => 'tỷ',
      1000000000000       => 'nghìn tỷ',
      1000000000000000    => 'ngàn triệu triệu',
      1000000000000000000 => 'tỷ tỷ'
    );

    if (!is_numeric($number)) {
      return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
// overflow
      trigger_error(
        'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
        E_USER_WARNING
      );
      return false;
    }

    if ($number < 0) {
      return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
      list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
      case $number < 21:
      $string = $dictionary[$number];
      break;
      case $number < 100:
      $tens   = ((int) ($number / 10)) * 10;
      $units  = $number % 10;
      $string = $dictionary[$tens];
      if ($units) {
        $string .= $hyphen . $dictionary[$units];
      }
      break;
      case $number < 1000:
      $hundreds  = $number / 100;
      $remainder = $number % 100;
      $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
      if ($remainder) {
        $string .= $conjunction . convert_number_to_words($remainder);
      }
      break;
      default:
      $baseUnit = pow(1000, floor(log($number, 1000)));
      $numBaseUnits = (int) ($number / $baseUnit);
      $remainder = $number % $baseUnit;
      $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
      if ($remainder) {
        $string .= $remainder < 100 ? $conjunction : $separator;
        $string .= convert_number_to_words($remainder);
      }
      break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
      $string .= $decimal;
      $words = array();
      foreach (str_split((string) $fraction) as $number) {
        $words[] = $dictionary[$number];
      }
      $string .= implode(' ', $words);
    }

    return $string;
  }
?>

<script type="text/javascript">
  $('.print').click(function(){ 
    var generator = window.open("in");
    generator.document.write($('.wrap-print').html());
    generator.print();
    generator.close();
  })
</script>