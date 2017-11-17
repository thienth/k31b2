window.hw  = {
	ipa: document.getElementById('ipA'),
	ipb: document.getElementById('ipB'),
	rs: document.getElementById('result'),
	b2: function(){
		var valueA = this.ipa.value;
		var valueB = this.ipb.value;

		var result = valueA.concat(" ", valueB); // noi chuoi
		this.rs.innerText = result;
	},
	b3: function(){
		// lay gia tri cua text A va B
		var valueA = this.ipa.value;
		var valueB = this.ipb.value;
		

		// ghep 2 chuoi lai voi nhau
		var result = valueA.concat(" ", valueB);

		// tach chuoi theo dau cach
		var arr = result.split(' ');

		// ket qua cuoi cung
		var capitalizeStr = "";
		for (var i = 0; i < arr.length; i++) {
			var upper = arr[i][0].toUpperCase();
			capitalizeStr += upper + arr[i].slice(1, arr[i].length) + " ";
		}

		this.rs.innerText = capitalizeStr;
	},
	b1: function(){
		// lay gia tri cua text A va B
		var valueA = this.ipa.value;
		var valueB = this.ipb.value;
		// tao bien dem
		var count = 0;
		// xoa khoang trang trong text A va B
		valueA = this.removeSpace(valueA);
		valueB = this.removeSpace(valueB);
		// Tao vong lap voi bien A lay ra tung phan tu trong chuoi
			for (var i = 0; i < valueA.length; i++) {
				// kiem tra xem ky tu dang duoc xet co trong chuoi B khong
				if(valueB.indexOf(valueA[i]) != -1){
					// neu co thi count++
					count++;
				}
			}
		// hien thi so phan tu bi trung 
		this.rs.innerText = `Chuỗi A có ${count} ký tự trùng với chuỗi B`;
	},
	removeSpace: function(str){
		do{
			str = str.replace(' ', '');
		}while(str.indexOf(" ") != -1)

		return str;
	}
}