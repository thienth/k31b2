window.lib = {
	ip: document.getElementById('strIp'),
	result: document.getElementById('result'),
	vowel: "ueoai",
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
	},
	checkVowelCharacter: function(){
		var val = this.ip.value;
		var count = 0;
		for (var i = 0; i < val.length; i++) {
			if(this.vowel.indexOf(val[i]) != -1) count++;
		}
		result.innerText = `Có ${count} nguyên âm trong chuỗi!`;
	},
	checkName: function(){
		var name = prompt("What's your name?");
		var filter = "";
		// loc ten
		for (var i = 0; i < name.length; i++) {
			if(name[i] != " " && filter.indexOf(name[i]) == -1){
				filter+= name[i];
			}
		}

		var val = this.ip.value;
		var count = 0;
		for (var i = 0; i < val.length; i++) {
			if(filter.indexOf(val[i]) != -1) count++;
		}
		result.innerText = `Có ${count} ký tự bị trùng với tên của bạn!`;
	},
	replaceSpace: function(){
		var val = this.ip.value;
		do{
			val = val.replace(' ', '');
		}while(val.indexOf(" ") != -1)
		result.innerText = val;
	},
	revertString: function(){
		var val = this.ip.value;
		var revertStr = "";
		var arr = val.split(' ');
		for (var i = arr.length - 1; i >= 0; i--) {
			revertStr += arr[i] + " ";
		}
		result.innerText = revertStr;
	},
	b2: function(){
		
	}
}

