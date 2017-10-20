<?php
    require_once('database.php');
    class M_khach_hang extends database {
		
			function Doc_binh_luan()
			{
				$sql = 'select * from bs_binh_luan';
				$this->setQuery($sql);
				return $this->loadAllRows();
			}
		//id,id_sach, email,noi_dung,phone,ngay_binh_luan,trang_thai
		function themBinhLuan($id_sach, $ten_nd, $email,$noi_dung,$phone,$ngay_binh_luan,$trang_thai) {
			
			
            $query = "INSERT INTO bs_binh_luan (id_sach,ten_nd, email,noi_dung,phone,ngay_binh_luan,trang_thai) ";
            $query.= "VALUES(?,?,?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($id_sach,$ten_nd, $email,$noi_dung,$phone,$ngay_binh_luan,$trang_thai));
            if($result)
                return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
            else
            
                return false;
        }
		
        function khach_hang_hoa_don() {
            $query = 'SELECT dh.id_don_hang, ngay_dat, kh.id_khach_hang, ten_khach_hang, dia_chi, dien_thoai,email, tong_tien, bs_sach.id, ten_sach, so_luong, bs_sach.don_gia, bs_sach.don_gia*so_luong as thanh_tien, hinh FROM bs_don_hang dh, bs_khach_hang kh, bs_sach, bs_chi_tiet_don_hang ct WHERE dh.id_don_hang = ct.id_don_hang AND dh.id_khach_hang = kh.id_khach_hang AND ct.id_sach = bs_sach.id Order by  kh.id_khach_hang';
            $this->setQuery($query);
			$khachhangs=$this->loadAllRows();
			$mang=array();
			foreach($khachhangs as $row)
			{
				$mang[]=$row;
			}
            return $mang;
        }
        function themKhachHang($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu) {
            $query = "INSERT INTO bs_khach_hang(ten_khach_hang, email, dia_chi, dien_thoai, ghi_chu) ";
            $query.= "VALUES(?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu));
            if($result)
                return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
            else
            
                return false;
        }
        
        function themDonHang($id_khach_hang, $ngay_dat, $tong_tien,$tien_dat_coc,$con_lai,$hinh_thuc_thanh_toan,$ghi_chu) {
            $query = "INSERT INTO bs_don_hang(id_khach_hang, ngay_dat, tong_tien,tien_dat_coc,con_lai,hinh_thuc_thanh_toan,ghi_chu,trang_thai) VALUES(?,?,?,?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($id_khach_hang, $ngay_dat, $tong_tien,$tien_dat_coc,$con_lai,$hinh_thuc_thanh_toan,$ghi_chu,1));
            if($result) 
                return $this->getLastId();
            else
                return false;
        }
        
        function themChiTietDonHang($id_don_hang, $id_sach, $so_luong, $don_gia) {
            $query = "INSERT INTO bs_chi_tiet_don_hang(id_don_hang, id_sach, so_luong, don_gia) VALUES(?,?,?,?)";
            $this->setQuery($query);
            $this->execute(array($id_don_hang, $id_sach, $so_luong, $don_gia));
        }
        
        function capNhatDonGia_sach($id_don_hang) {
            $query = "UPDATE bs_chi_tiet_don_hang ";
            $query.= "SET don_gia = (SELECT don_gia FROM bs_sach WHERE bs_chi_tiet_don_hang.id_sach = bs_sach.id)";
			$query.=" WHERE id_don_hang=?";
            $this->setQuery($query);
            $this->execute(array($id_don_hang));
        }
        
//        function capNhatDonGia_thuc_don($ma_hoa_don) {
//            $query = "UPDATE chi_tiet_hoa_don ";
//            $query.= "SET don_gia = (SELECT don_gia FROM thuc_don WHERE chi_tiet_hoa_don.ma_mon = thuc_don.ma_thuc_don) ";
//            $query.= "WHERE mon_thuc_don=0 and ma_hoa_don = ?";
//            $this->setQuery($query);
//            $this->execute(array($ma_hoa_don));
//        }
        
        function capNhatTongTien($id_don_hang)
        {
            $query = "UPDATE bs_don_hang ";
            $query.= "SET tong_tien = (SELECT SUM( so_luong * don_gia ) AS tt FROM bs_chi_tiet_don_hang WHERE bs_chi_tiet_don_hang.id_don_hang = bs_don_hang.id_don_hang) ";
            $query.= "WHERE id_don_hang = ?";
            $this->setQuery($query);
            $this->execute(array($id_don_hang));
        }
        function capNhatTienConLai($id_don_hang)
        {
            $query = "UPDATE bs_don_hang ";
            $query.= "SET con_lai = tong_tien-tien_dat_coc ";
            $query.= "WHERE id_don_hang = ?";
            $this->setQuery($query);
            $this->execute(array($id_don_hang));
        }
//        function getChiTietHoaDon($id_don_hang) {
//            $query = "SELECT hd.so_hoa_don, ngay_hd, kh.ma_khach_hang, ten_khach_hang, phai, ngay_sinh, dia_chi, dien_thoai, ";
//            $query.= "email, tri_gia, sp.ma_san_pham, ten_san_pham, so_luong, sp.don_gia, sp.don_gia*so_luong as thanh_tien, hinh ";
//            $query.= "FROM hoa_don hd, khach_hang kh, san_pham sp, ct_hoa_don ct ";
//            $query.= "WHERE hd.so_hoa_don = ct.so_hoa_don AND hd.ma_khach_hang = kh.ma_khach_hang AND ct.ma_san_pham = sp.ma_san_pham ";
//            $query.= "AND hd.so_hoa_don = ?";
//            $this->setQuery($query);
//            return $this->loadAllRows(array($ma_hoa_don));
//        }
        public function lay_don_hang($key)
        {
            $query = "SELECT bs_khach_hang.id_khach_hang,ten_khach_hang, email, dia_chi, dien_thoai,
                    bs_don_hang.id_don_hang,ngay_dat,tong_tien,tien_dat_coc,con_lai,hinh_thuc_thanh_toan,bs_chi_tiet_don_hang.id_sach,
                    so_luong,bs_chi_tiet_don_hang.don_gia FROM bs_khach_hang,bs_don_hang,bs_chi_tiet_don_hang 
                    WHERE bs_don_hang.id_khach_hang=bs_khach_hang.id_khach_hang and bs_don_hang.id_don_hang=bs_chi_tiet_don_hang.id_don_hang and bs_khach_hang.id_khach_hang=?";
            $this->setQuery($query);
            return $this->loadAllRows(array($key));
        }
    } 
?>