window.lib = {
	ip: document.getElementById('strIp'),
	result: document.getElementById('result'),
	getLength: function(){
		var val = this.ip.value;
		result.innerText = `Do dai cua chuoi = ${val.length} ky tu`;
	},
	findIndex: function(){
		var val = this.ip.value;

		var index = val.indexOf('t3h');
		if(index != -1){
			result.innerText 
							= `ky tu "t3h" co xuat hien trong chuoi (${index})`;
		}else{
			result.innerText 
							= `ky tu "t3h" khong xuat hien trong chuoi`;
		}
	},
	validLength: function(){
		var val = this.ip.value;
		if(val.length >= 5 && val.length <= 15){
			result.innerText 
							= `Hợp lệ!`;
		}else{
			result.innerText 
							= `Không hợp lệ!`;
		}
	}
}

