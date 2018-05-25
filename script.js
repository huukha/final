
$(document).ready(function() {
		getProducts();
		$('#product-table').DataTable({
			responsive: true,
			autoWidth: false,
			searching: false,
			paging: false,
		});
		//Add Product
		$("#add-btn").click(function(event) {
				// var formData = $("#add-product-form").serialize();
				var productform = document.querySelector("#add-product-form");
				$.ajax({
					method: "POST",
					url: "addProduct.php",
					dataType: 'json',
					processData:false,
					contentType:false,
					data: new FormData(productform),
				}).done(function(data) {

					if (data.result) {
					
						//Thêm thành công
						//TODO Đóng modal

						//TODO Xóa trống các input

						//Đọc lại danh sách sản phẩm
						getProducts();
					} else {
						//TODO Thông báo lỗi
						
					}
				}).fail(function(jqXHR, statusText, errorThrown) {
					console.log("Fail:" + jqXHR.responseText);
					console.log(errorThrown);
				})
			}) //End Add Product

		//Update Product
		$("tbody").on("click", ".edit", function() {
			// Đọc thông tin
			var id = $(this).parents("tr").attr("id");
			var name = $(this).parents("tr").find(".name").text();
			var code = $(this).parents("tr").find(".code").text();
			var description = $(this).parents("tr").find(".description").text();
			var category = $(this).parents("tr").find(".category").text();
			var price = $(this).parents("tr").find(".price").text();
			var image = $(this).parents("tr").find(".thumbnail").attr("src");

			// Hiển thị thông tin lên form cập nhật
			$("#uname").val(name);
			$("#ucode").val(code);
			$("#udescription").val(description);
			$("#ucategory").val(category);
			$("#uprice").val(price);
			$("#uid").val(id);
			$("#img-preview-upload").attr("src",image)
			//Hiển thị popup
			$('#update').modal();
			//TODO Hiển thị giao diện Update với thông tin về sản phẩm
			// được chọn
		})

		$("#up-btn").click(function(event) {
				var productform = document.querySelector("#update-product-form");
				$.ajax({
					method: "POST",
					url: "updateProduct.php",
					dataType: 'json',
					processData:false,
					contentType:false,
					data: new FormData(productform),
				}).done(function(data) {
					if (data.result) {
						//Thêm thành công
						//TODO Đóng modal

						//TODO Xóa trống các input
						//Đọc lại danh sách sản phẩm
						getProducts();
					} else {
						//TODO Thông báo lỗi
					}
				}).fail(function(jqXHR, statusText, errorThrown) {
					console.log("Fail:" + jqXHR.responseText);
					console.log(errorThrown);
				})

			}) //End update



		//delete
		$("tbody").on("click", ".delete", function() {
				// Đọc thông tin
				var did = $(this).parents("tr").attr("id");
				if (confirm('Confirm delete ???')) {
					$.ajax({
						method: "POST",
						url: "deleteProduct.php",
						dataType: 'json',
						data: {
							"id": did
						},
					}).done(function(data) {
						console.log(data.message);

						if (data.result) {
							getProducts();
						} else {
							//TODO Thông báo lỗi
						}
					}).fail(function(jqXHR, statusText, errorThrown) {
						console.log("Fail:" + jqXHR.responseText);
						console.log(errorThrown);
					});
					//End update
				} else {
					console.log('Delete denied');
				}

				// Hiển thị thông tin lên form cập nhật

				// $("#delete_id").val(did);
				//Hiển thị popup
				// $('#delete').modal();
				// console.log(did);
				//TODO Hiển thị giao diện Update với thông tin về sản phẩm
				// được chọn
			})
			// $("#yes").click(function(){
			// 	var formData = $("#delete-product-form").serialize();
			// 	console.log(formData);
			// 	$.ajax({
			// 		method: "POST",
			// 		url: "deleteProduct.php",
			// 		dataType: 'json',
			// 		data: formData ,
			// 	}).done(function(data){

		// 				//Thêm thành công
		// 				//TODO Đóng modal

		// 				//TODO Xóa trống các input

		// 				//Đọc lại danh sách sản phẩm
		// 				getProducts();

		// 	}).fail(function(jqXHR, statusText, errorThrown){
		// 		console.log("Fail:"+ jqXHR.responseText);
		// 		console.log(errorThrown);
		// 	})
		// })
	}) //End document ready 

function getProducts() {
	$.ajax({
		url: 'getProducts.php',
		method: 'POST',
		dataType: 'json',
		// data: 
	}).done(function(data) {
		console.log(data);
		if (data.result) {
			var rows = "";
			$.each(data.products, function(index, product) {
				// console.log(index+" - "+product.product_name);
				rows += "<tr id='" + product.id + "'>";
				rows += "<td class ='image'><img class='thumbnail' src ='"+product.image+"'></td>";
				rows += "<td class='name'>" + product.product_name + "</td>";
				rows += "<td class='code'>" + product.product_code + "</td>";
				rows += "<td class='description'>" + product.description + "</td>";
				rows += "<td class='cat_id'>" + product.cat_id + "</td>";
				rows += "<td class='price'>" + product.price + "</td>";
				rows += "<td>";
				rows += "<button class='btn btn-primary edit'>Edit</button> ";
				rows += "<button class='btn btn-danger delete'>Delete</button>";
				rows += "</td>";
				rows += "</tr>";
			})
			$("tbody").html(rows);
		}
	}).fail(function(jqXHR, statusText, errorThrown) {
		console.log("Fail:" + jqXHR.responseText);
		console.log(errorThrown);
	}).always(function() {

	})
}


// hàm hiểm thị hình đã chọn
function loadImg(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$("#img-preview").attr("src",e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	}
}

$("#fileToUpload").change(function () {
	loadImg(this);
})

function loadImgu(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$("#img-preview-upload").attr("src",e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	}
}

$("#ufileToUpload").change(function () {
	loadImgu(this);
})