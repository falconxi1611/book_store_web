// JavaScript Document
function Tim_sach(gtTim)
{
	/*if(gtTim=="")
	{
		document.getElementById("hienthi").innerHTML="";
		return false;	
	}*/
	
	// Ajax
	var xmlhttp=null;
	xmlhttp=new XMLHttpRequest();
	/* sử dụng POST */
	xmlhttp.open("POST","xl_tim_sach",true);

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	var data = new FormData();
	data.append('gtTim',gtTim);
	
	xmlhttp.send(data);
}

function Doc_tin_tuc(id)
{
	var xhttp = null;
	xhttp = new XMLHttpRequest();
	xhttp.open('POST','XL_tin_tuc.php',true);
	xhttp.onreadystatechange=function()
	{
		if (xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById('hien_thi').innerHTML=xhttp.responseText;
		}
	}
	var data = new FormData();
	data.append('id',id);
	xhttp.send(data);
}
function Loc_sach(dk_loc, id_loai_sach)
{
	var xhttp = null;
	xhttp = new XMLHttpRequest();
	xhttp.open('POST','XL_loc_sach.php',true);
	xhttp.onreadystatechange=function()
	{
		if (xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById('ket_qua').innerHTML=xhttp.responseText;
		}
	}
	var data = new FormData();
	data.append('dk_loc',dk_loc);
	data.append('id_loai_sach',id_loai_sach);
	xhttp.send(data);
}
function mua_hang($key, $soLuong, $dongia)
{
	var form_data = {
	id    : $key,
	soluong : $soLuong,
	dongia  : $dongia,
	};
	$.ajax({
			url:"mua_hang.php",
			type: 'POST',
			async : false,
			data: form_data,
			dataType: 'json',
			success: function(data){                   
			alert("Số lượng đặt: " + data['sl'] + ".\nTổng tiền: " + formatCurrency(data['st']) + " vnđ.");      
			},
			error: function(error){
				alert(error.statusText)	
			}
            });
            return false;
}
function formatCurrency(num) 
{
   var num = num.toString().replace(/\$|\,/g,'');
   if(isNaN(num))
   num = "0";
   sign = (num == (num = Math.abs(num)));
   num = Math.floor(num*100+0.50000000001);
   num = Math.floor(num/100).toString();
   for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
   num = num.substring(0,num.length-(4*i+3))+','+
   num.substring(num.length-(4*i+3));
   return (((sign)?'':'-') + num);
}


function XL_Binh_luan()
{
	var Name=document.getElementById("Name");
	var Email=document.getElementById("Email");
	var Review=document.getElementById("Review");
	var Telephone=document.getElementById("Telephone");
	
	if(Name.value=="")
	{
		alert("Nhập họ tên");
		Name.focus();
		return false;	
	}
	if(Email.value=="")
	{
		alert("Nhập Email");
		Email.focus();
		return false;	
	}
	if(Review.value=="")
	{
		alert("Nhập đánh giá của bạn");
		Review.focus();
		return false;	
	}
	// Ajax
	// b1 Khai báo và khởi tạo 
	var xmlhttp=null;
	xmlhttp=new XMLHttpRequest();

	// b2 Mở kết nối đến máy chủ: GET 
	//xmlhttp.open("GET","XL_Loi_chao.php?id=" + ho_ten.value ,true);
	// b2 Mở kết nối đến máy chủ: POST 
	xmlhttp.open("POST","XL_Binh_luan.php" ,true);
	
	// b3 Gọi phương thức khi máy chủ thi hành xong
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // hoàn thành va tìm thấy trang 
		{
			document.getElementById("kq").innerHTML=xmlhttp.responseText;
			
		}
	}
	// b4 Gửi thông tin GET
	//xmlhttp.send();
	// b4 Gửi thông tin POST
	var data = new FormData();
	data.append('id_Name',Name.value);
	data.append('id_Email',Email.value);
	data.append('id_Review',Review.value);
	data.append('id_Telephone',Telephone.value);
	
	xmlhttp.send(data);
}


$(document).ready(function() {
            $('input.binh_luan').click(function() {
							
			var $key=$(this).attr("id");
			
			

            var form_data = {
                id    : $key,
                
                };
            

			$.ajax({
                    url:"XL_Binh_luan.php",
                    type: 'POST',
                    async : false,
                    data: form_data,
                    dataType: 'json',
                	
            });
            return false;
            }); //click         
            }); // re